@extends('site.layout.main')

@section('conteudo')


    <!-- slider_area_start -->
    <div class="custon_slider">
        <div class="">
            <div class="">
                <div class="">

                    <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                          <div class="carousel-item active" data-interval="5000">
                            <img src="{{asset('/img/banner/19-08_paraiso_e_aqui.jpg')}}" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item" data-interval="2000">
                            <img src="{{asset('img/banner/19-08_unoi.jpg')}}" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="{{asset('img/banner/cultura_maker.jpg')}}" class="d-block w-100" alt="...">
                          </div>

                          <div class="carousel-item">
                            <img src="{{asset('img/banner/ensino_medio.jpg')}}" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="{{asset('img/banner/desafiar.jpg')}}" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="{{asset('img/banner/educacao_infantil.jpg')}}" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="{{asset('img/banner/ensino_fundamental.jpg')}}" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="{{asset('img/banner/projetar.jpg')}}" class="d-block w-100" alt="...">
                          </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                        </a>
                      </div>
                  
                </div>
            </div>
        </div>
    </div>
    <!-- slider_area_end -->
<section class="reson_area section_padding">
    <div class="container">
    <div class="row popular_causes_area">
            
            <div class="col-md-12 mb-5">
                <div class="section_title text-center mb-5">
                    <h3><span>COLÉGIO PARAÍSO</span></h3>
                </div>
                <p>O Colégio Paraíso propõe a trabalhar com crianças e jovens visando a formação de cidadãos críticos e conscientes, capazes de viverem de forma segura e corajosa as profundas alterações que ocorrem na sociedade atual.</p>
                 <p>Também é missão do colégio contribuir para a constituição de uma base sólida de caráter que possibilitará, no futuro, a formação de profissionais dotados de valores éticos, capazes de executar de forma eficiente, mas acima de tudo eficaz, as atribuições que lhe são confiadas pela instituição da qual participam, procurando contribuir para a constituição das equipes de trabalho, tão importantes no momento atual e indispensável, ao que tudo indica, no próximo milênio.</p>
            </div>


            <div class="col-md-4">
                <div class="single_cause">
                    <div class="thumb">
                        <img src="{{asset('img/help/1.png')}}" class="img-fluid" alt="">
                    </div>
                    <div class="causes_content text-justify">
                        <div class="balance d-flex justify-content-center align-items-center">
                            <h3>Missão</h3>
                        </div>
                        <p><b>Por que existimos?</b><br>
                            Contribuir para a emancipação humana instrumentalizando o indivíduo para a vida em sociedade.<br>  &nbsp;&nbsp;</p>
                        
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="single_cause">
                    <div class="thumb">
                        <img src="{{asset('img/help/2.png')}}" class="img-fluid" alt="">
                    </div>
                    <div class="causes_content text-justify">
                        <div class="balance d-flex justify-content-center align-items-center">
                            <h3>Visão</h3>
                        </div>
                        <p><b>O que queremos?</b>
                            Criar condições para que o indivíduo aproprie-se do mundo, do conhecimento e seja capaz de sonhar, criar, propor, realizar e transformar o mundo.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="single_cause">
                    <div class="thumb">
                        <img src="{{asset('img/help/3.png')}}" class="img-fluid" alt="">
                    </div>
                    <div class="causes_content text-justify">
                        <div class="balance d-flex justify-content-center align-items-center">
                            <h3>Valores</h3>
                        </div>
                        <p><b>Como trabalhamos?</b><br>
                            De forma ética, crítica e política, baseada em concepções filosóficas e sociológicas de homem, mundo e sociedade.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


 
    <div class="latest_activites_area">
        <div class=" video_bg_1 video_activite  d-flex align-items-center justify-content-center">
            <a class="popup-video" href="https://www.youtube.com/watch?v=jP_uRb5KOEc">
                <i class="flaticon-ui"></i>
            </a>
        </div>
        <div class="container ">
            <div class="row justify-content-end">
                <div class="col-lg-7">
                    <div class="activites_info mt-5 text-justify">
                        <div class="section_title">
                            <h3> <span>Como tudo começou, </span><br>
                                o início de um sonho...</h3>
                        </div>
                        <p class="para_1">Os professores Mário Rúbis e Odete, apaixonados pela educação e contando com rica experiência no Magistério, decidiram, em 1989, instalar em sua própria casa uma escola de Educação Infantil, o "Paraíso dos Baixinhos", com o propósito de atender às necessidades e solicitações da comunidade local.</p>
                        <p class="para_1">Dona Odete, com vastíssima experiência na área da Educação Infantil, dirigia a escola desde a instalação. De início, com pequeno grupo de crianças, hoje, graças à dedicação de toda a equipe, a escola conta com um grande número de alunos. Esta precursora criou condições para que, em 1996, o professor Mário Rúbis instalasse o antigo 1º grau, hoje Ensino Fundamental. Lutaram muito, incansavelmente, e contaram também com a colaboração de amigos e de suas filhas Rubiamara e Rubiane. Canalizaram todos os recursos de que dispunham para a escola. Construíram um novo prédio e escolheram uma equipe técnica e um corpo docente eficiente.</p>
                        <p class="para_1">Com o curso de Ensino Fundamental totalmente instalado e em pleno funcionamento, atendendo à revindicação de alunos e de pais, lutaram pela autorização do Ensino Médio e conseguiram.</p>
                        <p class="para_1">O Colégio Paraíso é considerado um colégio de ensino forte e de qualidade, voltado para valores universais e alicerçados nos quatro pilares da educação do século XXI: aprender a conhecer, aprender a ser, aprender a fazer, aprender a conviver e viver junto.</p>
                        <p class="para_1">O Colégio Paraíso localiza-se no bairro Baeta Neves em São Bernardo do Campo, com sede própria e mais de 6.000m2 de área construída.</p>
                        <p class="para_1">Assim nasceu o Colégio Paraíso, fruto de um sonho, de muito trabalho, amor à educação e honestidade.</p>
                        <p class="para_1"><b>Diretora Rubiamara Vasconcelos de Souza Lupinacci</b></p>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- latest_activites_area_end  -->





    <div id="nossa_estrutura" class="mt-5 mb-5">
        &nbsp;&nbsp;
    </div>

    <div class="section-top-border">
        <div class="section_title text-center ">
            <h3><span>Nossa Estrutura</span></h3>
        </div>
            @php $index = 0; @endphp
            @include('site.fotos_estrutura.galeria')
    </div>
            


