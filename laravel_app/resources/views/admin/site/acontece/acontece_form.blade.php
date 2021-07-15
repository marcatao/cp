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
            <div class="card card-default  mt-3">
                <div class="card-header">
                  <h3 class="card-title">Cadastro do Acontece</h3>
                </div>


                <div class="card card-default card-tabs mt-2 col-md-12">
                  <div class="row">
                    <div class="col-md-3">
                      @if ($acontece and $acontece->img_capa)
                         <img src="{{asset($acontece->img_capa->src)}}" class="img-fluid" width="150px">
                      @else
                        <img src="{{asset('img/acontece/noimage.png')}}" class="img-fluid"  width="150px">
                      @endif
                    </div>
                    <div class="col-md-9">

                  
                  <h3>
                    @isset($acontece)@if($acontece->status == 0) 
                        Postagem publicada 
                      @else 
                        <h4>Postagem em rascunho </h4>
                        <a href="{{ route('publicar_acontece',$id) }}" class="btn btn-danger"> Publicar postagem</a>
                      @endif @endisset
                  </h3>
                </div></div>

                  <div class="card-header p-0 pt-1">
                    <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" id="tab-postagem-tab" data-toggle="pill" href="#tab-postagem" role="tab" aria-controls="tab-postagem" aria-selected="true">Postagem</a>
                      </li>
                      @isset($acontece)
                      <li class="nav-item">
                        <a class="nav-link" id="taf-fotos-tab" data-toggle="pill" href="#taf-fotos" role="tab" aria-controls="taf-fotos" aria-selected="false">Fotos</a>
                      </li>
                      @endisset
                     </ul>
                  </div>
                  <div class="card-body">

                    <div class="tab-content" id="custom-tabs-one-tabContent">
                      <div class="tab-pane fade show active" id="tab-postagem" role="tabpanel" aria-labelledby="tab-postagem-tab">
                        
                        
                        
                        <form method="post" action="{{route('admin_site_acontece_form',$id)}}"  enctype="multipart/form-data">
                          {{  csrf_field() }}
                          <div class="form-group">   
                            <label>Categoria</label> 
                            <select name="categoria_id" class="form-control" id="categoria_id" required>
                                @foreach ($categorias as $categoria)
                                    <option value="{{$categoria->id}}">{{$categoria->nome}}</option>
                                @endforeach
                            </select>
                        </div>
                        
                        <div class="form-group">  
                          @php
                              $dt= (string) date("Y-m-d");
                              if($acontece){ $dt =  new \Carbon\Carbon($acontece->created_at);
                                $dt = (string) $dt->format('Y')."-".$dt->format('m')."-".$dt->format('d');
                              }
                          @endphp
                          <label>Data</label> 
                          <input type="date" name="created_at" id="created_at" class="form-control" value="{{ $dt }}" required>
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
                 
                       <button type="submit" class="btn btn-primary btn-block">Salvar postagem</button>
                        </form>
                     </div>

                      <div class="tab-pane fade" id="taf-fotos" role="tabpanel" aria-labelledby="taf-fotos-tab">
                        <!--Planos -->
                        





                        @isset($acontece)
                      <!--  <form method="post" action="{{route('admin_site_acontece_form_image',$id)}}"  enctype="multipart/form-data">
                          {{  csrf_field() }}
                        <div class="form-group">
                          <label for="exampleInputFile">Fotos da postagem</label>
                          <div class="input-group">
                            <div class="custom-file">
                              <input type="file" class="custom-file-input" id="photos[]" name="photos[]" multiple>
                              <label class="custom-file-label" for="exampleInputFile">Selecione a Imagem</label>
                            </div>
                          </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Enviar fotos selecionadas</button>
                        </form>-->
                      


                         <hr>
                         <div class="text-center" >
                          <div id="resumable-error" style="display: none">
                              Algo deu errado...
                          </div>
                          <div id="resumable-drop" style="display: none">
                              <p>
                                <button id="resumable-browse" class="btn btn-primary btn-block" data-url="{{route('admin_site_acontece_form_image',$id)}}" >
                                  Adicionar imagens
                                </button> 
                              </p>
                              <p></p>
                          </div>
                          
                          <br/>
                      </div>

                      @endisset
















                         
                        <div class="card-body table-responsive p-0">
                          <div class="row text-center">
                            @php
                                $dt = null;
                            @endphp
                              @foreach ($fts as $ft)

                              @php
                                   if(!$dt){
                                     $class= "bg-info";
                                   }else{
                                     if($dt <> substr($ft->created_at,0,16)){
                                      $class= "";
                                     }
                                   }
                                   $dt = substr($ft->created_at,0,16);

                              @endphp
                         

                                <div class="col-md-2 mb-3 {{ $class }} mr-1 pb-2 pt-2" >
                                  <div class="col-md-12 text-center">
                                    <img src="{{asset($ft->src)}}" class="img-fluid"alt="" style="max-height:130px;"></td>
                                  </div>
                                  <div class="col-md-12">
                                    <p class="text-center">{{ $ft->tamanho }} &nbsp;

                                    </p>
                                  </div>
                                  <div class="col-md-12">
                                       <a href="{{route('admin_site_acontece_capa_imagem',[$id,$ft->id])}}" class="btn btn-default btn-block">Definir como Capa</a></td>
                                   </div>
                                  <div class="col-md-12">
                                    <a href="{{route('admin_site_acontece_del_imagem',$ft->id)}}?tab=foto" class="btn btn-danger btn-block">Excluir esta foto</a></td>
                                  </div>
                                </div>  
                              @endforeach
                            </div>
                      </div>



                      </div>

                    </div>
                  </div>
                  <hr>


                <!-- /.card-header -->
                <form method="post" action="{{route('admin_site_acontece_form',$id)}}"  enctype="multipart/form-data">
               
                  <div class="card-body">
                <div class="row">
                <div class="col-7">



 
 


                  <!-- /.card-body -->
  
            
                  <div class="col-5">


                </div>
                  <div class="card-footer">
                  
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

    @if($acontece)
    <div class="modal fade" id="modal">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="modal-titulo">Envio de Imagens</h4>
    
          </div>
          <div class="modal-body" id="modal-corpo">
            <ul id="file-upload-list" class="list-unstyled" style="display: none"></ul>
            <a href="{{route('admin_site_acontece_form',$acontece->id)}}?tab=fotos" class="btn btn-warning btn-block"> Fechar </a>
          </div>
          <div class="modal-footer justify-content-between" id="modal-opcoes">
            <!--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>-->
          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
