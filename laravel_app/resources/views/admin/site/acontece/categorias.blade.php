@extends('layouts.admin')

@section('conteudo')

<!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">

            <div class="col-12">
            <div class="card card-primary  mt-3">
                <div class="card-header">
                  <h3 class="card-title">Cadastro de categoria</h3>
                </div>
                <!-- /.card-header -->
                <form method="post" action="{{route('admin_site_categorias')}}"  enctype="multipart/form-data">
                    {{  csrf_field() }}
                  <div class="card-body">

 
                    <div class="form-group">   
                        <label>Nome da categoria:</label> 
                        <input type="text" name="categoria" class="form-control" id="categoria" required>
                    </div>    


                  </div>
                  <!-- /.card-body -->
  
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Salvar</button>
                  </div>
                </form>
              </div></div>
 

              <div class="col-12">
                <div class="card card-primary  mt-3">
                    <div class="card-header">
                      <h3 class="card-title">Categorias Cadastradas</h3>
                    </div>
                    <!-- /.card-header -->
                    <table class="table table-hover text-nowrap">
                        <thead>
                          <tr>
                            <th>Categoria</th>
   
                            <th></th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach (\App\categorias::all() as $categoria)
                              <tr>
                                  <tr>
                                      <td>{{$categoria->nome}}</td>
                                       <th><a href="{{route('admin_site_categorias_del',$categoria->id)}}" class="btn btn-danger">Excluir</a></th>
                                  </tr>
                              </tr>
                          @endforeach
                        </tbody>
                      </table>
                    
                  </div>
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
