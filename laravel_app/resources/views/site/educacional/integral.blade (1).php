@extends('site.layout.main')

@section('conteudo')

 
  
<main class="mt-3 white-bg">
<div class="pre white-bg"></div>
<section id="colegio" class="white-bg">
    
 
        <div class="row educacional_detalhes" data-background="{{asset('img/educacional/integral.jpg')}}">
            <div class="col-md-12 pull-left over-educacional d-flex flex-column justify-content-center">
                <div class="container d-flex flex-column justify-content-center">
                    <h1 class="text-center">Integral</h1>
                </div>
            </div>
        </div> 

 

 <div class="container white-bg">
    <div class="mt-5 mb-5 white-bg text-justify">
        <h4 class="titulo-educacional">Proposta pedagógica diferenciada, do Berçário ao 8º ano</h4>
        <p>O Colégio Paraíso atende alunos do berçário ao 8º ano em turmas de período integral.</p>
        <h5 class="mt-3 mb-2">ATENDIMENTO ORGANIZADO EM GRUPOS DIFERENCIADOS POR FAIXA ETÁRIA,
            NOS HORÁRIOS QUE ATENDAM ÀS NECESSIDADES DOS PAIS; DAS 6H50 ÀS 18H30</h5>
        <p>No horário inverso ao de aulas os alunos são acompanhados por pedagogas que orientam lições de casa, trabalhos,
            pesquisas, atividades, uso da internet, lanche, almoço, atividades recreativas, lúdicas e desenvolvimento de projetos.</p>
    </div>
</div>


<div class="bg-green-light">
    <div class="container">
    <div class="row">
    <div class="col-md-6 img_exemplo" data-background="{{asset('img/home/integral.png')}}">
        
    </div>
    <div class="col-md-6 d-flex flex-column justify-content-center">
        <h5>+ CICLO COMPLETO DE ATIVIDADES</h5>
        <h5>+ PROPOSTA PEDAGÓGICA DIFERENCIADA</h5>
        <h5>+ GRUPOS POR FAIXA ETÁRIA</h5>
    </div>
    </div>
    </div>
</div>

<div class="container white-bg">
    <div class="mt-5 white-bg text-justify">               
        <p>Além dos cuidados necessários aos alunos, principalmente de higiene e alimentação, o atendimento visa uma proposta
            pedagógica diferenciada, durante meio período, sendo que na outra parte do dia os alunos frequentam a classe regular
            
            com outros professores.</p>
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