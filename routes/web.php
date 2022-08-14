<?php

use App\Http\Controllers\LocataireController;
use App\Http\Controllers\LoginController;
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
Route::get('Login',[LoginController::class,'loginView'])->name('auth.login');
Route::post('login',[LoginController::class,'authenticate'])->name('login');
Route::get('logout',[LoginController::class,'logout'])->name('logout');

//route pour les locataires

Route::get('locataires',[LocataireController::class,'index'])->name('locataires');
Route::get('AjoutLocataire',[LocataireController::class,'store'])->name('Locataire_Form');

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', function () {
    return view('layouts.home');
})->name('home');


Route::get('/bailleur', function () {
    return view('pages.bailleurs');
})->name('Bailleurs');
