<?php

use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\PageControllers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ServiceController;


Route::get('/', [PageControllers::class, 'home'])->name('home');
Route::get('services', [PageControllers::class, 'services'])->name('services');
Route::get('places', [PageControllers::class, 'places'])->name('places');
Route::get('about', [PageControllers::class, 'about'])->name('about');
Route::get('contact', [PageControllers::class, 'contact'])->name('contact');


Route::post('/contact', [PageControllers::class, 'submitContactEnquiry'])->name('contact.store');



Route::post('/service_enquiries', [PageControllers::class, 'submitServiceEnquiry'])->name('service_enquiries.store');



