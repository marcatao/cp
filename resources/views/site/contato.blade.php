@extends('site.layout.main')

@section('conteudo')

<div class="bradcam_area overlay d-flex align-items-center justify-content-center"
    style="background-image: url({{asset('img/contato/banner.png')}});">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="bradcam_text text-center">
                    <h3>Contato</h3>
                    <p>Para maiores informações sobre nossa escola, agendar uma visita, conhecer nossa proposta pedagógica, obter informações sobre disponibilidade de vagas, favor entrar em contato através de nossos canais de relacionamento ou preencher o cadastro abaixo que retornaremos.</p>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="container">
<div class="row">
    <div class="col-12">
        <h2 class="contact-title mt-5">É um prazer atendê-lo!</h2>
    </div>
    <div class="col-md-8">
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
                <button type="submit" class="button button-contactForm boxed-btn">Enviar</button>
            </div>
        </form>
    </div>
    <div class="col-md-4">

        <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
            <div class="media-body">
                <h3>(11) 4332-8333</h3>
                <p>Segunda a quinta,<br>das 9h as 18h</p>
            </div>
        </div>
        <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-email"></i></span>
            <div class="media-body">
                <h3>secretaria@colegioparaisosbc.com.br</h3>
              </div>
        </div>
        <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-email"></i></span>
            <div class="media-body">
                <h3>Trabalhe conosco!</h3>
                <p>Envie seu currículo para:<br>curriculo@colegioparaisosbc.com.br</p>
              </div>
        </div>
    </div>
</div>
</div>

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