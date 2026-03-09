<?php

use Illuminate\Support\Facades\Route;

Route::get('/welcome-dev', function () {
    return view('dev_welcome');
});

Route::get('/developer/{name}', function ($name) {
    return view('developer', ['name' => $name]);
});
