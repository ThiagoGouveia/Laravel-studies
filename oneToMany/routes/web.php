<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Post;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//CREATE
Route::get('/create', function () {
    
    $user = User::findOrFail(1);
    $conteudo = [
        'title'=>'Meu primeiro post', 
        'body'=> 'Esse eh o meu primeiro post'
    ];
    $post = new Post($conteudo);

    $user->posts()->save($post);
    

    
});

//READ

Route::get('/read', function () {
    
    $user = User::findOrFail(1);

    foreach($user->posts as $post){
        echo $post . "<br>";
    }

});

//UPDATE

Route::get('/update', function () {
    
    $conteudo = [
        'title'=>'Update de conteudo', 
        'body'=> 'Esse eh o update do meu primeiro post'
    ];

    $user = User::findOrFail(1);

    $user->posts()->whereId(1)->update($conteudo);
    

});


//DELETE

Route::get('/delete', function () {
    
    $user = User::findOrFail(1);

    $user->posts()->whereId(3)->delete();
    
});
