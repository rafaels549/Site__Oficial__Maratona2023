<?php

use Livewire\Volt\Component;
use App\Models\Page;
use Livewire\Attributes\On;
new class extends Component {
    public Page $page;

      public function save(){
         $this->dispatch('cancelEditMode');
      }
}; ?>

<div>
<main>
        <div class="container">
          <div class="row">
            <div class="baloon text-center">
              <h1>{{  $page->titulos[0] }}</h1>
    
            </div>
            <div class="col-md-5">
              <div class="section">
                <h1>{{  $page->titulos[1] }}</h1>
                <h3>{{  $page->contents[0] }}</h3>
                <h3>{{  $page->contents[1] }}</h3>
                <br>
                <br>
                <h1 style="color: black; background-color: white;">{{  $page->titulos[2 ] }}</h1>
                <br>
                <p>{{  $page->contents[2] }}</p>
    
    
              </div>
    
            </div>
            <div class="col-md-7 text-center">
              <div class="section2">
                <h1>{{  $page->titulos[3] }}</h1>
                <p>{{  $page->contents[3] }}</p>
    
    
              </div>
              <svg xmlns="http://www.w3.org/2000/svg" width="280" height="280" viewBox="0 0 24 24">
                <path fill="#15457A"
                  d="M11.07 12.85c.77-1.39 2.25-2.21 3.11-3.44c.91-1.29.4-3.7-2.18-3.7c-1.69 0-2.52 1.28-2.87 2.34L6.54 6.96C7.25 4.83 9.18 3 11.99 3c2.35 0 3.96 1.07 4.78 2.41c.7 1.15 1.11 3.3.03 4.9c-1.2 1.77-2.35 2.31-2.97 3.45c-.25.46-.35.76-.35 2.24h-2.89c-.01-.78-.13-2.05.48-3.15zM14 20c0 1.1-.9 2-2 2s-2-.9-2-2s.9-2 2-2s2 .9 2 2z" />
              </svg>
            </div>
            <button wire:click="save" type="button" class="btn btn-primary m-2" wire:loading.class="disabled">
                Salvar
                <span wire:loading wire:target="save" class="spinner-border spinner-border-sm ms-2" role="status" aria-hidden="true"></span>
              </button>
          </div>
        </div>
      </main>
</div>
