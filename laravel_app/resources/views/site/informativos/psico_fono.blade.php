@extends('site.layout.main')

@section('conteudo')

 
  
<main class="mt-5 white-bg">
<div class="pre white-bg"></div>
<section id="colegio" class="white-bg">
    
 <div class="row mt-5">
     <div class="col-md-12 text-center mt-5">
         <h1>PSICO/FONO</h1>
     </div>
 </div>

 <div class="container white-bg">
        <div class="mt-5 pb-5 white-bg">
     
        <table  class="table table-hover">
            <tr data-href="{{asset('pdfs/psico/20-09_setembro_amarelo.pdf')}}" style="cursor: pointer;">
                
                <td><p>Setembro Amarelo - mês de Prevenção ao Suicídio</p></td>
                <td>  <i class="fas fa-download"></i> </td>
            </tr>

            <tr data-href="{{asset('pdfs/psico/19-12_inteligencia_emocional.pdf')}}" style="cursor: pointer;">
                
                <td><p>Inteligência emocional é habilidade crucial para o século 21</p></td>
                <td>  <i class="fas fa-download"></i> </td>
            </tr>

            <tr data-href="{{asset('pdfs/psico/19-12_suicidio_v3.pdf')}}" style="cursor: pointer;">
                
                <td><p>O que posso fazer para ajudar quem pensa em suicídio</p></td>
                <td>  <i class="fas fa-download"></i> </td>
            </tr>

            <tr data-href="{{asset('pdfs/psico/19-08_funcao_executiva.pdf')}}" style="cursor: pointer;">
                
                <td><p>Função Executiva e Autorregulação</p></td>
                <td>  <i class="fas fa-download"></i> </td>
            </tr>

            <tr data-href="{{asset('pdfs/psico/19-08_birra.pdf')}}" style="cursor: pointer;">
                
                <td><p> Birra: como lidar com ela? </p></td>
                <td>  <i class="fas fa-download"></i> </td>
            </tr>
            <tr data-href="{{route('paciencia')}}" style="cursor: pointer;">
                
                <td><p> Paciência: uma habilidade que você vai precisar ajudar seu filho a desenvolver </p></td>
                <td>  <i class="fas fa-globe"></i></td>
            </tr>

        </table>
                
                   
 
            </div>
                
                
                
                
                
          
		  </div>
 </div>
</section>

 

 
 
</main>



@endsection
@section('scripts')
<script>
   $(function () {
    $('*[data-href]').on('click', function() {
        window.open($(this).data("href"), "_newtab");
    });
   });
</script>
@endsection    