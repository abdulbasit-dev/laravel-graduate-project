<?php

namespace App\Models;

use App\Traits\BelengsToCollege;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use BelongsToCollege;
    use HasFactory;
    protected $guarded = [];

  
}
