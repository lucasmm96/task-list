<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // return view('Main Page');
    return 'Main Page';
});

Route::get('/hello', function () {
    return 'This is hello page';
});