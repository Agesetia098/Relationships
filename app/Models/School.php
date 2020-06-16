<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    protected $guarded = [];
    public function user()
    {
        return $this->belongsToMany(user::class);
    }
}
