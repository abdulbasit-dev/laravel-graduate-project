<?php

namespace App\Models;

use App\Traits\BelongsToCollege;
use App\Traits\BelongsToDept;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expert extends Model
{
    use HasFactory, BelongsToDept, BelongsToCollege;

    protected $guarded = [];

    protected static function boot()
    {
        parent::boot();
        static::addGlobalScope('order', function (Builder $builder) {
            $builder->orderByDesc('created_at');
        });
    }
}
