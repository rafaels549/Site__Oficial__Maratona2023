<?php

use Livewire\Volt\Component;
use App\Models\Page;

new class extends Component {
    public Page $page;

    public function editMode() {
        $this->dispatch('editTrue');
    }
}; ?>

<div>
<main>
<div class="container-fluid">
              <section class="principal container">
              <div class="d-flex justify-content-center gap-4 ">
                <h2 class="titulo-principal">{{ $page->titulos[0] }}</h2>
                @auth
                <svg wire:click="editMode" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 16 16"><path fill="#888888" d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793L14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708zm.646 6.061L9.793 2.5L3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11z"/></svg>
                <div wire:loading wire:target="editMode" class="spinner-border" role="status">
  <span class="visually-hidden">Loading...</span>
</div>
@endauth
</div>
                @php
        $paragraphs = explode("\n", $page->contents[0]);
    @endphp

    @foreach ($paragraphs as $paragraph)
        <p>{{ $paragraph }}</p>
    @endforeach



              </section>

              <section class="mapa">
                <h3 class="titulo-principal">{{ $page->titulos[1] }}</h3>
                @php
                    $paragraphsContent1 = explode("\n", $page->contents[1]);
                @endphp

                @foreach ($paragraphsContent1 as $paragraph)
                    <p>{!! $paragraph !!}</p>
                @endforeach


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
</div>
