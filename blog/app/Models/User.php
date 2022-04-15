<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    //AULA 59
    //criacao de uma relacao 1 para 1
    public function post(){
        return $this->hasOne('App\Models\Post');
    }

    //AULA 61
    //criacao de uma relacao 1 para muitos
    public function posts(){
        return $this->hasMany('App\Models\Post');
    }

    //Aula 64
    //criacao de uma relacao muitos para muitos
    public function roles(){
        return $this->belongsToMany('App\Models\Role');
    }
}
