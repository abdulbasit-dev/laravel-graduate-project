<?php

namespace App\Traits;

use App\Models\User;

trait BelongsToUser
{
    public function student()
    {
        return $this->belongsTo(User::class, 'created_by', 'id');
    }
}
