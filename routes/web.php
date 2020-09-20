<?php

use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Home', [
        'page' => 'Home'
    ]);
});
Route::get('/about', function () {
    return Inertia::render('About', [
        'page' => 'About'
    ]);
});
Route::get('/contact', function () {
    return Inertia::render('Contact', [
        'page' => 'Contact'
    ]);
});
Route::resource('/users', 'UserController');
