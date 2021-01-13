@extends('site.layout.main')

@section('conteudo')

 
  
<main class="mt-3 white-bg">
<div class="pre white-bg"></div>
<section id="colegio" class="white-bg">
    
 
        <div class="row educacional_detalhes" data-background="{{asset('img/educacional/infantil.jpg')}}">
            <div class="col-md-12 pull-left over-educacional d-flex flex-column justify-content-center">
                <div class="container d-flex flex-column justify-content-center">
                    <h1 class="text-center">Educação Infantil</h1>
                </div>
            </div>
        </div> 

 

 <div class="container white-bg">
    <div class="mt-5 mb-5 white-bg text-justify">
        <h3 class="titulo-educacional text-center">Desenvolvimento integral da criança até os 5 anos de idade</h3>
            <p>O Colégio Paraíso no seu curso de Educação Infantil considera as especificidades afetivas, emocionais, sociais e cognitivas
                das crianças. A Educação Infantil é considerada a 1ª etapa da educação básica, tendo como finalidade o desenvolvimento
                
                integral da criança até os 5 anos de idade.</p>

            <h5 class="mt-3 mb-2">NOSSA CONDUTA É DETERMINADA POR PRINCÍPIOS:</h5> 
            <p>• O respeito, a dignidade e aos direitos das crianças, consideradas nas suas diferenças individuais;<br>
                • O direito das crianças a brincar, como forma particular de expressão, pensamento, interação e comunicação infantil;<br>            
                • A socialização das crianças por meio de sua participação nas práticas sociais; o atendimento aos cuidados essenciais.
             </p>  
              
                
    </div>
 </div>

 <div class="bg-green-light">
    <div class="container">
    <div class="row">
    <div class="col-md-4 img_exemplo">
        <img src="{{asset('img/educacional/infantil_1.jpg')}}" alt="" class="img-fluid">
    </div>
    <div class="col-md-4 d-flex flex-column justify-content-center">
        <h5>+ EDUCAÇÃO PAUTADA EM PRINCÍPIOS</h5>
        <h5>+ PARTICIPAÇÃO EM PRÁTICA SOCIAIS</h5>
        <h5>+ APRENDER, BRINCAR E SE EXPRESSAR</h5>
    </div>
    <div class="col-md-4 img_exemplo">
        <img src="{{asset('img/educacional/infantil_2.jpg')}}" alt="" class="img-fluid">
    </div>
    </div>
    </div>
</div>

<div class="container white-bg">
    <div class="mt-5 white-bg text-justify">               
        <p>É preocupação da escola cuidar e educar e a relação afetiva é preponderante na construção do conhecimento. Desta forma, as crianças sentem-se felizes, pois são amadas, respeitadas e tratadas com muito carinho.</p>
    <div class="row text-center">  
        <div class="col-md-12 text-center mt-5 mb-5">
            <a href="{{route('index')}}#contato" class="btn btn3 mt-3 small-btn">Entre em contato conosco</a>

        </div>
    </div> 

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