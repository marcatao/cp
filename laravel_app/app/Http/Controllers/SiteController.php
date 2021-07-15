<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailUser;
use App\Mail\curriculo;
use Carbon\Carbon;   


class SiteController extends Controller
{
    // 

    public function index($valor=null){
        $crs = \App\carrossel::where('dt_vencimento',null)->orWhere('dt_vencimento','>',now())->orderBy('id','desc')->get();
        return view('site.index')->with('crs',$crs)->with('contactado',$valor);;
    }
    public function colegio_paraiso(){
        return view ('site.institucional.colegio_paraiso');
    }
    public function estrutura(Request $request){
        $es = \App\estrutura_tipo::find($request->id);
        if (!$es)  return redirect(route('index'));
        $fts = \App\estrutura::where('estrutura_tipo_id',$request->id)->orderby('id')->paginate(24);
        return view('site.institucional.estrutura')->with('fts',$fts)->with('es',$es);
        
    }
    
    public function bercario(){
        return view('site.educacional.bercario');
    }
    public function infantil(){
        return view('site.educacional.infantil');
    }
    public function fundamental(){
        return view('site.educacional.fundamental');
    }
    public function ensino_medio(){
        return view('site.educacional.ensino_medio');
    }
    public function integral(){
        return view('site.educacional.integral');
    }
    public function sistema_ensino(){
        return view('site.educacional.sistema_ensino');
    }


    public function diferenciais(){
        return view ('site.diferenciais');
    }

    public function psico_fono(){
        return view('site.informativos.psico_fono');
    }
    public function vestibular(){
        return view('site.informativos.vestibular');
    }
    public function servicos(){
        return view('site.informativos.servicos');
    }
    public function acontece(Request $request){ 
        if($request->categoria){
            $aconteces = \App\acontece::where('status','0')->where('categoria_id',$request->categoria)->orderBy('created_at','desc')->get();
        }else{
            $aconteces = \App\acontece::where('status','0')->orderBy('created_at','desc')->get();

        }
        return view('site.acontece')->with('aconteces',$aconteces);
    }
    public function acontece_artigo(Request $request){
     
        $acontece = \App\acontece::where('link',$request->route()->action['as'])->first();
        $capa = \App\acontece_imagens::find($acontece->capa);
        $data = $acontece->created_at->diffForHumans(); 
        return view ('site.acontece_detalhe')
        ->with('acontece',$acontece)
        ->with('capa',$capa)
        ->with('data',$data);
    }
    public function contato(){
        return view('site.contato');
    }
    public function contato_send(Request $request){
     
        $validatedData = $request->validate([
            'nome' => 'required',
            'email' => 'required|email',
            'mensagem' => 'min:3',
            'g-recaptcha-response' => 'required'
        ]);        
   
        Mail::to(env('MAIL_TO'))->send(new SendMailUser($request));
        return $this->index(true);
    }
	
	public function depoimentos(){
	return view('site.depoimentos');
	}
	
    public function paciencia(){
        return view('site.informativos.paciencia');
    }

    public function trabalhe_conosco(){
        return view('site.trabalhe_conosco')->with('contactado',false);
    }
   
    public function  trabalhe_conosco_send(Request $request){
        $validatedData = $request->validate([
            'nome' => 'required',
            'email' => 'required|email',
            'mensagem' => 'min:3',
            'file' => 'required|mimes:pdf|max:10000'

        ]); 
         
          Mail::to(env('MAIL_TO'))->send(new curriculo($request));
        return view('site.trabalhe_conosco')->with('contactado',true);
    }
}
