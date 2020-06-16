<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Indux extends Model
{
    protected $fillable = ['nis'];

    public function user(){
        return $this->BelongsTo(user::class);
    }
}
