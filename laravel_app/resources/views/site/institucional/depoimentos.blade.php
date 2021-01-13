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
        
        Video icon 
        <div class="video-icon">
            <a class="popup-video btn-icon" href="https://youtu.be/7n2NnJHufa4"><i class="fas fa-play"></i></a>
        </div>
    </div>
    <!-- slider Area End-->
<section id='apresentacao' class="mb-3">
   
    <div class="bg-green-light ">
        <div class="row bg-green-light">
            
            <div class="col-md-5 video-container" id="videoDiv">
                <video id="video1" class="" autoplay loop muted>
                  <source src="{{asset('video/home.webm')}}" type="video/webm" class="img-fluid">
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