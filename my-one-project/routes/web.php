<?php

use App\Http\Controllers\JogosController;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});

//Route :: view('/jogos', 'jogos');

//Route ::view ('/jogos', 'jogos', ['name' =>'GTA']);

//Route ::get ('/jogos/{name?}',  function($name = null){
  //  return view ('jogos',['nomeJogo'=>$name]);
//}) ->where('name', '(A-Za-z) +');

Route :: get('/jogos', [JogosController::class, 'index']);

Route::get('/casa', function () {
    return view('welcome');
}) ->name('home-index');

Route::fallback( function () {
  return "Error";
});


