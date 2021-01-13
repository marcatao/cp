<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/fixedheader/3.1.7/css/fixedHeader.bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.5/css/responsive.bootstrap.min.css">
<link rel="stylesheet" href="{{asset('css/styles.css')}}">

<header>
    <div class="white_menu" id="navbarHeader">
      <div class="container">
        <div class="row">
          <div class="col-sm-3 col-md-4 py-4">
            <img src="{{asset('img/logo.png')}}" class="img-fluid">            
          </div>
          <div class="col-md-5 py-4">
            <img src="https://www.colegioparaisosbc.com.br/Imagens/19-07_banner_fone.jpg" class="img-fluid">   
          </div>
          <div class="col-sm-3 py-4">
            <h4 class="">Redes Sociais</h4>
            <ul class="list-unstyled">
              <li><a href="https://www.youtube.com/channel/UCIQezZUjE1_8klOexbdSzeQ" class="">Youtube</a></li>
              <li><a href="https://www.facebook.com/colegio.paraiso.1" class="">Facebook</a></li>
              <li><a href="https://www.instagram.com/colegioparaisosbc/" class="">Instragam</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="navbar navbar-dark shadow-sm navs">
      <div class="container d-flex justify-content-between">
        <a href="{{route('index')}}" class="navbar-brand d-flex align-items-center">
          <strong>Concurso 2021</strong>
        </a>
 
 
      @if(Route::current()->getName() == 'resultados')
      <a href="{{route('resultados',1)}}" class="navbar-brand d-flex align-items-center">
        <strong>Result.Fase-1</strong>
      </a>   
      <a href="{{route('resultados',2)}}" class="navbar-brand d-flex align-items-center">
        <strong>Result.Fase-2</strong>
      </a>   
      
        <a href="{{route('excell',1)}}" class="navbar-brand d-flex align-items-center">
          <strong>Download Fase 1</strong>
        </a>
        <a href="{{route('excell',2)}}" class="navbar-brand d-flex align-items-center">
          <strong>Download Fase 2</strong>
        </a>
      @endif  
      </div>
    </div>
  </header>


<body>
    @yield('conteudo')
</body>
<script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/fixedheader/3.1.7/js/dataTables.fixedHeader.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.5/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.5/js/responsive.bootstrap.min.js"></script>

@yield('scripts')
