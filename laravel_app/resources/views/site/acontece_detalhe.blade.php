@extends('site.layout.main')

@section('conteudo')

 
  
<main class="mt-5 ">
<div class="pre "></div>
<section id="colegio" class="">
<div class="container">   
 <div class="row mt-5">
     <div class="col-md-12">
        
        <div class="">
            <div class="row mt-5 mb-2">
                <div class="col-md-12">
                    <h2>{{$acontece->titulo}}</h2>
                    <p>{{ $data }} | {{$acontece->categoria->nome}} </p>
                     
                </div>
            </div>
         <div class="row  mb-5">
            <div class="col-md-7 white-bg">
               
                @if($capa)
                <img src="{{asset($capa->src)}}" alt="imagem de capa" class="img-fluid"> 
                @else
                <img src="{{asset('img/acontece/noimage.png')}}" alt="imagem de capa" class="img-fluid">
                @endif
                <p class="text-justify">
                    @php
                        $conteudo = $acontece->texto;
                        str_replace('<img', '<img class="img-fluid"', $conteudo);
                        
                    @endphp

                    {!!str_replace('<img', '<img class="img-fluid"', $conteudo)!!}
                
                </p>
            </div>
            
            <div class="col-md-5">
            <div class="row">
            <div class="col-md-12">
                <h5>Galeria:</h5>
            </div>
            @foreach (\App\acontece_imagens::where('acontece_id',$acontece->id)->get() as $ft)
            <div class="col-md-5">
                <a href="{{asset($ft->src)}}" class="img-pop-up">
                    <div class="single-gallery-image" style="background: url({{asset($ft->src)}});"></div>
                </a>
            </div>  
            @endforeach
             </div>
            </div>

             
        </div>
        </div>
     </div>

     <!--
     <div class="col-md-4 text-center">
        @foreach (\App\acontece::where('status','0')->orderBy('id','desc')->take(4)->get() as $post)

           <a href="{{route($post->link)}}">
            <div class="acontece_exibe text-center">
            <div class="acontece_titulo">
                <h5>{{$post->titulo}}</h5>
            </div>
            @if($post->img_capa)
            <div class="area_img" data-background="{{asset($post->img_capa->src)}}"></div>
            @else
            <img src="{{asset('img/acontece/noimage.png')}}" alt="imagem de capa" class="img-fluid">
            @endif
           </a>   
           @endforeach
        </div>
    -->
    

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