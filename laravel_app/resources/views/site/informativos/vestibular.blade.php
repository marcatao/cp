@extends('site.layout.main')

@section('conteudo')

 
  
<main class="mt-5 white-bg">
<div class="pre white-bg"></div>
<section id="colegio" class="white-bg">
    
 <div class="row mt-5">
     <div class="col-md-12 text-center mt-5 mb-3">
         <h1>Vestibular</h1>
     </div>
 </div>

 <div class="container white-bg">

    <h3>Aprovados no Vestibular</h3>

    <div class="mt-5 pb-5 white-bg">

            <div class="accordion mb-5" id="arco1">
                <div class="card">
                  <div class="card-header" id="heading1">
                    <h5 class="mb-0">
                      <a class="informatives btn btn-link btn-block d-flex justify-content-between" href="{{asset('pdfs/banner_vestibular_v2.jpg')}}">
                         Aprovados no vestibular
                         <i class="fas fa-download"></i>
                      </a>
                    </h5>
                  </div>
                </div>
              </div>
                
                   
 
            

       <h3>Dicas e Noticias</h3>

        <div class="mt-3 pb-5 white-bg">
            <div class="accordion" id="accordionExample">

                <div class="card">
                  <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                        <a class="informatives btn btn-link btn-block d-flex justify-content-between" href="{{asset('pdfs/vestibular/dicas_e_noticias/08082018084607inscricaofuvest.pdf')}}" target="_blank" >
                            [ 08/AGO ] - Inscrição Fuvest 2019<i class="fas fa-download"></i>
                         </a>
                    </h5>
                  </div>
                 </div>


                <div class="card">
                  <div class="card-header" id="headingTwo">
                    <h5 class="mb-0">
                      <a class="informatives btn btn-link btn-block d-flex justify-content-between" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" href="#">
                         [ 10/JUL ] - ENEM 2018
                        <i class="fas fa-plus"></i>
                      </a>
                    </h5>
                  </div>
                  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="card-body">
                        <span>

                            <strong>FUVEST</strong><br>
                            <strong>Inscrição:</strong> de 21 de agosto a 11 de setembro de 2017<br>
                            <strong>Primeira fase:</strong> 28 de novembro de 2017<br>
                            <strong>Segunda fase:</strong> 7, 8 e 9 de janeiro de 2018<br><br>
                            
                            <strong>MACKENZIE</strong><br>
                            <strong>Inscrição:</strong> de 16 de setembro a 21 de novembro de 2017<br>
                            <strong>Vestibular:</strong> 30 de novembro de 2017<br><br>
                            
                            <strong>PUC-CAMPINAS</strong><br>
                            <strong>Inscrição:</strong> 4 de agosto a 24 de setembro de 2017<br>
                            <strong>Prova específica de medicina:</strong> 18 de outubro de 2017<br>
                            <strong>Provas específicas de arquitetura e direito:</strong> 20 de outubro<br>
                            <strong>Vestibular:</strong> 20 de outubro <br><br>
                            
                            <strong>UNESP</strong><br>
                            <strong>Inscrição:</strong> 11 de setembro a 9 de outubro de 2017<br>
                            <strong>1ª fase:</strong> 15 de novembro de 2017<br>
                            <strong>2ª fase:</strong> 17 e 18 de dezembro de 2017<br><br>
                            
                            <strong>UNICAMP</strong><br>
                            <strong>Inscrição:</strong> 31 de julho a 31 de agosto de 2017<br>
                            <strong>Primeira fase:</strong> 19 de novembro de 2017<br>
                            <strong>Segunda fase:</strong> 14, 15 e 16 de janeiro de 2018<br>
                            <strong>Provas específicas:</strong> 22 a 25 de janeiro de 2018<br><br>
                             
                             
                            <strong>ENEM 2018</strong><br>
                            Acompanhe a sua inscrição através do site: <a href="http://inep.gov.br" target="_blank&quot;&quot;">inep.gov.br</a><br><br>
                            
                            <strong>OUTUBRO 2017<br>
                            Dia a confirmar</strong>
                            
                             <ul><li>Consultar o Cartão de Confirmação</li></ul>
                            
                            <strong>NOVEMBRO 2017<br>
                            Dia 5</strong>
                            
                            <ul><li>Provas - Linguagens, Códigos e suas Tecnologias / Redação / Ciências Humanas e suas Tecnologias</li></ul>
                            
                            <strong>Dia 12</strong>
                            
                            <ul><li>Provas - Ciências da Natureza e suas Tecnologias / Matemática e suas Tecnologias</li></ul>
                            
                            <strong>Dia 16</strong>
                            
                            <ul><li>Publicação dos Gabaritos e Cadernos de Questões</li></ul>
                             
                            </span>


                    </div>
                  </div>
                </div>


                <div class="card">
                  <div class="card-header" id="headingThree">
                    <h5 class="mb-0">
                        <a class="informatives btn btn-link btn-block d-flex justify-content-between" href="{{asset('pdfs/vestibular/dicas_e_noticias/12042017072148com.140__enem_2017.pdf')}}" target="_blank" >
                            [ 12/ABR ] - ENEM 2017<i class="fas fa-download"></i>
                         </a>
                    </h5>
                  </div>
                </div>
                
                <div class="card">
                    <div class="card-header" id="headingFour">
                      <h5 class="mb-0">
                          <a class="informatives btn btn-link btn-block d-flex justify-content-between" href="{{asset('pdfs/vestibular/dicas_e_noticias/18082016164120feira_de_profissoes_como_ajudar_seu_filho_na_escolha_profissional.pdf')}}" target="_blank" >
                              [ 18/AGO ] - Como ajudar seu filho na escolha profissional<i class="fas fa-download"></i>
                           </a>
                      </h5>
                    </div>
                 </div>

                 <div class="card">
                    <div class="card-header" id="headingFive">
                      <h5 class="mb-0">
                        <a class="informatives btn btn-link btn-block d-flex justify-content-between" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive" href="#">
                            [ 01/MAR ] - A difícil tarefa de escolha do vestibular<i class="fas fa-plus"></i>
                        </a>
                      </h5>
                    </div>
                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                      <div class="card-body">
                        <span>

                            Entre o A da administração e o Z da zootecnia, existem atualmente quase 300 cursos de nível superior no Brasil. É compreensível, portanto, que a dúvida se imponha aos jovens, às vezes de maneira aflitiva, no momento em que eles têm que optar por um só curso: o vestibular. "O que mais incomoda garotos e garotas às voltas com a escolha de uma profissão é a sensação de que, apesar do grande potencial de que dispõem, eles terão de escolher apenas uma carreira, deixando muitas outras para trás", diz Maria Beatriz de Oliveira, psicóloga e orientadora vocacional da Universidade Estadual Paulista (Unesp).<br>
                            <br>
                            
                            A tarefa do vestibulando de escolher uma opção de fato não é simples. Mas não precisa se transformar em um processo doloroso. Ao contrário. Pode ser o momento de pequenas aventuras e algumas descobertas. Um exemplo de aventura: procurar profissionais que já estão integrados ao mercado e ouvir deles como é o dia a dia de suas atividades. Outra possibilidade: visitar o local onde esses profissionais atuam. Afinal, é ali que o aspirante poderá trabalhar no futuro próximo.
                            
                            <br>
                            <br>
                            
                            
                            Os especialistas aconselham que o candidato invista um pouco no autoconhecimento, além de fazer pesquisas sobre o curso pretendido e o mercado de trabalho. "O objetivo desse processo é expandir o conhecimento do vestibulando: quanto maior for seu horizonte na hora da decisão, mais certeira será sua escolha", diz Silvio Bock, pedagogo e orientador vocacional. 
                            
                            <br>
                            <br>
                            
                            <strong>Dez passos para a escolha da carreira certa no vestibular</strong>
                            <br>
                            <br>
                            
                            
                            O candidato deve analisar a si mesmo, o curso pretendido e o mercado de trabalho. 
                            <br>
                            <br>
                            
                            <strong>1.	Autoanálise: Pontos fortes</strong><br>
                            Reflita sobre suas competências e habilidades – aquelas que se tornaram evidentes ao longo de sua vida, como a facilidade com números ou para a escrita. Elas são um bom indicador das carreiras nas quais você pode se sentir à vontade. Mas lembre-se: uma trajetória profissional raramente se constrói com base apenas em um talento nato.
                            <br>
                            <br>
                            
                            <strong>2.	Autoanálise: Pontos fracos</strong><br>
                            Reflita sobre as áreas de aprendizado que lhe trouxeram dificuldades e pergunte-se: seus problemas com os números ou com o desenho, por exemplo, são questões de talento ou de empenho? Habilidades podem ser desenvolvidas, se houver real interesse.
                            <br>
                            <br>
                            
                            <strong>3.	Análise das carreiras: Método de eliminação</strong><br>
                            É importante informar-se sobre todos os cursos de ensino superior. É uma tarefa árdua. Mas, com os dados à mão, fica mais fácil identificar carreiras com as quais há afinidade e, principalmente, descartar outras com as quais não há identificação.
                            <br>
                            <br>
                            
                            <strong>4.	Análise das carreiras: Foco nas favoritas</strong><br>
                            É hora de aprofundar-se na investigação das carreiras preferidas. Recorra a guias e feiras de profissões para saber: qual a formação oferecida pelos cursos, qual o campo de atuação dos profissionais das áreas e quais as melhores instituições de ensino.
                            <br>
                            <br>
                            
                            <strong>5.	Análise das carreiras: Investigação de campo</strong><br>
                            Procure profissionais que já atuam nas áreas de seu interesse, munido de um questionário claro e objetivo que ajude a entender o dia a dia daquela atividade: aborde questões que não foram esclarecidas nos guias e feiras de profissões.
                            <br>
                            <br>
                            
                            <strong>6.	Análise das carreiras: Disciplinas</strong><br>
                            Analisar a grade curricular dos cursos pretendidos também é importante: ela mostra como serão os próximos anos de estudo. Se o curso analisado inclui biologia ou matemática, e essas não são áreas de sua preferência, repense a escolha.
                            <br>
                            <br>
                            
                            <strong>7.	Análise das carreiras: Carreira A vs. Carreira B</strong><br>
                            Devido à grande oferta de cursos, o candidato pode ficar dividido entre duas opções aparentemente semelhantes. Os especialistas alerta, contudo: não há carreiras idênticas. Por isso, analise de perto a grade curricular e o campo de atuação.
                            <br>
                            <br>
                            
                            <strong>8.	Análise das carreiras: Hobby vs. Profissão</strong><br>
                            Encontrar prazer no trabalho é a situação ideal. Mas é importante não confundir hobby com profissão. Quem opta pela faculdade de educação física porque gosta de jogar futebol, por exemplo, pode se frustrar. Profissões são mais complexas que isso.
                            <br>
                            <br>
                            
                            <strong>9.	Análise de mercado: Empregabilidade e salário</strong><br>
                            Analisar o mercado de trabalho é a parte final do processo. É vital conhecer a realidade – o que inclui salário – da carreira pretendida para evitar decepções. Essas informações não devem ser o único critério para a escolha, mas não podem ser ignoradas.
                            <br>
                            <br>
                            
                            <strong>10.	Análise de mercado: Ciclos de mercado</strong><br>
                            Costuma-se dizer que uma profissão está em alta ou em baixa. É importante lembrar que todas as carreiras obedecem ciclos: um mercado promissor hoje pode estar saturado em cinco anos. Utilizar esse critério como único para a escolha é um equívoco.
                            <br>
                            <br>
                            
                            Fontes: Silvio Bock, pedagogo e orientador vocacional. Maria Beatriz de Oliveira, psicóloga e coordenadora da Feira de Profissões da Unesp. Villela da Matta, presidente da Associação Brasileira de Coaching. Sullivan França, presidente da Sociedade Latino-Americana de Coaching. 
                            <br>
                            <br>
                            
                            Veja.abril.com.br/noticia/educacao
                            
                            </span>
                      </div>
                    </div>
                  </div>



                  <div class="card">
                    <div class="card-header" id="headingSix">
                      <h5 class="mb-0">
                        <a class="informatives btn btn-link btn-block d-flex justify-content-between" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix" href="#">
                            [ 01/MAR ] - Como os pais podem ajudar na escolha da profissão de seus filhos<i class="fas fa-plus"></i>
                        </a>
                      </h5>
                    </div>
                    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
                      <div class="card-body">
                        <span>

                            <strong>Como os pais podem ajudar na escolha da profissão de seus filhos<br>Por Viviam Klanfer Nunes</strong><br>
                            <br>
                            
                            
                                        Se, para os jovens, o momento de decidir qual carreira seguir não é uma tarefa fácil, para seus pais, é tão complicado quanto. As dúvidas e inseguranças a respeito do futuro profissional não acometem apenas os filhos. Elas atormentam da mesma forma a vida dos pais, que muitas vezes não sabem como guiá-los nessa escolha. <br>
                            <br>
                            
                            Com  tantas  opções  de  carreias  e  informações sobre o mercado de trabalho, essa  tarefa realmente não é fácil, então, o que fazer e como começar? 
                            De  acordo  com  a  psicóloga  e  orientadora   vocacional  Gilvanise Gulicz  Vial,  tudo  deve começar muito antes desse momento, ainda na infância. 
                            <br>
                            <br>
                            
                            <strong>Escolhas</strong> <br>
                            <br>
                            
                            A psicóloga explica que todo o processo de seleção de uma profissão está relacionado com a habilidade do indivíduo em fazer escolhas. Os pais precisam, portanto, desde muito cedo, preparar os filhos para fazer escolhas, ou seja, torná-los independentes. Para trabalhar essa questão, os pais devem permitir e incentivar os filhos a realizar escolhas, seja a cor da camiseta que vai vestir, onde preferem ir no final de semana ou mesmo o que preferem comer, sempre lembrando que as opções devem estar de acordo com a idade e capacidade da criança. <br>
                            <br>
                            
                            Desenvolvendo essa habilidade ainda na infância, "quando chega a época da escolha da profissão, fica muito mais fácil", explica Gilvanise, ressaltando que as crianças que sempre tem tudo pré-escolhido, vão ter dificuldades para se tornar independentes dos pais. Isso, consequentemente, vai interferir no momento de tomar a decisão sobre qual carreira seguir. 
                            <br>
                            <br>
                            
                            <strong>Cuidado com os extremos</strong><br>
                            <br>
                            
                                 A psicóloga explica que, quando os pais não trabalham a questão das escolhas com os filhos, muitas vezes, quando chega a época de decidir a carreira, caem em dois extremos muito comuns. Em um primeiro caso, os pais sugerem que os filhos escolham entre determinadas carreiras que, segundo suas crenças, vão trazer mais retorno financeiro. <br>
                            <br>
                            
                            Ou então optam por simplesmente não fazer parte do processo. Entendem que a escolha da carreira é uma questão pessoal e que não devem influenciar os filhos, preferindo, assim, se abster do processo. Essas duas atitudes são totalmente desaconselháveis. No primeiro caso, é preciso lembrar que é complicado prever qual será o retorno financeiro de uma profissão. No segundo caso, a ajuda dos pais será essencial em diversos pontos. <br>
                            <br>
                            
                            De acordo com Gilvanise, os pais precisam ajudar os filhos a identificar suas habilidades e seus gostos, certificando-se de que esses fatores se encaixam com as profissões selecionadas. Além disso, é preciso fazer parte desse processo observando como os filhos fazem suas escolhas. <br>
                            <br>
                            
                            Segundo a  psicóloga,  há  jovens  que  optam  por uma carreira simplesmente para se livrar dessa obrigação, sem ponderar elementos que farão grande diferença. 
                            <br>
                            <br>
                            
                            <strong>Informações e autoconhecimento</strong><br>
                            <br>
                            
                            Para evitar que essa escolha seja motivo de grande frustração no futuro, algumas dicas podem ser seguidas, lembrando que a decisão deve ser consciente, levando em conta, sobretudo, o máximo de informações sobre a profissão e o autoconhecimento do jovem. De acordo com a psicóloga e orientadora vocacional, Ana Lúcia Magalhães, se o jovem não se conhece, ele terá grande dificuldade na escolha da profissão. <br>
                            <br>
                            
                            No caso das informações, as psicólogas recomendam a leitura de guias de profissões. Além disso, é interessante conversar com profissionais  da área. No caso do autoconhecimento, os  pais devem ajudar os filhos a  descobrirem  do  que  gostam, no  que possuem  habilidades,  quais  são seus interesses e aptidões. 
                            <br>
                            <br>
                            
                            <strong>Retorno financeiro</strong><br>
                            <br>
                            
                            Ambas as psicólogas concordam que não é indicado sugerir a escolha de uma profissão baseada no retorno financeiro. "É preciso ser um bom profissional para ter retorno financeiro e não o contrário", pontua Ana Lúcia. Na prática, para ter sucesso em qualquer carreira, o indivíduo precisa se destacar, ser diferente e isso só vai acontecer se ele gostar do que faz, se estiver feliz com sua escolha. <br>
                            <br>
                            
                            Logo, se a escolha for feita pesando mais o retorno financeiro do que os interesses, gostos e  habilidades,  o  profissional  vai  ter  dificuldade  em se  desenvolver. "Todo profissional precisa gostar do que faz para fazer diferente", finaliza Ana Lúcia. 
                            <br>
                            <br>
                            
                            Fonte: Infomoney
                            </span>
                      </div>
                    </div>
                  </div>


                  <div class="card">
                    <div class="card-header" id="headingSeven">
                      <h5 class="mb-0">
                        <a class="informatives btn btn-link btn-block d-flex justify-content-between" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven" href="#">
                            [ 01/MAR ] - Dica para quem está no ano do vestibular<i class="fas fa-plus"></i>
                        </a>
                      </h5>
                    </div>
                    <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
                      <div class="card-body">
                        <span>

                            <strong>Mil e uma atividades</strong><br>
                            Se você é uma pessoa dinâmica, que faz mil atividades semanais, chegou a hora de decidir o que vai parar e o que vai continuar. Não é necessário abandonar todas as suas atividades de lazer ou cultura, é preciso apenas organizar o seu horário e priorizar o que é mais importante. Você pode, por exemplo, continuar com o curso de línguas, pois esse tipo de conhecimento é muito útil nos vestibulares. Mas as aulas de guitarra, as viagens e os finais de semana agitados devem ser repensados. Isso não quer dizer abandonar os seus programas favoritos, mas sim adiá-los até o próximo ano quando, se tudo der certo, você vai estar na faculdade, e terá tempo livre para retomar sua rotina. <br><br>
                            
                            <strong>Organograma</strong><br>
                            Quem pretende conseguir uma vaga em uma faculdade e para isso vai enfrentar um vestibular super concorrido deve começar desde cedo a organizar seus horários. É aquela coisa chata, mas muito eficiente: horário de acordar, de dormir, de comer, de se divertir (o que é essencial) e, principalmente, de estudar. Sua rotina deve ser controlada para que tudo funcione na dosagem certa. Isso porque nada em excesso é bom, nem mesmo estudar demasiadamente. Além das horas diárias de aula do colégio ou de um cursinho, o recomendado é mais 3 ou 4 horas de estudo durante o período que estiver em casa. Se preferir, procure uma biblioteca próxima ou até mesmo na escola, para evitar a tentação de assistir TV, acessar a internet ou até mesmo dar um cochilo na hora programada para o estudo. Depois, você pode sair com os amigos, continuar alguma atividade de lazer e até namorar. Mas não esqueça, vá dormir cedo (nada de estudar de madrugada), pois o sono e o cansaço mental dificultam a aprendizagem. Não pense que tomando energéticos ou estimulantes conseguirá ficar concentrado, eles só farão mal à sua saúde. <br><br>
                            
                            <strong>Explorando as dificuldades</strong><br>
                            Você tem muita dificuldade em uma matéria essencial? Não se preocupe, isso é muito comum. Por mais que o "gênio" da sua sala pareça entender de tudo, pode apostar que ele não nasceu sabendo, mas sim, se esforçou o suficiente para aprender. O que fazer? Nada de fugir da matemática só porque tem dificuldades. O correto é fazer o contrário, dedicar mais atenção às matérias que você não domina bem já que, subentende-se que você tem facilidade com as outras e pode dedicar menos tempo a elas. Mas atenção, menos tempo não quer dizer nenhum tempo! O ideal é organizar seu horário de estudo de forma a nunca deixar nenhuma matéria de lado, especialmente as mais difíceis. <br><br>
                            Outra dica importante é nunca levar dúvidas para casa. Extraia o máximo de conhecimento de seus professores e, mesmo que continue com dificuldades, procure-o fora do horário de aula para saná-las. <br><br>
                            
                            <strong>Pratique</strong><br>
                            Faça simulados, resolva provas antigas (as universidades costumam aproveitar algumas questões de suas provas anteriores para os vestibulares atuais, modificando apenas alguns detalhes), seja treineiro. Quanto mais provas você fizer, mais fácil ficará na hora de encarar o vestibular pra valer, você já estará familiarizado com o horário da prova, com os procedimentos comuns e com a sua própria ansiedade. Além disso, fazer a prova do vestibular da faculdade em que você pretende estudar como treineiro ajuda a conhecer o tipo de prova da instituição  e diminui o nervosismo quando chegar a hora do vestibular pra valer. <br><br>
                            
                            <strong>Leia muito</strong><br>
                            Torne a leitura um hábito cotidiano, se já não for. Nessa época é que você deve estar mais informado, pois as provas de vestibular costumam ser contextualizadas com os assuntos do ano, principalmente no que diz respeito ao tema da redação. Leia jornais, revistas, sites de notícia ou artigos, e assista a telejornais de diferentes canais da TV. Isso porque cada meio de comunicação tem uma linha editorial, ou seja, assistindo e lendo a jornais de diferentes empresas você terá acesso às argumentações opostas e diferenciadas, o que facilita a compreensão dos fatos. Se você tem um blog comece a escrever sobre os temas polêmicos da semana, e se não tem, faça-o em seus cadernos mesmo. A prática da escrita (que depende de uma leitura constante) o ajudará a enfrentar a redação do vestibular com mais tranquilidade. Aponte argumentos, faça listas de prós e contras e coloque a cabeça para funcionar, em uma dessas você pode até dar a sorte de escrever sobre o tema da redação antes mesmo do vestibular. <br><br>
                            
                            <strong>Novas práticas</strong><br>
                            Essas são algumas práticas que você pode inserir em sua rotina durante todo o ano pré-vestibular. Preparando-se durante o ano você tem mais chances de passar no vestibular do que dedicando os meses de véspera da prova a recuperar o tempo perdido. Não deixe suas matérias se acumularem, anote suas dúvidas e tente resolvê-las e, acima de tudo, não deixe de viver sua vida, conviver com os amigos e namorar. Afinal, a convivência social é fundamental para a construção de sua personalidade e de suas opiniões.<br><br>
                            
                            Fonte: vestibular.brasilescola.com<br><br>
                            <strong>EQUIPE PARAÍSO</strong>
                            </span>
                      </div>
                    </div>
                  </div>


                <!-- <div class="card">
                    <div class="card-header" id="headingEigth">
                      <h5 class="mb-0">
                        <a class="informatives btn btn-link btn-block d-flex justify-content-between" type="button" data-toggle="collapse" data-target="#collapseEigth" aria-expanded="false" aria-controls="collapseEigth" href="#">
                            [ 01/MAR ] - Conheça as 5 competências avaliadas no ENEM<i class="fas fa-plus"></i>
                        </a>
                      </h5>
                    </div>
                    <div id="collapseEigth" class="collapse" aria-labelledby="headingEigth" data-parent="#accordionExample">
                      <div class="card-body">
                        <span>

                            O Exame Nacional do Ensino Médio (Enem) consiste em quatro provas e uma redação. E em todo o exame, além das disciplinas em si, existe uma série de habilidades que são avaliadas. Ou seja, independentemente da matéria que está sendo cobrada (Matemática, Português ou História, por exemplo), o Enem avalia cinco competências principais em todas as suas provas.<br>
                            <br>
                            
                            
                            As cinco competências principais, comuns a todas as disciplinas avaliadas no Enem, são chamadas de Eixos Cognitivos e são publicadas todos os anos no Edital do Enem. São elas:
                            <br>
                            <br>
                            
                            <strong>Competência 1:</strong> Dominar linguagens (DL)<br>
                            Dominar a norma culta da Língua Portuguesa e fazer uso das linguagens matemática, artística e científica e das línguas espanhola e inglesa.<br><br>
                            
                            <strong>Competência 2:</strong> Compreender fenômenos (CF)<br>
                            Construir e aplicar conceitos das várias áreas do conhecimento para a compreensão de fenômenos naturais, de processos histórico-geográficos, da produção tecnológica e das manifestações artísticas.<br><br>
                            
                            <strong>Competência 3:</strong> Enfrentar situações-problema (SP)<br>
                            Selecionar, organizar, relacionar, interpretar dados e informações representados de diferentes formas, para tomar decisões e enfrentar situações problema.<br><br>
                            
                            <strong>Competência 4:</strong> Construir argumentação (CA)<br>
                            Relacionar informações, representadas em diferentes formas, e conhecimentos disponíveis em situações concretas, para construir argumentação consistente.<br><br>
                            
                            <strong>Competência 5:</strong> Elaborar propostas (EP)<br>
                            Recorrer aos conhecimentos desenvolvidos na escola para elaboração de propostas de intervenção solidária na realidade, respeitando os valores humanos e considerando a
                            diversidade sociocultural.<br><br>
                            
                            Essas cinco competências são avaliadas nas quatro áreas de conhecimento do Enem (Ciências Humanas e suas Tecnologias, Ciências da Natureza e suas Tecnologias, Linguagens, Códigos e suas Tecnologias e Matemática, Códigos e suas Tecnologias) e também na Redação.
                            </span>
                      </div>
                    </div>
                  </div> -->

                  



              </div>
                
                   
 
            </div>
                
            <h3>Preparatório para o Vestibular / Projeto Jornada para o Futuro</h3>
                
            
            <div class="txt_categoria">







              <div class="subtitulo_pagina">Preparatório para o Vestibular / Projeto Jornada para o Futuro</div>
              
              
              O <strong>Vestibular</strong> é um evento muito complicado na vida do jovem, pois é muito complexo. Pela primeira vez ele tem que fazer uma opção que é séria. Não é uma opção como escolher uma roupa, como escolher um namorado, ou o programa que vai fazer. É a primeira vez que ele se vê confrontado com a necessidade de decidir quase que o rumo da sua vida. E é natural que a angústia, a ansiedade apareçam. Tanto os pais quanto os professores precisam aprender a lidar com essa ansiedade e angústia, tentando observar daí a riqueza dessa experiência. Porque o jovem aprende a se conhecer mais e melhor e aprende a lidar melhor com todas as informações que tem. Em segundo lugar, a questão da escolha: o que eu vou fazer? Os jovens têm muitas dúvidas hoje. Cada vez mais eles são obrigados a fazer uma opção muito precoce. E a insegurança tanto do mercado de trabalho, quanto das opções que eles podem fazer... Há 20 anos você tinha 10, 15 cursos para escolher. Hoje, são mais de 70. É natural que esta dúvida apareça, até porque os jovens de hoje são multifuncionais. Nós vemos neles capacidades múltiplas de resolver, de realizar coisas, inclusive simultâneas. Em vista desta multiplicidade de papéis que eles podem assumir, é natural também que as dúvidas aconteçam – dia a socióloga Beatriz Balena de Souza.
              
              <br>
              <br>
              
              
              <strong>O vestibular é a porta de entrada para este mundo, e como se preparar?</strong>
              
              <br>
              <br>
              
              
              Alguns alunos querem recuperar o tempo perdido porque não estudaram corretamente e resolvem fazer um intensivão. Com certeza não conseguirão o resultado desejado. O importante é ter método de estudo, ter metas para cumprir, tirar proveito dos seus pontos fortes e investir neles, tentar melhorar nos pontos fracos. Procurar levar uma vida mais ou menos normal. Não adiante estudar 24 horas por dia. Isso vai ter um stress, um acúmulo emocional que não vai resolver nada. O aluno tem que ter o seu horário de estudo sério, forte, mas não descuidar das suas relações pessoais, do seu lazer, esporte, música... Estar constantemente atualizado, ler artigos, jornais, revistas; participar da vida social. A leitura tem duas grandes questões: a primeira, quem lê muito escreve bem. Então ela vai facilitar na redação. Segunda: a informação é a base de qualquer articulação de raciocínio. Então, ao estar bem informado, inclusive pode resolver melhor as questões que aparecem, sobretudo as questões da atualidade, na área da História e da Geografia e a Redação. Hoje, o vestibular é muito mais compreensivo. O que mudou é que não basta o aluno decorar. Ele tem que entender o que está acontecendo. As questões não são mais teóricas, etéreas. Elas têm um vínculo com a prática. Então o aluno precisa aprender a responder perguntas com o mínimo de informação que está na questão, mas utilizando as suas experiências de leitura, de informação e de preparação. Há uma outra questão também que o momento do vestibular coloca para o jovem: o vestibular é uma parte da vida das pessoas, não é toda a vida. Depois começa a universidade. E encarar que essa escolha, essa tentativa, ela tem grandes possibilidades de dar certo, mas também não dar. E o jovem tem que estar preparado para isto. No caso de não dar certo, ele tem que mudar. Existem muitos jovens que estão descontentes, inconformados e frustrados na sua profissão porque não tiveram talvez uma orientação, ou talvez a coragem necessária para chegar a um determinado ponto desta escolha, ver que se enganou, trocar e passar para uma outra escolha.                                                                                            (site Mundo Jovem)
              <br>
              <br>
              
              O <strong>Colégio Paraíso</strong> este ano, em parceria com a <strong>Noctuam</strong> - excelência em ensino, que trabalha com alunos que querem alcançar bons resultados nos vestibulares, iniciou um projeto de preparação para os vestibulares, desde o 1º ano do Ensino Médio ao 3º ano do Ensino Médio.
              <br>
              <br>
              
              Entendemos que a preparação deste jovem inicia-se em sua infância, com rotina e aprofundamento de estudos, porém é no Ensino Médio que os jovens realmente se deparam com esta responsabilidade. Se a preparação se der de forma gradativa a ansiedade pode até aparecer, porém em menor intensidade.
              <br>
              <br>
              
              A Noctuam traz a preparação dos alunos através de aulas de cursinho, dentro da grade curricular, tornando a aprendizagem muito mais significativa. É claro que o principal agente neste processo é o aluno, que precisa estar engajado neste processo.
              
              <br>
              <br>
              <br>
              
              <div class="accordion mb-5" id="arco2">
                <div class="card">
                  <div class="card-header" id="heading2">
                    <h5 class="mb-0">
                      <a class="informatives btn btn-link btn-block d-flex justify-content-between" href="{{asset('pdfs/banner_vestibular_v2.jpg')}}">
                       [08 / Ago]  - Inscrição Fuvest 2019
                         <i class="fas fa-download"></i>
                      </a>
                    </h5>
                  </div>
                </div>
              </div>
              
              
              </div>


              <h3>Escola em movimento</h3>
              <center>
              <img src="{{asset('img/informativos/vestibular/escola_em_movimento_1.jpg')}}" alt="" class="img-fluid">
              <img src="{{asset('img/informativos/vestibular/escola_em_movimento_2.jpg')}}" alt="" class="img-fluid">
              <img src="{{asset('img/informativos/vestibular/escola_em_movimento_3.jpg')}}" alt="" class="img-fluid">
              </center>








        </div>        
          
        </div>
 </div>
</section>

 

 
 
</main>



@endsection
@section('scripts')
<script>
   $(function () {
    $('*[data-href]').on('click', function() {
        window.open($(this).data("href"), "_newtab");
    });
   });
</script>
@endsection    