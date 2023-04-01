<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/project',function(){
    return view('project');
});

Route::get('/about',function(){
    return view('about');
});

Route::get('/portofolio',function(){
    return view('portofolio');
});

Route::get('/cv',function(){
    return view('cv');
});

Route::get('/games',function(){
    return view('games');
});

Route::get('/lapres',function(){
    return view('lapres');
});

Route::get('/view_lapres', function () {
    return view('view_lapres');
});

Route::get('/', function () {
    return view('landing');
});
// Route::view('/', 'landing', ['name' => 'Rifqy']);

Route::redirect('/home', '/'); // jika user mengetik ".../home" maka akan diarahkan ke "/"

Route::get('/home/{name}', function ($name) {
    return 'Halo, ' . $name;
});
//{name} adalah parameter dari 'Route Parameter'