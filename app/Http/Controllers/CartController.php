<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;

class CartController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index($id)
    {
        $carts = Cart::all();
        $cart = $carts->intersect(Cart::whereIn('user_id', [$id])->get());
        return view('booking.cart', compact('cart'));
    }

    public function createCart(Request $request, $id)
    {
        $cek = Cart::where('product_id', $id)->where('user_id', $request->user_id)->exists();
        if ($cek != null) {
            $cek = Cart::where('user_id', $request->user_id)->exists();
            if ($cek !== null) {
                $tambah = Cart::where('product_id', $id)->where('user_id', $request->user_id)->get();
                $id = "";
                foreach ($tambah as $key) {
                    $id = $key->id;
                }
                $Cart = Cart::find($id);
                $quantity = $Cart->quantity;
                $quantity = $quantity + 1;
                $Cart->quantity = $quantity;
                $Cart->save();
            } else {
                $Cart = Cart::create([
                    'user_id' => $request['user_id'],
                    'product_id' => $request['product_id'],
                    'title' => $request['title'],
                    'price' => $request['price'],
                    'quantity' => $request['quantity'],
                    'picture' => $request['picture'],
                ]);
            }
        } else {
            $Cart = Cart::create([
                'user_id' => $request['user_id'],
                'product_id' => $request['product_id'],
                'title' => $request['title'],
                'price' => $request['price'],
                'quantity' => $request['quantity'],
                'picture' => $request['picture'],
            ]);
        }
        return redirect('/products');
    }

    public function minus(Request $request, $id)
    {
        $cek = Cart::where('product_id', $request->product_id)->where('user_id', $request->user_id)->exists();
        if ($cek != null) {
            $kurang = Cart::where('product_id', $request->product_id)->where('user_id', $request->user_id)->get();
            $id = "";
            foreach ($kurang as $key) {
                $id = $key->id;
            }
            $Cart = Cart::find($id);
            $quantity = $Cart->quantity;
            $quantity = $quantity - 1;
            $Cart->quantity = $quantity;
            $Cart->save();

            if ($quantity == 0) {
                $Cart = Cart::find($id);
                $Cart->delete();
            }
        }
        return redirect()->to('cart/' . $request->user_id);
    }

    public function plus(Request $request, $id)
    {
        $cek = Cart::where('product_id', $request->product_id)->where('user_id', $request->user_id)->exists();
        if ($cek != null) {
            $kurang = Cart::where('product_id', $request->product_id)->where('user_id', $request->user_id)->get();
            $id = "";
            foreach ($kurang as $key) {
                $id = $key->id;
            }
            $Cart = Cart::find($id);
            $quantity = $Cart->quantity;
            $quantity = $quantity + 1;
            $Cart->quantity = $quantity;
            $Cart->save();
        }
        return redirect()->to('cart/' . $request->user_id);
    }

    public function destroy(Request $request, $id)
    {
        $Cart = Cart::find($id);
        $Cart->delete();
        return redirect()->to('cart/' . $request->user_id);
    }
}
