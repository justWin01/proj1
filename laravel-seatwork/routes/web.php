<?php

use Illuminate\Support\Facades\Route;

Route::get('/welcome-dev', function () {
    return view('dev_welcome');
});
