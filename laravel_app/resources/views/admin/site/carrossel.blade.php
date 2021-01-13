@extends('layouts.admin')
@section('conteudo')
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="{{asset('admin/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css')}}">


    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">

            <div class="col-5">
            <div class="card card-primary  mt-3">
                <div class="card-header">
                  <h3 class="card-title">Novo Banner</h3>
                </div>
                <!-- /.card-header -->
                <form method="post" action="{{route('admin_site_carrossel')}}"  enctype="multipart/form-data">
                    {{  csrf_field() }}
                  <div class="card-body">

                    <div class="form-group">
                        <label>Cor do fundo:</label>
      
                        <div class="input-group my-colorpicker2 colorpicker-element" data-colorpicker-id="2">
                          <input type="text" id="input_color" name="input_color" class="form-control" data-original-title="" title="" required>
      
                          <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-square" style="color: rgb(237, 17, 17);"></i></span>
                          </div>
                        </div>
                        <!-- /.input group -->
                      </div>
                    
                    <div class="form-group">
                      <label for="exampleInputFile">Imagem do Banner</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" id="input_src" name="input_src" required>
                          <label class="custom-file-label" for="exampleInputFile">Selecione a Imagem</label>
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                        <label>Expirar:</label>
                          <div class="input-group date" id="reservationdate" data-target-input="nearest">
                              <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate" id="input_dt_vencimento" name="input_dt_vencimento">
                              <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                  <div class="input-group-text"><i class="fa fa-calendar"></i></div>
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
                    <h3 class="card-title">Banners Cadastrados</h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                      <thead>
                        <tr>
                          <th>Imagem</th>
                          <th>Cor de Fundo</th>
                          <th>Expiração</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($carrossels as $cr)
                            <tr>
                                <td><img src="{{asset($cr->src)}}" class="profile-user-img img-fluid"alt=""></td>
                                <td style="background-color: {{$cr->color}};">{{$cr->color}}</td>
                                <td>{{$cr->dt_vencimento}}</td>
                                <th><a href="{{route('admin_site_carrossel_del',$cr->id)}}" class="btn btn-danger">Excluir</a></th>
                            </tr>
                        @endforeach
                      </tbody>
                    </table>
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
<!-- bootstrap color picker -->
<script src="{{asset('admin/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js')}}"></script>
<script>
    $(function () {
        //color picker with addon
        $('.my-colorpicker2').colorpicker();
        console.log('ready');
    });
</script>


@endsection
