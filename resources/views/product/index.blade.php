@extends('layouts.adminLayout')

@section('konten')
<br>
<br>
<br>
<br>
<div class="container">
    <a href="/admin/product/create" class="btn btn-primary">Add Product</a>
    <table class="table table-striped">
    <thead>
        <tr>
        <th scope="col">No</th>
        <th scope="col">Title</th>
        <th scope="col">Categories</th>
        <th scope="col">Picture</th>
        <th scope="col">Description</th>
        <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @if($jumlah == 0)
        <tr>
           <td colspan="6" align="center"><b>No Data</b></td> 
        </tr>
        @else
        @foreach($product as $key)
        <tr>
        <th scope="row">1</th>
        <td>{{ $key->title }}</td>
        <td>{{ $key->categorie }}</td>
        <td><img src="{{asset('Template/images/'.$key->picture.'')}}" width="150px"></td>
        <td>{{ $key->desc }}</td>
        <td>
            <a href="/admin/product/{{$key->id}}/edit" class="btn btn-warning">Edit</a>
            <form action="/admin/product/{{$key->id}}/delete" method="POST">
                @csrf
                <button class="btn btn-danger" type="submit">Delete</button>
            </form>
        </td>
        </tr>
        @endforeach
        @endif
    </tbody>
    </table>
</div>
@endsection