@extends('layouts.admin')

@section('estilo')
  <!-- summernote -->
  <link rel="stylesheet" href="{{asset('admin/plugins/summernote/summernote-bs4.css')}}">
@endsection


@section('conteudo')

<!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-12">
                <a href="{{route('admin_site_acontece_form',0)}}" class="btn btn-primary btn-block mt-3">Novo Acontece</a>
            </div>
            <div class="col-12">
            <div class="card card-primary  mt-3">
                <div class="card-header">
                  <h3 class="card-title">Acontece cadastrados</h3>
                </div>
                <!-- /.card-header -->
                <table class="table table-hover text-nowrap">
                    <thead>
                      <tr>
                        <th></th>
                        <th>Titulo</th>
                        <th>Categoria</th>
                        <th>Status</th>
                        <th></th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($listas as $acontece)
                          <tr>
                              <tr>
                                <td>
                                @if ($acontece->img_capa)
                                   <img src="{{asset($acontece->img_capa->src)}}" class="img-fluid" width="150px">
                                @else
                                <img src="{{asset('img/acontece/noimage.png')}}" class="img-fluid"  width="150px">
                                @endif
                               </td>
                                  <td>{{$acontece->titulo}}</td>
                                  <td>{{$acontece->categoria->nome}}</td>
                                  <td>
                                    @if($acontece->status == 0)
                                    Publicado
                                    @else
                                    <b class="text-danger">Rascunho</b>
                                    @endif
                                    
                                  <th>{{$acontece->fotos->count()}} fotos</th>
                                  <th><a href="{{route('admin_site_acontece_form',$acontece->id)}}" class="btn btn-primary">Editar</a></th>
                                  <th><a href="{{route('acontece_form_del',$acontece->id)}}" class="btn btn-danger">Excluir</a></th>
                              </tr>
                          </tr>
                      @endforeach
                    </tbody>
                  </table>
              </div></div>
 



         
              


              
            



          <!-- ./col -->
        </div>
        <!-- /.row -->

        <div class="row">

 

        </div>

        
      </div> 
    </section>

@endsection

@section('scripts')
<!-- Summernote   -->
<script src="{{ asset('admin/plugins/summernote/summernote-bs4.min.js')}}"></script>

<script>
    $(function () {
        $('#texto').summernote();
    });
</script>


@endsection
