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

Route::get('weight-loss/', function () {
    return view('weight-loss');
})->name('weight-loss');

Route::get('laser-hair-removal/', function () {
    return view('laser-hair-removal');
})->name('laser-hair-removal');

Route::get('hydra-ficial/', function () {
    return view('hydra-ficial');
})->name('hydra-ficial');

Route::get('tanning-bed/', function () {
    return view('tanning-bed');
})->name('tanning-bed');

Route::get('prp/', function () {
    return view('prp');
})->name('prp');

Route::get('contactus/', function () {
    return view('contactus');
})->name('contactus');

Route::get('hairblog/', function () { 
    return view('hairblog'); 
})->name('hairblog'); //route or page call by this name e.g (<a href='hairblog'>read more</a>)

Route::get('prpbenefits/', function () { 
    return view('prpbenefits'); 
})->name('prpbenefits');

