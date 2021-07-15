@extends('tamplate.main')
 
@section('conteudo')



<section class=" text-center mt-5">
  <div class="container">
  
  
  
    <h1>Concurso de Bolsas 2021</h1>
    <p class="lead text-muted">Sua chance de estar entre os melhores!</p>

  </div>
</section>




<div class="container ">
    <div class="row justify-content-md-center">
        <div class="col col-lg-8">

          @if ($errors->any())
             <div class="alert alert-danger">
                 <ul>
                    @foreach ($errors->all() as $error)
                       <li>{{ $error }}</li>
                    @endforeach
                </ul>
             </div>
          @endif


            <form method="post" action="{{route('index_store')}}"  enctype="multipart/form-data">
                {{  csrf_field() }}
                    <div class="form-group mt-5">
                      <label for="email">Endereço de e-mail <i class="text-danger">*</i></label>
                      <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" value="{{ old('email') }}" required>
                    </div>

                    <div class="form-group">
                        <label for="nome_candidato">Nome completo do candidato<i class="text-danger">*</i></label>
                        <input type="text" class="form-control" id="nome_candidato" name="nome_candidato" placeholder="Nome do candidato..." required>
                    </div>
                    <div class="form-group">
                        <label for="data_nascimento">Data de nascimento<i class="text-danger">*</i></label>
                        <input type="date" class="form-control" id="data_nascimento" name="data_nascimento" placeholder="dd/mm/aaaa" required>
                    </div>
                    <div class="form-group">
                      <label for="rg">RG<i class="text-danger">*</i></label>
                      <input type="text" class="form-control" id="rg" name="rg" placeholder="RG do candidato..." required>
                    </div>
                    <div class="form-group">
                      <label for="telefone_residencial">Telefone residencial</label>
                      <input type="text" class="form-control" id="telefone_residencial" name="telefone_residencial" placeholder="Telefone...">
                    </div>                    
                    <div class="form-group">
                      <label for="celular">Celular</label>
                      <input type="text" class="form-control" id="celular" name="celular" placeholder="Celular...">
                    </div>                     
                    <div class="form-group">
                      <label for="nome_mae">Nome da mãe<i class="text-danger">*</i></label>
                      <input type="text" class="form-control" id="nome_mae" name="nome_mae" placeholder="Nome da mãe do candidato..." required>
                    </div>                      
                    <div class="form-group">
                      <label for="celular_mae">Celular da mãe</label>
                      <input type="text" class="form-control" id="celular_mae" name="celular_mae" placeholder="Celular da mãe...">
                    </div>                          
                    <div class="form-group">
                      <label for="email_mae">Email da mãe</label>
                      <input type="text" class="form-control" id="email_mae" name="email_mae" placeholder="Email da mãe...">
                    </div>  
                    <div class="form-group">
                      <label for="nome_pai">Nome do pai</label>
                      <input type="text" class="form-control" id="nome_pai" name="nome_pai" placeholder="Nome do pai...">
                    </div>  
                    <div class="form-group">
                      <label for="celular_pai">Celular do pai</label>
                      <input type="text" class="form-control" id="celular_pai" name="celular_pai" placeholder="Celular do pai...">
                    </div>  
                    <div class="form-group">
                      <label for="email_pai">Email do pai</label>
                      <input type="text" class="form-control" id="email_pai" name="email_pai" placeholder="Email do pai...">
                    </div> 
                    <div class="form-group">
                      <label for="cep">Cep<i class="text-danger">*</i></label>
                      <input type="text" class="form-control" id="cep" name="cep" placeholder="Cep..." required >
                    </div> 
                    <div class="form-group">
                      <label for="endereco">Endereço<i class="text-danger">*</i></label>
                      <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Ex. Rua, ..... nº ..." required>
                    </div> 
                    <div class="form-group">
                      <label for="complemento">Complemento</label>
                      <input type="text" class="form-control" id="complemento" name="complemento" placeholder="Complemento..." >
                    </div> 
                    <div class="form-group">
                      <label for="Bairro">Bairro<i class="text-danger">*</i></label>
                      <input type="text" class="form-control" id="Bairro" name="Bairro" placeholder="Bairro..." required>
                    </div> 
                    <div class="form-group">
                      <label for="cidade">Cidade<i class="text-danger">*</i></label>
                      <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Cidade..." required>
                    </div> 
                    <div class="form-group">
                      <label for="estado">Estado<i class="text-danger">*</i></label>
                      <select class="form-control" id="estado" name="estado" >
                        <option value="SP"> SP</option>
                        <option value="AC"> AC</option>
                        <option value="AL"> AL</option>
                        <option value="AP"> AP</option>
                        <option value="AM"> AM</option>
                        <option value="BA"> BA</option>
                        <option value="CE"> CE</option>
                        <option value="DF"> DF</option>
                        <option value="ES"> ES</option>
                        <option value="GO"> GO</option>                     
                        <option value="MA"> MA</option>
                        <option value="MT"> MT</option>
                        <option value="MS"> MS</option>
                        <option value="MG"> MG</option>
                        <option value="PA"> PA</option>
                        <option value="PB"> PB</option>
                        <option value="PR"> PR</option>
                        <option value="PE"> PE</option>
                        <option value="PI"> PI</option>
                        <option value="RJ"> RJ</option>
                        <option value="RN"> RN</option>
                        <option value="RS"> RS</option>
                        <option value="RO"> RO</option>
                        <option value="RR"> RR</option>
                        <option value="SC"> SC</option>
                        <option value="SE"> SE</option>
                        <option value="TO"> TO</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <label for="tipo_escola">A escola que estuda atualmente é: <i class="text-danger">*</i></label>
                      <select class="form-control" id="tipo_escola" name="tipo_escola" required>
                        <option value=""></option>
                        <option value="Pública"> Pública</option>
                        <option value="Particular">Particular</option>
                      </select>
                    </div>       
                    <div class="form-group">
                      <label for="nome_escola">Nome da Escola <i class="text-danger">*</i></label>
                      <input type="text" class="form-control" id="nome_escola" name="nome_escola" placeholder="Nome da escola atual..." required>
                    </div>                    
                    <div class="form-group">
                      <label for="serie_proximo_ano">Série que irá cursar em 2021 <i class="text-danger">*</i></label>
                      <select class="form-control" id="serie_proximo_ano" name="serie_proximo_ano" required>
                        <option value=""></option>
                        <option value="6º Ano do EnsinoFundamental"> 6º Ano do EnsinoFundamental</option>
                        <option value="7º Ano do EnsinoFundamental"> 7º Ano do EnsinoFundamental</option>
                        <option value="8º Ano do EnsinoFundamental"> 8º Ano do EnsinoFundamental</option>
                        <option value="9º Ano do EnsinoFundamental"> 9º Ano do EnsinoFundamental</option>
                        <option value="1º Ano Ensino Médio"> 1º Ano Ensino Médio</option>
                        <option value="2º Ano Ensino Médio"> 2º Ano Ensino Médio</option>
                        <option value="3º Ano Ensino Médio"> 3º Ano Ensino Médio</option>
                      </select>
                    </div>     
                    <div class="form-group">
                      <label for="como_soube">Como soube do Concurso de Bolsas 2021? <i class="text-danger">*</i></label>
                      <select class="form-control" id="como_soube" name="como_soube" required>
                        <option value=""></option>
                        <option value="E-mail">E-mail</option>
                        <option value="Site Colégio Paraíso">Site Colégio Paraíso</option>
                        <option value="Folder de divulgação">Folder de divulgação</option>
                        <option value="Facebook">Facebook</option>
                        <option value="Amigos/Indicação">Amigos/Indicação</option>
                        <option value="Faixas">Faixas</option>
                        <option value="Outros">Outros</option>
                      </select>
                    </div>    
                    <div class="form-group">
                      <label for="outros_quais">Em caso de 'outros', cite quais</label>
                      <input type="text" class="form-control" id="outros_quais" name="outros_quais" placeholder="Em caso de 'outros', cite quais...">
                    </div>   
                    <div class="form-group">
                      <label for="boletim_2019">Anexar boletim de 2019 (imagem ou .pdf) <i class="text-danger">*</i></label>
                     <input type="file" name="boletim_2019" id="boletim_2019"  class="form-control" require>
                    </div> 
                    <div class="form-group">
                      <label for="boletim_2020">Anexar boletim de 2020 (imagem ou .pdf) opcional</label>
                     <input type="file" name="boletim_2020" id="boletim_2020"  class="form-control error">
                    </div>      
                    <div class="form-group">
                      <label for="dia_prova">Escolha sua opção de prova: <i class="text-danger">*</i></label>
                      <select class="form-control" id="dia_prova" name="dia_prova" required>
                        <option value=""></option>
                        <option value="Presencial - 06/10/20">Presencial - 06/10/20</option>
						<option value="Online - 07/10/20">Online - 07/10/20</option>
                      </select>
                    </div>         

                    <div class="form-group">
                      <label for="horario_prova">Escolha o horário da sua prova: <i class="text-danger">*</i></label>
                      <select class="form-control" id="horario_prova" name="horario_prova" required>
                        <option value=""></option>
                        <option value="09h00">09h00</option>
                        <option value="14h00">14h00</option>
                      </select>
                    </div>   

                    <div class="form-group">
                      <div class="row">
                        <div class="col-md-1">
                          <input type="checkbox" name="de_acordo" id="de_acordo" require>
                        </div>

                      <div class="col-md-11">
                        <label for="de_acordo">Li e concordo com os termos do regulamento: 
                          <a href="https://colegioparaisosbc.com.br/pdfs/regulamento_desafio_paraiso_2021_v3.pdf">
                            https://colegioparaisosbc.com.br/pdfs/regulamento_desafio_paraiso_2021_v3.pdf</a>
                         </label>

                      </div>
                    </div>
                    </div>   

           
                    
                      <button type="submit" class="btn btn-primary btn-block" id="upload"> Finalizar </button>
           
                  </form>
        </div>
    </div>
