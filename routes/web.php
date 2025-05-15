<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('home', ['title' => 'Home']);
// });
Route::get('/', function () {
    return view('soon', ['title' => 'Coming Soon']);
});
Route::fallback(function () {
    return redirect()->view('soon');
});