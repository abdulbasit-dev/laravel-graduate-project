<?php

namespace App\Http\Livewire\Admin;

use App\Models\College;
use App\Models\Department;
use App\Models\Project;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Log;
use Livewire\Component;
use Livewire\WithPagination;

class Projects extends Component
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

        $query = Project::query()->with('student', 'student.dept', 'student.college');

        if ($this->collegeId) {
            Log::info("college " . $this->collegeId);

            $this->depts = Department::where('college_id', $this->collegeId)->pluck('name', 'id');
            $query->whereHas('student', function (Builder $q) {
                $q->where("college_id", $this->collegeId);
            });
        }

        if ($this->deptId) {
            Log::info("depratments " . $this->deptId);
            $this->depts = Department::where('college_id', $this->collegeId)->pluck('name', 'id');
            $query->whereHas('student', function (Builder $q) {
                $q->where("dept_id", $this->deptId);
            });
        }


        $keyword = "%" . $this->search . "%";
        $query = $query->where('title', "like", $keyword);

        $projects = $query->paginate(15);

        return view('livewire.admin.projects', compact("projects"));
    }

    public function hydrateCollegeId()
    {
        Log::info("hidra");
        $this->deptId = null;
        Log::info("depratments " . $this->deptId);
    }
}
