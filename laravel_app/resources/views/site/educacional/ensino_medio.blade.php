@extends('site.layout.main')

@section('conteudo')

 
  
<main class="mt-3 white-bg">
<div class="pre white-bg"></div>
<section id="colegio" class="white-bg">
    
 
        <div class="row educacional_detalhes" data-background="{{asset('img/educacional/medio.jpg')}}">
            <div class="col-md-12 pull-left over-educacional d-flex flex-column justify-content-center">
                <div class="container d-flex flex-column justify-content-center">
                    <h1 class="text-center">ENSINO MÉDIO</h1>
                </div>
            </div>
        </div> 

 

 <div class="container white-bg">
    <div class="mt-5 mb-5 white-bg text-justify">
        <h4 class="titulo-educacional">Preparação do aluno para a vida plena, consciente, feliz e responsável</h4>
            <p>A maior preocupação do Colégio Paraíso é preparar o aluno para a vida plena, consciente, feliz e responsável.
                Com este objetivo o currículo do Ensino Médio procura estruturar o conhecimento para que o aluno adquira as
                competências necessárias, não só para prestar o vestibular, mas também para os desafios do Mercado de Trabalho, as
                situações de competição e o exercício consciente da cidadania.</p>
           <h5>DESENVOLVER O POTENCIAL DO ALUNO NOS CAMPOS DAS CIÊNCIAS DA NATUREZA, CIÊNCIAS HUMANAS,
            MATEMÁTICA E SUAS TECNOLOGIAS, LINGUAGENS, CÓDIGOS E SUAS TECNOLOGIAS.</h5>
            <p>O aluno no Colégio Paraíso é visto como, além de uma pessoa preparando-se para o futuro, alguém que vive o presente e
                precisa aprender a vencer desafios, situações conflitivas, trabalhar o relacionamento interpessoal, na escola e fora dela.
                A escola propõe espaços de debates e orientação sobre a aquisição de competências.</p>
    </div>
</div>

<div class="bg-green-light">
    <div class="container">
    <div class="row">
    <div class="col-md-4">
        <img src="{{asset('img/educacional/ensino_medio_1.JPG')}}" alt="" class="img-fluid">
    </div>
    <div class="col-md-4 d-flex flex-column justify-content-center">
        <h5>+ AULAS DINÂMICAS E INTERATIVAS</h5>
        <h5>+ EXERCÍCIO DE EXPOR E OUVIR IDEIAS</h5>
        <h5>+ DESENVOLVIMENTO DA PARTICIÇÃO ATIVA</h5>
    </div>
    <div class="col-md-4">
        <img src="{{asset('img/educacional/ensino_medio_3.JPG')}}" alt="" class="img-fluid">
    </div>
    </div>
    </div>
</div>


<div class="container white-bg">
    <div class="mt-5 white-bg text-justify">               
        <p>O aluno é avaliado em diversas situações e das mais variadas formas, assim como somos na vida, e para prepará-los para
            o momento também importante do Vestibular, são realizados Simulados (um por trimestre) onde o aluno vivencia o
            momento onde ele precisa apresentar o conhecimento adquirido de forma sistematizada, assim como é solicitado no
            Vestibular e na prova do ENEM ( Exame Nacional do Ensino Médio).</p>
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