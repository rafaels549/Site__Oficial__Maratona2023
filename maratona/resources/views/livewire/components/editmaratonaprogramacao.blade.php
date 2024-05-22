<?php

use Livewire\Volt\Component;
use App\Models\Page;
use Livewire\Attributes\On;

new class extends Component {
    public Page $page;
    public  $editing = false;
    public string $titulo1 = '';
    public string $content1 = "";
    public string $titulo2 = '';
    public string $content2 = '';

    public function editMode()
    {
        $this->titulo1 = $this->page->titulos[0];
        $this->content1 = $this->page->contents[0];
        $this->titulo2 = $this->page->titulos[1];
        $this->content2 = $this->page->contents[1];
        $this->editing = true;
        
    }
    public function save()
    {
        $this->page->titulos = [$this->titulo1, $this->titulo2];
        $this->page->contents = [$this->content1, $this->content2];
        $this->page->save();
        $this->editing = false; 
    }
    #[On('editTrue')]
    public function handleEditMode() {
        $this->editing = true;
    }
}; ?>

<div>

@if($editing )
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
          <button  wire:click="save" type="submit"  class=" btn btn-primary">Salvar</button>
          
          </div>
         </section>
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
         

@else

          <livewire:components.viewmaratonaprogramacao :page="$page" :key=/>

                   
@endif

     


</div>
