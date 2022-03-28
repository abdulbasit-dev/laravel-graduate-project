<?php

namespace App\Http\Livewire\Project;

use App\Models\Project;
use App\Models\User;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class Search extends Component
{
    public $search;
    public $users;

    public function render()
    {
        // $projects = Project::query()->orderByDesc('created_by')->with('student', 'student.dept', 'student.college')->paginate(15);4
        $keyword = "%" . $this->search . "%";
        $this->users = User::select('name')->where('name', "like", $keyword)->take(5)->get();
        Log::info($this->users);
        return view('livewire.project.search');
    }
}
