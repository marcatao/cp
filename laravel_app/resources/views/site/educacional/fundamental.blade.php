@extends('site.layout.main')

@section('conteudo')

 
  
<main class="mt-3 white-bg">
<div class="pre white-bg"></div>
<section id="colegio" class="white-bg">
    
 
        <div class="row educacional_detalhes" data-background="{{asset('img/educacional/fundamental.jpg')}}">
            <div class="col-md-12 pull-left over-educacional d-flex flex-column justify-content-center">
                <div class="container d-flex flex-column justify-content-center">
                    <h1 class="text-center">ENSINO FUNDAMENTAL</h1>
                </div>
            </div>
        </div> 

 

 <div class="container white-bg">
    <div class="mt-5 mb-5 white-bg text-justify">
        <h4 class="titulo-educacional text-center">Acompanhando a jornada de aprendizagem, do 1º ao 9º ano</h4>

        <p class="text-center">A afirmação de Jean Piaget permeia a filosofia do Colégio Paraíso:</p>
        <h5 class="mt-3 mb-2">”O PRINCIPAL OBJETIVO DA EDUCAÇÃO É CRIAR HOMENS CAPAZES DE FAZER COISAS NOVAS E NÃO
            SIMPLESMENTE REPETIR O QUE OUTRAS GERAÇÕES FIZERAM”</h5> 


            <p>Isto não significa que a transmissão de conhecimentos perdeu seu lugar nesta escola. Ela continua a existir através de
                aulas dinâmicas e envolventes, pois o nosso objetivo é ensinar aos alunos o que eles precisam aprender para que se
                tornem cidadãos que saibam refletir, decidir, fazer escolhas, planejar, expor suas ideias e ouvir as dos outros; para que
                possam ter uma participação ativa sobre a sociedade em que vivem.</p>
                
    </div>
 </div>


 <div class="bg-green-light">
    <div class="container">
    <div class="row">
    <div class="col-md-4">
        <img src="{{asset('img/educacional/Fundamental_verde.JPG')}}" alt="" class="img-fluid">
    </div>
    <div class="col-md-4 d-flex flex-column justify-content-center">
        <h5>+ AULAS DINÂMICAS E INTERATIVAS</h5>
        <h5>+ EXERCÍCIO DE EXPOR E OUVIR IDEIAS</h5>
        <h5>+ DESENVOLVIMENTO DA PARTICIPAÇÃO ATIVA</h5>
    </div>
    <div class="col-md-4">
        <img src="{{asset('img/educacional/fundamental_2.jpg')}}" alt="" class="img-fluid">
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