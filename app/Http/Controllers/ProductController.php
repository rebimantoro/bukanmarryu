<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{

    public function __construct()
    {
        $this->middleware('is_admin');
    }
    public function productAdmin()
    {
        $product = Product::paginate(5);
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
        return view('product.edit', compact('product'));
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
