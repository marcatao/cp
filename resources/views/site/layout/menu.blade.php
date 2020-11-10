
<header>
    <!-- Header Start -->
    <div class="header-area header-transparent bg-green">


        <div class="menu-wrapper ">
            <div class="main-header header-sticky d-flex align-items-center justify-content-between">
                
                <div class="cem">
                    <!-- Logo -->
                    <div class="logo">
                        <a href="index.html"><img src="{{asset('img/logo/logo.png')}}" alt=""></a>   
                    </div>
                  

                    <div class="">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                 </div>
              
               <div class="main-menu f-right d-none d-lg-block">
               <ul>
                   <li>
                       <a href="http://paraiso.dyndns.info:8010/sg_web/acesso.aspx?escola=3111"><i class="fa fa-user"></i> Portal do Aluno </a>
                   </li> 
                   <li>
                       <a href="https://www.facebook.com/colegio.paraiso.1"><i class="fab fa-facebook-f"></i></a>
                   </li>
                   <li>
                       <a href="https://www.instagram.com/colegioparaisosbc/"><i class="fab fa-instagram"></i></a>
                   </li>
                   <li>
                       <a href="https://www.youtube.com/channel/UCIQezZUjE1_8klOexbdSzeQ"><i class="fab fa-youtube"></i></a>
                   </li>
               </ul>
               </div>
            </div>
            </div>   
            
            


                    <!-- Main-menu -->
                  <div class="menu_options">
                    <div class="main-header header-sticky">
                    <div class="">
                    <div class="menu-wrapper d-flex align-items-center justify-content-between">    
                    <div class="main-menu f-right d-none d-lg-block">
                        <nav>
                            <ul id="navigation">
                                <li><a href="{{route('index')}}">Institucional</i></a>
                                    <ul class="submenu">
                                        <li><a href="{{route('index')}}#colegio_paraiso">Colégio Paraiso</a></li>
                                        <li><a href="{{route('index')}}#nossa_estrutura">Nossa Estrutura</a></li>
                                        <li><a href="{{asset('pdfs/normas_escolares_2019.pdf')}}" target="_blank">Normas Internas</a></li>
                                        <li><a href="{{route('index')}}#parceiros">Parceiros</a></li>
                                        <li><a href="{{route('index')}}#localizacao">Localização</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{route('educacional')}}">Educacional</i></a>
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
                                <li><a href="#">Informativos</i></a>
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
                    </div> 
                 </div>   
                    <!-- Mobile Menu -->
   
            </div>

            
        </div>

    <!-- Header End -->
</header>