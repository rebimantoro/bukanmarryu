<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

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

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function productAdmin()
    {
        $product = Product::all();
        $jumlah = Product::count();
        return view('product.index', compact('product', 'jumlah'));
    }

    public function create()
    {
        return view('product.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'picture' =>  'required|image|mimes:jpeg,png,jpg,svg',
        ]);
        $pictureName = time() . '.' . $request->picture->extension();
        $request->picture->move(public_path('/Template/images'), $pictureName);

        $Product = Product::create([
            'title' => $request['title'],
            'desc' => $request['desc'],
            'categorie' => $request['categorie'],
            'price' => $request['price'],
            'picture' => $pictureName,
        ]);
        return redirect('/admin/product');
    }
    public function edit($id)
    {
        $product = Product::find($id);
        return view('Product.edit', compact('product'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'picture' =>  'required|image|mimes:jpeg,png,jpg,svg',
        ]);
        $pictureName = time() . '.' . $request->picture->extension();
        $request->picture->move(public_path('/Template/images'), $pictureName);
        $Product = Product::find($id);

        $Product->title = $request->title;
        $Product->desc = $request->desc;
        $Product->categorie = $request->categorie;
        $Product->price = $request->price;
        $Product->picture = $pictureName;
        $Product->save();
        return redirect('/admin/product');
    }
    public function destroy($id)
    {
        $Product = Product::find($id);
        $Product->delete();
        return redirect('/admin/product');
    }
}
