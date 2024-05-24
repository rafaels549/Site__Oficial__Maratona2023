<?php

use Livewire\Volt\Component;
use App\Models\Page;
use Livewire\Attributes\On;


new class extends Component {
    public Page $page;
     public $editing = false;

    public function mount(){
          $this->page = Page::where("slug","linguagens_programacao")->first();
    }

    public function editMode(){
           $this->editing = true;
    }
}; ?>

<div>

@if(!$editing)
    <main>
        <div class="container-fluid">
          <section class="principal container">
          @auth
                <svg wire:click="editMode" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 16 16"><path fill="#888888" d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793L14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708zm.646 6.061L9.793 2.5L3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11z"/></svg>
                <div wire:loading wire:target="editMode" class="spinner-border" role="status">
  <span class="visually-hidden">Loading...</span>
</div>
@endauth
            <h1 class="titulo-principal">{{$page->titulos[0]}}</h1><br><br><br><br>
            <p>{{$page->contents[0]}}</p>

            <p>{{$page->contents[1]}}</p>

            <p>{{$page->contents[2]}}</p>

            <p>{{$page->contents[3]}}</p>

            <p>{{$page->contents[4]}}</p>

            <p> {{$page->contents[5]}}</p>
      </main>
   @else
   
   <livewire:components.editlinguagens :page="$page"   />
    @endif
      @assets 
      <link rel="stylesheet" href="/contatato_local.css">
   @endassets
</div>
