<?php

namespace App\Http\Livewire\Admin;

use Illuminate\Support\Facades\Log;
use Livewire\Component;

class Active extends Component
{
    public $active;
    public function render()
    {
        Log::info($this->active);
        return view('livewire.admin.active');
    }
}
