<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.auth.auth-login');
});

Route::get('/dashboard', function () {
    $type_menu = 'dashboard';
    return view('pages.dashboard', compact('type_menu'));
});
