<style>
body{
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    background-color:#e9ecef;
    color: #5f5f5f;
    max-width: 600px;
}
.form-group{
    background-color:#FFF;
    padding: 25px;
    border: 1px solid #d8d3cd;
    border-radius: 5px;
    margin-bottom: 2vh;

}
.white_menu, .white_menu a, .white_menu ul, .white_menu li{
    background-color: #fff;
    color:  #2b2b2b;
}
.navs{
    background-color: #073d18;
}

.form-control:focus{
    transition: 0.2s;
    font-size: 1rem;


}


input[type=checkbox]
{
  /* Double-sized Checkboxes */
  -ms-transform: scale(2); /* IE */
  -moz-transform: scale(2); /* FF */
  -webkit-transform: scale(2); /* Safari and Chrome */
  -o-transform: scale(2); /* Opera */
  transform: scale(2);
  padding: 10px;
  margin-left: 25%;
  margin-top: 50%;
}

.btn-primary{
    background-color: #073d18; 
    border: #073d18;  
}

.btn-primary:hover{
    background-color: #216938; 
    border: #073d18;  
    transition: border-color 0.4s;
}
.muted{
  color: dimgray;
  font-size: 2vh;
}
.resposta{
  font-family: 'Courier New', Courier, monospace;
  color: #000;
  
  border-bottom-width: 1px;
  border-bottom-style: dashed;
  border-bottom-color:  dimgray;

}
 
</style>

<div class="container ">
  <div class="row justify-content-md-center">
      <div class="col col-lg-8">

<div class="form-group" style="background-color: #FFF;padding: 25px;border: 1px solid #d8d3cd;border-radius: 5px;margin-bottom: 2vh;">
  <h2>Agradecemos sua inscrição no Concurso de Bolsas 2021</h2>
  
  <p>Isto foi o que recebemos de você:</p>
