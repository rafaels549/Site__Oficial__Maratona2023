<?php

use Livewire\Volt\Component;
use App\Models\Page;
use Livewire\Attributes\{On, Computed};
use Livewire\WithFileUploads;

new class extends Component {

  use WithFileUploads;

    public Page $page;
  
    public string $titulo1 = '';
    public string $content1 = "";
    public string $titulo2 = '';
    public string $titulo3 = '';
    public string $titulo4 = '';
    public string $titulo5 = '';
    public string $content2 = '';
    public string $content3 = '';
    public string $content4 = '';
    public string $content5 = '';
    public string $content6 = '';
    public string $content7 = '';
    public string $content8 = '';
    public string $content9 = '';
    public string $content10 = '';
    public  $imagensCarousel;
    public $imagens;
    public $photosCarousel = [];
    public $photo1;
    public $photo2;
    public $photo3;

   
    public function mount() {
     
      
        $this->titulo1 = $this->page->titulos[0];
        $this->content1 = $this->page->contents[0];
        $this->titulo2 = $this->page->titulos[1];
        $this->titulo3 = $this->page->titulos[2];
        $this->titulo4 = $this->page->titulos[3];
        $this->titulo5 = $this->page->titulos[4];
        $this->content2 = $this->page->contents[1];
        $this->content3 = $this->page->contents[2];
        $this->content4 = $this->page->contents[3];
        $this->content5 = $this->page->contents[4];
        $this->content6 = $this->page->contents[5];
        $this->content7 = $this->page->contents[6];
        $this->content8 = $this->page->contents[7];
        $this->content9 = $this->page->contents[8];
        $this->content10 = $this->page->contents[9];
    }

     

    public function save() {
      $this->authorize('update', auth()->user());

   
      
        $this->page->titulos = [
            $this->titulo1,
            $this->titulo2,
            $this->titulo3,
            $this->titulo4,
            $this->titulo5,
        ];
        $this->page->contents = [
            $this->content1,
            $this->content2,
            $this->content3,
            $this->content4,
            $this->content5,
            $this->content6,
            $this->content7,
            $this->content8,
            $this->content9,
            $this->content10,
        ];
        foreach ($this->photosCarousel as $index => $photo) {
            if ($photo) {
                $path = $photo->store('imagens', 'public');
                $this->imagensCarousel[$index]->imagem = $path;
                $this->imagensCarousel[$index]->save();
            }
        }

        if ($this->photo1) {
            $path = $this->photo1->store('images', 'public');
            $this->imagens->first()->update(['imagem' => $path]);
        }

        if ($this->photo2) {
            $path = $this->photo2->store('images', 'public');
            $this->imagens->skip(1)->first()->update(['imagem' => $path]);
        }

        if ($this->photo3) {
            $path = $this->photo3->store('images', 'public');
            $this->imagens->skip(2)->first()->update(['imagem' => $path]);
        }

        $this->page->save();
        $this->dispatch('cancelEditMode');
    }

    

}; ?>

