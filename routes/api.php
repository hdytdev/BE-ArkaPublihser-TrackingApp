<?php

use App\Http\Controllers\Api\TrackingController;
use Illuminate\Support\Facades\Route;

Route::get('/tracking/{order_id}', [TrackingController::class, 'index']);