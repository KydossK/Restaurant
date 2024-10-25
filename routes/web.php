<?php

use App\Http\Controllers\AdminContactController;
use App\Http\Controllers\CarteController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/carte', [CarteController::class, 'index'])->name('carte');

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');

Route::get('/admin/contact', [AdminContactController::class, 'index'])->name('admin.contact.index');


route::get('/test', function(){
    // affiche la vue enfant.blade.php
    return view('enfant');
});