<?php

use Livewire\Volt\Component;
use App\Models\Page;
new class extends Component {
    public Page $page;
    public  $editing = false;
    #[On('editTrue')]
    public function handleEditMode() {
        $this->authorize('update', auth()->user());
        $this->editing = true;
    }
}; ?>

<div>

    @if($editing)
    <main>
        <div class="section ">
          <div class="container ">
            <div class="row ">
              <div class="col-md-6 ">
                <div class="caixa1 ">
                  <div class="hr-line "> </div>
                  <h1 class="text-center"><input wire:model type="text"></h1>
                  <div class="hr-line"> </div>
                </div>
              </div>
            </div>
          </div>
          
             <!-- Todas as Boxes -->
             <div class="datas container-fluid">
              <div class="row container-fluid">
                <!-- Cada Box -->
                <div class="col-md-2">
                  <section class="box">
                    <svg xmlns="http://www.w3.org/2000/svg" width="64" height="100" fill="currentColor"
                      class="bi bi-car-front-fill png" viewBox="0 0 16 16">
                      <path
                        d="M2.52 3.515A2.5 2.5 0 0 1 4.82 2h6.362c1 0 1.904.596 2.298 1.515l.792 1.848c.075.175.21.319.38.404.5.25.855.715.965 1.262l.335 1.679c.033.161.049.325.049.49v.413c0 .814-.39 1.543-1 1.997V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.338c-1.292.048-2.745.088-4 .088s-2.708-.04-4-.088V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.892c-.61-.454-1-1.183-1-1.997v-.413a2.5 2.5 0 0 1 .049-.49l.335-1.68c.11-.546.465-1.012.964-1.261a.807.807 0 0 0 .381-.404l.792-1.848ZM3 10a1 1 0 1 0 0-2 1 1 0 0 0 0 2Zm10 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2ZM6 8a1 1 0 0 0 0 2h4a1 1 0 1 0 0-2H6ZM2.906 5.189a.51.51 0 0 0 .497.731c.91-.073 3.35-.17 4.597-.17 1.247 0 3.688.097 4.597.17a.51.51 0 0 0 .497-.731l-.956-1.913A.5.5 0 0 0 11.691 3H4.309a.5.5 0 0 0-.447.276L2.906 5.19Z" />
                    </svg>
                    <h1 id="blue">9:00</h1>
                    <p>Chegada dos times e entrega do material</p>
                  </section>
                </div>
      
                <div class="col-md-2">
                  <section class="box">
                    <svg xmlns="http://www.w3.org/2000/svg" width="64" height="100" fill="currentColor"
                      class="bi bi-laptop png" viewBox="0 0 16 16">
                      <path
                        d="M13.5 3a.5.5 0 0 1 .5.5V11H2V3.5a.5.5 0 0 1 .5-.5h11zm-11-1A1.5 1.5 0 0 0 1 3.5V12h14V3.5A1.5 1.5 0 0 0 13.5 2h-11zM0 12.5h16a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5z" />
                    </svg>
                    <h1 id="blue">10:00</h1>
                    <p>Sessão de aquecimento (uma hora)</p>
                  </section>
                </div>
      
                <div class="col-md-2">
                  <section class="box">
                    <svg xmlns="http://www.w3.org/2000/svg" width="64" height="100" fill="currentColor"
                      class="bi bi-alarm-fill png" viewBox="0 0 16 16">
                      <path
                        d="M6 .5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1H9v1.07a7.001 7.001 0 0 1 3.274 12.474l.601.602a.5.5 0 0 1-.707.708l-.746-.746A6.97 6.97 0 0 1 8 16a6.97 6.97 0 0 1-3.422-.892l-.746.746a.5.5 0 0 1-.707-.708l.602-.602A7.001 7.001 0 0 1 7 2.07V1h-.5A.5.5 0 0 1 6 .5zm2.5 5a.5.5 0 0 0-1 0v3.362l-1.429 2.38a.5.5 0 1 0 .858.515l1.5-2.5A.5.5 0 0 0 8.5 9V5.5zM.86 5.387A2.5 2.5 0 1 1 4.387 1.86 8.035 8.035 0 0 0 .86 5.387zM11.613 1.86a2.5 2.5 0 1 1 3.527 3.527 8.035 8.035 0 0 0-3.527-3.527z" />
                    </svg>
                    <h1 id="blue">12:00</h1>
                    <p>Almoço </p>
                  </section>
                </div>
      
                <div class="col-md-2">
                  <section class="box">
                    <svg xmlns="http://www.w3.org/2000/svg" width="64" height="100" fill="currentColor"
                      class="bi bi-1-circle png" viewBox="0 0 16 16">
                      <path
                        d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8Zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0ZM9.283 4.002V12H7.971V5.338h-.065L6.072 6.656V5.385l1.899-1.383h1.312Z" />
                    </svg>
                    <h1 id="blue">14:00</h1>
                    <p>Competição</p>
      
                  </section>
      
                </div>
      
                <div class="col-md-2">
                  <section class="box">
                    <svg xmlns="http://www.w3.org/2000/svg" width="64" height="100" fill="currentColor"
                      class="bi bi-align-end png" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M14.5 1a.5.5 0 0 0-.5.5v13a.5.5 0 0 0 1 0v-13a.5.5 0 0 0-.5-.5z" />
                      <path d="M13 7a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V7z" />
                    </svg>
                    <h1 id="encerramento">19:00</h1>
                    <p id="paragrafo">Encerramento, divulgação dos resultados e premiações</p>
                  </section>
                </div>
              </div>
            </div>
        </div>
          </main>
          @else
              <livewire:components.view_programacao :page="$page" />
          @endif
</div>
