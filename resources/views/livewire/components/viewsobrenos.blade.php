<?php

use Livewire\Volt\Component;
use App\Models\Page;
use Livewire\Attributes\{Computed, On};

new class extends Component {
    public Page $page;
    public $editing = false;

    public function editMode()  {
      $this->authorize('update', auth()->user());
      $this->editing = true;
    }
  
    #[Computed]
    public function imagensCarousel() {
      return $this->page->imagens()->where('tipo', 'carousel')->get();
    }

      #[Computed]
      public function imagens() {
      return $this->page->imagens()->whereNull('tipo')->get();
    }

     #[On('cancelEditMode')]
     public function cancel() {
      $this->editing = false;
    }


}; ?>

<div>
  @if(!$editing)
      <main>
          <div class="d-flex justify-content-between align-items-center">
              <h1 class="flex-grow-1 text-center">{{ $page->titulos[0] }}</h1>
              @auth
              <button wire:click="editMode" type="button" class="btn btn-primary m-2" wire:loading.class="disabled">
                  Editar
                  <span wire:loading wire:target="editMode" class="spinner-border spinner-border-sm ms-2" role="status" aria-hidden="true"></span>
                </button>
              @endauth
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
                @foreach($this->imagensCarousel as $index => $imagem)
                <div class="carousel-item w-100 {{ $loop->first ? 'active' : '' }}">
                    <img src="{{ asset('storage/'. $imagem->imagem) }}" class="d-block w-100" alt="...">
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
                <p>{{ $page->contents[0] }}</p>
              </div>
              <div class="col-md-7">
                <img src="{{ asset('storage/'. $this->imagens->first()->imagem) }}" id="foto"alt="">
              </div>
              <h1 class="text-center" id="missao">{{ $page->titulos[1] }}</h1>
              <div class="col-md-7">
                <img src="{{ asset('storage/'. $this->imagens->skip(1)->first()->imagem) }}" alt="" srcset="">
                <img src="{{ asset('storage/'. $this->imagens->skip(2)->first()->imagem) }}" alt="">
              </div>
              <div class="col-md-5 info">
                <h3>{{ $page->titulos[2] }}</h3>
                <p>{{ $page->contents[1] }}</p>
                  <h3>{{ $page->titulos[3] }}</h3>
                  <p>{{ $page->contents[2] }}</p>
                  <h3>{{ $page->titulos[4] }}</h3>
                  <p>{{  $page->contents[3] }}</p><ul class="lista"><li>{{  $page->contents[4]}} </li>
                    <li>{{  $page->contents[5]}}</li>
                    <li>{{  $page->contents[6]}}</li>
                    <li>{{  $page->contents[7]}}</li>
                    <li>{{  $page->contents[8]}}</li>
                    <li>{{  $page->contents[9]}}</</li></ul>
                      
              </div>
            
              
          </div>
      
        </main>
    @else 
    <livewire:components.editsobrenos :page="$page" :imagensCarousel="$this->imagensCarousel" :imagens="$this->imagens"  />
    @endif
     
</div>
