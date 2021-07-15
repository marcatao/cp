@extends('site.layout.main')

@section('conteudo')

 
  
<main class="mt-5 white-bg">
<div class="pre white-bg"></div>
<section id="colegio" class="white-bg">
    
 <div class="row mt-5">
     <div class="col-md-12 text-center mt-5">
         <h1>Paciência</h1>
         <img src="{{ asset('img/informativos/paciencia/cp_psico_1.jpg') }}" alt="" class="img-fluid">
         <img src="{{ asset('img/informativos/paciencia/cp_psico_2.jpg') }}" alt="" class="img-fluid">
         <img src="{{ asset('img/informativos/paciencia/cp_psico_3.jpg') }}" alt="" class="img-fluid">
         <img src="{{ asset('img/informativos/paciencia/cp_psico_4.jpg') }}" alt="" class="img-fluid">
         <img src="{{ asset('img/informativos/paciencia/cp_psico_5.jpg') }}" alt="" class="img-fluid">
         <img src="{{ asset('img/informativos/paciencia/cp_psico_6.jpg') }}" alt="" class="img-fluid">

     </div>
 </div>

 <div class="container white-bg">
        <div class="mt-5 pb-5 white-bg">
     
  
                
                   
 
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