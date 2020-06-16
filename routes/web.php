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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/test1{id2}', function ($id) {
    return 'hello to the first page';
})->name('t');

//video 14
Route::namespace('Front')->group(function (){
   Route::get('us','userController@showusername');
});

Route::get('index','Front\UserController@shows');


Route::get('/land',function (){
    return view('landing');
});

Auth::routes(['verify'=>true]);

Route::get('/home', 'HomeController@index')->name('home') ->middleware('verified');

