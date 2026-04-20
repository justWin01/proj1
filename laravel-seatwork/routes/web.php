<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/developer/{name}', function ($name) {
    return view('developer', ['name' => $name]);
});

Route::get('/activity', function () {
    return view('activity', [
        'heading' => 'Pig Disease Detection Dashboard'
    ]);
});
