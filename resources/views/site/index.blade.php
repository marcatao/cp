@extends('site.layout.main')

@section('conteudo')

<main>
    <!--? slider Area Start-->
    <div class="slider-area">
        <div class="slider-active dot-style">
            <!-- Single Slider -->
            <div class="single-slider slider-height hero-overly d-flex align-items-center bg-purple">
                <div class="container-fluid">
                    <div class="row d-flex ml-auto">
                        <div class="col-md-12 ml-auto">
                            <center>
                            <img data-animation="fadeInLeft" data-delay=".4s" 
                                src="{{asset('img/carrossel/roxo.png')}}" alt="intro" class="img-fluid d-flex align-items-center">
                            </center>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Slider -->
            <div class="single-slider slider-height hero-overly d-flex align-items-center bg-orange">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <center>
                            <img data-animation="fadeInLeft" data-delay=".4s" 
                            src="{{asset('img/carrossel/laranja.png')}}" alt="intro" class="img-fluid">
                            </center>
                        </div>
                    </div>
                </div>
            </div>

            <div class="single-slider slider-height hero-overly d-flex align-items-center bg-yellow">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <center>
                            <img data-animation="fadeInLeft" data-delay=".4s" 
                            src="{{asset('img/carrossel/amarelo.png')}}" alt="intro" class="img-fluid">
                            </center>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <!-- Video icon 
        <div class="video-icon">
            <a class="popup-video btn-icon" href="https://youtu.be/jP_uRb5KOEc"><i class="fas fa-play"></i></a>
        </div>-->
    </div>
    <!-- slider Area End-->
<section id='apresentacao'>
    <div class="bg-green-light">
        <div class="row bg-green-light">
            <div class="col-md-6 animation">
                <img src="{{asset('img/animation/animation.png')}}" class="img-fluid">
            </div>
            <div class="col-md-6  bg-green-light box-reader">
                <h1>Paixão por transformar</h1>
                <p>Aqui no Colégio Paraíso, nossa missão é contribuir para a construção de uma base sólida de conhecimento e caráter, participando ativamente da transformação de crianças e jovens, em cidadãos críticos e conscientes, que saibam refletir, decidir, fazer escolhas, planejar, expor suas ideias e ouvir as dos outros, encarando os desafios da sociedade atual que está em constante mudança.</p>
                <a href="about.html" class="btn btn3">Conheça nossa história</a>
            </div>
        </div>
        <div class="row bg-green-light box-reader">
            <div class="container mt-5 mb-5">
            <div class="col-md-12 text-center">
                <h4>Do Berçário ao Ensino médio, transformamos experiências em aprendizado de qualidade</h4>
            </div>
         </div>

        </div>
    </div>
</section>

<section id='educacional'>
<div class="our-info-area bg-green-light">
<div class="row">
    <div class="col-md-4 educacional_item" data-background="{{asset('img/home/bercario.png')}}">
     <div class="over">
        <h2>Berçário</h2>
        <p>Aprendizagem integrada ao processo de desenvolvimento infantil</p>
        <a href="#" class="btn4">SAIBA MAIS</a>
    </div>
    </div>
    <div class="col-md-4 educacional_item" data-background="{{asset('img/home/infantil.png')}}">
       <div class="over">
        <h2>Infantil</h2>
        <p>Aprendizagem integrada ao processo de desenvolvimento infantil</p>
        <a href="#" class="btn4">SAIBA MAIS</a>
        </div>
    </div>
    <div class="col-md-4 educacional_item" data-background="{{asset('img/home/fundamental.png')}}">
        <div class="over">
        <h2>Fundamental</h2>
        <p>Aprendizagem integrada ao processo de desenvolvimento infantil</p>
        <a href="#" class="btn4">SAIBA MAIS</a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-4 educacional_item" data-background="{{asset('img/home/medio.png')}}">
     <div class="over-blue">
        <h2>Médio</h2>
        <p>Preparação do aluno para a vida plena, consciente, feliz e responsável</p>
        <a href="#" class="btn4">SAIBA MAIS</a>
    </div>
    </div>
    <div class="col-md-4 educacional_item" data-background="{{asset('img/home/integral.png')}}">
       <div class="over-blue">
        <h2>Integral</h2>
        <p>Proposta pedagógica diferenciada,do berçário ao 8º ano</p>
        <a href="#" class="btn4">SAIBA MAIS</a>
        </div>
    </div>
    <div class="col-md-4 educacional_item" data-background="{{asset('img/home/ensino.png')}}">
        <div class="over-blue">
        <h2>Sistema de Ensino</h2>
        <p>Um dos projetos educacionais mais inovadores da América Latina</p>
        <a href="#" class="btn4">SAIBA MAIS</a>
        </div>
    </div>
</div>
</div>
</section>



