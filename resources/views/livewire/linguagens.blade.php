<?php

use Livewire\Volt\Component;
use App\Models\Page;

new class extends Component {
    public Page $page;
    public function mount() {
      $this->page = Page::where("slug", "linguagens_programacao")->first();
    }
}; ?>

<div>
    <livewire:components.viewlinguagens :page="$page" />

    @assets 
     <link rel="stylesheet" href="/linguagens.css">
    @endassets
</div>
