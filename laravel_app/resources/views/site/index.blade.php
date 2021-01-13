@extends('site.layout.main')

@section('conteudo')

 
  
<main>
    <!--? slider Area Start-->

    <div class="slider-area">
        <div class="slider-active dot-style">
            <!-- Single Slider -->
            @foreach ($crs as $cr)
            <div class="single-slider slider-height hero-overly d-flex flex-column justify-content-center " style="background-color: {{$cr->color}};">
                <div class="container">
                    <div class="row d-flex flex-column justify-content-center">
                        <div class="col-md-12 ml-auto d-flex flex-column justify-content-center">
                            <center>
                            <a href="{{route('index')}}#contato">
                            <img data-animation="fadeInLeft" data-delay=".4s" 
                                src="{{asset($cr->src)}}" alt="intro" class="pic-banner">
                            </center>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        
        <!-- Video icon 
        <div class="video-icon">
            <a class="popup-video btn-icon" href="https://youtu.be/jP_uRb5KOEc"><i class="fas fa-play"></i></a>
        </div>-->
    </div>
    <!-- slider Area End-->
<section id='apresentacao' class="mb-3">
   
    <div class="bg-green-light ">
        <div class="row bg-green-light">
            
            <div class="col-md-5 video-container" id="videoDiv">
                <video id="video1" class="" autoplay loop muted>
                  <source src="{{asset('video/home_v2.webm')}}" type="video/webm" class="img-fluid">
                </video>
            </div>

            <div class="col-md-7  bg-green-light box-reader container_right">
                <h1  class="wow pulse" data-wow-duration="1s" data-wow-delay="1s" >
                    Paixão por transformar
                </h1>
                <p class="text-justify">Aqui no Colégio Paraíso, nossa missão é contribuir para a construção de uma base sólida de conhecimento e caráter, participando ativamente da transformação de crianças e jovens, em cidadãos críticos e conscientes, que saibam refletir, decidir, fazer escolhas, planejar, expor suas ideias e ouvir as dos outros, encarando os desafios da sociedade atual que está em constante mudança.</p>
                <a href="{{route('colegio_paraiso')}}" class="btn btn3 mt-3 small-btn">Conheça nossa história</a>
            </div>
        </div>

    
      </div>
</section>

<section id='educacional' class="bg-green-light mb-3">

    <div class="row box-reader up-down">
        <div class="container mt-5">
        <div class="col-md-12 text-center">
            <h1>Educacional</h1>
            <p class="wow fadeIn" data-wow-duration="1s" data-wow-delay="1s">
                Do Berçário ao Ensino médio, transformamos experiências em aprendizado de qualidade
            </p>
        </div>
     </div>
    </div>


