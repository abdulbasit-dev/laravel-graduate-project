<?php

namespace App\Http\Livewire;

use App\Models\College;
use App\Models\Department;
use App\Models\Expert;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;
use Livewire\WithPagination;

class ExpertSystem extends Component
{
    use WithPagination;
    protected $paginationTheme = "bootstrap";

    public $search;
    public $collegeId;
    public $deptId;

    public $colleges;
    public $depts = [];

    public function render()
    {
        $this->colleges = College::pluck('name', 'id');

        $query = Expert::query();

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
        $query = $query->where('title', "like", $keyword);

        $experts = $query->paginate(10);

        return view('livewire.expert-system', compact("experts"));
    }

    public function hydrateCollegeId()
    {
        $this->deptId = null;
    }
}
