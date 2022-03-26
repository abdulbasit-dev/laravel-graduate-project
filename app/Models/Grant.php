<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grant extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function college()
    {
        return $this->belongsTo(College::class, 'college_id', 'id');
    }

    public function dept()
    {
        return $this->belongsTo(Department::class, 'dept_id', 'id');
    }
}
