<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('singUp');
});


Route::get('/prod', function () {
    return view('index');
});