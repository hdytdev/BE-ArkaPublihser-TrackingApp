<?php
use App\Livewire\CustomerList;
use App\Livewire\Dashboard;
use App\Livewire\FormCustomer;
use App\Livewire\FormJournal;
use App\Livewire\FormOrder;
use App\Livewire\FormUser;
use App\Livewire\JournalList;
use App\Livewire\OrderDetail;
use App\Livewire\OrderLists;
use App\Livewire\UserManagement;
use Illuminate\Support\Facades\Route;
use Livewire\Livewire;
use App\Http\Middleware\AuthMiddleware;

Livewire::setUpdateRoute(function ($handle) {
    return Route::post('/server/wire', $handle);
});
Livewire::setScriptRoute(function ($handle) {
    return Route::get('/application.js', $handle);
});
Route::redirect('/', 'login');
Route::view('login', 'login')->name('login');
Route::prefix("admin")->middleware(AuthMiddleware::class)->name('admin.')->group(function () {
    Route::get('/', Dashboard::class)->name('home');
    Route::get('/customer', CustomerList::class)->name('customer');
    Route::get('/customer/new', FormCustomer::class)->name('customer.new');
    Route::get('/edit-customer/{id?}', FormCustomer::class)->name('customer.edit');
    Route::get('/tambah-journal', FormJournal::class)->name('journal.new');
    Route::get('/edit-journal/{id?}', FormJournal::class)->name('journal.edit');
    Route::get('/journal/{category?}', JournalList::class)->name('journal');
    Route::get('/order', OrderLists::class)->name('order');
    Route::get('/new-order', action: FormOrder::class)->name('order.new');
    Route::get('/order/{order_id}/edit', action: FormOrder::class)->name('order.edit');
    Route::get('/order-detail/{order_id}', OrderDetail::class)->name('order.detail');
    Route::get('/user_management', UserManagement::class)->name('user');
    Route::get('/user/edit/{id}', FormUser::class)->name('user.edit');
    Route::get('/user/new', FormUser::class)->name('user.new');

});

