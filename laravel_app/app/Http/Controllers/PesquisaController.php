<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;
use App\dados;
use App\dados_fase_2;
use File;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendRespostas;

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class PesquisaController extends Controller
{
    public function index(){
        return view('pesquisa');
    }
    public function store(Request $request){
        $validatedData = $request->validate([
            'email' => 'required',
            'nome_candidato' => 'required',
            'data_nascimento' => 'required',
            'rg' => 'required',
            'nome_mae' => 'required',
            'cep' => 'required',
            'endereco' => 'required',
            'Bairro' => 'required',
            'cidade' => 'required',
            'estado' => 'required',
            'tipo_escola' => 'required',
            'nome_escola' => 'required',
            'serie_proximo_ano' => 'required',
            'como_soube' => 'required',
            'boletim_2019'=> 'required'
        ]);    
        $boletim_2019="";
        if($request->hasFile('boletim_2019')){
            $boletim_2019 = request()->file('boletim_2019')->store('boletins', 'public_html');
        }
        $boletim_2020="";
        if($request->hasFile('boletim_2020')){
            $boletim_2020 = request()->file('boletim_2020')->store('boletins', 'public_html');
        }

        $c = new dados_fase_2;
        $c->email = $request->email ;
        $c->nome_candidato = $request->nome_candidato ;
        $c->data_nascimento = $request->data_nascimento ;
        $c->rg = $request->rg ;
        $c->telefone_residencial = $request->telefone_residencial ;
        $c->celular = $request->celular ;
        $c->nome_mae = $request->nome_mae ;
        $c->celular_mae = $request->celular_mae ;
        $c->email_mae = $request->email_mae ;
        $c->nome_pai = $request->nome_pai ;
        $c->celular_pai = $request->celular_pai ;
        $c->email_pai = $request->email_pai ;
        $c->cep = $request->cep ;
        $c->endereco = $request->endereco ;
        $c->complemento = $request->complemento ;
        $c->Bairro = $request->Bairro ;
        $c->cidade = $request->cidade ;
        $c->estado = $request->estado ;
        $c->nome_escola = $request->nome_escola ;
        $c->serie_proximo_ano = $request->serie_proximo_ano ;
        $c->como_soube = $request->como_soube ;
        $c->outros_quais = $request->outros_quais ;
        $c->dia_prova = $request->dia_prova;
        $c->horario_prova = $request->horario_prova;
        $c->de_acordo = 'sim';
        $c->tipo_escola = $request->tipo_escola;
        $c->boletim_2019 = $boletim_2019;
        $c->boletim_2020 = $boletim_2020;
        $c->save();
        $this->mail_send($c->id);
        return redirect(route('obrigado'));
    }

    public function obrigado(){
        return view('obrigado');
    }
    public function resultados_pre(){
        return redirect(route('resultados',1));
    }
    public function resultados($id){
        if($id ==1) $resultados = dados::all();
        if($id ==2) $resultados = dados_fase_2::all();
        return view('resultados')->with('resultados',$resultados)->with('titulo','Resultados Fase '.$id);
    }
 

    public function mail_send($id){
        $d = dados_fase_2::find($id);
        if(!$d) return;
            Mail::to([['email' => 'secretaria@paraisosbc.com.br' , 'name'=> 'secretaria'],
                      ['email' =>  $d->email, 'name'=> $d->nome_candidato]])
                      ->send(new SendRespostas($d));
        return "Email reenviado";
        //return view('mails.sendRespostas')->with('d',$d);
    }

    public function excell($id){
        //https://phpspreadsheet.readthedocs.io/
        if($id ==1) $resultados = dados::all();
        if($id ==2) $resultados = dados_fase_2::all();
        $cont = 1;
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
            $sheet->setCellValue("A$cont", 'Email');
            $sheet->setCellValue("B$cont", 'Nome candidato');
            $sheet->setCellValue("C$cont", 'Data nascimento');
            $sheet->setCellValue("D$cont", 'RG' );
            $sheet->setCellValue("E$cont", 'Telefone Residencial' );
            $sheet->setCellValue("F$cont", 'Celular' );
            $sheet->setCellValue("G$cont", 'Nome Mãe' );
            $sheet->setCellValue("H$cont", 'Celular Mãe' );
            $sheet->setCellValue("I$cont", 'Email Mae' );
            $sheet->setCellValue("J$cont", 'nome_pai');
            $sheet->setCellValue("K$cont", 'Tipo Escola' );
            $sheet->setCellValue("L$cont", 'Celular Pai' );
            $sheet->setCellValue("M$cont", 'Email Pai' );
            $sheet->setCellValue("N$cont", 'cep');
            $sheet->setCellValue("O$cont", 'Endereco');
            $sheet->setCellValue("P$cont", 'Complemento');
            $sheet->setCellValue("Q$cont", 'Bairro');
            $sheet->setCellValue("R$cont", 'Cidade');
            $sheet->setCellValue("S$cont", 'Estado' );
            $sheet->setCellValue("T$cont", 'Nome Escola' );
            $sheet->setCellValue("U$cont", 'Serie Proximo Ano' );
            $sheet->setCellValue("V$cont", 'Como Soube');
            $sheet->setCellValue("W$cont", 'Outros Quais');
            $sheet->setCellValue("X$cont", 'Dia prova');
            $sheet->setCellValue("Z$cont", 'Horario prova' );
            $sheet->setCellValue("Z$cont", 'Inscrição' );
            $cont++;
        foreach($resultados as $c){
            
            $sheet->setCellValue("A$cont", $c->email);
            $sheet->setCellValue("B$cont", $c->nome_candidato);
            $sheet->setCellValue("C$cont", $c->data_nascimento );
            $sheet->setCellValue("D$cont", $c->rg );
            $sheet->setCellValue("E$cont", $c->telefone_residencial );
            $sheet->setCellValue("F$cont", $c->celular );
            $sheet->setCellValue("G$cont", $c->nome_mae );
            $sheet->setCellValue("H$cont", $c->celular_mae );
            $sheet->setCellValue("I$cont", $c->email_mae );
            $sheet->setCellValue("J$cont", $c->nome_pai);
            $sheet->setCellValue("L$cont", $c->celular_pai );
            $sheet->setCellValue("M$cont", $c->email_pai );
            $sheet->setCellValue("N$cont", $c->cep);
            $sheet->setCellValue("O$cont", $c->endereco);
            $sheet->setCellValue("P$cont", $c->complemento);
            $sheet->setCellValue("Q$cont", $c->Bairro);
            $sheet->setCellValue("R$cont", $c->cidade);
            $sheet->setCellValue("S$cont", $c->estado );
            $sheet->setCellValue("T$cont", $c->nome_escola );
            $sheet->setCellValue("U$cont", $c->serie_proximo_ano );
            $sheet->setCellValue("V$cont", $c->como_soube);
            $sheet->setCellValue("W$cont", $c->outros_quais);
            $sheet->setCellValue("X$cont", $c->dia_prova);
            $sheet->setCellValue("Z$cont", $c->horario_prova );
            $sheet->setCellValue("AA$cont", $c->de_acordo );
            $sheet->setCellValue("AB$cont", $c->tipo_escola );
            $sheet->setCellValue("AB$cont", $c->created_at );
            $cont++;
        }
        $writer = new Xlsx($spreadsheet);
        $filename = 'concurso2021';

        $writer->save("$filename.xlsx");
    
        $file= public_path(). "/$filename.xlsx";
        $headers = ['Content-Type' => 'application/xlsx',];
        return response()->download($file, 'concusro2020.xlsx', $headers);
    }

}
