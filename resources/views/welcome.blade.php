<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  
  <title>Maratona de programação</title>
 
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
 
  <!-- Comando de responsividade do bootstrap -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
 
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
 
 
  <!-- bootstrap -->
 
</head>

<body>
  <!-- menu -->
          @include('components.header')
          <img class="" src="">

          <main>
            <div class="container-fluid">
              <section class="principal container">
                <h2 class="titulo-principal">Sobre a Maratona de Programação</h2>
                <p>A Maratona de Programação é um evento da Sociedade Brasileira de Computação que existe desde o ano de 1996. Nasceu das competições regionais classificatórias para as etapas mundiais da competição de programação, o International Collegiate Programming Contest, e é parte da regional sul-americana do evento.</p>

                <p>Ela se destina a alunos e alunas de cursos de graduação e início de pós-graduação na área de Computação e afins (Ciência da Computação, Engenharia de Computação, Sistemas de Informação, Matemática, etc.). A competição promove nos estudantes a criatividade, a capacidade de trabalho em equipe, a busca de novas soluções de software e a habilidade de resolver problemas sob pressão. A cada ano, observa-se que as instituições de ensino e, principalmente, as grandes empresas da área têm valorizado os alunos que participam do evento.</p>

                <p>Várias instituições de ensino superior do Brasil desenvolvem competições locais para escolher seus melhores times para competirem na Maratona de Programação, e os melhores na Final Nacional (regional sul-americana) são selecionados para participarem das Finais Mundiais do evento. O ICPC conta com mais de 400.000 alumni, e nos últimos anos reúne participantes de mais de 100 países, 3500 universidades e 75.000 competidores, coaches e voluntários. As finais mundiais do ICPC têm contado com mais de 120 times, com cerca de 15 times latino-americanos, dos quais, 5 brasileiros.</p>

                <p>Os times são compostos por três estudantes, que tentarão resolver durante cinco horas o maior número possível dos dez ou mais problemas fornecidos. Eles têm à sua disposição apenas um computador e material impresso (livros, listagens, manuais, etc.) para vencer a batalha contra o relógio e a prova proposta. Os competidores do time devem colaborar para descobrir os problemas mais fáceis, projetar os testes, e construir as soluções que sejam aprovadas pelos juízes da competição. Certos problemas requerem apenas compreensão, outros conhecimento de técnicas mais sofisticadas, e alguns podem ser realmente muito difíceis de serem resolvidos.</p>

                <p>O julgamento é estrito. Nos enunciados dos problemas constam exemplos dos casos de testes, mas os times não têm acesso às instâncias verificadas pelos juízes. A cada submissão incorreta de um problema (ou seja, que a solução proposta apresenta resposta incorreta a uma das instâncias dos juízes) é atribuída uma penalidade de tempo. O time que conseguir resolver o maior número de problemas (no menor tempo acumulado com as penalidades) é declarado o vencedor.</p>



              </section>

              <section class="mapa">
                <h3 class="titulo-principal">Nosso departamento</h3>
                <p>Localizada no coração da cidade o <strong>Campus da Juta</strong> irá trazer para os alunos, o que há de melhor
                para o desenvolvimento pessoal no setor de tecnologia da informacao.</p>

                <p id="missao"><em> Nossa missão é: <strong>"Proporcionar para nossos alunos experiencias reais do mercado de
                trabalho, com projetos e trabalho em equipe"</strong>.</em></p>

                <p>Oferecemos profissionais capacitados para tirar as mais diversas duvidas e que estao antenados às mudanças no
                mundo da tecnologia.</p>
                <p>Nosso departamento está localizado na Rua Daniel Danieli, no centro da cidade de Taubaté.</p>

                <div class="container mapa-conteudo">
                  <iframe
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3672.0892506728987!2d-45.56047368819461!3d-23.02049497908835!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ccf9aa1d6f0b2d%3A0x1ab889efe5a76f68!2sUnitau!5e0!3m2!1spt-BR!2sbr!4v1688493463168!5m2!1spt-BR!2sbr"
                  width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen="" loading="lazy"
                  referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
              </section>
            </div>
          </main>

          <footer class="py-3 my-4 ">
            <ul class="nav justify-content-center border-bottom pb-3 mb-3">
              <li class="nav-item"><a href="index.html" class="nav-link px-2 text-body-secondary">Home</a></li>
              <li class="nav-item"><a href="./pag_programacao/programacao.html" class="nav-link px-2 text-body-secondary">Programação</a></li>
              <li class="nav-item"><a href="./pag_linguagens_de_programacao/linguagens_de_programacao.html" class="nav-link px-2 text-body-secondary">Linguagens de programação</a></li>
              <li class="nav-item"><a href="./pag_contato_e_local/contato_e_local.html" class="nav-link px-2 text-body-secondary">Contato e Local</a></li>
              <li class="nav-item"><a href="./pag_sobre_nos/sobre_nos.html" class="nav-link px-2 text-body-secondary">Sobre nós</a></li>
            </ul>
            <div class="d-flex justify-content-center align-items-center container-fluid">
              <div class="row">
        
                <div class="d-flex align-items-center justify-content-center col-md-12">
                  <p class=" text-body-secondary ">2023 - Universidade de Taubaté</p>
                  <img src="images/unitau-logo-1.png" height="70" class="m-4">
                </div>
                <div class="col-md-6 imgf">
                  <img src="images/footer_SBC.png" srcset="">
                  
                </div>
                <div class="col-md-6">
                    <img src="images/footer_ICPC.png" height="90" alt="" srcset="">

                </div>
              </div>
            </div>
          </footer>


          
          <!-- js do bootstrap -->
        
        </body>
        
        </html>
        <script src="https://code.jquery.com/jquery-3.7.0.min.js"
          integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
      
