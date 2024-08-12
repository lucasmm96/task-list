<?php

use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('tasks.index');
});

Route::get('/tasks', function () {
    return view('index', ['tasks' => \App\Models\Task::latest()->get()]);
})->name('tasks.index');

Route::get('/tasks/{id}', function ($id) {
  return view('show', ['task' => \App\Models\Task::findOrFail($id)]);
})->name('tasks.show');

Route::fallback(function () {
    return 'Page not found!!!';
});
