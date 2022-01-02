@extends('layouts.adminLayout')

@section('konten')
<br>
<br>
<br>
<br>
<div class="container">
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
        <?php $i=1;?>
        @foreach($gallery as $key)
        <tr>
        <th scope="row">{{ $i }}</th>
        <td>{{ $key->title }}</td>
        <td><img src="{{asset('Template/images/'.$key->picture.'')}}" width="150px"></td>
        <td>{{ $key->desc }}</td>
        <td>
            <a href="/admin/gallery/{{$key->id}}/edit" class="btn btn-warning">Edit</a>
            <form action="/admin/gallery/{{$key->id}}/delete" method="POST">
                @csrf
                <button class="btn btn-danger" type="submit">Delete</button>
            </form>
        </td>
        </tr>
        <?php $i=$i+1; ?>
        @endforeach
        
        @endif
    </tbody>
    </table>
</div>
@endsection