<?php

use Illuminate\Support\Facades\Route;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/about', function () {
//     return "about page";
// });

// Route::get('/contact', function () {
//     return "contact page";
// });

// Route::get('/post/{id}/{name}', function ($id, $name) {
//     return "Thiago eh o numero " . $id;
// });

// Route::get('admin/posts/example', array('as'=>'admin.home',function(){
//     $url = route('admin.home');

//     return "this url is ".$url

// }));


//Route::get('/post/{id}', '\App\Http\Controllers\PostController@index');


//Route::resource('posts', '\App\Http\Controllers\PostsController');

Route::get('/contact','\App\Http\Controllers\PostsController@contact');
Route::get('/post/{id}','\App\Http\Controllers\PostsController@show_post');

/*
|--------------------------------------------------------------------------
| DATABASE Raw SQL Queries
|--------------------------------------------------------------------------
|
*/

// Route::get('/insert',function(){
//     DB::insert('insert into posts(title, content) values(?,?)',['PHP with Laravel','Laravel is the best thing that has happened to PHP']);
// });

// Route::get('/read',function(){
//     $results = DB::select('select * from posts where id = ?',[1]);

//     foreach($results as $posts){
//         return $posts;
//     }
// });

// Route::get('/update',function(){
//     $updated = DB::update('update posts set title = "Updated title" where id = ?', [1]);

//     return $updated;
// });

// Route::get('/delete',function(){
//     $deleted = DB::delete('delete from posts where id = ?', [1]);

//     return $deleted;
// });


/*
|--------------------------------------------------------------------------
| ELOQUENT ORM
|--------------------------------------------------------------------------
|
*/

Route::get('/read', function(){
    
    // $posts = Post::all();
    // foreach($posts as $post){
    //     return $post;
    // }

    $posts = Post::find(2);
    return $posts;
});