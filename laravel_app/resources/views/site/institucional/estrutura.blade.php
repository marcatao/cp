@extends('site.layout.main')

@section('conteudo')

 
  
<main class="mt-5 white-bg">
<div class="pre white-bg"></div>
<section id="colegio" class="white-bg">
	<div class="container">   
	
    <div class="row mt-5">
     <div class="col-md-12 text-justify">
         <h2>Nossa Estrutura</h2>
         <p>O Colégio Paraíso é considerado um colégio de ensino forte e de qualidade, voltado para valores universais e alicerçados nos quatro pilares da educação do século XXI: aprender a conhecer, aprender a ser, aprender a fazer, aprender a conviver e viver junto.</p>
         <p>O Colégio Paraíso localiza-se no bairro Baeta Neves em São Bernardo do Campo, com sede própria e mais de 6.000m2 de área construída.Assim nasceu o Colégio Paraíso, fruto de um sonho, de muito trabalho, amor à educação e honestidade.</p>
		<h3>{{ $es->titulo }}</h3>
		<p>{{ $es->descricao }}</p>
     </div>
 </div>




 <div>
			<div class="row gallery-item">
				@foreach ($fts as $ft)
				<div class="col-md-3">
						<a href="{{asset($ft->src)}}" class="img-pop-up">
							<div class="single-gallery-image" style="background: url({{asset($ft->thumb)}});"></div>
						</a>
					</div>
				@endforeach		
			</div>

				<div class="row">
					<div class="col-md-12 text-center mt-5 mb-5">
						<center>{{$fts->appends(request()->input())->links()}}</center>
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