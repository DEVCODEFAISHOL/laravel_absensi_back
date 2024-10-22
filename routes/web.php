<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    $type_menu = 'dashboard';
    return view('pages.dashboard', compact('type_menu'));
});
Route::get('/login', function () {
    return view('pages.Auth.auth-login');
});