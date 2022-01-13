<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Booking;

class BookingController extends Controller
{
    public function index($id)
    {
        $carts = Cart::all();
        $cart = $carts->intersect(Cart::whereIn('user_id', [$id])->get());
        return view('booking.checkout', compact('cart'));
    }

    public function pay($id, Request $request)
    {
    }
}
