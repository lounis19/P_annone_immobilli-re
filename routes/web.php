<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnnonceController;
use App\Htpp\Livewire;
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



Route::view('edit','Annonce/edit');
Route::view('user','admin/user');
Route::view('annonce','admin/annonce');
Route::view('search','Annonce/search');

Route::middleware('auth')->group(function () {
 
   
  

    Route::resource('home', App\Http\Controllers\AnnonceController::class,);

    Route::get('{id}/edit', [App\Http\Controllers\AnnonceController::class,'edit']);

    Route::put('edit/{id}', [App\Http\Controllers\AnnonceController::class,'update']);
    Route::delete('/home/{id}', [App\Http\Controllers\AnnonceController::class,'destroy']);

    Route::get('user', [App\Http\Controllers\AnnonceController::class,'getUser']);
    
    Route::delete('/user/{id}', [App\Http\Controllers\HomeController::class,'destroy']);
    Route::get('annonce', [App\Http\Controllers\AnnonceController::class,'getAnnonce']);
      
    
});


Route::get('getState',[App\Http\Controllers\AnnonceController::class, 'getState']);
Route::get('/',[App\Http\Controllers\AnnonceController::class, 'Show_annonce']);

Route::get('showAnnonce/{id}',[App\Http\Controllers\AnnonceController::class, 'showAnnonce']);
Route::get('search', [App\Http\Controllers\AnnonceController::class, 'search'])->name('search');


Auth::routes();
Route::get('{id}/show_detail', [App\Http\Controllers\AnnonceController::class,'show_details']);

//Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');