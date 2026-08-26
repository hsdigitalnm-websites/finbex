<?php

use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.home')->name('home');
Route::view('/about', 'pages.about')->name('about');
Route::view('/services', 'pages.services')->name('services');

Route::get('/services/{slug}', [ServiceController::class, 'show'])
    ->where('slug', 'unsecured-business-loans|mca-pos-loans|working-capital-cc-od|machinery-equipment-loans|loan-against-property|invoice-discounting')
    ->name('service.details');

Route::view('/faq', 'pages.faq')->name('faq');
Route::view('/team', 'pages.team')->name('team');
Route::view('/contact', 'pages.contact')->name('contact');
