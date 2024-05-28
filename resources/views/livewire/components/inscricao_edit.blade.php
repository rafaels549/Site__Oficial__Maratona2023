<?php

use Livewire\Volt\Component;
use App\Models\Page;
use Livewire\Attributes\On;
use Livewire\WithFileUploads;
new class extends Component {
  use WithFileUploads;
    public Page $page;
    public $imagens;
     public $imagem;
     public $titulos = [];
     public $contents = [];
      public function save(){
        if($this->imagem){
                $path =$this->imagem->store('imagens','public');

                $this->imagens->first()->update(['imagem' => $path]);
        }

        foreach($this->titulos as $index=>$titulo){
       
          $this->page->titulos[$index] = $titulo;
     }
     foreach($this->contents as $index=>$content){
         $this->page->contents[$index] = $content;
}
        $this->$page->save();
         $this->dispatch('cancelEditMode');
      }
}; ?>

<div>
<main>
   
        <div class="container">
          <div class="row">

        
         
            <div class="baloon text-center">
              <h1><input wire:model='titulos.0' type="text"></h1>
    
            </div>
            <div class="col-md-5">
              <div class="section">
                <h1><input wire:model='titulos.1' type="text"></h1>
                <h3><input wire:model='contents.0' type="text"></h3>
                <h3><input wire:model='contents.1' type="text"></h3>
              
                    <label for="imagem">
                      <input wire:model ="imagem" type="file">
                    </label>
                    @if($imagem)
                    
              <img src="{{ $imagem->temporaryUrl() }}" id="foto" alt="">
              @else
              <img src="{{ asset('storage/'. $this->imagens->first()->imagem) }}" id="foto"alt="">
                    
                    @endif
                    
                <br>
                <br>
                <h1 style="color: black; background-color: white;"><input wire:model='titulos.2' type="text"></h1>
                <br>
                <p><input wire:model='contents.2' type="text"></p>
    
    
              </div>
    
            </div>
            <div class="col-md-7 text-center">
              <div class="section2">
                <h1><input wire:model='titulos.3' type="text"></h1>
                <p><input wire:model='contents.3' type="text"></p>
    
    
              </div>
              <svg xmlns="http://www.w3.org/2000/svg" width="280" height="280" viewBox="0 0 24 24">
                <path fill="#15457A"
                  d="M11.07 12.85c.77-1.39 2.25-2.21 3.11-3.44c.91-1.29.4-3.7-2.18-3.7c-1.69 0-2.52 1.28-2.87 2.34L6.54 6.96C7.25 4.83 9.18 3 11.99 3c2.35 0 3.96 1.07 4.78 2.41c.7 1.15 1.11 3.3.03 4.9c-1.2 1.77-2.35 2.31-2.97 3.45c-.25.46-.35.76-.35 2.24h-2.89c-.01-.78-.13-2.05.48-3.15zM14 20c0 1.1-.9 2-2 2s-2-.9-2-2s.9-2 2-2s2 .9 2 2z" />
              </svg>
            </div>
          </div>
        </div>
        <button wire:click="save" type="button" class="btn btn-primary m-2" wire:loading.class="disabled">
                Salvar
                <span wire:loading wire:target="save" class="spinner-border spinner-border-sm ms-2" role="status" aria-hidden="true"></span>
              </button>
      </main>
</div>
