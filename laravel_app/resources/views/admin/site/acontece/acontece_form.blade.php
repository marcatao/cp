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
            <div class="card card-primary  mt-3">
                <div class="card-header">
                  <h3 class="card-title">Cadastro do Acontece</h3>
                </div>
                <!-- /.card-header -->
                <form method="post" action="{{route('admin_site_acontece_form',$id)}}"  enctype="multipart/form-data">
                    {{  csrf_field() }}
                  <div class="card-body">
                <div class="row">
                <div class="col-7">
                    <div class="form-group">   
                      <label>Categoria</label> 
                      <select name="categoria_id" class="form-control" id="categoria_id" required>
                          
                        
                          @foreach ($categorias as $categoria)
                              <option value="{{$categoria->id}}">{{$categoria->nome}}</option>
                          @endforeach
                      </select>
                  </div>  
 
                    <div class="form-group">   
                        <label>Titulo</label> 
                        <input type="text" name="titulo" class="form-control" id="titulo" value="@isset($acontece){{$acontece->titulo}}@endisset" required>
                    </div>    

                    <div class="form-group">
                        <label>Conteudo da pagina:</label>
                        <textarea id="texto" 
                                  name="texto" 
                                  class="form-control" 
                                  style="height: 400px" required>
                                  @isset($acontece){{$acontece->texto}}@endisset
                        </textarea>
                      </div>
                  </div>
                  <!-- /.card-body -->
  
            
                  <div class="col-5">
                    <div class="form-group">
                      <label for="exampleInputFile">Fotos da postagem</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" id="photos[]" name="photos[]" multiple>
                          <label class="custom-file-label" for="exampleInputFile">Selecione a Imagem</label>
                        </div>
                      </div>
                    </div>
                    <div class="card-body table-responsive p-0">
                      <table class="table table-hover text-nowrap">
                        <thead>
                          <tr>
                            <th>Imagem</th>
   
                            <th></th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($fts as $ft)
                              <tr>
                                  <tr>
                                      <td><img src="{{asset($ft->src)}}" class="profile-user-img img-fluid"alt=""></td>
                                      <th><a href="{{route('admin_site_acontece_capa_imagem',[$id,$ft->id])}}" class="btn btn-primary">Capa</a></th>
                                      <th><a href="{{route('admin_site_acontece_del_imagem',$ft->id)}}" class="btn btn-danger">Excluir</a></th>
                                  </tr>
                              </tr>
                          @endforeach
                        </tbody>
                      </table>
                      {{ $fts->links() }}



                  </div>
                </div>
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                  </div>


                  </div>  
                </form>
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
      @isset($message)
        window.Toast.fire({
          icon: '{{$message['type']}}',
          title: ' {{$message['message']}}.'
        })
      @endisset

      $('#texto').summernote();
      @isset($acontece)
        console.log('Preenchendo o input select: '+'{{$acontece->categoria_id}}');
        $('#categoria_id').val('{{$acontece->categoria_id}}');
      @endif

    });
</script>


@endsection