<section class="mb-5">
    <div id="parceiros" class="mt-5">
        &nbsp;&nbsp;
    </div>
    <div class="section_title text-center mb-5">
        <h3><span>Parceiros</span></h3>
    </div>

<div class="container">
<div class="row">
<div class="col-md-6">
    <div class="section-top-border">
        <h3 class="mb-30">Evolucional</h3>
        <div class="row">
            <div class="col-md-3">
                <img src="{{asset('img/parceiros/evolucional_v2.jpg')}}" alt="" class="img-fluid">
            </div>
            <div class="col-md-9">
                <p>Através da Plataforma o aluno tem acesso as questões corrigidas e comentadas, relatórios de desempenho e gráficos comparativos de resultados, além de simulados com o SISU.</p>
            </div>
        </div>
    </div>
</div>


<div class="col-md-6">
    <div class="section-top-border">
        <h3 class="mb-30">Ensino IP</h3>
        <div class="row">
            <div class="col-md-3">
                <img src="{{asset('img/parceiros/ensino_ip.jpg')}}" alt="" class="img-fluid">
            </div>
            <div class="col-md-9">
                <p>Responsável pelas aulas de Robótica para o Ensino Fundamental.</p>
            </div>
        </div>
    </div>
</div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="section-top-border">
            <h3 class="mb-30">UNOi</h3>
            <div class="row">
                <div class="col-md-3">
                    <img src="{{asset('img/parceiros/uno_sistema.jpg')}}" alt="" class="img-fluid">
                </div>
                <div class="col-md-9">
                    <p>Material Didático adotado pelo Colégio Paraíso, desenvolvido de modo a estimular o aluno e envolvê-lo como agente ativo do próprio aprendizado.</p>
                </div>
            </div>
        </div>
    </div>
    
    
    <div class="col-md-6">
        <div class="section-top-border">
            <h3 class="mb-30">Netbit Internet</h3>
            <div class="row">
                <div class="col-md-3">
                    <img src="{{asset('img/parceiros/netbit.jpg')}}" alt="" class="img-fluid">
                </div>
                <div class="col-md-9">
                    <p>Tecnologia Web – Responsável pela hospedagem e manutenção de nosso site.</p>
                </div>
            </div>
        </div>
    </div>
    </div>



    </div>
</section>







<section class="mb-5">
    <div id="localizacao" class="mt-5">
        &nbsp;&nbsp;
    </div>
    <div class="section_title text-center mb-5">
        <h3><span>Localização</span></h3>
    </div>

    <div class="container">
        <div class="row">
        
        <div class="col-md-6">
            <h3 class="mb-30">Educação Infantil</h3>
            <p class="mb-0">Rua Dr. Baeta Neves, 333 - Baeta Neves<br>
            CEP 09751-030 São Bernardo do Campo/SP</p>
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14613.958625738002!2d-46.545752!3d-23.694202!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd3b2796be2d67584!2zQ29sw6lnaW8gUGFyYcOtc28!5e0!3m2!1spt-BR!2sbr!4v1456256364000" width="475" height="475" frameborder="0" style="border:0; margin-top:40px" allowfullscreen=""></iframe>
         </div>

         <div class="col-md-6">
            <h3 class="mb-30">Ensino Fundamental</h3>
            <p class="mb-0">Rua Amparo, 322 - Baeta Neves<br>
            CEP 09751-350 São Bernardo do Campo/SP</p>
            <iframe class="ef_responsivo" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3653.51115895658!2d-46.547545485019604!3d-23.69343358461743!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce423745bf7e8f%3A0xe8fed8ab4f9d6a91!2sR.+Amparo%2C+322+-+Baeta+Neves%2C+S%C3%A3o+Bernardo+do+Campo+-+SP%2C+09751-350!5e0!3m2!1spt-BR!2sbr!4v1456256430687" width="475" height="475" frameborder="0" style="border:0;  margin-top:40px" allowfullscreen=""></iframe>
                
         </div>
         
    </div>
</div>
</section>





@include('site.whatsapp')

@endsection

@section('scripts')
<script>
$( document ).ready(function() {
    console.log( "ready!" );
});

$('.carousel').carousel({
  interval: 5000
})

function more_pictures(index){
    $('#sel_btn_'+(index-1)).hide('');
    $.ajax({url: '{{route('estrutura')}}',data: {"index":index}, success: function(result){
        $("#content_"+index).html(result);
    }});
    console.log(index);
}
</script>
@endsection