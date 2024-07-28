<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    echo 'test';
});

Route::get('/movie', function () {
    echo 'movie';
});
