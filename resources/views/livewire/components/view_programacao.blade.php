<?php

use Livewire\Volt\Component;
use App\Models\Page;
use Livewire\Attributes\On;
new class extends Component {
    //
     public Page $page;
     public $editing =false;
     public function editMode(){
        $this->authorize('update', auth()->user());
        $this->editing=true;
     } 

     #[On('editFalse')]
    public function handleEditMode() {
        $this->authorize('update', auth()->user());
        $this->editing = false;
    }

}; ?>

<div>

@if(!$editing)
    <main>
        
        <div class="section ">
          <div class="container ">
            <div class="row ">
              <div class="col-md-6 ">
                <div class="caixa1 ">
                  <div class="hr-line "> </div>
                  <h1 class="text-center">{{$page->titulos[0]}}</h1>
                  <div class="hr-line"> </div>
                </div>
              </div>
              @auth
        <button wire:click="editMode" type="button" class="btn btn-primary m-2" wire:loading.class="disabled">
            Editar
            <span wire:loading wire:target="editMode" class="spinner-border spinner-border-sm ms-2" role="status" aria-hidden="true"></span>
          </button>
        @endauth
            </div>
          </div>
          
             <!-- Todas as Boxes -->
             <div class="datas container-fluid">
              <div class="row container-fluid">
                <!-- Cada Box -->
                @foreach($page->cards as $card)
                <div class="col-md-2">
                  <section class="box">
                        {!!$card->imagem!!}
                    <h1 id="blue">{{$card->titulo}}</h1>
                    <p>{{$card->description}}</p>
                  </section>
                </div>
                @endforeach
             
              </div>
            </div>
        </div>
          </main>
          @else
          <livewire:components.edit_programacao :page="$page"   />
          @endif

</div>
