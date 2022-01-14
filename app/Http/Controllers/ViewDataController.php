<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Gallery;
use App\Models\User;
use App\Models\Feedback;
use Illuminate\Support\Facades\Hash;

class ViewDataController extends Controller
{
    public function index()
    {
        $gallery = Gallery::all();
        $product = Product::all();
        $feedback = Feedback::all();
        return view('Home', compact('gallery', 'product', 'feedback'));
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
        $search = request()->query('search');
        if ($search){
            $product = Product::where('title', 'like', "%{$search}%")->paginate(6);

        }
        else{
            $product = Product::paginate(6);
        }

        return view('Home.products', compact('product'));
    }

    public function indexCategoryProduct($id)
    {
        $product = Product::where('categorie', $id)->paginate(6);
        $categorie = $id;
        return view('Home.products', compact('product', 'categorie'));
    }
    public function indexContact()
    {
        return view('Home.contact');
    }

    public function indexProfile($id)
    {
        $users = User::all();
        $user = $users->intersect(User::whereIn('id', [$id])->get());
        return view('Home.profile', compact('user'));
    }

    public function updateProfile(Request $request, $id)
    {
        $user = User::find($id);
        if ($request->picture !== null) {
            $cek = $request->password;
            if (Hash::check($cek, $user->password)) {
                $request->validate([
                    'picture' =>  'required|image|mimes:jpeg,png,jpg,svg',
                ]);
                $pictureName = time() . '.' . $request->picture->extension();
                $request->picture->move(public_path('/Template/images'), $pictureName);
                $user = User::find($id);
                $user->picture = $pictureName;
                $user->name = $request->name;
                $user->no_hp = $request->no_hp;
                $user->save();
            }
        }
        return redirect('profile/' . $id);
    }
}
