<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home');

Route::post('home', function () {
    request()->validate([
        'name' => 'required|min:3',
    ]);

    return back();
});
