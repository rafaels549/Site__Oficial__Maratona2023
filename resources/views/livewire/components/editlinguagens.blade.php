<?php

use Livewire\Volt\Component;
use App\Models\Page;
use Livewire\Attributes\On;

new class extends Component {
    public Page $page;
     public $titulo;
     public $contents = [];
    public function salvar(){

           $this->page->titulos =$titulo;
          foreach($contents as $index=>$content){
                   $this->page->contents[$index] = $content;
          }
    }

}; ?>

<div>
<main>
        <div class="container-fluid">
          <section class="principal container">
            <h1 class="titulo-principal"><input wire:model ="titulo" type="text"></h1><br><br><br><br>
            <p><input wire:model ="contents.0" type="text"></p>

            <p><input wire:model="contents.1" type="text"></p>

            <p><input wire:model="contents.2" type="text"></p>

            <p><input wire:model="contents.3" type="text"></p>

            <p><input wire:model="contents.4" type="text"></p>

            <p> <input wire:model="contents.5" type="text"></p>
            <button wire:click="save" type="button" class="btn btn-primary m-2" wire:loading.class="disabled">
                Salvar
                <span wire:loading wire:target="save" class="spinner-border spinner-border-sm ms-2" role="status" aria-hidden="true"></span>
              </button>
      </main>

     
</div>
