<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome()
    {
        $booking = Booking::all();
        return view('adminHome', compact('booking'));
    }

    public function adminEditHome($id)
    {
        $bookings = Booking::all();
        $booking = $bookings->intersect(Booking::whereIn('id', [$id])->get());
        return view('adminEditHome', compact('booking'));
    }

    public function adminUpdateHome(Request $request)
    {
        $booking = Booking::find($request->id);
        $booking->status = $request->status;
        $booking->save();
        return redirect('/admin/home');
    }
}
