<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/nettoyage-canape', function () {
    return view('nettoyage_de_canape');
});
Route::get('/nettoyage-tapis', function () {
    return view('nettoyage_de_tapis');
});
Route::get('/nettoyage-matelas', function () {
    return view('nettoyage_de_matelas');
});
Route::get('/nettoyage-textiles', function () {
    return view('nettoyage_textiles');
});
Route::get('/remis-en-etat', function () {
    return view('remis_en_etat');
});
Route::get('/fin_de_chantier', function () {
    return view('fin_de_chantier');
});
