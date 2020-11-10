<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailUser;



class SiteController extends Controller
{
    //

    public function index(){
        return view('site.index');
    }
    public function educacional(){
        return view('site.educacional');
    }
    public function diferenciais(){
        return view ('site.diferenciais');
    }
    public function contato(){
        return view('site.contato');
    }
    public function contato_send(Request $request){
        Mail::to('gilmar@netbit.com.br')
        ->send(new SendMailUser($request));
        return view('site.contato')->with('message',"Email Enviado com sucesso!");
    }
    public function estrutura(Request $request){
        $index=$request->index;
        return view('site.fotos_estrutura.galeria')->with('index',$index);
    }
}
