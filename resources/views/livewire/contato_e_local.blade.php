<?php

use Livewire\Volt\Component;
use App\Models\Page;

new class extends Component {
   
    public Page $page;

        public function mount(){
              $this->page = Page::where("slug", "contato_local")->first();
        }
}; 
?>

<div>
   
    <livewire:components.view_contato_e_local  :page="$page" />
   
   
    @assets 
      <link rel="stylesheet" href="/contato.css">
   @endassets
</div>