</div><!--container -->

@endsection

@section('scripts')
<script>

$(document).ready(function() {
    $('#upload').bind("click",function(){ 
        var imgVal = $('#boletim_2019').val(); 
        if(imgVal==''){ 
            alert("O campo boletim 2019 é obrigatório"); 
            return false; 
        } 
    }); 
});

$("#cep").blur(function() {
    var cep = $(this).val().replace(/\D/g, '');
    if (cep != "") {
        var validacep = /^[0-9]{8}$/;
        if(validacep.test(cep)) {
            $("#endereco").val("...");
            $("#bairro").val("...");
            $("#cidade").val("...");
            $("#estado").val("...");
          $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {
            if (!("erro" in dados)) {
                $("#endereco").val(dados.logradouro);
                $("#Bairro").val(dados.bairro);
                $("#cidade").val(dados.localidade);
                $("#estado").val(dados.uf);
            }
            else {
                limpa_formulário_cep();
                alert("CEP não encontrado.");
            }
        });
    }
    else {
        //cep é inválido.
        limpa_formulário_cep();
        alert("Formato de CEP inválido.");
    }
}
else {
    limpa_formulário_cep();
}
});
function limpa_formulário_cep(){
    $("#cep").val("");
    $("#endereco").val("");
    $("#Bairro").val("");
    $("#cidade").val("");
    $("#estado").val("");
}

</script>
@endsection