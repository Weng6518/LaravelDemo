<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InspiringController;

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

Route::get('/hello-world', function () {

    return 'Hello world!';

}); 

Route::get('/hello-world', function () {

    return view('hello_world');

}); 

Route::get('/about_us', function () {

    return view('about_us');

}); 

Route::get('/about_us', function () {

    return view('about_us', ['name' => 'Laravel 6.0 範例']);

}); 

Route::get('/inspire', 'App\Http\Controllers\InspiringController@inspire'); 

Route::get('/test', function(){

    return App\Models\Post::all();

}); 

Route::get('/test', function(){

    return App\Models\Post::find(1);

}); 

Route::get('/edit', function(){

    $post = App\Models\Post::find(1);

    $post->content = 'Laravel demo';

    $post->save();

    return $post;

}); 


Route::get('/add', function(){

    $post = new App\Models\Post;
 
     $post->content = 'Laravel demo';
 
     $post->save();
 
     return $post; 
 
 }); 

 Route::get('/delete', function(){

    $post = App\Models\Post::find(1);

    $post->delete();

}); 

Route::get('/mass delete', function(){

    $posts = App\Models\Post::destroy([2, 3]);

    return $posts;

}); 

Route::get('/test', function(){

    $subject = Subject::find(1);

    $posts = $subject->posts;

    return $posts;

}); 
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('posts', 'App\Http\Controllers\PostController'); 

Route::get('/test', function(){

    var_dump(Auth::check());

}); 

Route::get('/test', function(){

    echo Auth::user();

});  
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