@endif

@endsection

@section('scripts')
<!-- Summernote   -->
<script src="{{ asset('admin/plugins/summernote/summernote-bs4.min.js')}}"></script>

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
            if(_GET('tab') == 'fotos'){
              $('#tab-postagem-tab').removeClass("active");
              $('#tab-postagem').removeClass("active");
              $('#taf-fotos-tab').addClass("active");
              $('#taf-fotos').addClass('active');
              $('#taf-fotos').addClass('fade');
              $('#taf-fotos').addClass('show');
              console.log('Abrir aba fotos');
            }
      }
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/resumable.js/1.1.0/resumable.min.js"></script>

<script>
        var $ = window.$; // use the global jQuery instance

        var $fileUpload = $('#resumable-browse');
        var $fileUploadDrop = $('#resumable-drop');
        var $uploadList = $("#file-upload-list");

        if ($fileUpload.length > 0 && $fileUploadDrop.length > 0) {
            var resumable = new Resumable({
                // Use chunk size that is smaller than your maximum limit due a resumable issue
                // https://github.com/23/resumable.js/issues/51
                chunkSize: 1 * 1024 * 1024, // 1MB
                simultaneousUploads: 3,
                testChunks: false,
                throttleProgressCallbacks: 1,
                // Get the url from data-url tag
                target: $fileUpload.data('url'),
                // Append token to the request - required for web routes
                query:{_token : $('input[name=_token]').val()}
            });

        // Resumable.js isn't supported, fall back on a different method
            if (!resumable.support) {
                $('#resumable-error').show();
            } else {
                // Show a place for dropping/selecting files
                $fileUploadDrop.show();
                resumable.assignDrop($fileUpload[0]);
                resumable.assignBrowse($fileUploadDrop[0]);

                // Handle file add event
                resumable.on('fileAdded', function (file) {
                  $('#modal').modal('show');
                    // Show progress pabr
                    $uploadList.show();
                    // Show pause, hide resume
                    $('.resumable-progress .progress-resume-link').hide();
                    $('.resumable-progress .progress-pause-link').show();
                    // Add the file to the list
                    $uploadList.append('<li class="resumable-file-' + file.uniqueIdentifier + '">Enviando <span class="resumable-file-name"></span> <span class="resumable-file-progress"></span>');
                    $('.resumable-file-' + file.uniqueIdentifier + ' .resumable-file-name').html(file.fileName);
                    // Actually start the upload
                    resumable.upload();
                });
                resumable.on('fileSuccess', function (file, message) {
                    // Reflect that the file upload has completed
                    $('.resumable-file-' + file.uniqueIdentifier + ' .resumable-file-progress').html('(Imagem enviada com sucesso!)');
                });
                resumable.on('fileError', function (file, message) {
                    // Reflect that the file upload has resulted in error
                    $('.resumable-file-' + file.uniqueIdentifier + ' .resumable-file-progress').html('(Arquivo nao pode ser enviado: ' + message + ')');
                });
                resumable.on('fileProgress', function (file) {
                    // Handle progress for both the file and the overall upload
                    $('.resumable-file-' + file.uniqueIdentifier + ' .resumable-file-progress').html(Math.floor(file.progress() * 100) + '%');
                    $('.progress-bar').css({width: Math.floor(resumable.progress() * 100) + '%'});
                });
            }

        }


</script>



@endsection
