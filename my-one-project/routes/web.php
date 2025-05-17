<?php

use App\Http\Controllers\JogosController;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});

//Route :: view('/jogos', 'jogos');

Route::prefix('jogos')->group(function(){
  Route::get('/', [JogosController::class,'index'])->name('jogos-index');
  Route::get('/create', [JogosController::class,'create'])->name('jogos-create');
  Route::post('/', [JogosController::class,'store'])->name('jogos-store');
});

Route::fallback( function () {
  return "Error";
});