<div class="our-info-area bg-green-light">
    <div class="row">
    
        <div class="col-md-4  educacional_item" data-background="{{asset('img/home/bercario_3.png')}}">
           <a href="{{route('bercario')}}">
            <div class="over d-flex flex-column">
                <h3 class="wow fadeIn mt-auto" data-wow-duration="1s" data-wow-delay="0.4s">Berçário</h3>
                <p class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.9s">Aprendizagem integrada ao <br>processo de desenvolvimento infantil</p>
                <!--<a href="#" class="btn4">SAIBA MAIS</a>-->
            </div>
           </a>
        </div>
    
        <div class="col-md-4 educacional_item" data-background="{{asset('img/educacional/infantil_1.jpg')}}">
            <a href="{{route('infantil')}}">
            <div class="over d-flex flex-column">
                <h3 class="wow fadeIn  mt-auto" data-wow-duration="1s" data-wow-delay="0.4s">Infantil</h3>
                <p class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.9s">Desenvolvimento integral da criança <br>  até os 5 anos de idade</p>
            </div>
            </a>
        </div>

        <div class="col-md-4 educacional_item" data-background="{{asset('img/educacional/Fundamental_verde.JPG')}}">
            <a href="{{route('fundamental')}}">
            <div class="over d-flex flex-column">
                <h3 class="wow fadeIn  mt-auto" data-wow-duration="1s" data-wow-delay="0.4s">Fundamental</h3>
                <p class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.9s">Acompanhando a jornada de aprendizagem,<br> do 1º ao 9º ano</p>
            </div>
            </a>
        </div>
    </div>

    <div class="row">
    
        <div class="col-md-4 educacional_item" data-background="{{asset('img/educacional/ensino_medio_1.JPG')}}">
            <a href="{{route('ensino_medio')}}">
            <div class="over-blue d-flex flex-column">
                <h3 class="wow fadeIn  mt-auto" data-wow-duration="1s" data-wow-delay="0.4s">Médio</h3>
                <p class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.9s">Preparação do aluno para a vida plena,<br> consciente, feliz e responsável</p>
            </div>
            </a>
        </div>

        <div class="col-md-4 educacional_item" data-background="{{asset('img/home/integral.png')}}">
            <a href="{{route('integral')}}">
            <div class="over-blue d-flex flex-column">
                <h3 class="wow fadeIn  mt-auto" data-wow-duration="1s" data-wow-delay="0.4s">Integral</h3>
                <p class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.9s">Proposta pedagógica diferenciada, <br> do berçário ao 8º ano</p>
            </div>
            </a>
        </div>

        <div class="col-md-4 educacional_item" data-background="{{asset('img/home/ensino.png')}}">
            <a href="{{route('sistema_ensino')}}">
            <div class="over-blue d-flex flex-column">
                <h3 class="wow fadeIn mt-auto" data-wow-duration="1s" data-wow-delay="0.4s">Sistema de Ensino</h3>
                <p class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.9s">Um dos projetos educacionais mais <br> inovadores da América Latina</p>
            </div>
        </a>
        </div>
    </div>
</div>
</section>



