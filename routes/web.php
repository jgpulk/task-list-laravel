<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Response;

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

Route::get('/', function(){
    return redirect()->route('task.index');
});

Route::get('/task', function () {
    return view('index', [
        'tasks' => \App\Models\Task::latest()->get()
    ]);
})->name('task.index');



Route::get('/task/{id}', function($id) {
    return view('show',[
        'task' => \App\Models\Task::findOrFail($id)
    ]);
})->name('task.show');

// Route::get('/hello', function (){
//     return 'Hello';
// })->name('hello');

// Route::get('/hallo', function(){
//     return redirect()->route('hello');
// });

// Route::get('/greet/{name}', function($name){
//     return "<h1>Hello ".$name;
// });

Route::fallback(function(){
    return "No route found";
});