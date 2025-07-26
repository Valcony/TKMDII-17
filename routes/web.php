<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home']);
});
Route::get('/events', function () {
    return view('ourEvents', ['title' => 'Our Events']);
})->name('ourEvents');

Route::get('/timeline', function () {
    return view('timeline', ['title' => 'Timeline']);
})->name('timeline');

// Route::fallback(function () {
//     return view('soon', ['title' => 'Page Not Found']);
// });
