<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
require __DIR__.'/auth.php';

Route::view('/', 'welcome');

Route::middleware(['auth'])->group(function(){
    Route::get('/chat', [PageController::class, 'index'])->name('dashboard');
});

