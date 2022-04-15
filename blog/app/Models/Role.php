<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    //Aula 65
    //relacao inversa muitos para muitos
    public function users(){
        return $this->belongsToMany('App\Models\User');
    }
}
