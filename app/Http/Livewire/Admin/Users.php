<?php

namespace App\Http\Livewire\Admin;

use App\Models\College;
use App\Models\Department;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Log;
use Livewire\Component;
use Livewire\WithPagination;

class Users extends Component
{

    use WithPagination;
    protected $paginationTheme = "bootstrap";

    public $search;
    public $collegeId;
    public $stage;
    public $deptId;

    public $colleges;
    public $depts = [];

    public function render()
    {
        $this->colleges = College::pluck('name', 'id');
        $query = User::query()->with('college','dept')->notRole(['student', 'teacher']);
        
        if ($this->collegeId) {
            $this->depts = Department::where('college_id', $this->collegeId)->pluck('name', 'id');
            $query->whereHas('college', function (Builder $q) {
                $q->where("college_id", $this->collegeId);
            });
        }

        if ($this->deptId) {
            $this->depts = Department::where('college_id', $this->collegeId)->pluck('name', 'id');
            $query->whereHas('dept', function (Builder $q) {
                $q->where("dept_id", $this->deptId);
            });
        }


        $keyword = "%" . $this->search . "%";
        $query = $query->where('name', "like", $keyword);

        $users = $query->paginate(15);

        return view('livewire.admin.users', compact("users"));
    }

    public function hydrateCollegeId()
    {
        $this->deptId = null;
    }
}
