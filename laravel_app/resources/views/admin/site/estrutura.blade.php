@extends('layouts.admin')
@section('conteudo')

<!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">

            <div class="col-5">
            <div class="card card-primary  mt-3">
                <div class="card-header">
                  <h3 class="card-title">Fotos para Estrutura</h3>
                </div>
                <!-- /.card-header -->
                <form method="post" action="{{route('admin_site_estrutura')}}"  enctype="multipart/form-data">
                    {{  csrf_field() }}
                  <div class="card-body">

 
                    
                    <div class="form-group">
                      <label for="exampleInputFile">Inserir Fotos</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" name="photos[]" id="photos[]" multiple required>
                          <label class="custom-file-label" for="exampleInputFile">Selecione as Imagem</label>
                        </div>
                      </div>
                    </div>



                  </div>
                  <!-- /.card-body -->
  
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                  </div>
                </form>
              </div></div>
 



         
              


              <div class="col-7">
                <div class="card mt-3">
                  <div class="card-header">
                    <h3 class="card-title">Fotos Estruturas</h3>
                  </div>
                  <!-- /.card-header -->
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
                                    <td><img src="{{asset($ft->thumb)}}" class="profile-user-img img-fluid"alt=""></td>
                                     <th><a href="{{route('admin_site_estrutura_del',$ft->id)}}" class="btn btn-danger">Excluir</a></th>
                                     <th><a href="{{route('admin_site_estrutura_fim',$ft->id)}}" class="btn btn-danger">Colocar no Fim</a></th>
                                </tr>
                            </tr>
                        @endforeach
                      </tbody>
                    </table>
                    {{ $fts->links() }}
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
              </div>



          <!-- ./col -->
        </div>
        <!-- /.row -->

        <div class="row">

 

        </div>

        
      </div> 
    </section>

@endsection

@section('scripts')
 
<script>
    $(function () {
 
    });
</script>


@endsection
