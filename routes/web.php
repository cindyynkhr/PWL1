<?php

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

Route::get('/hello', function () {
    return 'Hello World';
   });
   
Route::get('/world',function() {
    return 'World';
});

Route::get('/', function (){
    return 'Semalat Datang';
});

Route::get('/about', function(){
    return 'Cindy Nur Khoiriyah, 2341720058';
});

//route parameters//
Route::get('/user/{name}', function($name){
    return 'Nama saya '.$name;
});

Route::get('/posts/{post}/comments/{coment}', function($postId, $commentId){
    return 'Pos ke-'.$postId."Komentar ke-".$commentId;
});

Route::get('/articles/{id}', function($id){
    return 'Halaman Artikel degan ID '.$id;
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
   

