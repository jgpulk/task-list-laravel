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

Route::get('/', function () {
    // return view('welcome');
    return "<h1>Welcome!</h1>";
});

Route::get('/hello', function (){
    return 'Hello';
})->name('hello');

Route::get('/hallo', function(){
    return redirect()->route('hello');
});

Route::get('/greet/{name}', function($name){
    return "<h1>Hello ".$name;
});

Route::fallback(function(){
    return "No route found";
});