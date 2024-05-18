<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Page;
use App\Models\PageCard;
use App\Models\PageImage;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Page::create([
            'titulos' => ['Sobre a Maratona de Programação', 'Nosso Departamento'],
            'contents' => ['A Maratona de Programação é um evento da Sociedade Brasileira de Computação que existe desde o ano de 1996. Nasceu das competições regionais classificatórias para as etapas mundiais da competição de programação, o International Collegiate Programming Contest, e é parte da regional sul-americana do evento.

            Ela se destina a alunos e alunas de cursos de graduação e início de pós-graduação na área de Computação e afins (Ciência da Computação, Engenharia de Computação, Sistemas de Informação, Matemática, etc.). A competição promove nos estudantes a criatividade, a capacidade de trabalho em equipe, a busca de novas soluções de software e a habilidade de resolver problemas sob pressão. A cada ano, observa-se que as instituições de ensino e, principalmente, as grandes empresas da área têm valorizado os alunos que participam do evento.
            
            Várias instituições de ensino superior do Brasil desenvolvem competições locais para escolher seus melhores times para competirem na Maratona de Programação, e os melhores na Final Nacional (regional sul-americana) são selecionados para participarem das Finais Mundiais do evento. O ICPC conta com mais de 400.000 alumni, e nos últimos anos reúne participantes de mais de 100 países, 3500 universidades e 75.000 competidores, coaches e voluntários. As finais mundiais do ICPC têm contado com mais de 120 times, com cerca de 15 times latino-americanos, dos quais, 5 brasileiros.
            
            Os times são compostos por três estudantes, que tentarão resolver durante cinco horas o maior número possível dos dez ou mais problemas fornecidos. Eles têm à sua disposição apenas um computador e material impresso (livros, listagens, manuais, etc.) para vencer a batalha contra o relógio e a prova proposta. Os competidores do time devem colaborar para descobrir os problemas mais fáceis, projetar os testes, e construir as soluções que sejam aprovadas pelos juízes da competição. Certos problemas requerem apenas compreensão, outros conhecimento de técnicas mais sofisticadas, e alguns podem ser realmente muito difíceis de serem resolvidos.
            
            O julgamento é estrito. Nos enunciados dos problemas constam exemplos dos casos de testes, mas os times não têm acesso às instâncias verificadas pelos juízes. A cada submissão incorreta de um problema (ou seja, que a solução proposta apresenta resposta incorreta a uma das instâncias dos juízes) é atribuída uma penalidade de tempo. O time que conseguir resolver o maior número de problemas (no menor tempo acumulado com as penalidades) é declarado o vencedor.', 'Localizada no coração da cidade o Campus da Juta irá trazer para os alunos, o que há de melhor para o desenvolvimento pessoal no setor de tecnologia da informacao.

            Nossa missão é: "Proporcionar para nossos alunos experiencias reais do mercado de trabalho, com projetos e trabalho em equipe".
            
            Oferecemos profissionais capacitados para tirar as mais diversas duvidas e que estao antenados às mudanças no mundo da tecnologia.
            
            Nosso departamento está localizado na Rua Daniel Danieli, no centro da cidade de Taubaté.'],
            'slug' => '/',
            'name' => 'Maratona de Programação',
            'icon' => 'home-icon.png'
        ]);

        $page2 = Page::create([
            'titulos' => ['Programação - 02/09/2023'],

            'slug' => 'programacao',
            'name' => 'Programação',
            'icon' => 'about-icon.png'
        ]);

        PageCard::create([
            'page_id' => $page2->id,
            'titulo' => '9:00',
            'description' => 'Chegada dos times e entrega do material',
            'imagem' => '<svg xmlns="http://www.w3.org/2000/svg" width="64" height="100" fill="currentColor" class="bi bi-car-front-fill png" viewBox="0 0 16 16">
            <path d="M2.52 3.515A2.5 2.5 0 0 1 4.82 2h6.362c1 0 1.904.596 2.298 1.515l.792 1.848c.075.175.21.319.38.404.5.25.855.715.965 1.262l.335 1.679c.033.161.049.325.049.49v.413c0 .814-.39 1.543-1 1.997V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.338c-1.292.048-2.745.088-4 .088s-2.708-.04-4-.088V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.892c-.61-.454-1-1.183-1-1.997v-.413a2.5 2.5 0 0 1 .049-.49l.335-1.68c.11-.546.465-1.012.964-1.261a.807.807 0 0 0 .381-.404l.792-1.848ZM3 10a1 1 0 1 0 0-2 1 1 0 0 0 0 2Zm10 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2ZM6 8a1 1 0 0 0 0 2h4a1 1 0 1 0 0-2H6ZM2.906 5.189a.51.51 0 0 0 .497.731c.91-.073 3.35-.17 4.597-.17 1.247 0 3.688.097 4.597.17a.51.51 0 0 0 .497-.731l-.956-1.913A.5.5 0 0 0 11.691 3H4.309a.5.5 0 0 0-.447.276L2.906 5.19Z"></path>
          </svg>'
        ]);

        PageCard::create([
            'page_id' => $page2->id,
            'titulo' => '10:00',
            'description' => 'Sessão de aquecimento (uma hora)',
            'imagem' => '<svg xmlns="http://www.w3.org/2000/svg" width="64" height="100" fill="currentColor" class="bi bi-laptop png" viewBox="0 0 16 16">
            <path d="M13.5 3a.5.5 0 0 1 .5.5V11H2V3.5a.5.5 0 0 1 .5-.5h11zm-11-1A1.5 1.5 0 0 0 1 3.5V12h14V3.5A1.5 1.5 0 0 0 13.5 2h-11zM0 12.5h16a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5z"></path>
          </svg>'
        ]);

        PageCard::create([
            'page_id' => $page2->id,
            'titulo' => '12:00',
            'description' => 'Almoço',
            'imagem' => 'svg xmlns="http://www.w3.org/2000/svg" width="64" height="100" fill="currentColor" class="bi bi-alarm-fill png" viewBox="0 0 16 16">
            <path d="M6 .5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1H9v1.07a7.001 7.001 0 0 1 3.274 12.474l.601.602a.5.5 0 0 1-.707.708l-.746-.746A6.97 6.97 0 0 1 8 16a6.97 6.97 0 0 1-3.422-.892l-.746.746a.5.5 0 0 1-.707-.708l.602-.602A7.001 7.001 0 0 1 7 2.07V1h-.5A.5.5 0 0 1 6 .5zm2.5 5a.5.5 0 0 0-1 0v3.362l-1.429 2.38a.5.5 0 1 0 .858.515l1.5-2.5A.5.5 0 0 0 8.5 9V5.5zM.86 5.387A2.5 2.5 0 1 1 4.387 1.86 8.035 8.035 0 0 0 .86 5.387zM11.613 1.86a2.5 2.5 0 1 1 3.527 3.527 8.035 8.035 0 0 0-3.527-3.527z"></path>
          </svg>'
        ]);

        PageCard::create([
            'page_id' => $page2->id,
            'titulo' => '14:00',
            'description' => 'Competição',
            'imagem' => '<svg xmlns="http://www.w3.org/2000/svg" width="64" height="100" fill="currentColor" class="bi bi-1-circle png" viewBox="0 0 16 16">
            <path d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8Zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0ZM9.283 4.002V12H7.971V5.338h-.065L6.072 6.656V5.385l1.899-1.383h1.312Z"></path>
          </svg>'
        ]);

        PageCard::create([
            'page_id' => $page2->id,
            'titulo' => '19:00',
            'description' => 'Encerramento, divulgação dos resultados e premiações',
            'imagem' => '<svg xmlns="http://www.w3.org/2000/svg" width="64" height="100" fill="currentColor" class="bi bi-align-end png" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M14.5 1a.5.5 0 0 0-.5.5v13a.5.5 0 0 0 1 0v-13a.5.5 0 0 0-.5-.5z"></path>
            <path d="M13 7a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V7z"></path>
          </svg>'
        ]);

        $page3 = Page::create([
            'titulos' => ['Sobre nós', 'Missão, visão e valores', 'Missão instituicional', 'Visão de Futuro', 'Valores'],
             'contents' => ['Em mais de 60 anos de ensino superior e com 45 anos como Universidade, a UNITAU (Universidade de Taubaté) formou mais de 100 mil alunos que atuam no mercado de trabalho regional, nacional e internacional. Com aproximadamente 10 mil alunos, o compromisso da UNITAU em oferecer ensino de qualidade é garantido por uma elite de professores e por uma ampla infraestrutura, composta por 99 laboratórios, um acervo bibliográfico com mais de 240 mil exemplares, além de 53 grupos de pesquisa nas áreas de Humanas, de Biociências e de Exatas.', 'Oferecer educação de qualidade articulada às práticas de extensão e de pesquisa para formar profissionais aptos a gerar transformação para o desenvolvimento social.', 'Ser referência no Ensino Superior como agente de transformação social regional, por meio da excelência acadêmica.', 'Os valores que orientam as ações da UNITAU, como Universidade pública de regime especial e aberta às diferentes correntes de pensamento, são:'],
            'slug' => 'sobrenos',
            'name' => 'Sobre Nós',
            'icon' => 'about-icon.png'
        ]);

        PageImage::create([
          'page_id' => $page3->id,
          'imagem' => '/images/WhatsApp Image 2023-06-29 at 09.32.23 (1).jpeg',
          'tipo' => 'carousel'
        ]);

        PageImage::create([
            'page_id' => $page3->id,
            'imagem' => '/images/WhatsApp Image 2023-06-29 at 09.32.23 (1).jpeg',
            'tipo' => 'carousel'
        ]);

        PageImage::create([
            'page_id' => $page3->id,
            'imagem' => '/images/imagem2.jpg',
            'tipo' => 'carousel'
        ]);

        PageImage::create([
            'page_id' => $page3->id,
            'imagem' => '/images/Lab.jpeg',
         
        ]);

        PageImage::create([
            'page_id' => $page3->id,
            'imagem' => '/images/IMAGE.jpeg',
         
        ]);
        PageImage::create([
            'page_id' => $page3->id,
            'imagem' => '/images/imagem3.jpg',
         
        ]);


    }
}
