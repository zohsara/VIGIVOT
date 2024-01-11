<?php

use App\Http\Controllers\demandCompte;
use App\Http\Controllers\users;
use App\Models\demand;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|x
*/
Route::post('/master', [users::class,"generateQRCode"])->middleware('auth')->name('qrcode');
Route::view('/master', [users::class,"generateQRCode"])->middleware('auth')->name('qrcode');


Route::get('/login', function () {
    return view('login');
});

//
Route::get('/login', function () {
    return view('login');
});
Route::post('/login', [users::class,"loginUser"])->name('login');
//

Route::get('/master', function () {
    return view('master');
});



Route::get('/codeqr', function () {
    return view('codeqr');
});

Route::get('/carte', function () {
    return view('carte');
});

Route::get('/cartesenegale', function () {
    return view('cartesenegale');
});

Route::get('/tables', function () {
    return view('tables');
});
//debut -------------------

Route::get('/tables', [demandCompte::class,"index"]);
//fin   -------------------
//debut -------------------
Route::get('/', function () {
    return view('acceuil');
});

Route::get('/acceuil', function () {
    return view('acceuil');
});

Route::post('/acceuil', [demandCompte::class,"demandeUser"])->name('demande');
//fin -------------------

//debut-------------------------
Route::get('/user-info', [users::class, 'info_Utilisateur_Connecte'])->name('user.info');

//fin-----------------------------


Route::get("codeqr", [users::class,"generate"]);
//Route::post('/inscription', [inscription::class,"register"])->name('registers');

Route::get('/register',function(){
    return view('register');
});
Route::post('/register', [users::class,"registerUser"])->name('register');


Route::get('/password', function () {
    return view('password');
});