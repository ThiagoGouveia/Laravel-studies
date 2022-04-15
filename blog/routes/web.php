<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Post;
use App\Models\Roles;

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
//     DB::insert('insert into posts(title, content) values(?,?)',['Laravel is awesome','Laravel is the best thing that has happened to PHP,PERIOD']);
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
| ELOQUENT ORM - READ
|--------------------------------------------------------------------------
|
*/

// Route::get('/read', function(){
    
//     // $posts = Post::all();
//     // foreach($posts as $post){
//     //     return $post;
//     // }

//     $posts = Post::find(2);
//     return $posts;
// });

// Route::get('/findwhere',function(){
    
//     $posts = Post::where('id',3)->orderBy('id', 'desc')->take(1)->get();
    
//     return $posts;
// });

// Route::get('/findmore',function(){

//     $posts = Post::findOrFail(2);
//     return $posts;

//     // $post = Post::where('users_count', '<', 50)->firstOrFail();
//     // return $posts;
// });


/*
|--------------------------------------------------------------------------
| ELOQUENT ORM - INSERT
|--------------------------------------------------------------------------
|
*/

// Route::get('/basicinsert', function(){

//     $post = new Post;
//     $post->title = 'new ELOQUENT title insert';
//     $post->content = 'Wow eloquent is really cool, look at this content';
//     $post->save();
// });

// Route::get('/basicinsert2', function(){

//     $post = Post::find(9);
//     $post->title = 'new ELOQUENT title insert 2';
//     $post->content = 'Wow eloquent is really cool, look at this content 2';
//     $post->save();
// });


/*
|--------------------------------------------------------------------------
| ELOQUENT ORM - CREATE
|--------------------------------------------------------------------------
|
*/

// Route::get('/create', function(){
//     Post::create(['title'=>'the create method ', 'content'=>'Wow I am learning PHP ']);
// });

/*
|--------------------------------------------------------------------------
| ELOQUENT ORM - UPDATE
|--------------------------------------------------------------------------
|
*/

// Route::get('/update', function(){

//     Post::where('id', 2)->where('is_admin', 0)->update(['title'=>'NEW PHP TITLE', 'content' => 'New content']);

// });


/*
|--------------------------------------------------------------------------
| ELOQUENT ORM - DELETE
|--------------------------------------------------------------------------
|
*/

// Route::get('/delete', function(){

//     $post = Post::find(2);
//     $post->delete();
    
// });

// Route::get('/delete2', function(){

//     //Post::destroy(3);
//     //Post::destroy([4,5]);
//     Post::where('is_admin', 0)->delete();
    
// });

/*
|--------------------------------------------------------------------------
| ELOQUENT ORM - SOFT DELETE
|--------------------------------------------------------------------------
|
*/

// Route::get('/softdelete', function(){

//     Post::find(10)->delete();
// });

// Route::get('/readsoftdelete', function(){

//     //O codigo abaixo nao executa
//     // $post = Post::find(6);
//     // return $post;

//     //Solucao correta para buscar uma informacao deletada especificada pelo 'where'
//     // $post = Post::withTrashed()->where('id', 6)->get();
//     // return $post;

//     //Solucao correta para retornar todos os arquivos deletados
//     $post = Post::onlyTrashed()->get();
//     return $post;

// });

// RECUPERANDO OS ARQUIVOS DELETADOS

// Route::get('/restore', function(){
//     Post::withTrashed()->where('id', 8)->restore();
// });

//DELETANDO PERMANENTEMENTE

// Route::get('/forcedelete', function(){
//     Post::onlyTrashed()->where('is_admin', 0)->forceDelete();
// });


/*
|--------------------------------------------------------------------------
| ELOQUENT ORM - Relationships
|--------------------------------------------------------------------------
|
*/

//One to One relationship
// Route::get('/user/{id}/post/', function($id){
//     return User::find($id)->post;
// });

//One to One relationship reverse
// Route::get('/post/{id}/user/', function($id){
//     return Post::find($id)->user;
// });

//One to Many relationship
// Route::get('/posts', function(){
    
//     $user = User::find(1);

//     foreach($user->posts as $post){
//         //PHP so retorna um valor, por isso o "echo" 
//         echo $post . "<br>";
//     }
// });

//Many to Many relationship

// Route::get('/user/{id}/role', function($id){
//     $user = User::find($id);
//     foreach($user->roles as $role){
//         return $role->name;
        
//     }

//     $user = User::find($id)->roles()->orderBy('id', 'desc')->get();
//     return $user;

// });

//Accessing the intermediate table/pivot

// Route::get('/user/pivot', function(){
//     $user = User::find(1);
//     foreach($user->roles as $role){
//         echo $role->pivot;
//     }
// });