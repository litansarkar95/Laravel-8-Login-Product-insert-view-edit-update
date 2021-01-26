<?php

use App\Http\Controllers\PizzaController;
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

Route::get('/', function () {
    return view('layouts.home');
});

Route::get("/home",function(){
    return view('home');
});

Route::get('/pizza',[PizzaController::class,'index'])->name("pizza.index");
Route::get('/pizza/show/{id}',[PizzaController::class,'show'])->name("pizza.show");
Route::get('/pizza/create',[PizzaController::class,'create'])->name("pizza.create");
Route::post('/pizza',[PizzaController::class,'store'])->name("pizza");
Route::delete('/pizza/{id}',[PizzaController::class,'destory'])->name("pizza");
Route::get('/pizza/edit/{id}',[PizzaController::class,'edit'])->name("pizza.edit");
Route::post('/pizza/update',[PizzaController::class,'update'])->name("pizza.update");

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
