<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    protected $fillable = ['user_id','tel'];

    public function user()
    {
        return $this->belongsTo(user::class);
    }
}
