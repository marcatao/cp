@php
   $index = $index * 8;
@endphp
<div class="row gallery-item">
    <div class="col-md-4">
        <a href="{{asset('img/estrutura/'.($index+1).'.jpg')}}" class="img-pop-up">
            <div class="single-gallery-image" style="background: url({{asset('img/estrutura/'.($index+1).'.jpg')}});"></div>
        </a>
    </div>
    <div class="col-md-4">
        <a href="{{asset('img/estrutura/'.($index+2).'.jpg')}}" class="img-pop-up">
            <div class="single-gallery-image" style="background: url({{asset('img/estrutura/'.($index+2).'.jpg')}});"></div>
        </a>
    </div>
    <div class="col-md-4">
        <a href="{{asset('img/estrutura/'.($index+3).'.jpg')}}" class="img-pop-up">
            <div class="single-gallery-image" style="background: url({{asset('img/estrutura/'.($index+3).'.jpg')}});"></div>
        </a>
    </div>
    <div class="col-md-6">
        <a href="{{asset('img/estrutura/'.($index+4).'.jpg')}}" class="img-pop-up">
            <div class="single-gallery-image" style="background: url({{asset('img/estrutura/'.($index+4).'.jpg')}});"></div>
        </a>
    </div>
    <div class="col-md-6">
        <a href="{{asset('img/estrutura/'.($index+5).'.jpg')}}" class="img-pop-up">
            <div class="single-gallery-image" style="background: url({{asset('img/estrutura/'.($index+5).'.jpg')}});"></div>
        </a>
    </div>
    <div class="col-md-4">
        <a href="{{asset('img/estrutura/'.($index+6).'.jpg')}}" class="img-pop-up">
            <div class="single-gallery-image" style="background: url({{asset('img/estrutura/'.($index+6).'.jpg')}});"></div>
        </a>
    </div>
    <div class="col-md-4">
        <a href="{{asset('img/estrutura/'.($index+7).'.jpg')}}" class="img-pop-up">
            <div class="single-gallery-image" style="background: url({{asset('img/estrutura/'.($index+7).'.jpg')}});"></div>
        </a>
    </div>
    <div class="col-md-4">
        <a href="{{asset('img/estrutura/'.($index+8).'.jpg')}}" class="img-pop-up">
            <div class="single-gallery-image" style="background: url({{asset('img/estrutura/'.($index+8).'.jpg')}});"></div>
        </a>
    </div>
</div>

<div class="section_title text-center mb-5 mt-5" id="sel_btn_{{$index}}">
<button class="genric-btn info radius" onclick="more_pictures({{$index + 1}})">Carregar mais Imagens</button>
</div>

<div id="content_{{($index+1)}}"></div>
