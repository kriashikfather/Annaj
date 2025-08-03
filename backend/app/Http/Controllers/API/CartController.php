<?php

namespace App\Http\Controllers\Api;

use App\Models\Cart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CartController extends Controller
{
    public function index() {
        return Cart::all();
    }

    public function store(Request $request) {
        $cart = Cart::create($request->all());
        return response()->json($cart, 201);
    }

    public function show(Cart $cart) {
        return $cart;
    }

    public function update(Request $request, Cart $cart) {
        $cart->update($request->all());
        return response()->json($cart, 200);
    }

    public function destroy(Cart $cart) {
        $cart->delete();
        return response()->json(null, 204);
    }
}
