<?php

use App\Http\Middleware\AppAuthMiddleware;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::name('auth.')->group(function () {
    Volt::route("login", "auth.login")->name('login');
});

Route::name('authed.')->middleware([AppAuthMiddleware::class])->group(function () {
    Volt::route('/', 'dashboard')->name('dashboard');
});
