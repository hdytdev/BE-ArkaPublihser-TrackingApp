<?php

use App\Http\Middleware\AppAuthMiddleware;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

// Route::name('auth.')->group(function () {
//     Volt::route("login", "auth.login")->name('login');
// });

// Route::name('authed.')->middleware([AppAuthMiddleware::class])->group(function () {
//     Volt::route('/', 'dashboard')->name('dashboard');
//     Volt::route('customers','customer.index')->name('customer.index');


//     Route::prefix('journal')->name('journal.')->group(function(){
//         Volt::route('/new', componentName: 'journal.add')->name('add');
//         Volt::route('/{journal_id}/edit', componentName: 'journal.add')->name('edit');
//         Volt::route('/{category}', 'journal.list')->name('index');
//     });
//     Route::prefix('cursomer')->name("customer.")->group(function(){
//         Volt::route('/new','customer.form')->name('add');
//     });
// });
