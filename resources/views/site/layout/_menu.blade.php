    <!-- header-start -->
    <header class="shadow-sm mb-3">
        <div class="header-area ">
            <div class="header-top_area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-2">
                            <div class="logo">
                                <a href="{{route('index')}}">
                                    <img src="img/logo.png" class="img-fluid" alt="logo">
                                </a>
                            </div>
                        </div>

                        <div class="col-md-10">
                            <div class="short_contact_list">
                                <ul><!--
                                    <li><a href="#"> <i class="fa fa-phone "></i>11 4332-8333</a></li>
                                    <li><a href="#"> <i class="fa fa-whatsapp"></i>11 98532-1717 <small>- Infantil</small></a></li>
                                    <li><a href="#"> <i class="fa fa-whatsapp"></i>11 98905-1842  <small>- Fundamental e Médio</small> </a></li>
                                    <li><a href="#"> <i class="fa fa-clock-o"></i>Seg a Qui, das 9h as 18h</a></li>
                                    -->
                                    <li class="pull-right">
                                        <a href="https://www.facebook.com/colegio.paraiso.1"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li class="pull-right">
                                        <a href="https://www.instagram.com/colegioparaisosbc/"><i class="fa fa-instagram"></i></a>
                                    </li>
                                    <li class="pull-right">
                                        <a href="https://www.youtube.com/channel/UCIQezZUjE1_8klOexbdSzeQ"><i class="fa fa-youtube fa-2x"></i></a>
                                    </li>
                                   <li class="pull-right">
                                       <a href="http://paraiso.dyndns.info:8010/sg_web/acesso.aspx?escola=3111"><i class="fa fa-user"></i> Portal do Aluno </a>
                                   </li>
                                </ul>
                            </div>
                        </div>
                     </div>
                </div>
            </div>
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid">
                    <div class="row align-items-center">
   
                        <div class="col-xl-9 col-lg-10">
                            <div class="main-menu">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="{{route('index')}}">Institucional <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="{{route('index')}}#colegio_paraiso">Colégio Paraiso</a></li>
                                                <li><a href="{{route('index')}}#nossa_estrutura">Nossa Estrutura</a></li>
                                                <li><a href="{{asset('pdfs/normas_escolares_2019.pdf')}}" target="_blank">Normas Internas</a></li>
                                                <li><a href="{{route('index')}}#parceiros">Parceiros</a></li>
                                                <li><a href="{{route('index')}}#localizacao">Localização</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{route('educacional')}}">Educacional <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="{{route('educacional')}}#bercario">Berçário</a></li>
                                                <li><a href="{{route('educacional')}}#infantil">Infantil</a></li>
                                                <li><a href="{{route('educacional')}}#fundamental">Fundamental</a></li>
                                                <li><a href="{{route('educacional')}}#ensino_medio">Ensio Médio</a></li>
                                                <li><a href="{{route('educacional')}}#integral">Integral</a></li>
                                                <li><a href="{{route('diferenciais')}}">Diferenciais</a></li>
                                                <li><a href="{{route('educacional')}}#sistema_ensino">Sistema de ensino</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Informativos <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="#">Nutrição</a></li>
                                                <li><a href="#">Psico / Fono</a></li>
                                                <li><a href="#">Vestibular</a></li>
                                                <li><a href="#">Serviços</a></li>
                                                <li><a href="#">Desafio</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Acontece</a></li>
                                        <li><a href="{{route('contato')}}">Contato</a></li>
   
                                    
                   
                                </ul>

                                
                                </nav>

                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->