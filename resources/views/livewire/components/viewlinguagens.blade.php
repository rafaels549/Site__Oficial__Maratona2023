<?php

use Livewire\Volt\Component;
use App\Models\Page;
use Livewire\Attributes\On;


new class extends Component {
    public Page $page;
     public $editing = false;

    public function mount(){
          $this->page = Page::where("slug","linguagens_programacao");
    }

    public function edit(){
           $this->editing = true;
    }
}; ?>

<div>

@if(!$editing)
    <main>
        <div class="container-fluid">
          <section class="principal container">
            <h1 class="titulo-principal">{{$page->titulos[0]}}</h1><br><br><br><br>
            <p>{{$page->contents[0]}}</p>

            <p>{{$page->contents[1]}}</p>

            <p>{{$page->contents[2]}}</p>

            <p>{{$page->contents[3]}}</p>

            <p>{{$page->contents[4]}}</p>

            <p> {{$page->contents[5]}}</p>
      </main>
   @else
   
   <livewire:components.linguagens_programacao :page="$page"   />
    @endif
      @assets 
      <link rel="stylesheet" href="/contatato_local.css">
   @endassets
</div>
