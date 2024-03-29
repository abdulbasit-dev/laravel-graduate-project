<?php

namespace App\Models;

use App\Traits\BelongsToUser;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Idea extends Model
{
    use HasFactory, BelongsToUser;
    protected $guarded = [];

    protected $casts = [
        'team_members' => 'array'
    ];

    protected static function boot()
    {
        parent::boot();
        static::addGlobalScope('order', function (Builder $builder) {
            $builder->orderBy('created_at', 'desc');
        });
    }



    protected $appends = ['project_year'];

    public function getProjectYearAttribute()
    {
        $month  =  $this->created_at->month;
        if ($month >= 9 && $month <= 12) {
            return $this->created_at->year . " - " . $this->created_at->year + 1;
        }
        return $this->created_at->year - 1 . " - " . $this->created_at->year;
    }

}
