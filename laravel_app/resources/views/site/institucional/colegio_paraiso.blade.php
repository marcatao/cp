@extends('site.layout.main')

@section('conteudo')

 
  
<main class="mt-5 white-bg">
<div class="pre white-bg"></div>
<section id="colegio" class="white-bg">
    
 <div class="row mt-5">
     <div class="col md-12 text-center mt-5">
         <h1>O Colégio</h1>
     </div>
 </div>

 <div class="container">
        <div class="row mt-5 mb-5">
            <div class="col-md-6 text-justify">
                <h4>Como tudo começou, <br> o início de um sonho...</h4>
                <p>Os professores Mário Rúbis e Odete, apaixonados pela educação e contando com rica experiência no Magistério, decidiram, em 1989, instalar em sua própria casa uma escola de Educação Infantil, o "Paraíso dos Baixinhos", com o propósito de atender às necessidades e solicitações da comunidade local.</p>
                <p>Dona Odete, com vastíssima experiência na área da Educação Infantil, dirigia a escola desde a instalação. De início, com pequeno grupo de crianças, hoje, graças à dedicação de toda a equipe, a escola conta com um grande número de alunos. Esta precursora criou condições para que, em 1996, o professor Mário Rúbis instalasse o antigo 1º grau, hoje Ensino Fundamental. Lutaram muito, incansavelmente, e contaram também com a colaboração de amigos e de suas filhas Rubiamara e Rubiane. Canalizaram todos os recursos de que dispunham para a escola. Construíram um novo prédio e escolheram uma equipe técnica e um corpo docente eficiente.</p>
                <p>Com o curso de Ensino Fundamental totalmente instalado e em pleno funcionamento, atendendo à revindicação de alunos e de pais, lutaram pela autorização do Ensino Médio e conseguiram.</p>
            </div>
            <div class="col-md-6">
                <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/jP_uRb5KOEc?controls=0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
				
				<iframe width="560" height="315" src="https://www.youtube.com/embed/CsBIVeNsAGo?controls=0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				
				
				
                <img src="{{asset('img/colegio/img_institucional.jpg')}}" class="img-fluid no_container">
            </div>
        </div>
 </div>
</section>

<section id="missao" class="bg-green-light">
<div class="row">
    <div class="col-md-4 ms-back"  data-background="{{asset('img/colegio/1.png')}}"></div>
    <div class="col-md-4 missao_item">
        <h3>Missão<br><small>Por que existimos?</small></h3>
        <p>Contribuir para a emancipação humana instrumentalizando o indivíduo para a vida em sociedade.</p>
    </div>
    <div class="col-md-4  ms-back"  data-background="{{asset('img/colegio/2.png')}}"></div>
    <div class="col-md-4 missao_item">
        <h3>Visão<br><small>O que queremos?</small></h3>
        <p>Criar condições para que o indivíduo aproprie-se do mundo, do conhecimento e seja capaz de sonhar, criar, propor, realizar e transformar o mundo.</p>
    </div>
    <div class="col-md-4  ms-back"  data-background="{{asset('img/colegio/3.png')}}"></div>
    <div class="col-md-4 missao_item">
        <h3>Valores<br><small>Como trabalhamos?</small></h3>
        <p>De forma ética, crítica e política, baseada em concepções filosóficas e sociológicas de homem, mundo e sociedade.</p>
    </div>
</div>

</section>

 
<section id="nossa_estrutura" class="white-bg">
    <div class="row">
        <div class="col-md-12 text-center mt-5 mb-5">
            <a href="{{route('estrutura')}}"><h3>Conheça nossa estrutura</h3></a>
        </div>
    </div>
</section>
</main>



@endsection
@section('scripts')
<script>
   $(function () {});
</script>
@endsection    