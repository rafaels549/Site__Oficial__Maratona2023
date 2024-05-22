<?php

use Livewire\Volt\Component;
use App\Models\Page;
use Livewire\Attributes\On;

new class extends Component {
    public Page $page;
   
    public string $titulo1 = '';
    public string $content1 = "";
    public string $titulo2 = '';
    public string $content2 = '';

    public function mount() {
        $this->authorize('update', auth()->user());
        
        $this->titulo1 = $this->page->titulos[0];
        $this->content1 = $this->page->contents[0];
        $this->titulo2 = $this->page->titulos[1];
        $this->content2 = $this->page->contents[1];
      
    }

  
    public function save()
    {
        $this->authorize('update', auth()->user());
        $this->page->titulos = [$this->titulo1, $this->titulo2];
        $this->page->contents = [$this->content1, $this->content2];
        $this->page->save();
        $this->dispatch('cancelEditMode');
    }
    
    
}; ?>

<div>


<main> 
<div class="container-fluid">
              <section class="principal container">
              
          
                <input type="text" wire:model="titulo1" class="titulo-principal form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Título">
          
          
    


    <textarea class="form-control" wire:model="content1" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 500px" ></textarea>



              </section>

              <section class="mapa">
              <section class=" container">
              <input type="text" wire:model="titulo2" class="titulo-principal form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Título">
          
          
    


          <textarea class="form-control" wire:model="content2" placeholder="Leave a comment here" id="floatingTextarea2" style=" height: 300px" ></textarea>
</section>
          <div class="d-flex justify-content-center">
          <button  wire:click="save" type="button"  class=" btn btn-primary">Salvar</button>
          
          </div>
         </section>
          </main>
          
                
     
       
         


     


</div>
