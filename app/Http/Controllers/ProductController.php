<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function productIndex()
    {
        return view('home.products');
    }

    public function contactIndex()
    {
        return view('home.contact');
    }
}