<section id="diferenciais" class="mt-5">
    <div class="container">
    <div class="our-info-area bg-green-light">
        <div class="row bg-green-light">
            <div class="col-md-12 bg-green-light text-center mt-5 mb-5">
                <h1>Diferenciais</h1>
            </div>
        </div>
        <div class="row bg-green-light">
            <div class="col-md-3 col-6 text-center mb-5"><a href="#"><img src="{{asset('img/diferenciais/equipe-multidisciplinar.svg')}}" alt="icon" class="img-fluid mb-4 wow zoomIn icones-diferenciais" data-wow-duration="1s" data-wow-delay="1s"><h5 class="mb-2">Equipe <br>Multidisplinar</h5><p class="mb-4">Reunímos profissionais da Psicologia, Fonoaudiologia, Psicopedagogia, Nutrição e mais</p></a></div> 
            <div class="col-md-3 col-6 text-center mb-5"><a href="#"><img src="{{asset('img/diferenciais/apoio-pedagogico.svg')}}" alt="icon" class="img-fluid mb-4 wow zoomIn  icones-diferenciais" data-wow-duration="1s" data-wow-delay="1s"><h5 class="mb-2">Apoio <br>Pedagógico</h5><p class="mb-4">Ajudamos nossos alunos a reconhecerem suas potencialidades e contornar dificuldades</p></a></div>
            <div class="col-md-3 col-6 text-center mb-5"><a href="#"><img src="{{asset('img/diferenciais/etica-cidadania.svg')}}" alt="icon" class="img-fluid mb-4 wow zoomIn  icones-diferenciais" data-wow-duration="1s" data-wow-delay="1s"><h5 class="mb-2">Ética &<br> Cidadania</h5><p class="mb-4">É dever da escola ensinar e ajudar a formar cidadãos capazes de refletir e agir em sociedade</p></a></div>
            <div class="col-md-3 col-6 text-center mb-5"><a href="#"><img src="{{asset('img/diferenciais/maker.svg')}}" alt="icon" class="img-fluid mb-4 wow zoomIn  icones-diferenciais" data-wow-duration="1s" data-wow-delay="1s"><h5 class="mb-2">Cultura <br>Maker</h5><p class="mb-4">Tentativas, falhas e acertos fazem parte do processo de aprendizagem com a mão na massa</p></a></div>
            <div class="col-md-3 col-6 text-center mb-5"><a href="#"><img src="{{asset('img/diferenciais/escola-idiomas.svg')}}" alt="icon" class="img-fluid mb-4 wow zoomIn  icones-diferenciais" data-wow-duration="1s" data-wow-delay="1s"><h5 class="mb-2">Heaven <br> School</h5><p class="mb-4">Ouvir e falar: a maneira de se familiarizar e desenvolver o conhecimento de línguas estrangeiras</p></a></div>
			<div class="col-md-3 col-6 text-center mb-5"><a href="#"><img src="{{asset('img/diferenciais/toefl.png')}}" alt="icon" class="img-fluid mb-4 wow zoomIn  icones-diferenciais" data-wow-duration="1s" data-wow-delay="1s"><h5 class="mb-2">Certificação <br> TOEFL</h5><p class="mb-4">'Test of English as a Foreign Language', trata-se do exame de proficiência de inglês mais conhecido e respeitado do mundo, aplicado aos alunos dos 5os. e 9os. do Fundamental e 3os. do Ensino Médio.</p></a></div>
            <div class="col-md-3 col-6 text-center mb-5"><a href="#"><img src="{{asset('img/diferenciais/esportes.svg')}}" alt="icon" class="img-fluid mb-4 wow zoomIn  icones-diferenciais" data-wow-duration="1s" data-wow-delay="1s"><h5 class="mb-2">Escola de<br> Esportes</h5><p class="mb-4">Estimulamos a cultura de um estilo de vida ativo, através da prática de atividades físicas</p></a></div>
            <div class="col-md-3 col-6 text-center mb-5"><a href="#"><img src="{{asset('img/diferenciais/sistema_ensino.svg')}}" alt="icon" class="img-fluid mb-4 wow zoomIn  icones-diferenciais" data-wow-duration="1s" data-wow-delay="1s"><h5 class="mb-2">Sistema de<br> Ensino UNOi</h5><p class="mb-4">Um dos projetos educacionais mais inovadores da América Latina, disponível para nossos alunos</p></a></div>
            <div class="col-md-3 col-6 text-center mb-5"><a href="#"><img src="{{asset('img/diferenciais/robotica.svg')}}" alt="icon" class="img-fluid mb-4 wow zoomIn  icones-diferenciais" data-wow-duration="1s" data-wow-delay="1s"><h5 class="mb-4">Robótica</h5><p class="mb-4">Curiosidade, iniciativa e senso crítico são essenciais para construir e programar com a robótica</p></a></div>
            <div class="col-md-3 col-6 text-center mb-5"><a href="#"><img src="{{asset('img/diferenciais/escola-artes.svg')}}" alt="icon" class="img-fluid mb-4 wow zoomIn  icones-diferenciais" data-wow-duration="1s" data-wow-delay="1s"><h5 class="mb-2">Arte</h5><p class="mb-4">Apreciar, contextualizar e fazer são os três eixos-norteadores da arte-educação na escola</p></a></div>
            <div class="col-md-3 col-6 text-center mb-5"><a href="#"><img src="{{asset('img/diferenciais/escola-musica.svg')}}" alt="icon" class="img-fluid mb-4 wow zoomIn  icones-diferenciais" data-wow-duration="1s" data-wow-delay="1s"><h5 class="mb-2">Música</h5><p class="mb-4">Um ambiente específico para desenvolver as habilidades e emoções através da música </p></a></div>
            <div class="col-md-3 col-6 text-center mb-5"><a href="#"><img src="{{asset('img/diferenciais/escola-xadrez.svg')}}" alt="icon" class="img-fluid mb-4 wow zoomIn  icones-diferenciais" data-wow-duration="1s" data-wow-delay="1s"><h5 class="mb-2">Xadrez</h5><p class="mb-4">Raciocínio lógico, contenção, tomada de decisões e planejamento são alguns dis princípios</p></a></div>
            <div class="col-md-3 col-6 text-center mb-5"><a href="#"><img src="{{asset('img/diferenciais/informatica.svg')}}" alt="icon" class="img-fluid mb-4 wow zoomIn  icones-diferenciais" data-wow-duration="1s" data-wow-delay="1s"><h5 class="mb-2">Informática</h5><p class="mb-4">Na vida acadêmica e na prática, a tecnologia traz benefícios e deve ser usada ao nosso favor</p></a></div>
        </div>  
    </div>
    </div>
