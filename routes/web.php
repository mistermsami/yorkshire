<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('/');
Route::get('aboutus/', function () {
    return view('aboutus');
})->name('aboutus');
Route::get('hairtransplant/', function () {
    return view('hairtransplant');
})->name('hairtransplant');
Route::get('contactus/', function () {
    return view('contactus');
})->name('contactus');
