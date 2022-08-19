<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory; 
    use SoftDeletes;
    
    //aula 54
    //timestamp para o soft delete
    protected $date = ['deleted_at'];
    //aula 51
    //autoriza que o metodo create adicione dados no banco
    protected $fillable = [
        'title', 
        'content'
    ];

    //AULA 60
    //criacao de uma relacao 1 para 1 inversa
    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    //Aula 69 
    //relacao polimorfica
    public function photos(){

        return $this->morphMany('App\Models\Photo', 'imageable');
    }

    //Aula 72
    //polimorfica many-to-many
    public function tags(){

        return $this->morphToMany('App\Models\Tag', 'taggable');
    }

    public static function scopeLatest($query){
        return $query->orderBy('id', 'asc'->get());
    }
}
