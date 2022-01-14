@extends('layouts.adminLayout')

@section('konten')
<br>
<br>
<br>
<br>
<div class="container">
<form action="/admin/product/{{$product->id}}" method="POST" enctype="multipart/form-data">
    @csrf
  <div class="mb-3">
    <label for="exampleInputText" class="form-label">Title</label>
    <input type="text" class="form-control" name="title" value="{{$product->title}}" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputText" class="form-label">Price</label>
    <input type="number" class="form-control" name="price" value="{{$product->price}}" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputText" class="form-label">Category</label>
    <select class="form-select" aria-label="Default select example" name="categorie">
    <?php $list=['Man','Women','Accessories','Decoration','Other']; ?>
    @foreach ($list as $key)
    @if ($key ==$product->categorie )
    <option value="{{ $product->categorie }}" selected>{{ $product->categorie }}</option>
    @else 
    <option value="{{ $key }}">{{ $key}}</option>
    @endif
    @endforeach
    </select>
  </div>
  <div class="mb-3">
    <label for="exampleInputText" class="form-label">Description</label>
    <input type="text" class="form-control" name="desc" value="{{$product->desc}} " required>
  </div>
  <div class="mb-3">
    <label for="exampleInputFile" class="form-label">Picture</label><br>
    <img src="{{asset('Template/images/'.$product->picture.'')}}" alt="" width="250"><br>
    <br><input type="file" class="form-control" name="picture">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection