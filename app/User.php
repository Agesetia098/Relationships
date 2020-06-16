<?php

namespace App;

use App\Models\Phone;
use App\Models\School;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','nis','class','npsn'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function phone()
    {
        return $this->hasOne(Phone::class);
    }
    public function user()
    {
        return $this->hasOne(School::class);
    }
    public function induk()
    {
        return $this->hasOne(Indux::class);
    }
    public function mapel(){
        return $this->hasMany(Mapel::class);
    }
}
