@extends('layouts.adminLayout')

@section('konten')
<br>
<br>
<br>
<br>
<div class="container">
<form action="/admin/product" method="POST" enctype="multipart/form-data">
    @csrf
  <div class="mb-3">
    <label for="exampleInputText" class="form-label">Title</label>
    <input type="text" class="form-control" name="title" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputText" class="form-label">Price</label>
    <input type="number" class="form-control" name="price" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputText" class="form-label">Category</label>
    <select class="form-select" aria-label="Default select example" name="categorie">
      <option value="Man">Man</option>
      <option value="Women">Women</option>
      <option value="Accessories">Accessories</option>
      <option value="Decoration">Decoration</option>
      <option value="Other">Other</option>
    </select>
  </div>
 
  <div class="mb-3">
    <label for="exampleInputText" class="form-label">Description</label>
    <input type="text" class="form-control" name="desc" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputFile" class="form-label">Picture</label>
    <input type="file" class="form-control" name="picture" required>
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection