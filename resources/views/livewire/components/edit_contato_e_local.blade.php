<?php

use Livewire\Volt\Component;
use App\Models\Page;
use Livewire\Attributes\On;


new class extends Component {
    public  Page  $page;
    public $titulos = [];
    public $contents = [];
    public function salvar(){

      $this->authorize('update',auth()->user());
        $this->page = Page::where("id",$page->id)->first();
        foreach($this->titulos as $index=>$titulo){
       
             $this->page->titulos[$index] = $titulo;
        }
        foreach($this->contents as $index=>$content){
            $this->page->contents[$index] = $content;
   }

       $this->dispatch("cancelEditMode");
    }

     
   
}; 

?>

<div>
<main>
    
        <h1 class="text-center"><input type="text" wire:model = "titulos.0"></h1>
        <div class="container">
          <div class="row">
            <div class="col-md-5">
              <h1 class="text-center"><input  type="text" wire:model = "titulos.1"></h1>
          
              <div class="endereço">
                <svg xmlns="http://www.w3.org/2000/svg" width="64" height="24" fill="currentColor"
                  class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                  <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                </svg>
                <h4><input type="text"text wire:model = "contents.0"></h4>
    
              </div> 
              <div class="contato">
                <svg xmlns="http://www.w3.org/2000/svg" width="120" height="20" fill="currentColor"
                  class="bi bi-telephone-fill" viewBox="0 0 16 16">
                  <path fill-rule="evenodd"
                    d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                </svg>
                <h4><input wire:model="contents.1" type="text"></h4>
              </div>
              <div class="email">
                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="20" fill="currentColor"
                  class="bi bi-envelope-at-fill" viewBox="0 0 16 16">
                  <path
                    d="M2 2A2 2 0 0 0 .05 3.555L8 8.414l7.95-4.859A2 2 0 0 0 14 2H2Zm-2 9.8V4.698l5.803 3.546L0 11.801Zm6.761-2.97-6.57 4.026A2 2 0 0 0 2 14h6.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.606-3.446l-.367-.225L8 9.586l-1.239-.757ZM16 9.671V4.697l-5.803 3.546.338.208A4.482 4.482 0 0 1 12.5 8c1.414 0 2.675.652 3.5 1.671Z" />
                  <path
                    d="M15.834 12.244c0 1.168-.577 2.025-1.587 2.025-.503 0-1.002-.228-1.12-.648h-.043c-.118.416-.543.643-1.015.643-.77 0-1.259-.542-1.259-1.434v-.529c0-.844.481-1.4 1.26-1.4.585 0 .87.333.953.63h.03v-.568h.905v2.19c0 .272.18.42.411.42.315 0 .639-.415.639-1.39v-.118c0-1.277-.95-2.326-2.484-2.326h-.04c-1.582 0-2.64 1.067-2.64 2.724v.157c0 1.867 1.237 2.654 2.57 2.654h.045c.507 0 .935-.07 1.18-.18v.731c-.219.1-.643.175-1.237.175h-.044C10.438 16 9 14.82 9 12.646v-.214C9 10.36 10.421 9 12.485 9h.035c2.12 0 3.314 1.43 3.314 3.034v.21Zm-4.04.21v.227c0 .586.227.8.581.8.31 0 .564-.17.564-.743v-.367c0-.516-.275-.708-.572-.708-.346 0-.573.245-.573.791Z" />
                </svg>
                <h4><input wire:model="contents.2" type="text"></h4>
              </div>
            </div>
            <div class="col-md-7">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3672.0967148272675!2d-45.560713959413924!3d-23.020220879262215!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ccf9a9f8d5d98d%3A0xf9a94337396c3e58!2sCampus%20Juta%20-%20Universidade%20de%20Taubat%C3%A9!5e0!3m2!1spt-BR!2sbr!4v1688784666165!5m2!1spt-BR!2sbr"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
        </div>

        <button wire:click="save" type="button" class="btn btn-primary m-2" wire:loading.class="disabled">
                Salvar
                <span wire:loading wire:target="save" class="spinner-border spinner-border-sm ms-2" role="status" aria-hidden="true"></span>
              </button>
      </main>
</div>
