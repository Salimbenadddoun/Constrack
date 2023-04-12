<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('login');
});
Route::get('/dashboard', function () {
    return view('dashboardadmin');
});
Route::get('/profil', function () {
    return view('profil');
});
Route::get('/listefournisseur', function () {
    return view('listefournisseur');
});
Route::get('/ajouterfournisseur', function () {
    return view('ajouterfournisseur');
});
Route::get('/modifierfournisseur', function () {
    return view('modifierfournisseur');
});
Route::get('/achat', function () {
    return view('achat');
});
Route::get('/ajouterachat', function () {
    return view('ajouterachat');
});
Route::get('/vente', function () {
    return view('vente');
});
Route::get('/ajoutervente', function () {
    return view('ajoutervente');
});
Route::get('/client', function () {
    return view('client');
});
Route::get('/ajouterclient', function () {
    return view('ajouterclient');
});




