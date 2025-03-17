<?php

use App\Http\Controllers\Admin\CustomerController;
use Illuminate\Support\Facades\Route;
use Livewire\Livewire;


Livewire::setUpdateRoute(function($handle){
    return Route::post('/server/wire',$handle);
});
Livewire::setScriptRoute(function($handle){
    return Route::get('/application.js',$handle);
});
Route::prefix("admin")->name('admin.')->group(function () {
    Route::get('/', \App\Http\Controllers\Admin\HomeController::class)->name('home');


    Route::controller(CustomerController::class)->prefix('customer')->name('customer.')->group(function(){
        Route::get('','index');
    });

});