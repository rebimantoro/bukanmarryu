@extends('layouts.adminLayout')

@section('konten')
<br>
<br>
<br>
<br>
<div class="container">
<form action="/admin/gallery/{{$gallery->id}}" method="POST" enctype="multipart/form-data">
    @csrf
  <div class="mb-3">
    <label for="exampleInputText" class="form-label">Title</label>
    <input type="text" class="form-control" name="title" value="{{$gallery->title}}" required >
  </div>
  <div class="mb-3">
    <label for="exampleInputText" class="form-label">Description</label>
    <input type="text" class="form-control" name="desc" value="{{$gallery->desc}}" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputFile" class="form-label">Picture</label><br>
    <img src="{{asset('Template/images/'.$gallery->picture.'')}}" alt="" width="250"><br>
    <br><input type="file" class="form-control" name="picture" required>
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection