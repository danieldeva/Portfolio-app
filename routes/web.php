<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('portfolio');
})->name('portfolio');

Route::get('/resume', function () {
    return response()->download(public_path('resume.pdf'), 'Devaraju_R_Resume.pdf');
})->name('resume.download');
