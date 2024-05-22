<?php

use Livewire\Volt\Component;
use App\Models\Page;
new class extends Component {
    public Page $page;

public function mount() {
    $this->page = Page::where("slug", "inscricao")->first();
}
}; ?>

<div>
    <livewire:components.inscricao_view :page="$page" />

    @assets 
    <link rel="stylesheet" href="/inscricao.css">
    @endassets
</div>
