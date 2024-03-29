<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Role;
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

// CREATE
Route::get('/create', function () {
    $user = User::findOrFail(1);
    
    $conteudo = ['name'=>'Administrator'];
    $role = new Role($conteudo);
    $user->roles()->save($role); 

});

// READ
Route::get('/read', function () {
    $user = User::findOrFail(1);
    foreach($user->roles as $role){
        echo $role;
    }
});

// UPDATE
Route::get('/update', function () {
    $user = User::findOrFail(1);
    if($user->has('roles')){
        foreach($user->roles as $role){
            if($role->name == 'Administrator'){
                $role->name = 'subscriber';
                $role->save();
            }
        }
    }
});

// DELETE
Route::get('/delete', function () {
    $user = User::findOrFail(1);
    foreach($user->roles as $role){
        $role->whereId(4)->delete();
    }   
});


//ATTACH

Route::get('/attach', function () {
    $user = User::findOrFail(1);
    $user->roles()->attach(5);
});


//DETACH
Route::get('/detach', function () {
    $user = User::findOrFail(1);
    $user->roles()->detach(5);
});

//SYNC
Route::get('/sync', function () {
    $user = User::findOrFail(1);
    $user->roles()->sync([3]);
});


