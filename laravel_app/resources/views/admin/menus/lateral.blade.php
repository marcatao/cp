
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('admin_index')}}" class="brand-link text-center">
      <span class="brand-text font-weight-light">{{env('APP_NAME')}}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">

        
        <div class="info">
          <a href="#" class="d-block">{{ ucfirst(trans(Auth::user()->ShortName)) }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                  
                  
              @if (Auth::user()->id <= 2)
                  

               <li class="nav-header">Site</li>
                <li class="nav-item">
                 <a href="{{ route('admin_site_carrossel') }}" class="nav-link">
                   <i class="nav-icon far fa-images"></i>
                   <p>Carrossel</p>
                 </a>
               </li>    
               <li class="nav-item">
                <a href="{{ route('admin_site_estrutura') }}" class="nav-link">
                  <i class="nav-icon far fa-images"></i>
                  <p>Fotos Estruturas</p>
                </a>
              </li>    
              @endif
              <li class="nav-header">Acontece</li>
              @if (Auth::user()->id <= 2)
                  
              <li class="nav-item">
                <a href="{{ route('admin_site_categorias') }}" class="nav-link">
                  <i class="nav-icon far fa-images"></i>
                  <p>Categorias</p>
                </a>
              </li>   
              @endif
              <li class="nav-item">
                <a href="{{ route('admin_site_acontece') }}" class="nav-link">
                  <i class="nav-icon far fa-images"></i>
                  <p>Acontece</p>
                </a>
              </li>   
          <li class="nav-header">SISTEMA</li>
          <li class="nav-item">
            <a href="{{ route('logout') }}" class="nav-link"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
              <i class="nav-icon fas fa-door-open"></i>
              <p>Sair</p>
            </a>
          </li>

          <li class="nav-header"> </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
