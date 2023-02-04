<?php

use Codersgift\Contact\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'web'], function () {
    Route::get('/contact-customer', [ContactController::class, 'index'])->name('contact.customer');
    Route::post('/contact-customer', [ContactController::class, 'store'])->name('contact.store');
});
