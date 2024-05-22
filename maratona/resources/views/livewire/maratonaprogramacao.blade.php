<?php

use App\Models\Page;
use Livewire\Volt\Component;
use Illuminate\View\View;

new class extends Component {
    public Page $page;

   
    public function mount() {
        $this->page =  Page::where('slug', '/')->first();
    }

    public function rendering(View $view): void
    {
        $view->title($this->page->name);
 
        // ...
    }


}; ?>

<div>
@auth
<livewire:components.viewmaratonaprogramacao :page="$page" />
@else
<livewire:components.viewmaratonaprogramacao :page="$page" />
@endauth

   
</div>
