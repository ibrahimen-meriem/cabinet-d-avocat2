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

Route::get('/acceuil', function () {
    return view('acceuil');
});
Route::get('/users', function () {
    return view('listeUsers');
});
Route::get("/",function (){
    return view("login") ;
}) ;


Route::get("/ajouterTache",function (){
    return view("ajouterTache") ;
}) ;




Route::get('/ajouterUser', function () {
    return view('AjouterUser');
});


Route::get('/clients',[\App\Http\Controllers\ClientsController::class,'index'])->name('clients');
Route::get('/affaires', function () {
    return view('affaires');
});

Route::get('/taches', function () {
    return view('tache');
});
Route::get('/parametres', function () {
    return view('parametres');
});
Route::get('/User', function () {
    return view('profilUser');
});

Route::get('/ajouterAffaire', function () {
    return view('ajouterAffaire');
});




Route::get('\create',[\App\Http\Controllers\ClientsController::class,'create'])->name("create-clients");
Route::match(['get', 'post'],'\store',[\App\Http\Controllers\ClientsController::class,'store'])->name("create-store");
Route::get('\edit\{id}',[\App\Http\Controllers\ClientsController::class,'edit'])->name("edit-clients");
Route::match(['get', 'post'],'\update\{id}',[\App\Http\Controllers\ClientsController::class,'update'])->name("updatclient");
Route::get('\delet\{id}',[\App\Http\Controllers\ClientsController::class,'destroy'])->name("delet-clients");
Route::match(['get', 'post'],'\ajax_search',[\App\Http\Controllers\ClientsController::class,'ajax_search'])->name("ajax_search");
Route::get('\show\{id}',[\App\Http\Controllers\ClientsController::class,'show'])->name("show-client");






