<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/download-resume', function () {
    $file = public_path('resume.pdf');
    return response()->download($file);
})->name('download.resume');
