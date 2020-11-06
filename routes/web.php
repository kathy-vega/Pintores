<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/leoDa', 'Pintores@vinci');
Route::get('/rafaSa', 'Pintores@raf');
Route::get('/dona', 'Pintores@cara');
Route::get('/nigAng', 'Pintores@dona');
Route::get('/cara', 'Pintores@angel');
Route::get('/principal', 'Pintores@princi');
