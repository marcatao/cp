<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;

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
                $ft->save();
            }
        }
        return redirect(route('admin_site_estrutura'));
    }
    public function site_estrutura_delete($id){
       $ft = \App\estrutura::find($id);
       $ft->delete();
       return redirect(route('admin_site_estrutura'));
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

        $fts = \App\acontece_imagens::where('acontece_id',$id)->paginate(4);
        if(auth()->user()->id ==3){
            $categorias = \App\categorias::where('id',3)->get();
        }else if(auth()->user()->id ==4){
            $categorias = \App\categorias::where('id',1)->get();
        }else if(auth()->user()->id ==5){
            $categorias = \App\categorias::where('id',2)->orWhere('id',4)->get();
        }else{
            $categorias = \App\categorias::all();
        }

        return view('admin.site.acontece.acontece_form')
        ->with('acontece',$acontece)
        ->with('id',$id)
        ->with('message',$message)
        ->with('fts',$fts)
        ->with('categorias',$categorias);
    }
    public function admin_site_acontece(){

        if(auth()->user()->id ==3){
            $listas = \App\acontece::where('categoria_id',3)->get();
        }else if(auth()->user()->id ==4){
            $listas = \App\acontece::where('categoria_id',1)->get();
        }else if(auth()->user()->id ==5){
            $listas =\App\acontece::where('categoria_id',2)->orWhere('categoria_id',4)->get();
        }else{
            $listas  = \App\acontece::all();
        }


       
        return view('admin.site.acontece.lista')->with('listas',$listas);
    }

    public function admin_site_acontece_save($id, Request $request){
        $this->validate($request, [
            'titulo' => 'required',
            'texto' => 'required',
            'categoria_id' => 'required',
        ]); 

        if($id == '0') { 
            $acontece = new \App\acontece;
        }else{
            $acontece = \App\acontece::find($id);
        }

        $acontece->categoria_id = $request->categoria_id;
        $acontece->titulo = $request->titulo;
        $acontece->link = $this->sanitizeString(mb_strtolower($request->titulo));
        $acontece->texto = $request->texto;
        $acontece->save();

        if($request->photos){ 
            $path="img/acontece/";
            foreach ($request->photos as $photo) {
                $new_name = rand().'.png';
                $ft = new \App\acontece_imagens;
                $img =  Image::make($photo);
                $img->save(public_path($path).$new_name,80);
                $ft->src = $path.$new_name;
                $ft->acontece_id = $acontece->id;
                $ft->save();
                if(!$acontece->capa){
                    $acontece->capa = $ft->id;
                    $acontece->save();
                }
            }
        }

        $message = ['type'=>'success','message'=>'Dados alterados com sucesso!'];
        return $this->admin_site_acontece_form($acontece->id, $message);
    }

    public function admin_site_acontece_del_imagem($id){
        $foto = \App\acontece_imagens::find($id);
        $acontece_id = $foto->acontece_id;
        $foto->delete();
        return redirect(route('admin_site_acontece_form',$acontece_id));
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
