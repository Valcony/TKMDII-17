<?php

use Illuminate\Support\Facades\Route;
use App\Models\University;

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
Route::fallback(function () {
    return redirect()->view('soon');
});

Route::get('/delegation', function () {
    $universities = University::with('officer')->get(); // <--- GANTI 'liaison' MENJADI 'officer'
    return view('delegation', [
        'title' => 'Delegation',
        'universities' => $universities
    ]);
});