<div>
  
    <main>
        <div class="d-flex container justify-center align-items-center">
            
            <input type="text" class="text-center h1 form-control text-primary fs-2" wire:model="titulo1" />
     
          
        </div>
        <div class="container justify-content-center">
          <div id="carouselExampleIndicators" class="carousel slide text-center" style="min-width: 100%;">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner w-100 ">
              
            @foreach($imagensCarousel as $index => $imagem)
           
            <div class="carousel-item w-100 {{ $loop->first ? 'active' : '' }} position-relative">
              @if(isset($photosCarousel[$index]))
              <img src="{{ $photosCarousel[$index]->temporaryUrl() }}" class="d-block w-100" alt="...">
            @else
              <img src="{{ asset('storage/'. $imagem->imagem) }}" class="d-block w-100" alt="...">
            @endif
             
              <label for="imagem.{{ $index }}" class="overlay position-absolute top-0 start-0 w-100 h-100">
                <input  id="imagem.{{ $index }}" wire:model="photosCarousel.{{ $index }}"  type="file" class="visually-hidden">
              </label>
          </div>
        @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
              data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
              data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-md-5">
              <h1 class="text-center ">Apresentação</h1>
              <textarea class="form-control bg-transparent text-white" wire:model="content1" style="height: 220px"></textarea>
            </div>
            <div class="col-md-7 position-relative">
              @if($photo1)
              <img src="{{ $photo1->temporaryUrl() }}" id="foto" alt="">
              @else
              <img src="{{ asset('storage/'. $this->imagens->first()->imagem) }}" id="foto"alt="">
              @endif
              <label for="imagem1" class="overlay position-absolute top-0 start-0 w-100 h-100 cursor-pointer">
                <input  id="imagem1" wire:model="photo1" type="file" class="visually-hidden">
              </label>
            </div>
            <input type="text" class="text-center h1 form-control text-primary fs-2 mt-5 mb-5" wire:model="titulo2" />
            <div class="col-md-7">
              <div class="position-relative">
                @if($photo2)
              <img src="{{ $photo2->temporaryUrl() }}" id="foto" alt="">
              @else
              <img src="{{ asset('storage/'. $this->imagens->skip(1)->first()->imagem) }}" id="foto"alt="">
              @endif
              <label for="imagem2" class="overlay position-absolute top-0 start-0 w-100 h-100 cursor-pointer">
                <input  id="imagem2" wire:model="photo2" type="file" class="visually-hidden">
              </label>
            </div>
            <div class="position-relative">
              @if($photo3)
              <img src="{{ $photo3->temporaryUrl() }}" id="foto" alt="">
              @else
              <img src="{{ asset('storage/'. $this->imagens->skip(2)->first()->imagem) }}" id="foto"alt="">
              @endif
              <label for="imagem3" class="overlay position-absolute top-0 start-0 w-100 h-100 cursor-pointer">
                <input  id="imagem3" wire:model="photo3" type="file" class="visually-hidden">
              </label>
            </div>
            </div>
            <div class="col-md-5 info">
                <input type="text" class="bg-transparent form-control text-white fs-5 mt-2 mb-2" wire:model="titulo3" />
 <textarea class="form-control bg-transparent text-white" wire:model="content2" style="height: 220px"></textarea>
            
 <input type="text" class="bg-transparent form-control text-white fs-5 mt-2 mb-2" wire:model="titulo4" />
 <textarea class="form-control bg-transparent text-white" wire:model="content3" style="height: 220px"></textarea>
              
 <input type="text" class="bg-transparent form-control text-white fs-5 mt-2 mb-2" wire:model="titulo5" />
 <textarea class="form-control bg-transparent text-white" wire:model="content4" style="height: 220px"></textarea><ul class="lista"><li> <textarea class="form-control bg-transparent text-white mt-2" wire:model="content5" style="height: 220px"></textarea> </li>
    <li> <textarea class="form-control bg-transparent text-white mt-2" wire:model="content6" style="height: 220px"></textarea></li>
    <li><textarea class="form-control bg-transparent text-white mt-2" wire:model="content6" style="height: 220px"></textarea></li>
    <li><textarea class="form-control bg-transparent text-white mt-2" wire:model="content7" style="height: 220px"></textarea></li>
    <li><textarea class="form-control bg-transparent text-white mt-2" wire:model="content8" style="height: 220px"></textarea></li>
    <li><textarea class="form-control bg-transparent text-white mt-2" wire:model="content9" style="height: 220px"></textarea></li>
    <li><textarea class="form-control bg-transparent text-white mt-2" wire:model="content10" style="height: 220px"></textarea></li>
    
                    
            </div>
           
            <button wire:click="save" type="button" class="btn btn-primary m-2" wire:loading.class="disabled">
                Salvar
                <span wire:loading wire:target="save" class="spinner-border spinner-border-sm ms-2" role="status" aria-hidden="true"></span>
              </button>
        </div>
    
      </main>
   
</div>
