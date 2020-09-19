<?php

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

// Route::get('/', function (){
//     return "Hello World!";
// });
// Route::get('/about', function (){
//     return "1931710037 || Abyan Fawwaz";
// });
// Route::get('/article/{id}', function($id){
//     return "Halaman dengan ID: ".$id;
// });

Route::get('/', 'HomeController');
Route::get('/about', 'AboutController');
Route::get('/article/{id}', 'ArticleController');
