<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;

class GalleryController extends Controller
{
    public function __construct()
    {
        $this->middleware('is_admin');
    }

    public function galleryAdmin()
    {
        $gallery = Gallery::paginate(5);
        $jumlah = Gallery::count();
        return view('gallery.index', compact('gallery', 'jumlah'));
    }

    public function create()
    {
        return view('gallery.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'picture' =>  'required|image|mimes:jpeg,png,jpg,svg',
        ]);
        $pictureName = time() . '.' . $request->picture->extension();
        $request->picture->move(public_path('/Template/images'), $pictureName);

        $gallery = Gallery::create([
            'title' => $request['title'],
            'desc' => $request['desc'],
            'picture' => $pictureName,
        ]);
        return redirect('/admin/gallery');
    }
    public function edit($id)
    {
        $gallery = Gallery::find($id);
        return view('gallery.edit', compact('gallery'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'picture' =>  'required|image|mimes:jpeg,png,jpg,svg',
        ]);
        $pictureName = time() . '.' . $request->picture->extension();
        $request->picture->move(public_path('/Template/images'), $pictureName);
        $gallery = Gallery::find($id);

        $gallery->title = $request->title;
        $gallery->desc = $request->desc;
        $gallery->picture = $pictureName;
        $gallery->save();
        return redirect('/admin/gallery');
    }
    public function destroy($id)
    {
        $gallery = Gallery::find($id);
        $gallery->delete();
        return redirect('/admin/gallery');
    }
}
