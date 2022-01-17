@extends('layouts.adminLayout')
@section ('products')
active
@endsection
@section('konten')
<h3 align="center" class="mt-5">Products List</h3>
<hr>
<div class="row">
    <div class="col-1"></div>
    <div class="col-10">
        <div class="container">
            <a href="/admin/product/create" class="btn btn-primary">Add Product</a>

            <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">No</th>
                <th scope="col">Title</th>
                <th scope="col">Price</th>
                <th scope="col">Categories</th>
                <th scope="col">Picture</th>
                <th scope="col">Description</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @if($jumlah == 0)
                <tr>
                    <td colspan="7" align="center"><b>No Data</b></td> 
                </tr>
                @else
                @foreach($product as $key=> $item)
                <tr>
                <th scope="row">{{ $product->firstItem() + $key }}</th>
                <td>{{ $item->title }}</td>
                <td>{{ $item->price }}</td>
                <td>{{ $item->categorie }}</td>
                <td><img src="{{asset('Template/images/'.$item->picture.'')}}" width="150px"></td>
                <td>{{ $item->desc }}</td>
                <td>
                    <div class="d-flex flex-row bd-highlight">
                        <a href="/admin/product/{{$item->id}}/edit" class="btn btn-warning">Edit</a>
                        <form action="/admin/product/{{$item->id}}/delete" method="POST">
                            @csrf
                            <button class="btn btn-danger ms-2" type="submit">Delete</button>
                        </form>
                    </div>
                    
                </td>
                </tr>

                @endforeach
                @endif
            </tbody>
            </table>
            
            <div class="pagination justify-content-center mt-5">
        
        {{$product -> links()}}
        
        </div>
        </div>
    </div>
    <div class="col-1"></div>
</div>


@endsection