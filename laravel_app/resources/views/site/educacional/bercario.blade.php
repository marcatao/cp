@extends('site.layout.main')

@section('conteudo')

 
  
<main class="mt-3 white-bg">
<div class="pre white-bg"></div>
<section id="colegio" class="white-bg">
    
 
        <div class="row educacional_detalhes" data-background="{{asset('img/educacional/bercario.jpg')}}">
            <div class="col-md-12 pull-left over-educacional d-flex flex-column justify-content-center">
                <div class="container d-flex flex-column justify-content-center">
                    <h1 class="text-center">Berçário</h1>
                </div>
            </div>
        </div> 

 

 <div class="container white-bg">
    <div class="white-bg text-justify">
        <h4 class="titulo-educacional mt-4 text-center">Aprendizagem integrada ao processo de desenvolvimento infantil</h4>
            <p class="mb-4">O Berçário do Colégio Paraíso oferece aos bebês condições para as aprendizagens que ocorrem nos relacionamentos,
                nas interações, nas brincadeiras e nas situações pedagógicas intencionais ou aprendizagens orientadas pelas educadoras.
                É importante ressaltar, porém, que essas aprendizagens, de natureza diversa, ocorrem de maneira integrada no processo
                de desenvolvimento infantil.</p>

            <h5 class="mt-2 mb-4">CONSTRUÇÃO DE UM VÍNCULO ENTRE QUEM CUIDA E QUEM É CUIDADO </h5> 
            <p>Educar significa, portanto, proporcionar situações de cuidados, brincadeiras e aprendizagens orientadas de forma integrada
                e que possam contribuir para o desenvolvimento das capacidades infantis de relação interpessoal, de ser e estar com os
                outros em uma atitude básica de aceitação, respeito e confiança, e o acesso, pelas crianças, aos conhecimentos mais
                amplos da realidade social e cultural.</p>
    </div>
</div>

<div class="bg-green-light">



 




    <div class="container">
    <div class="row">
    <div class="col-md-4 d-flex flex-column justify-content-center">
       <img src="{{asset('img/home/bercario_2.png')}}" alt="" class="img-fluid"> 
  
    </div>
    <div class="col-md-4 d-flex flex-column justify-content-center mt-3 mb-3">
        <h5 class='mt-1'>+ PROFISSIONAIS COMPROMETIDOS COM OS BEBÊS</h5>
        <h5 class='mt-1'>+ CUIDADOS COM A SAÚDE E A ALIMENTAÇÃO</h5>
        <h5 class='mt-1'>+ ACESSO AO CONHECIMENTO AMPLO, DESDE CEDO</h5>
    </div>
    <div class="col-md-4 d-flex flex-column justify-content-center">
 
        <img src="{{asset('img/home/bercario_4.jpg')}}" alt="" class="img-fluid">
     </div>
    </div>
    </div>
    </div>
</div>
</div>               
<div class="container white-bg">
    <div class="mt-5 white-bg text-justify">               
        <p>Nosso sistema de educação auxilia no desenvolvimento das capacidades de apropriação e conhecimento das
            potencialidades corporais, afetivas, emocionais, estéticas e éticas, na perspectiva de contribuir para a formação de crianças
            felizes e saudáveis.
        </p> 
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