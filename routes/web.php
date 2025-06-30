<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home']);
});
// Route::get('/', function () {
//     return view('soon', ['title' => 'Coming Soon']);
// });


// Route::fallback(function () {
//     return redirect()->view('soon');
// });
Route::get('/ourEvents', function () {
    return view('ourEvents', ['title' => 'Our Events']);
})->name('ourEvents');

Route::get('/timeline', function () {
    return view('timeline-page', ['title' => 'Timeline']);
})->name('timeline');
// Route::get('/', function () {
//     return view('soon', ['title' => 'Coming Soon']);
// });
// Route::fallback(function () {
//     return redirect()->view('soon');
// });
// Route::get('/', function () {
//     return view('soon', ['title' => 'Coming Soon']);
// });
Route::fallback(function () {
    return view('soon', ['title' => 'Page Not Found']);
});
