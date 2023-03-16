<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\FacilityController;
use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PageController::class, 'homepage'])->name('/');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::post('/contact/send', [\App\Http\Controllers\PageController::class, 'sendContact'])->name('contact.send');

Route::get('/inschrijven', [PageController::class, 'signUp'])->name('signup');
Route::get('/admin/logout', [ A17\Twill\Http\Controllers\Admin\LoginController::class, 'logout'])->name('admin.logout');
Route::post('/inschrijven/send', [PageController::class, 'sendSignup'])->name('signup.send');


Route::get('/faciliteiten', [FacilityController::class, 'facilities'])->name('facilities');
Route::get('/faciliteiten/{name}', [FacilityController::class, 'show'])->name('facility.show');
Route::get('/nieuws', [NewsController::class, 'news'])->name('news');
Route::get('/nieuws/{name}', [NewsController::class, 'show'])->name('news.show');

// Show route
Route::get('/{name}', [PageController::class, 'show'])->name('show');
