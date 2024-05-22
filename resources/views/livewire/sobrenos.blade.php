<?php

use Livewire\Volt\Component;
use App\Models\Page;

new class extends Component {
    public Page $page;

    public function mount() {
        $this->page = Page::where("slug", "sobrenos")->first();
    }
}; ?>

<div>
    
    <livewire:components.viewsobrenos :page="$page" />
  

      @assets 
      <link rel="stylesheet" href="/sobrenos.css">
      @endassets
</div>
