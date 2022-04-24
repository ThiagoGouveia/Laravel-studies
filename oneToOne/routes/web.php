<?php

use Illuminate\Support\Facades\Route;
use App\Models\Address;
use App\Models\User;


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

//INSERT
Route::get('/insert', function () {
    
    $user = User::findOrFail(1);
    $address = new Address(['name'=>'Rua alvaro leal calmon']);
    $user->address()->save($address);
});

//UPDATE

Route::get('/update', function () {
    
    $address = Address::where('user_id', 1)->first();
    $address->name = "Alvaro Leal Calmon, 1238";
    $address->save();  
});

//READ 

Route::get('/read', function () {
    
    $user = User::findOrfail(1);
    echo $user->address->name;
});

//DELETE

Route::get('/delete', function () {
    
    $user = User::findOrfail(1);
    $user->address()->delete();
    
});

