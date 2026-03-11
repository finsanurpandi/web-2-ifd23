<?php

use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    $data = [];
    return view('welcome', $data);
});

Route::redirect('/', '/welcome');

Route::view('greeting', 'welcome');

// Route::get('/user/{name}', function($name) {
//     return "Hello ". $name;
// });

Route::get('/user/{name?}', function($name = null) {
    if (is_null($name)) {
        return "Hello there...";
    } else {
        return "Hello ". $name;
    }
})->name('user');

Route::prefix('admin')
    ->name('admin.')
    ->group(function() {
        Route::get('/welcome', function () {
            return view('welcome');
        })->name('user'); // route('admin.user')
        // '/admin/welcome
        Route::get('/greeting', function () {
            return view('welcome');
        }); // '/admin/greeting
    });