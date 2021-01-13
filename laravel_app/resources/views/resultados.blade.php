@extends('tamplate.main')
 
@section('conteudo')
<div class="container"> 
<h2 class="mt-5 mb-3">{{$titulo}}</h2>
<table id="example" class="table table-striped table-bordered nowrap" style="width:100%">
    <thead>
        <tr>
            <th>E-mail</th>
            <th>Nome</th>
            <th>Nascim.</th>
            <th>Inscrição</th>
            <th>Telefone</th>
            <th>Celular</th>
            <th>Nome mãe</th>
            <th>celular mãe</th>
            <th>Email mãe</th>
            <th>Nome Pai</th>
            <th>Celular pai</th>
            <th>Email pai</th>
            
            <th>Rg</th>
            <th>Escola</th>
            <th>Nome Escola</th>
            <th>Serie</th>
            <th>Como soube</th>
            <th>Ex. </th>
            <th>Dia</th>
            <th>Horario</th>

            <th>Boletin 2019</th>
            <th>Boletin 2020</th>

            <th>Cep</th>
            <th>Endereço</th>
            <th>Compl.</th>
            <th>Bairro</th>
            <th>Cidade</th>
            <th>UF</th>
          </tr>
    </thead>
    <tbody>
@foreach ($resultados as $r)
  <tr>
    <td>{{$r->email}}</td>
    <td>{{$r->nome_candidato}}</td>
    <td>{{ date('d/m/Y', strtotime($r->data_nascimento)) }}</td>
    <td>{{ date('d/m/Y', strtotime($r->created_at)) }}</td>
    
    <td>{{$r->telefone_residencial}}</td>
    <td>{{$r->celular}}</td>
    <td>{{$r->nome_mae}}</td>
    <td>{{$r->celular_mae}}</td>
    <td>{{$r->email_mae}}</td>
    <td>{{$r->nome_pai}}</td>
    <td>{{$r->celular_pai}}</td>
    <td>{{$r->email_pai}}</td>
  
    <td>{{$r->rg}}</td>
    <td>{{$r->tipo_escola}}</td>
    <td>{{$r->nome_escola}}</td>
    <td>{{$r->serie_proximo_ano}}</td>
    <td>{{$r->como_soube}}</td>
    <td>{{$r->outros_quais}}</td>
    <td>{{$r->dia_prova}}</td>
    <td>{{$r->horario_prova}}</td>

    <td><a href="{{asset($r->boletim_2019)}}" target="_blank">Download 2019</a></td>
    <td>
      @if($r->boletim_2020)
      <a href="{{asset($r->boletim_2020)}}" target="_blank">Download 2020</a>
      @endif
    </td>

    <td>{{$r->cep}}</td>
    <td>{{$r->endereco}}</td>
    <td>{{$r->complemento}}</td>
    <td>{{$r->Bairro}}</td>
    <td>{{$r->cidade}}</td>
    <td>{{$r->estado}}</td>
  </tr>
@endforeach
    </tbody>
</table>
 

</div>
@endsection

@section('scripts')

<script>
$(document).ready(function() {
    var table = $('#example').DataTable( {
        responsive: true,
        paginate:false,
    } );
 
    new $.fn.dataTable.FixedHeader( table );
} );
</script>
@endsection