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
        'title' => 'My Activity Page',
        'heading' => 'Work'
    ]);
});
