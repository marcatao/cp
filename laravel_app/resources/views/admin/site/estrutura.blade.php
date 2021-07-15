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
                  <h3 class="card-title">Incluir sessão</h3>
                </div>
                <!-- /.card-header -->
                  <div class="card-body">
                    <form method="post" action="{{route('admin_site_estrutura_tipo')}}"  enctype="multipart/form-data">
                      {{  csrf_field() }}
                        <input type="hidden" id="id" name="id">
                        <input type="text" id="titulo" name="titulo" placeholder="Titulo" class="form-control" required>
                        <input type="text" id="descricao" name="descricao" placeholder="Descricao" class="form-control" required>
                        <input type="submit" class="btn btn-primary btn-block" value="Salvar">
                    </form>
                  </div>
            </div>
          </div>
        </div>





        <div class="row">
          <div class="col-md-12">
            <h3>Sessões cadastradas:</h3>
          </div>
          <div class="col-md-12">
            <div class="card card-primary card-outline card-tabs">

              <div class="card-header p-0 pt-1 border-bottom-0">
                <ul class="nav nav-tabs" id="custom-tabs-three-tab" role="tablist">
                  @php $class='active'; @endphp
                  @foreach (\App\estrutura_tipo::all() as $key => $es)
                  <li class="nav-item">
                     <a class="nav-link {{ $class }}" 
                     id="aba-tab-{{ $es->id }}" 
                     data-toggle="pill" 
                     href="#tab-{{ $es->id }}" 
                     role="tab" 
                     aria-controls="custom-tabs-three-home" 
                     aria-selected="true">{{ $es->titulo }}</a>
                  </li>    
                  @php  $class=""; @endphp 
                  @endforeach
                  </ul>
              </div>

              <div class="card-body">
                <div class="tab-content" id="custom-tabs-three-tabContent">
                  @php $class='active show'; @endphp
                  @foreach (\App\estrutura_tipo::all() as $key => $es)
                  <div class="tab-pane fade {{ $class }}" 
                       id="tab-{{ $es->id }}" 
                       role="tabpanel" 
                       aria-labelledby="aba-tab-{{ $es->id }}"
                       >
                      <h3>Titulo: {{ $es->titulo }}</h3>
                      <h5> Descricao: {{ $es->descricao }}</h5>

                    
                     <form method="post" action="{{route('admin_site_estrutura')}}"  enctype="multipart/form-data">
                      {{  csrf_field() }}
                      <input type="hidden" name="estrutura_tipo_id" id="estrutura_tipo_id" value="{{  $es->id }}">
                      <div class="form-group">
                        <label for="exampleInputFile">Inserir Fotos</label>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" name="photos[]" id="photos[]" multiple required>
                            <label class="custom-file-label" for="exampleInputFile">Selecione as Imagem</label>
                          </div>
                        </div>
                      </div>
                      <button type="submit" class="btn btn-primary">Enviar</button>
                     </form>
                     <div class="row mt-5">
                       <div class="col-md-12">
                         <h3>Fotos da sessão {{ $es->titulo }}: </h3>
                       </div>

                         @foreach (\App\estrutura::where('estrutura_tipo_id', $es->id)->get() as $ft)
                            <div class="col-md-2 mb-3">
                              <img src="{{ asset($ft->thumb) }}" alt="" class="img-fluid" style="height: 200px">
                               <a href="{{ route('admin_site_estrutura_del',$ft->id) }}" class="mt-2 btn btn-danger btn-block"> Excluir </a>
                            </div>
                             
                         @endforeach
                        
                     </div>
                     <div class="row">
                       <div class="col-md-12">
                          <a href="{{ route('admin_site_estrutura_tipo_del',$es->id) }}" class="btn btn-danger btn-block mt-5"> Excluir sessão</a>
                       </div>
                       

                     </div>
                  </div>
                  @php $class=''; @endphp
                  @endforeach


                </div>
              </div>
              <!-- /.card -->
            </div>
          </div>
       
        </div>













        </div>
        
        




 

        
      </div> 
    </section>

@endsection

@section('scripts')
 
<script>

function _GET(name){
  var url   = window.location.search.replace("?", "");
  var itens = url.split("&");
  for(n in itens)  {
    if( itens[n].match(name) )    {
      return decodeURIComponent(itens[n].replace(name+"=", ""));
    }
  }
  return null;
}


    $(function () {
      if (_GET('tab')){
              const id = _GET('tab');
              @foreach(\App\estrutura_tipo::all() as $es)
              $('#aba-tab-{{ $es->id }}').removeClass('active');
              $('#tab-{{ $es->id }}').removeClass('active');
              $('#tab-{{ $es->id }}').removeClass('fade');
              $('#tab-{{ $es->id }}').removeClass('show');
              @endforeach
              $('#aba-tab-'+ id).addClass('active');
              $('#tab-'+id).addClass('active');
              $('#tab-'+id).addClass('fade');
              $('#tab-'+id).addClass('show');

            
      }
    });
</script>


@endsection
