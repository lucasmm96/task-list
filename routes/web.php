<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // return view('Main Page');
    return view('index', [
       'name' => 'Lucas'
    ]);
});

Route::get('/hello', function () {
    return 'This is hello page';
})->name('hello');

Route::get('hallo', function () {
    return redirect()->route('hello');
});

Route::get('/greet/{name}', function ($name) {
    // return 'Hi ' . $name . '!';
    return "Hi $name !!";
});

Route::fallback(function () {
    return 'Page not found!!!';
});