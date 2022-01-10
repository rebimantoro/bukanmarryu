<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Gallery;

class ViewDataController extends Controller
{
    public function index()
    {
        $gallery = Gallery::all();
        $product = Product::all();
        return view('Home', compact('gallery', 'product'));
    }
    public function register()
    {
        return view('auth.register');
    }
    public function indexGallery()
    {
        $gallery = Gallery::all();
        $jumlah = Gallery::count();
        return view('Home.gallery', compact('gallery', 'jumlah'));
    }
    public function indexProduct()
    {
        $product = Product::paginate(6);
        return view('Home.products', compact('product'));
    }
    public function indexContact()
    {
        return view('Home.contact');
    }
}
