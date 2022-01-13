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

    public function bookingIndex($id)
    {
        $bookings = Booking::all();
        $booking = $bookings->intersect(Booking::whereIn('id_user', [$id])->get());
        return view('booking.booking', compact('booking'));
    }

    public function indexPay($id, Request $request)
    {
        $booking = Booking::create([
            'id_user' => $id,
            'product' => $request['product'],
            'username' => $request['username'],
            'first_name' => $request['first_name'],
            'last_name' => $request['last_name'],
            'email' => $request['email'],
            'no_hp' => $request['no_hp'],
            'street' => $request['street'],
            'city' => $request['city'],
            'postal_code' => $request['postal_code'],
            'total_price_before_discount' => $request['total_price_before_discount'],
            'total_price' => $request['total_price'],
            'total_item' => $request['total_item'],
            'proof' => $request['proof'],
            'status' => $request['status'],
            'feedback' => $request['feedback'],
        ]);

        $booking = Booking::where('id_user', [$id])->latest()->take(1)->get();
        $cart = Cart::where('user_id', [$id])->delete();
        return view('booking.payment', compact('booking'));
    }

    public function payment(Request $request, $id)
    {
        if ($request->proof !== null) {
            $request->validate([
                'proof' =>  'required|image|mimes:jpeg,png,jpg,svg',
            ]);
            $proofName = time() . '.' . $request->proof->extension();
            $request->proof->move(public_path('/Template/images'), $proofName);

            $booking = Booking::find($id);
            $booking->proof = $proofName;
            $booking->save();
        }
        $bookings = Booking::all();
        $booking = $bookings->intersect(Booking::whereIn('id_user', [$request->id_user])->get());
        return view('booking.booking', compact('booking'));
    }
}
