<!DOCTYPE html>
<html>

@include('layouts.head')


<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  
  <!-- /.navbar -->
@include('admin.menus.superior')
@include('admin.menus.lateral')
<div class="content-wrapper">
 @yield('conteudo')
</div>
@include('admin.menus.footer')

</div>
<!-- ./wrapper -->

@include('layouts.scripts')

</body>
</html>
