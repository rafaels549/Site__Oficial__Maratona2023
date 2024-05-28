<?php

use Livewire\Volt\Component;
use App\Models\Page;
use Livewire\Attributes\On;
new class extends Component {
    public Page $page;
     public $titulos = [];
     public $descriptions = [];
    public function save(){

        foreach($page->cards as $index=>$card){
              if(isset($this->titulos[$index])){
                        $card->title = $titulos[$index];
              }
              if(isset($this->descriptions[$index])){
                 $card->descriptions = $this->descriptions[$index];
              }
                $card->save();
        }

        
        $this->dispatch("editFalse");
    }

    
}; ?>

<div>

    
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
                  @foreach($page->cards as $index=>$card)
                  <section class="box">
                   {!!$card->imagem!!}
                    <h1 id="blue"><input wire:model="titulos.[$index]" type="text"></h1>
                    <p><input wire:model="descriptions.[$index]" type="text"></p>
                  </section>
                </div>
              @endforeach
               
                </div>
              </div>
            </div>

      <button wire:click="save" type="button" class="btn btn-primary m-2" wire:loading.class="disabled">
                Salvar
                <span wire:loading wire:target="save" class="spinner-border spinner-border-sm ms-2" role="status" aria-hidden="true"></span>
              </button>
        </div>
          </main>
        
</div>
