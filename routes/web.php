<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\WelcomeController;
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

Route::get('/index', [PageController::class,'index']);

Route::get('/about', [PageController::class,'about']);

Route::get('/articles/{id}', [PageController::class.'articles']);

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
   

