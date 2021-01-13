
<header>
    <!-- Header Start -->
    <div class="header-area header-transparent bg-green">


        <div class="menu-wrapper ">
            <div class="main-header header-sticky d-flex align-items-center justify-content-between">
                <div class="container">
                    
                <div class="cem">
                    <!-- Logo -->
                    <div class="logo">
                        <a href="{{route('index')}}"><img src="{{asset('img/logo/logo_branco.svg')}}" alt=""></a>   
             
                 
              
               <div class="main-menu f-right d-none d-lg-block mt-2">
               <ul class="pull-right">
                   <li class="mr-3">
                       <a href="http://paraiso.dyndns.info:8010/sg_web/acesso.aspx?escola=3111" target="_blank" class="x2"><i class="fa fa-user"></i> Portal do Aluno </a>
                   </li> 
                   <li>
                       <a href="https://www.facebook.com/colegioparaisosbc" target="_blank"  class="x2">
                        <img src="{{asset('img/icones/facebook.png')}}" style="width: 25px;">
                       </a>
                   </li>
                   <li>
                    <a href="https://www.youtube.com/channel/UCIQezZUjE1_8klOexbdSzeQ" target="_blank" class="x2">
                     <img src="{{asset('img/icones/youtube.png')}}" style="width: 25px;">
                     </a>
                </li>
                   <li>
                       <a href="https://www.instagram.com/colegioparaisosbc/" target="_blank" class="x2">
                        <img src="{{asset('img/icones/instagran.png')}}" style="width: 25px;">
                       </a>
                   </li>
                   <li>
                    <a href="https://unoieducacao.com/plataformas/familia" target="_blank" class="x2">
                     <img src="{{asset('img/icones/uno.png')}}" style="width: 25px;">
                    </a>
                </li>
               </ul>
               </div>
            </div>
            <div class="">
                <div class="mobile_menu d-block d-lg-none"></div>
            </div>
            </div>
            
            </div>
            </div>
            </div>   
            
            


                    <!-- Main-menu -->
                  <div class="menu_options">
                    <div class="main-header header-sticky">
                    <div class="container">
                    <div class="menu-wrapper d-flex align-items-center justify-content-between">    
                    <div class="main-menu f-right d-none d-lg-block">

                        <nav>
                           
                            <ul id="navigation">
                                <li><a href="{{route('index')}}">Institucional</i></a>
                                    <ul class="submenu">
                                        <li><a href="{{route('colegio_paraiso')}}">Colégio Paraiso</a></li>
                                        <li><a href="{{route('estrutura')}}">Nossa Estrutura</a></li>
										<li><a href="{{route('depoimentos')}}">Depoimentos</a></li>
										
                                        <!-- <li><a href="{{asset('pdfs/normas_escolares_2019.pdf')}}" target="_blank">Normas Internas</a></li> -->
                                        <!--<li><a href="{{route('index')}}#parceiros">Parceiros</a></li>-->
                                        <li><a href="{{route('index')}}#localizacao">Localização</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{route('index')}}#educacional">Educacional</i></a>
                                    <ul class="submenu"> 
                                        <li><a href="{{route('bercario')}}">Berçário</a></li>
                                        <li><a href="{{route('infantil')}}">Infantil</a></li>
                                        <li><a href="{{route('fundamental')}}">Fundamental</a></li>
                                        <li><a href="{{route('ensino_medio')}}">Ensio Médio</a></li>
                                        <li><a href="{{route('integral')}}">Integral</a></li>
                                        <li><a href="{{route('index')}}#diferenciais">Diferenciais</a></li>
                                        <li><a href="{{route('sistema_ensino')}}">Sistema de ensino</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Informativos</i></a>
                                    <ul class="submenu">
                                        <li><a href="{{route('psico_fono')}}">Psico / Fono</a></li>
                                        <!-- <li><a href="{{route('vestibular')}}">Vestibular</a></li> -->
                                        <li><a href="{{route('servicos')}}">Serviços</a></li>
 
                                    </ul>
                                </li>
                                <li><a href="{{route('acontece')}}">Acontece</a>
                                <ul class="submenu">
                                    <li><a href="{{route('acontece')}}?categoria=3">Infantil</a></li>
                                    <li><a href="{{route('acontece')}}?categoria=1">Fundamental I</a></li>
                                    <li><a href="{{route('acontece')}}?categoria=2">Fundamental II</a></li>
                                    <li><a href="{{route('acontece')}}?categoria=4">Ensino Médio</a></li>
                                    @foreach (\App\categorias::whereNotIn('id',[1,2,3,4])->get() as $categoria)
                                    <li><a href="{{route('acontece')}}?categoria={{$categoria->id}}">{{$categoria->nome}}</a></li>
                                    @endforeach
                                </ul>
                                </li>
                                <li><a href="{{route('index')}}#contato">Contato</a></li>
                                <li class="d-block d-sm-none"><a href="http://paraiso.dyndns.info:8010/sg_web/acesso.aspx?escola=3111"> Portal do Aluno</a></li>
                                <li class="d-block d-sm-none"><a href="https://unoieducacao.com/plataformas/familia"> UNO Educacional</a></li>
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