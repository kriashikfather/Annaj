<?php

namespace App\Http\Controllers\API;

use App\Models\User;
use App\Models\Order;
use App\Models\Payment;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
   public function index()
    {
        return response()->json([
            'status' => 'success',
            'data' => [
                'total_users'    => User::count(),
                'total_products' => Product::count(),
                'total_orders'   => Order::count(),
                'total_payments' => Payment::count(),
            ]
        ], 200);
    }
}
