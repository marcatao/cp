@extends('site.layout.main')

@section('conteudo')

 
  
<main class="mt-5 white-bg">
<div class="pre white-bg"></div>
<section id="colegio" class="white-bg">
<div class="container">   
 <div class="row mt-5">
     <div class="col-md-8 text-center ">
        
        <div class="acontece_exibe">

         <div class="row ">
            <div class="col-md-12">
                <h1>{{$acontece->titulo}}</h1>
                <img src="{{asset($capa->src)}}" alt="imagem de capa" class="img-fluid">
     
                <p class="text-justify">{!!$acontece->texto!!}</p>

            </div>
            
        </div>

        <div class="row gallery-item mb-5">
            @foreach (\App\acontece_imagens::where('acontece_id',$acontece->id)->get() as $ft)
            <div class="col-md-2">
                <a href="{{asset($ft->src)}}" class="img-pop-up">
                    <div class="single-gallery-image" style="background: url({{asset($ft->src)}});"></div>
                </a>
            </div>  
            @endforeach
        </div>
        </div>
     </div>
     <div class="col-md-4 text-center">
        @foreach (\App\acontece::orderBy('id','desc')->take(4)->get() as $post)
    
           <a href="{{route($post->link)}}">
            <div class="acontece_exibe text-center">
            <div class="acontece_titulo">
                <h5>{{$post->titulo}}</h5>
            </div>
            <div class="area_img" data-background="{{asset($post->img_capa->src)}}"></div>
    
           </a>   
        </div>
     @endforeach

     </div>
 </div>




 



</div><!--close container -->
</section>

 

@endsection
@section('scripts')
<script>
   $(function () {});
</script>
@endsection    