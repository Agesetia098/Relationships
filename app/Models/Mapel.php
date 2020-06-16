<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    protected $fillable = ['id','nilai','keterangan'];
    
    public function user(){
        return $this->belongsToMany(user::class);
    }
}
