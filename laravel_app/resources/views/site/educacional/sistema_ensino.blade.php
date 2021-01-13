@extends('site.layout.main')

@section('conteudo')

 
  
<main class="mt-3 white-bg">
<div class="pre white-bg"></div>
<section id="colegio" class="white-bg">
    
 
        <div class="row educacional_detalhes" data-background="{{asset('img/educacional/sistema_ensino.jpg')}}">
            <div class="col-md-12 pull-left over-educacional d-flex flex-column justify-content-center">
                <div class="container d-flex flex-column justify-content-center">
                    <h1 class="text-center">SISTEMA DE ENSINO</h1>
                </div>
            </div>
        </div> 

 

 <div class="container white-bg">
    <div class="mt-5 mb-5 white-bg text-justify">
        <h4 class="titulo-educacional">Um dos projetos educacionais mais inovadores da América Latina</h4>
            <p>O projeto de transformação educacional é uma iniciativa que surgiu a partir das necessidades educativas do mundo
                contemporâneo. Tem como objetivo promover uma mudança estrutural nas escolas, unindo discussões sobre os princípios
                da educação do século XXI ao que existe de mais avançado em pedagogia, tecnologia, conteúdos, educação bilíngue,
                avaliação e formação continuada do corpo docente.</p>
            
    </div>
</div>

<div class="bg-green-light">
    <div class="container">
    <div class="row">
    <div class="col-md-6">
        <img src="{{asset('img/educacional/uno.png')}}"  class="img-fluid"  style="padding:20px" alt="">
        
    </div>
    <div class="col-md-6 d-flex flex-column justify-content-center">
        <a href="{{route('infantil')}}"><h5>+ EDUCAÇÃO INFANTIL</h5></a>
        <a href="{{route('fundamental')}}"><h5>+ FUNDAMENTAL I</h5></a>
		<a href="{{route('fundamental')}}"><h5>+ FUNDAMENTAL II</h5></a>
        <a href="{{route('ensino_medio')}}"><h5>+ ENSINO MÉDIO</h5></a>
    </div>
    </div>
    </div>
</div>

<div class="container white-bg">
    <div class="mt-5 white-bg text-justify">               
        <p><div class="container white-bg">
    <div class="mt-5 white-bg text-justify">               
        <p>O UNOi educação é reconhecido como um dos projetos educacionais mais inovadores da América Latina e tem suas
            origens na década de 1990, dentro do Grupo Santillana, o maior de educação básica nas línguas portuguesa e espanhola
            no mundo, presente em 22 países. O UNOi educação também está presente no México, na Argentina e na Colômbia.</p>
			
            <h5 class="mt-3 mb-2">SOMENTE NO BRASIL POSSUI UMA REDE DE MAIS DE 400 ESCOLAS PARCEIRAS,
                COM MAIS DE 130 MIL ALUNOS</h5>

 

    </div>
</div>    </p>
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