</div>




                  <div class="form-group mt-5" style="background-color: #FFF;padding: 25px;border: 1px solid #d8d3cd;border-radius: 5px;margin-bottom: 2vh;">
                    <label for="email">Endereço de e-mail</label>
                    <p class="resposta" style="font-family: 'Courier New', Courier, monospace;color: #000;border-bottom-width: 1px;border-bottom-style: dashed;border-bottom-color: dimgray;">{{ $d->email }}</p>
                  </div>

                  <div class="form-group" style="background-color: #FFF;padding: 25px;border: 1px solid #d8d3cd;border-radius: 5px;margin-bottom: 2vh;">
                      <label for="nome_candidato">Nome completo do candidato</label>
                      <p class="resposta" style="font-family: 'Courier New', Courier, monospace;color: #000;border-bottom-width: 1px;border-bottom-style: dashed;border-bottom-color: dimgray;">{{ $d->nome_candidato }}</p>
                  </div>
                  <div class="form-group" style="background-color: #FFF;padding: 25px;border: 1px solid #d8d3cd;border-radius: 5px;margin-bottom: 2vh;">
                      <label for="data_nascimento">Data de nascimento</label>
                      <p class="resposta" style="font-family: 'Courier New', Courier, monospace;color: #000;border-bottom-width: 1px;border-bottom-style: dashed;border-bottom-color: dimgray;">{{ $d->data_nascimento }}</p>
                  </div>
                  <div class="form-group" style="background-color: #FFF;padding: 25px;border: 1px solid #d8d3cd;border-radius: 5px;margin-bottom: 2vh;">
                    <label for="rg">RG </label>
                    <p class="resposta" style="font-family: 'Courier New', Courier, monospace;color: #000;border-bottom-width: 1px;border-bottom-style: dashed;border-bottom-color: dimgray;">{{ $d->rg }}</p>
                  </div>
                  <div class="form-group" style="background-color: #FFF;padding: 25px;border: 1px solid #d8d3cd;border-radius: 5px;margin-bottom: 2vh;">
                    <label for="telefone_residencial">Telefone residencial</label>
                    <p class="resposta" style="font-family: 'Courier New', Courier, monospace;color: #000;border-bottom-width: 1px;border-bottom-style: dashed;border-bottom-color: dimgray;">{{ $d->telefone_residencial }}</p>
                  </div>                    
                  <div class="form-group" style="background-color: #FFF;padding: 25px;border: 1px solid #d8d3cd;border-radius: 5px;margin-bottom: 2vh;">
                    <label for="celular">Celular</label>
                    <p class="resposta" style="font-family: 'Courier New', Courier, monospace;color: #000;border-bottom-width: 1px;border-bottom-style: dashed;border-bottom-color: dimgray;">{{ $d->celular }}</p>
                  </div>                     
                  <div class="form-group" style="background-color: #FFF;padding: 25px;border: 1px solid #d8d3cd;border-radius: 5px;margin-bottom: 2vh;">
                    <label for="nome_mae">Nome da mãe </label>
                    <p class="resposta" style="font-family: 'Courier New', Courier, monospace;color: #000;border-bottom-width: 1px;border-bottom-style: dashed;border-bottom-color: dimgray;">{{ $d->nome_mae }}</p>
                  </div>                      
                  <div class="form-group" style="background-color: #FFF;padding: 25px;border: 1px solid #d8d3cd;border-radius: 5px;margin-bottom: 2vh;">
                    <label for="celular_mae">Celular da mãe</label>
                    <p class="resposta" style="font-family: 'Courier New', Courier, monospace;color: #000;border-bottom-width: 1px;border-bottom-style: dashed;border-bottom-color: dimgray;">{{ $d->celular_mae }}</p>
                  </div>                          
                  <div class="form-group" style="background-color: #FFF;padding: 25px;border: 1px solid #d8d3cd;border-radius: 5px;margin-bottom: 2vh;">
                    <label for="email_mae">Email da mãe</label>
                    <p class="resposta" style="font-family: 'Courier New', Courier, monospace;color: #000;border-bottom-width: 1px;border-bottom-style: dashed;border-bottom-color: dimgray;">{{ $d->email_mae }}</p>
                  </div>  
                  <div class="form-group" style="background-color: #FFF;padding: 25px;border: 1px solid #d8d3cd;border-radius: 5px;margin-bottom: 2vh;">
                    <label for="nome_pai">Nome do pai</label>
                    <p class="resposta" style="font-family: 'Courier New', Courier, monospace;color: #000;border-bottom-width: 1px;border-bottom-style: dashed;border-bottom-color: dimgray;">{{ $d->nome_pai }}</p>
                  </div>  
                  <div class="form-group" style="background-color: #FFF;padding: 25px;border: 1px solid #d8d3cd;border-radius: 5px;margin-bottom: 2vh;">
                    <label for="celular_pai">Celular do pai</label>
                    <p class="resposta" style="font-family: 'Courier New', Courier, monospace;color: #000;border-bottom-width: 1px;border-bottom-style: dashed;border-bottom-color: dimgray;">{{ $d->celular_pai }}</p>
                  </div>  
                  <div class="form-group" style="background-color: #FFF;padding: 25px;border: 1px solid #d8d3cd;border-radius: 5px;margin-bottom: 2vh;">
                    <label for="email_pai">Email do pai</label>
                    <p class="resposta" style="font-family: 'Courier New', Courier, monospace;color: #000;border-bottom-width: 1px;border-bottom-style: dashed;border-bottom-color: dimgray;">{{ $d->email_pai }}</p>
                  </div> 
                  <div class="form-group" style="background-color: #FFF;padding: 25px;border: 1px solid #d8d3cd;border-radius: 5px;margin-bottom: 2vh;">
                    <label for="cep">Cep</label>
                    <p class="resposta" style="font-family: 'Courier New', Courier, monospace;color: #000;border-bottom-width: 1px;border-bottom-style: dashed;border-bottom-color: dimgray;">{{ $d->cep }}</p>
                  </div> 
                  <div class="form-group" style="background-color: #FFF;padding: 25px;border: 1px solid #d8d3cd;border-radius: 5px;margin-bottom: 2vh;">
                    <label for="endereco">Endereço</label>
                    <p class="resposta" style="font-family: 'Courier New', Courier, monospace;color: #000;border-bottom-width: 1px;border-bottom-style: dashed;border-bottom-color: dimgray;">{{ $d->endereco }}</p>
                  </div> 
                  <div class="form-group" style="background-color: #FFF;padding: 25px;border: 1px solid #d8d3cd;border-radius: 5px;margin-bottom: 2vh;">
                    <label for="complemento">Complemento</label>
                    <p class="resposta" style="font-family: 'Courier New', Courier, monospace;color: #000;border-bottom-width: 1px;border-bottom-style: dashed;border-bottom-color: dimgray;">{{ $d->complemento }}</p>
                  </div> 
                  <div class="form-group" style="background-color: #FFF;padding: 25px;border: 1px solid #d8d3cd;border-radius: 5px;margin-bottom: 2vh;">
                    <label for="Bairro">Bairro</label>
                    <p class="resposta" style="font-family: 'Courier New', Courier, monospace;color: #000;border-bottom-width: 1px;border-bottom-style: dashed;border-bottom-color: dimgray;">{{ $d->Bairro }}</p>
                  </div> 
                  <div class="form-group" style="background-color: #FFF;padding: 25px;border: 1px solid #d8d3cd;border-radius: 5px;margin-bottom: 2vh;">
                    <label for="cidade">Cidade</label>
                    <p class="resposta" style="font-family: 'Courier New', Courier, monospace;color: #000;border-bottom-width: 1px;border-bottom-style: dashed;border-bottom-color: dimgray;">{{ $d->cidade }}</p>
                  </div> 
                  <div class="form-group" style="background-color: #FFF;padding: 25px;border: 1px solid #d8d3cd;border-radius: 5px;margin-bottom: 2vh;">
                    <label for="estado">Estado</label>
                    <p class="resposta" style="font-family: 'Courier New', Courier, monospace;color: #000;border-bottom-width: 1px;border-bottom-style: dashed;border-bottom-color: dimgray;">{{ $d->estado }}</p>
                  </div>

                  <div class="form-group" style="background-color: #FFF;padding: 25px;border: 1px solid #d8d3cd;border-radius: 5px;margin-bottom: 2vh;">
                    <label for="tipo_escola">A escola que estuda atualmente é:</label>
                    <p class="resposta" style="font-family: 'Courier New', Courier, monospace;color: #000;border-bottom-width: 1px;border-bottom-style: dashed;border-bottom-color: dimgray;">{{ $d->tipo_escola }}</p>
                  </div>       
                  <div class="form-group" style="background-color: #FFF;padding: 25px;border: 1px solid #d8d3cd;border-radius: 5px;margin-bottom: 2vh;">
                    <label for="nome_escola">Nome da Escola </label>
                    <p class="resposta" style="font-family: 'Courier New', Courier, monospace;color: #000;border-bottom-width: 1px;border-bottom-style: dashed;border-bottom-color: dimgray;">{{ $d->nome_escola }}</p>
                  </div>                    
                  <div class="form-group" style="background-color: #FFF;padding: 25px;border: 1px solid #d8d3cd;border-radius: 5px;margin-bottom: 2vh;">
                    <label for="serie_proximo_ano">Série que irá cursar em 2021</label>
                    <p class="resposta" style="font-family: 'Courier New', Courier, monospace;color: #000;border-bottom-width: 1px;border-bottom-style: dashed;border-bottom-color: dimgray;">{{ $d->serie_proximo_ano }}</p>
     
                  </div>     
                  <div class="form-group" style="background-color: #FFF;padding: 25px;border: 1px solid #d8d3cd;border-radius: 5px;margin-bottom: 2vh;">
                    <label for="como_soube">Como soube do Concurso de Bolsas 2021?</label>
                    <p class="resposta" style="font-family: 'Courier New', Courier, monospace;color: #000;border-bottom-width: 1px;border-bottom-style: dashed;border-bottom-color: dimgray;">{{ $d->como_soube}}</p>
                  </div>    
                  <div class="form-group" style="background-color: #FFF;padding: 25px;border: 1px solid #d8d3cd;border-radius: 5px;margin-bottom: 2vh;">
                    <label for="outros_quais">Em caso de 'outros', cite quais</label>
                    <p class="resposta" style="font-family: 'Courier New', Courier, monospace;color: #000;border-bottom-width: 1px;border-bottom-style: dashed;border-bottom-color: dimgray;">{{ $d->outros_quais}}</p>
                  </div>   
                  <div class="form-group" style="background-color: #FFF;padding: 25px;border: 1px solid #d8d3cd;border-radius: 5px;margin-bottom: 2vh;">
                    <label for="boletim_2019">Anexar boletim de 2019 (imagem ou .pdf) </label>
                    <p class="resposta" style="font-family: 'Courier New', Courier, monospace;color: #000;border-bottom-width: 1px;border-bottom-style: dashed;border-bottom-color: dimgray;">{{ $d->boletim_2019}}</p>
                  </div> 
                  <div class="form-group" style="background-color: #FFF;padding: 25px;border: 1px solid #d8d3cd;border-radius: 5px;margin-bottom: 2vh;">
                    <label for="boletim_2020">Anexar boletim de 2020 (imagem ou .pdf) opcional</label>
                    <p class="resposta" style="font-family: 'Courier New', Courier, monospace;color: #000;border-bottom-width: 1px;border-bottom-style: dashed;border-bottom-color: dimgray;">{{ $d->boletim_2020 }}</p>
                  </div>      
                  <div class="form-group" style="background-color: #FFF;padding: 25px;border: 1px solid #d8d3cd;border-radius: 5px;margin-bottom: 2vh;">
                    <label for="dia_prova">Escolha sua opção de prova: </label>
                    <p class="resposta" style="font-family: 'Courier New', Courier, monospace;color: #000;border-bottom-width: 1px;border-bottom-style: dashed;border-bottom-color: dimgray;">{{ $d->dia_prova}}</p>
                  </div>         
                  <div class="form-group" style="background-color: #FFF;padding: 25px;border: 1px solid #d8d3cd;border-radius: 5px;margin-bottom: 2vh;">
                    <label for="horario_prova">Escolha o horário da sua prova:</label>
                    <p class="resposta" style="font-family: 'Courier New', Courier, monospace;color: #000;border-bottom-width: 1px;border-bottom-style: dashed;border-bottom-color: dimgray;">{{ $d->horario_prova}}</p>
                  </div>   


                  </div>
                  </div>   


      </div>
  
<!--container -->