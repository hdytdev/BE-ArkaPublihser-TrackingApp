<?php

use App\Http\Middleware\AppAuthMiddleware;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::name('auth.')->group(function () {
    Volt::route("login", "auth.login")->name('login');
});

Route::name('authed.')->middleware([AppAuthMiddleware::class])->group(function () {
    Volt::route('/', 'dashboard')->name('dashboard');
    Volt::route('customers','customer.index')->name('customer.index');


    Route::prefix('journal')->name('journal.')->group(function(){
        Volt::route('/new', componentName: 'journal.add')->name('add');
        Volt::route('/{category}', 'journal.list')->name('index');

    });
});
