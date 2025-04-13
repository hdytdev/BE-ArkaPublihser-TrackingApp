<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\OrderResources;
use App\Models\Order;
use Illuminate\Http\Request;

class TrackingController extends Controller
{
    public function index($trx_id)
    {
        $order = Order::with(['article' => ['fileHistory'], 'customer', 'termin', 'notes'])->where('order_number', $trx_id)->first();


        if (!$order) {
            return response()->json([
                'status' => false,
                'message' => "Order tidak ditemukan!"
            ]);
        }

        return response()->json([
            'status' => true,
            'data' => [
                'order' => OrderResources::make($order),
            ]
        ]);
    }
}
