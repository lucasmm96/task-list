<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // return view('Main Page');
    return 'Main Page';
});

Route::get('/hello', function () {
    return 'This is hello page';
});

Route::get('hallo', function () {
    return redirect('/hello');
});

Route::get('/greet/{name}', function ($name) {
    // return 'Hi ' . $name . '!';
    return "Hi $name !!";
});