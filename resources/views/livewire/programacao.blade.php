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
  
    <livewire:components.view_programacao :page="$page" />
    

     @assets
       <link rel="stylesheet" href="/programacao.css">
    @endassets
</div>
