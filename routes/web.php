<?php

use App\Http\Controllers\BailleurController;
use App\Http\Controllers\FactureController;
use App\Http\Controllers\LocataireController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MaisonController;
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
Route::post('store',[LoginController::class,'store'])->name('store');
Route::get('logout',[LoginController::class,'logout'])->name('logout');
Route::get('secretaire',[LoginController::class,'index'])->name('secretaire');
Route::get('AjoutSecretaire',[LoginController::class,'create'])->name('secretaireform');
Route::post('destroy',[LoginController::class,'destroye'])->name('destroye');

//route pour les locataires

Route::get('locataires',[LocataireController::class,'index'])->name('locataires');
Route::get('AjoutLocataire',[LocataireController::class,'store'])->name('Locataire_Form');

Route::get('/', function () {
    return view('welcome');
});

//route page d'acceuil
Route::get('/home', [MaisonController::class, "index"])->name('home');

//route pour les maisons
Route::resource("maisons", MaisonController::class);


//route pour les bailleurs

// Route::get('bailleurs',[BailleurController::class,'index'])->name('bailleurs');
Route::get('Ajoutbailleurs',[BailleurController::class,'create'])->name('bailleur_Form');
// Route::post('Ajoutbailleurs',[BailleurController::class,'store'])->name('store');
Route::resource("bailleurs", BailleurController::class);



//route pour route les factures

Route::get('factures',[FactureController::class,'index'])->name('factures');
