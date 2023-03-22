<?php

use App\Http\Controllers\candidatController;
use App\Http\Controllers\inscription\candidatsController;
use App\Http\Controllers\inscription\PostInscriptionController;
use Illuminate\Support\Facades\Route;

Route::get("home",function(){

    return view("home");
})
->middleware(['auth', 'verified'])
->name("home");

Route::get("inscriptions",function(){

    return view("inscriptions");
})
->middleware(['auth', 'verified'])
->name("inscription");

Route::get("re-inscription",function(){

    return view("re-inscription");
})
->middleware(['auth', 'verified'])
->name("re-inscription");

Route::get("info_candidat",function(){
    return view("info_candidat");
})
->middleware(['auth', 'verified'])
->name("info_candidat");

Route::get("info_etudiant",function(){
    return view("info_etudiant");
})
->middleware(['auth', 'verified'])
->name("info_etudiant");

Route::get("autorisation",function(){
    return view("autorisation");
})
->middleware(['auth', 'verified'])
->name("autorisation");

Route::get("fiche_renseignement",function(){
    return view("fiche_renseignement");
})
->middleware(['auth', 'verified'])
->name("fiche_renseignement");

Route::get("periode",function(){
    return view("periode");
})
->middleware(['auth', 'verified'])
->name("fiche_renseignement");



Route::get('accepturl', [candidatController::class, 'accepturl'])->middleware(['auth', 'verified'])->name("accepturl");
Route::get('cancelurl', [candidatController::class, 'cancelurl'])->middleware(['auth', 'verified'])->name("cancelurl");
Route::get('declineurl', [candidatController::class, 'declineurl'])->middleware(['auth', 'verified'])->name("declineurl");
Route::post('/Candidat_nouveau', [candidatsController::class,'candidat_nv'])->middleware(['auth', 'verified'])->name('recherche_candidat');
Route::post('/etudiant', [candidatsController::class,'candidat_an'])->middleware(['auth', 'verified'])->name('recherche_etudiant');
Route::post('/autorisation_etudiant', [PostInscriptionController::class,'autorisation_an'])->middleware(['auth', 'verified'])->name('autorisation_an');
Route::resource('/autorisation', PostInscriptionController::class)->middleware(['auth', 'verified']);
Route::get('notification', [candidatController::class, 'notification'])->name("notification");


