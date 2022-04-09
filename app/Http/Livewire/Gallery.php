<?php

namespace App\Http\Livewire;

use App\Models\College;
use App\Models\Department;
use App\Models\Project;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Log;
use Livewire\Component;
use Livewire\WithPagination;

class Gallery extends Component
{
    use WithPagination;
    protected $paginationTheme = "bootstrap";

    public $search;
    public $collegeId;
    public $deptId;
    public $year;
    public $colleges;
    public $depts = [];

    public function render()
    {
        $this->colleges = College::pluck('name', 'id');

        $query = Project::query()->with('student', 'student.dept', 'student.college');

        if ($this->collegeId) {
            $this->depts = Department::where('college_id', $this->collegeId)->pluck('name', 'id');
            $query->whereHas('student', function (Builder $q) {
                $q->where("college_id", $this->collegeId);
            });
        }

        if ($this->deptId) {
            $this->depts = Department::where('college_id', $this->collegeId)->pluck('name', 'id');
            $query->whereHas('student', function (Builder $q) {
                $q->where("dept_id", $this->deptId);
            });
        }



        $keyword = "%" . $this->search . "%";
        $query = $query->where('title', "like", $keyword);


        if ($this->year) {
            $projects = $query->paginate(15)->where('project_year', $this->year);
        } else {
            $projects = $query->paginate(15);
        }



        return view('livewire.gallery', compact("projects"));
    }

    public function hydrateCollegeId()
    {
        $this->deptId = null;
    }
}
