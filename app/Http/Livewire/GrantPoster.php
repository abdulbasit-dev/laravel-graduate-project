<?php

namespace App\Http\Livewire;

use App\Models\College;
use App\Models\Department;
use App\Models\Project;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;
use Livewire\WithPagination;

class GrantPoster extends Component
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

        $query = Project::query()->whereNotNull("poster")->where('is_poster_ranked',1)->with('student', 'student.dept', 'student.college');

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

        $projects = $query->paginate(6);

        return view('livewire.grant-poster', compact("projects"));
    }

    public function hydrateCollegeId()
    {
        $this->deptId = null;
    }
}
