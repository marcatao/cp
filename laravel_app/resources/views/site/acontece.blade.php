@extends('site.layout.main')

@section('conteudo')

 
  
<main class="mt-5">
<div class="pre white-bg"></div>
<section id="colegio" class="">
<div class="container">   
 <div class="row mt-5">
     <div class="col md-12 text-center">
         <h1>Acontece</h1>
        
         <div class="row">
         @foreach ($aconteces as $post)
         @php
            $dt =  new \Carbon\Carbon($post->created_at);
         @endphp

         <div class="col-md-4 mt-3 mb-5">
            <div class="blog-entry">
              @if ($post->img_capa)
              <a href="{{route($post->link)}}" class="block-20 d-flex align-items-end" style="background-image: url({{asset($post->img_capa->src)}});">
              @else
              <a href="{{route($post->link)}}" class="block-20 d-flex align-items-end" style="background-image: url({{asset('img/acontece/noimage.png')}});">
              @endif
								<div class="meta-date text-center p-2">
                  <span class="day">{{$dt->format('d')}}</span>
                  <span class="mos">{{$dt->format('m')}}</span>
                  <span class="yr">{{$dt->format('y')}}</span>
                </div>
              </a>
              <div class="text bg-white p-4 ">
                <h5 class="heading titulo-acontece">
                  <a href="{{route($post->link)}}">
                    {{$post->titulo}}

                  </a>
                </h5>
                   <div class="d-flex align-items-center mt-4">
	               <a href="{{route($post->link)}}" class="btn btn3 btn-block">{{$post->categoria->nome}}</a></p>
 
                </div>
              </div>
            </div>
          </div>


         
         @endforeach
        </div>

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