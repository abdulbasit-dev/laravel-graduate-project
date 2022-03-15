<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'team_members' => 'array'
    ];



    protected $appends = ['project_year'];

    public function getProjectYearAttribute()
    {
        $month  =  $this->created_at->month;
        if ($month >= 9 && $month <= 12) {
            return $this->created_at->year . " - " . $this->created_at->year + 1;
        }
        return $this->created_at->year - 1 . " - " . $this->created_at->year;
    }

    public function student()
    {
        return $this->belongsTo(User::class, 'created_by', 'id');
    }
}
