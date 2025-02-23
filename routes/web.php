<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Foundation\Console\AboutCommand;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Basic Router//
Route::get('/', function () {
    return view('welcome');
});
   
Route::get('/world',function() {
    return 'World';
});

Route::get('/hello', [WelcomeController::class,'hello']);

Route::get('/index', [HomeController::class,'index']);

Route::get('/about', [AboutController::class,'about']);

Route::get('/articles/{id}', [ArticlesController::class.'articles']);

Route::resource('photos', PhotoController::class);

Route::resource('photos', PhotoController::class)->only([
    'index', 'show'
]);

Route::resource('photos', PhotoController::class)->except([
    'create', 'store', 'update', 'destroy'
]);   

//route parameters//
Route::get('/user/{name}', function($name){
    return 'Nama saya '.$name;
});

Route::get('/posts/{post}/comments/{coment}', function($postId, $commentId){
    return 'Pos ke-'.$postId."Komentar ke-".$commentId;
});

// //Optional Parameter//
Route::get('/user/{name?}', function ($name = 'null'){
    return 'Nama saya '.$name;
});

Route::get('/user/{name?}', function ($name = 'John'){
    return 'Nama saya '.$name;
});

// //Route name//
Route::get('/user/profile', function() {
    //
})->name('profile');

//view//
// Route::get('/greeting',function(){
//     return view('blog.hello', ['name' => 'Cindy Nur Khoiriyah']);
// });

Route::get('/greeting', [WelcomeController::class,'greeting']);



   

