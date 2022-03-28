<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SearchProjects extends Component
{
    public $search = "Test";
    public function render()
    {
        
        return view('livewire.search-projects');
    }
}