</section>

<div id="contato" class="mt-5 mb-5"></div>

<section >
    <div class="container mt-5 mb-5 bg-green-light">
        <div class="row bg-green-light">
            <div class="col-md-12 bg-green-light text-center mt-5 mb-3">
                <h1>Contato</h1>
            </div>
        </div>
         <div class="row bg-green-light mt-5">
            <div class="col-md-6">
                <h4>Colégio Paraíso</h4>
                <p>Horário de Atendimento <br>
                 Segunda a quinta, das 8h as 18h</p>
              
                <h5>Educação Infantil </h5>
                <p>Rua Dr. Baeta Neves, 333 - Baeta Neves<br>
                   CEP 09751-030 São Bernardo do Campo/SP<br>
                  (11) 4332-8333<br>
                  (11) 98532-1717</p>
              
                <h5>Ensino Fundamental e Ensino Médio</h5>
                <p>Rua Amparo, 322 - Baeta Neves<br>
                   CEP 09751-350 São Bernardo do Campo/SP<br>
                   (11) 4332-8333<br>
                   (11) 98905-1842</p>
              
            </div>

            <div class="col-md-6">
                <form class="form-contact contact_form" action="{{route('contato')}}" method="post">
                    {{  csrf_field() }}
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <input class="form-control valid" name="nome" id="nome" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Seu nome...'" placeholder="Seu nome..." required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input class="form-control valid" name="telefone" id="telefone" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Seu telefone...'" placeholder="Seu telefone" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input class="form-control" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Seu Email'" placeholder="Seu Email" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <textarea class="form-control w-100" name="mensagem" id="mensagem" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Sua mensagem'" placeholder="Sua Mensagem"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <button type="submit" class="btn btn3 btn-form mt-3 small-btn">Enviar</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</section>
 
<section id="localizacao" class=" bg-green-light mt-5 mb-3">
    <div class="container">
        <div class="row mb-5 mt-5">
            <div class="col-md-12 text-center mb-5 mt-5"><h1>Localização</h1></div>
            <div class="col-md-6 mt-2">
                <h3>Educação Infantil</h3>
                <p>Rua Dr. Baeta Neves, 333 - Baeta Neves<br>
                CEP 09751-030 São Bernardo do Campo/SP</p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d29227.93292214043!2d-46.545777!3d-23.694132000000003!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd3b2796be2d67584!2zQ29sw6lnaW8gUGFyYcOtc28!5e0!3m2!1spt-BR!2sbr!4v1605713598988!5m2!1spt-BR!2sbr" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
            <div class="col-md-6 mt-2">
                <h3>Ensino Fundamental</h3>
                <p>Rua Amparo, 322 - Baeta Neves<br>
                CEP 09751-350 São Bernardo do Campo/SP</p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7307.018097282968!2d-46.545418!3d-23.693509!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce423754b681d1%3A0xdd3ea22f0cbecd1!2sR.%20Amparo%2C%20322%20-%20Baeta%20Neves%2C%20S%C3%A3o%20Bernardo%20do%20Campo%20-%20SP%2C%2009751-350!5e0!3m2!1spt-BR!2sbr!4v1605713669114!5m2!1spt-BR!2sbr" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>

        </div>
    </div>
</section>

</main>

@endsection

@section('scripts')
<script>
   $(function () {
    new WOW().init();   
    @isset($message)
        alert('{{$message}}');
    @endisset   




  });
  
  $('a[href*=#]').click(function(){
  $('html, body').animate({
    scrollTop: $( $.attr(this, 'href') ).offset().top
  }, 500);
  return false;
});
</script>
    
@endsection