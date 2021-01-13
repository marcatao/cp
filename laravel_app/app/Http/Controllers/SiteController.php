<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailUser;



class SiteController extends Controller
{
    // 

    public function index(){
        $crs = \App\carrossel::where('dt_vencimento',null)->orWhere('dt_vencimento','>',now())->orderBy('id','desc')->get();
        return view('site.index')->with('crs',$crs);
    }
    public function colegio_paraiso(){
        return view ('site.institucional.colegio_paraiso');
    }
    public function estrutura(Request $request){
        $fts = \App\estrutura::orderby('id')->paginate(24);
        return view('site.institucional.estrutura')->with('fts',$fts);
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
            $aconteces = \App\acontece::where('categoria_id',$request->categoria)->orderBy('id','desc')->get();
        }else{
            $aconteces = \App\acontece::orderBy('id','desc')->get();

        }
        return view('site.acontece')->with('aconteces',$aconteces);
    }
    public function acontece_artigo(Request $request){
        $acontece = \App\acontece::where('link',$request->route()->action['as'])->first();
        $capa = \App\acontece_imagens::find($acontece->capa);
        return view ('site.acontece_detalhe')
        ->with('acontece',$acontece)
        ->with('capa',$capa);
    }
    public function contato(){
        return view('site.contato');
    }
    public function contato_send(Request $request){
        
        Mail::to(env('MAIL_TO'))
        ->send(new SendMailUser($request));
        Mail::to($request->email)
        ->send(new SendMailUser($request));
        $crs = \App\carrossel::where('dt_vencimento',null)->orWhere('dt_vencimento','>',now())->orderBy('id','desc')->get();
        return view('site.index')->with('message',"Email Enviado com sucesso!")->with('crs',$crs);
    }
	
	public function depoimentos(){
	return view('site.depoimentos');
	}
	
}
