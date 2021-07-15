<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;

 
use Storage;
use Illuminate\Http\UploadedFile;
use Pion\Laravel\ChunkUpload\Exceptions\UploadMissingFileException;
use Pion\Laravel\ChunkUpload\Handler\AbstractHandler;
use Pion\Laravel\ChunkUpload\Handler\HandlerFactory;
use Pion\Laravel\ChunkUpload\Receiver\FileReceiver;
use File;
use \App\acontece;
use Intervention\Image\Facades\Image;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){
        return view('admin.index');
    }

    ////////////////////////////////////////////////Carrossel///////////////////////////////////////////////////////////////////////////////////////// 
    ////////////////////////////////////////////////Carrossel///////////////////////////////////////////////////////////////////////////////////////// 
    ////////////////////////////////////////////////Carrossel///////////////////////////////////////////////////////////////////////////////////////// 
    ////////////////////////////////////////////////Carrossel/////////////////////////////////////////////////////////////////////////////////////////
    public function site_carrossel(){
        $carrossels = \App\carrossel::all();
        return view('admin.site.carrossel')->with('carrossels',$carrossels);
    }
    public function site_carrossel_save(Request $request){
        $carbon = null;
        if($request->input_dt_vencimento) $carbon = new Carbon($request->input_dt_vencimento);
        
        $carrossel = new \App\carrossel;
        $carrossel->color = $request->input_color;
            if($request->File('input_src')){ 
                $new_name = rand().'.png';
                $path="img/carrossel/";
                $img =  Image::make($request->File('input_src'));
                //$img->fit(800);
                $img->save(public_path($path).$new_name,80);
                chmod(public_path($path).$new_name,0777);
                $carrossel->src = $path.$new_name;
            }
        $carrossel->dt_vencimento = $carbon;
        $carrossel->save();
       return redirect(route('admin_site_carrossel'));
    }
    public function site_carrossel_del($id){
        $cr = \App\carrossel::find($id);
        $cr->delete();
        return redirect(route('admin_site_carrossel'));
    }







    ////////////////////////////////////////////////Estrutura///////////////////////////////////////////////////////////////////////////////////////// 
    ////////////////////////////////////////////////Estrutura///////////////////////////////////////////////////////////////////////////////////////// 
    ////////////////////////////////////////////////Estrutura///////////////////////////////////////////////////////////////////////////////////////// 
    ////////////////////////////////////////////////Estrutura/////////////////////////////////////////////////////////////////////////////////////////

    public function site_estrutura(){
        $fts = \App\estrutura::orderBy('id')->paginate(54);
        return view('admin.site.estrutura')->with('fts',$fts);
    }
    
    public function site_estrutura_save(Request $request){
        $path="img/estrutura/galery/";
        $path_thumb="img/estrutura/thumb/";
    
        if($request->photos){ 
            foreach ($request->photos as $photo) {
                $new_name = rand().'.png';
                $ft = new \App\estrutura;

                $img =  Image::make($photo);
                $img->save(public_path($path).$new_name,80);

                $img->resize(350, null,function ($constraint) {
                    $constraint->aspectRatio();
                });

                $img->save(public_path($path_thumb).$new_name,70);

                $ft->src = $path.$new_name;
                $ft->thumb = $path_thumb.$new_name;
                $ft->estrutura_tipo_id = $request->estrutura_tipo_id;
                $ft->save();
            }
        }
        return redirect(route('admin_site_estrutura')."?tab=$request->estrutura_tipo_id");
    }
    public function site_estrutura_delete($id){
       $ft = \App\estrutura::find($id);
       $estrutura_tipo_id = $ft->estrutura_tipo_id;
       $ft->delete();
       return redirect(route('admin_site_estrutura').'?tab='.$estrutura_tipo_id);
    }

    public function site_estrutura_fim($id){
        $max   = \App\estrutura::whereRaw('id = (select max(`id`) from estrutura)')->first();
  
        $ft = \App\estrutura::find($id);
        $ft->id= $max->id +1;
        $ft->save();
        return redirect(route('admin_site_estrutura'));
     }   
    ////////////////////////////////////////////////   Categorias  ///////////////////////////////////////////////////////////////////////////////////////// 
    ////////////////////////////////////////////////   Categorias  ///////////////////////////////////////////////////////////////////////////////////////// 
    ////////////////////////////////////////////////   Categorias  ///////////////////////////////////////////////////////////////////////////////////////// 
    ////////////////////////////////////////////////   Categorias  /////////////////////////////////////////////////////////////////////////////////////////

    public function admin_site_categorias(){
        return view('admin.site.acontece.categorias');
    }
    public function admin_site_categorias_save(Request $request){
        $this->validate($request, [
            'categoria' => 'required'
        ]); 
        $categoria = new \App\categorias;
        $categoria->nome = $request->categoria;
        $categoria->save();
        return redirect(route('admin_site_categorias'));
    }
    public function admin_site_categorias_delete($id){
        $categoria = \App\categorias::find($id);
        $categoria->delete();
        return redirect(route('admin_site_categorias'));
    }
    ////////////////////////////////////////////////   Acontece  ///////////////////////////////////////////////////////////////////////////////////////// 
    ////////////////////////////////////////////////   Acontece  ///////////////////////////////////////////////////////////////////////////////////////// 
    ////////////////////////////////////////////////   Acontece  ///////////////////////////////////////////////////////////////////////////////////////// 
    ////////////////////////////////////////////////   Acontece  /////////////////////////////////////////////////////////////////////////////////////////
    public function admin_site_acontece_form($id=null,$message=null){
        $acontece = null;
        if($id and $id <> 0) $acontece = \App\acontece::find($id);

        $fts = \App\acontece_imagens::where('acontece_id',$id)->orderby('id','desc')->get();
        $categorias = \App\categorias::all();
        

        return view('admin.site.acontece.acontece_form')
        ->with('acontece',$acontece)
        ->with('id',$id)
        ->with('message',$message)
        ->with('fts',$fts)
        ->with('categorias',$categorias);
    }
    public function admin_site_acontece(){
       $listas  = \App\acontece::all();
       return view('admin.site.acontece.lista')->with('listas',$listas);
    }

    public function admin_site_acontece_save($id, Request $request){
        $this->validate($request, [
            'titulo' => 'required',
            'texto' => 'required',
            'categoria_id' => 'required',
            'created_at' => 'required'
        ]); 

        if($id == '0') { 
            $acontece = new \App\acontece;
            $acontece->status = 0;
        }else{
            $acontece = \App\acontece::find($id);
        }

        $acontece->categoria_id = $request->categoria_id;
        $acontece->titulo = $request->titulo;
        $acontece->link = $this->sanitizeString(mb_strtolower($request->titulo));
        $acontece->texto = $request->texto;
        $acontece->save();
        $acontece->created_at = $request->created_at;
        $acontece->save();



        $message = ['type'=>'success','message'=>'Dados alterados com sucesso!'];
        return redirect(route('admin_site_acontece_form',$acontece->id));
    }





    public function admin_site_acontece_save_image($id, Request $request){
      
        // create the file receiver
        $receiver = new FileReceiver("file", $request, HandlerFactory::classFromRequest($request));
        // check if the upload is success, throw exception or return response you need
        if ($receiver->isUploaded() === false) {
            throw new UploadMissingFileException();
        }
        // receive the file
        $save = $receiver->receive();
        // check if the upload has finished (in chunk mode it will send smaller files)
        if ($save->isFinished()) {
            // save the file and return any response you need, current example uses `move` function. If you are
            // not using move, you need to manually delete the file by unlink($save->getFile()->getPathname())
            return $this->saveFile($save->getFile(),$id);
        }
        // we are in chunk mode, lets send the current progress
        /** @var AbstractHandler $handler */
        $handler = $save->handler();
        return response()->json([
            "done" => $handler->getPercentageDone(),
            'status' => true
        ]);
        
        // if($request->photos){ 
        //     $path="img/acontece/";
        //     foreach ($request->photos as $photo) {
        //         $new_name = rand().'.png';
        //         $ft = new \App\acontece_imagens;
        //         $img =  Image::make($photo);
        //         $img->save(public_path($path).$new_name,80);
        //         $ft->src = $path.$new_name;
        //         $ft->acontece_id =$id;
        //         $ft->save();
        //         if(!$acontece->capa){
        //             $acontece->capa = $ft->id;
        //             $acontece->save();
        //         }
        //     }
        // }
        //return redirect(route('admin_site_acontece_form',$id));
    }

    protected function saveFile(UploadedFile $file, $id){

        $acontece = \App\acontece::find($id);
        $path="img/acontece/";

        if($acontece){
            $ft = new \App\acontece_imagens;

        $mime = str_replace('/', '-', $file->getMimeType());
        $fileName = rand().'.'.$file->getClientOriginalExtension();
        $filePath = public_path($path);
        $finalPath = $filePath;
        // move the file name
        $img =  Image::make($file)->encode('jpg', 75);
        $img->resize(600, 600, function ($constraint) {
            $constraint->aspectRatio();
            $constraint->upsize();
        });
        $img->save($finalPath.$fileName,75);

        //$file->move($finalPath, $fileName);

        $ft->src = $path.$fileName;
        $ft->acontece_id =$id;
        //$ft->tamanho = $this->humanFileSize(File::size($path.$fileName));->filesize()
        $ft->tamanho = $this->humanFileSize($img->filesize());
        $ft->save();
            if(!$acontece->capa){
                $acontece->capa = $ft->id;
                $acontece->save();
            }

        return response()->json([
            'path' => $filePath,
            'name' => $fileName,
            'mime_type' => $mime
        ]);
      }
    }


   protected function humanFileSize($size,$unit="") {
        if( (!$unit && $size >= 1<<30) || $unit == "GB")
          return number_format($size/(1<<30),2)."GB";
        if( (!$unit && $size >= 1<<20) || $unit == "MB")
          return number_format($size/(1<<20),2)."MB";
        if( (!$unit && $size >= 1<<10) || $unit == "KB")
          return number_format($size/(1<<10),2)."KB";
        return number_format($size)." bytes";
      }

    public function publicar_postagem($id){
        $acontece = \App\acontece::find($id);
        if($acontece){
            $acontece->status = 0;
            $acontece->save();
        }
        return redirect(route('admin_site_acontece_form',$id));
    }

    public function admin_site_acontece_del_imagem($id){
        $foto = \App\acontece_imagens::find($id);
        $acontece_id = $foto->acontece_id;
        if(\File::exists(public_path($foto->src))){
            \File::delete(public_path($foto->src));
        }
        $foto->delete();
        return redirect(route('admin_site_acontece_form',$acontece_id)."?tab=fotos");
    }

    public function admin_site_acontece_capa_imagem($acontece,$imagem){
        $acontece = \App\acontece::find($acontece);
        $acontece->capa = $imagem;
        $acontece->save();
        return redirect(route('admin_site_acontece_form',$acontece->id));
    }
    public function acontece_form_del($id){
        $acontece_imagens = \App\acontece_imagens::where('acontece_id',$id)->get();
        foreach ($acontece_imagens as $img){
            $img->delete();
        }
        $acontece = \App\acontece::find($id);
        $acontece->delete();
        return redirect(route('admin_site_acontece'));
    }



    public function admin_site_estrutura_tipo(Request $request){
        $tp = \App\estrutura_tipo::find($request->id);
        if(!$tp) $tp = new \App\estrutura_tipo;
        $tp->titulo = $request->titulo;
        $tp->descricao= $request->descricao;
        $tp->save();
        return redirect(route('admin_site_estrutura')."?tab=".$tp->id);
    }
    public function admin_site_estrutura_tipo_del($id){
        $tp = \App\estrutura_tipo::find($id); 
        if($tp) $tp->delete();
        return redirect(route('admin_site_estrutura'));
    }



   private function sanitizeString($str) {
        $str = preg_replace('/[áàãâä]/ui', 'a', $str);
        $str = preg_replace('/[éèêë]/ui', 'e', $str);
        $str = preg_replace('/[íìîï]/ui', 'i', $str);
        $str = preg_replace('/[óòõôö]/ui', 'o', $str);
        $str = preg_replace('/[úùûü]/ui', 'u', $str);
        $str = preg_replace('/[ç]/ui', 'c', $str);
        // $str = preg_replace('/[,(),;:|!"#$%&/=?~^><ªº-]/', '_', $str);
        $str = preg_replace('/[^a-z0-9]/i', '_', $str);
        $str = preg_replace('/_+/', '_', $str); // ideia do Bacco :)
        return $str;
    }
}
