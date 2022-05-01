<?php

namespace App\Http\Livewire;

use App\Models\College;
use App\Models\Department;
use App\Models\Idea as IdeaModel;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;
use Livewire\WithPagination;

class GrantIdea extends Component
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

        $query = IdeaModel::query()->where('is_ranked',1)->with('student', 'student.dept', 'student.college');

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
            $ideas = $query->paginate(6)->where('project_year', $this->year);
        } else {
            $ideas = $query->paginate(6);
        }

        return view('livewire.grant-idea', compact("ideas"));
    }

    public function hydrateCollegeId()
    {
        $this->deptId = null;
    }
}
