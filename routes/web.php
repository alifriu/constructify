<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing');
});

Route::get('/belanja', function () {
    return view('belanja');
});

Route::get('/history', function () {
    return view('history');
});
