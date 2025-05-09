<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home']);
});
Route::get('/events', function () {
    return view('partials.events', ['title' => 'Our Events']);
});
