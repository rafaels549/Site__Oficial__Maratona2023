<?php

use Livewire\Volt\Component;
use App\Models\Page;
new class extends Component {
    //
    public Page $page;

        public function mount(){
              $this->page = Page::where("slug", "programacao")->first();
        }
}; ?>

<div>
    @auth
    <livewire:components.edit_programacao :page="$page" />
    @else
    <livewire:components.view_programacao :page="$page" />
     @endif

     @assets
       <link rel="stylesheet" href="/programacao.css">
    @endassets
</div>
