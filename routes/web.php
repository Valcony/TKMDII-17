<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('home', ['title' => 'Home']);
// });
Route::get('/', function () {
    return view('soon', ['title' => 'Coming Soon']);
});
Route::get('/ourEvents', function () {
    return view('ourEvents', ['title' => 'Our Events']);
})->name('ourEvents');
Route::fallback(function () {
    return redirect()->view('soon');
});
