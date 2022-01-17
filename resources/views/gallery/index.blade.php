@extends('layouts.adminLayout')
@section ('gallery')
active
@endsection
@section('konten')
<h3 align="center" class="mt-5">Galleries List</h3>
<hr>
<div class="container">
    <div class="row">
        <div class="col-1"></div>
        <div class="col-10">
            <a href="/admin/gallery/create" class="btn btn-primary">Add Gallery</a>
            <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">Title</th>
                    <th scope="col">Picture</th>
                    <th scope="col">Description</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    
                    @if($jumlah == 0)
                    <tr>
                        <td colspan="5" align="center"><b>No Data</b></td> 
                    </tr>
                    @else
                    @foreach($gallery as $key=>$item)
                    <tr>
                    <th scope="row">{{ $gallery->firstItem() + $key}}</th>
                    <td>{{ $item->title }}</td>
                    <td><img src="{{asset('Template/images/'.$item->picture.'')}}" width="150px"></td>
                    <td>{{ $item->desc }}</td>
                    <td>
                        <div class="d-flex flex-row bd-highlight">
                            <a href="/admin/gallery/{{$item->id}}/edit" class="btn btn-warning">Edit</a>
                            <form action="/admin/gallery/{{$item->id}}/delete" method="POST">
                                @csrf
                                <button class="btn btn-danger" type="submit" name="delete">Delete</button>
                                
                            </form>
                        </div>
                        
                    </td>
                    </tr>
                    @endforeach
                    
                    @endif
                </tbody>
                </table>
        </div>
        <div class="col-1"></div>
    </div>

        <!-- pagination -->

        <div class="pagination justify-content-center mt-5">

        {{$gallery -> links()}}

        </div>

</div>
@endsection