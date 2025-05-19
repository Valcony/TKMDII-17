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
Route::get('/ourEvents', function () {
    return view('ourEvents', ['title' => 'Our Events']);
})->name('ourEvents');
// Route::get('/', function () {
//     return view('soon', ['title' => 'Coming Soon']);
// });
Route::fallback(function () {
    return redirect()->view('soon');
});
