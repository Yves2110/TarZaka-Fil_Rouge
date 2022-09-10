<?php

use App\Http\Controllers\Auth\ForgotPasswordController;
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

Route::get('Login', [LoginController::class, 'loginView'])->name('auth.login');
Route::post('login', [LoginController::class, 'authenticate'])->name('login');
Route::post('store', [LoginController::class, 'store'])->name('store');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');
Route::get('secretaire', [LoginController::class, 'index'])->name('secretaire');
Route::get('AjoutSecretaire', [LoginController::class, 'create'])->name('secretaireform');
Route::post('destroy', [LoginController::class, 'destroye'])->name('destroye');

//route pour les locataires

Route::get('locataires', [LocataireController::class, 'index'])->name('locataires');
Route::get('AjoutLocataire', [LocataireController::class, 'create'])->name('Locataire_Form');
Route::post('store', [LocataireController::class, 'store'])->name('Locataire_store');

Route::get('/', function () {
    return view('welcome');
});

//route page d'acceuil
Route::get('/home', [MaisonController::class, "index"])->name('home');

//route pour les maisons
// Route::resource("maisons", MaisonController::class);
Route::get('maisons.index', [MaisonController::class, "index"])->name('maisons.index');
Route::get('maisons.create', [MaisonController::class, "create"])->name('maisons.create');
Route::post('maisons.store', [MaisonController::class, "store"])->name('maisons.store');
Route::post('maisons.destroy', [MaisonController::class, "destroy"])->name('maisons.destroy');


//route pour les bailleurs

// Route::get('bailleurs',[BailleurController::class,'index'])->name('bailleurs');
Route::get('Ajoutbailleurs', [BailleurController::class, 'create'])->name('bailleur_Form');
// Route::post('Ajoutbailleurs',[BailleurController::class,'store'])->name('store');
Route::resource("bailleurs", BailleurController::class);



//route pour route les factures

Route::get('factures', [FactureController::class, 'index'])->name('factures');

//route pour la reinitialized

Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');

Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post');

Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');

Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');
