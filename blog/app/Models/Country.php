<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    //Aula 67
    //Has many through relation

    public function post(){
        return $this->hasManyThrough('App\Models\Post', 'App\Models\User');
    }

}