<section id='diferenciais'>
    <div class="our-info-area bg-green-light">
        <div class="row bg-green-light">
            <div class="col-md-12 bg-green-light text-center mt-5 mb-5">
                <h1>Diferenciais</h1>
            </div>
        </div>
        <div class="row bg-green-light">
            <div class="col-md-3 text-center"><img src="{{asset('img/home/icon.png')}}" alt="icon" class="img-fluid mb-4"><h3 class="mb-4">Equipe <br>Multidisplinar</h3><p class="mb-4">Texto marcação</p></div>
            <div class="col-md-3 text-center"><img src="{{asset('img/home/icon.png')}}" alt="icon" class="img-fluid mb-4"><h3 class="mb-4">Apoio <br>Pedagógico</h3><p class="mb-4">Texto marcação</p></div>
            <div class="col-md-3 text-center"><img src="{{asset('img/home/icon.png')}}" alt="icon" class="img-fluid mb-4"><h3 class="mb-4">Ética &<br> Cidadania</h3><p class="mb-4">Texto marcação</p></div>
            <div class="col-md-3 text-center"><img src="{{asset('img/home/icon.png')}}" alt="icon" class="img-fluid mb-4"><h3 class="mb-4">Cultura <br>Maker</h3><p class="mb-4">Texto marcação</p></div>
            <div class="col-md-3 text-center"><img src="{{asset('img/home/icon.png')}}" alt="icon" class="img-fluid mb-4"><h3 class="mb-4">Paraíso<br> Idiomas</h3><p class="mb-4">Texto marcação</p></div>
            <div class="col-md-3 text-center"><img src="{{asset('img/home/icon.png')}}" alt="icon" class="img-fluid mb-4"><h3 class="mb-4">Escola de<br> Esportes</h3><p class="mb-4">Texto marcação</p></div>
            <div class="col-md-3 text-center"><img src="{{asset('img/home/icon.png')}}" alt="icon" class="img-fluid mb-4"><h3 class="mb-4">Sistema de<br> Ensino</h3><p class="mb-4">Texto marcação</p></div>
            <div class="col-md-3 text-center"><img src="{{asset('img/home/icon.png')}}" alt="icon" class="img-fluid mb-4"><h3 class="mb-4">Robótica</h3><p class="mb-4">Texto marcação</p></div>
            <div class="col-md-3 text-center"><img src="{{asset('img/home/icon.png')}}" alt="icon" class="img-fluid mb-4"><h3 class="mb-4">Arte</h3><p class="mb-4">Texto marcação</p></div>
            <div class="col-md-3 text-center"><img src="{{asset('img/home/icon.png')}}" alt="icon" class="img-fluid mb-4"><h3 class="mb-4">Música</h3><p class="mb-4">Texto marcação</p></div>
            <div class="col-md-3 text-center"><img src="{{asset('img/home/icon.png')}}" alt="icon" class="img-fluid mb-4"><h3 class="mb-4">Xadrez</h3><p class="mb-4">Texto marcação</p></div>
            <div class="col-md-3 text-center"><img src="{{asset('img/home/icon.png')}}" alt="icon" class="img-fluid mb-4"><h3 class="mb-4">Toefl</h3><p class="mb-4">Texto marcação</p></div>
        </div>
    </div>

</section>



<section id="contato">
    <div class="container mt-5 mb-5 bg-green-light">
        <div class="row bg-green-light">
            <div class="col-md-12 bg-green-light text-center mt-5 mb-3">
                <h1>Contato</h1>
            </div>
        </div>
         <div class="row bg-green-light">
            <div class="col-md-5 ml-5">
                <h4>Colégio Paraíso</h4>
                <p>Horário de Atendimento <br>
                 Segunda a quinta, das 9h as 18h</p>
              
                <h4>Educação Infantil </h4>
                <p>Rua Dr. Baeta Neves, 333 - Baeta Neves<br>
                   CEP 09751-030 São Bernardo do Campo/SP<br>
                  (11) 4332-8333<br>
                  (11) 98532-1717</p>
              
                <h4>Ensino Fundamental e Ensino Médio</h4>
                <p>Rua Amparo, 322 - Baeta Neves<br>
                   CEP 09751-350 São Bernardo do Campo/SP<br>
                   (11) 4332-8333<br>
                   (11) 98905-1842</p>
              
            </div>

            <div class="col-md-6">
                <form class="form-contact contact_form" action="{{route('contato')}}" method="post">
                    {{  csrf_field() }}
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control valid" name="nome" id="nome" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Seu nome...'" placeholder="Seu nome..." required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control valid" name="telefone" id="telefone" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Seu telefone...'" placeholder="Seu telefone" required>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <input class="form-control" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Seu Email'" placeholder="Seu Email" required>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <textarea class="form-control w-100" name="mensagem" id="mensagem" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Sua mensagem'" placeholder="Sua Mensagem"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <button type="submit" class="btn btn3">Enviar</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</section>
 


</main>

@endsection

@section('scripts')
<script>
   $(function () {
    @isset($message)
        alert('{{$message}}');
    @endisset     
  });

</script>
    
@endsection