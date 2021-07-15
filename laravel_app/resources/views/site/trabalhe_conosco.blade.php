@extends('site.layout.main')

@section('conteudo')

 
  
<main class="mt-5">
<div class="pre white-bg"></div>
<section >
    <div class="container mt-5 mb-5 bg-green-light">
        <div class="row bg-green-light">
            <div class="col-md-12 bg-green-light text-center mt-5 mb-3">
                @if($contactado)
                    <h1 class="mb-4 text-center">Obrigado <br> por entrar em contato</h1>
                   
                  @else

                <h1>Trabalhe Conosco</h1>
            </div>
        </div>
       
            <div class="row bg-green-light h-100 justify-content-center align-items-center">
            <div class="col-md-7">




                <form class="form-contact contact_form" id="form_contato" name="form_contato" action="{{route('trabalhe_conosco')}}" method="post"  enctype="multipart/form-data">
                    {{  csrf_field() }}
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="nome">Nome do candidato</label>
                                <input class="form-control valid" name="nome" id="nome" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Seu nome...'" placeholder="Seu nome..." required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="telefone">Telefone para contato</label>
                                <input class="form-control valid" name="telefone" id="telefone" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Seu telefone...'" placeholder="Seu telefone" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="file">Anexe seu CV, <i>somente formato PDF</i></label>
                                <input class="form-control" name="file" id="file" type="file" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Seu Curriculo em PDF'" placeholder="Seu Curriculo em PDF" required>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="email">Email para contato</label>
                                <input class="form-control" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Seu Email'" placeholder="Seu Email" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="linkedin">Seu perfil no linkedin <i>opcional</i></label>
                                <input class="form-control" name="linkedin" id="linkedin" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Seu Linkedin'" placeholder="Seu Linkedin" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="mensagem">Nos informe qual vaga pretende:</label>
                                <textarea class="form-control w-100" name="mensagem" id="mensagem" cols="30" rows="4" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Sua mensagem'" placeholder="Sua Mensagem"></textarea>
                            </div>

                            <div id="captcha"></div>
							<div class="g-recaptcha" data-sitekey="6LfaZpcaAAAAAPxfQKfhLyTdJP6Mb3A6ojAql2rC"></div>
				 
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <button type="button" class="btn btn3 btn-form mt-3 small-btn" onclick="salva_contato()">Enviar</button>
                    </div>
                </form>

                @endif
            </div>

        </div>
    </div>
</section>

 

@endsection
@section('scripts')
<script>
   $(function () {});

   function salva_contato(){



	var v = grecaptcha.getResponse();
	var email = $('#email').val();
	var mensagem  = $('#mensagem').val();
	var form = document.getElementById("form_contato");



    var ext = $('#file').val().split('.').pop().toLowerCase();

    if(email.length <= 0){
		document.getElementById('captcha').innerHTML="Preencha o campo Email";
        return false;
    }else if($.inArray(ext, ['pdf']) == -1){
        document.getElementById('captcha').innerHTML="O arquivo enviado deve ser no formato PDF";
              return false;    
	}else if(mensagem.length <= 0){
		document.getElementById('captcha').innerHTML="Preencha o campo mensagem";
        return false;
	} else if(v.length == 0){
        document.getElementById('captcha').innerHTML="Realize a verificação";
       return false;
    }
   
    form.submit();
}
</script>
@endsection    