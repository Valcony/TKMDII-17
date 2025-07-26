<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home']);
});
Route::get('/ourEvents', function () {
    return view('ourEvents', ['title' => 'Our Events']);
})->name('ourEvents');
Route::get('/a', function () {
    return view('partials.navbar', ['title' => 'Coming Soon']);
});
Route::fallback(function () {
    return view('soon', ['title' => 'Page Not Found']);
});
