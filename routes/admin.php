<?php

use Illuminate\Support\Facades\Route;

// Register Twill routes here eg.
// Route::module('posts');

Route::module('members');
Route::module('doctors');
Route::module('pages');
Route::module('headers');
Route::module('facilities');
Route::module('news');
Route::module('farriers');


// Custom Routes
Route::get('/leden/mail', [\App\Http\Controllers\PageController::class, 'ledenMail'])->name('leden.mail');
