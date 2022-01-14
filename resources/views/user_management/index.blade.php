@extends('layouts.adminLayout')
@section ('user')
active
@endsection
@section('konten')
<div class="container">
  <h3 align="center" class="mt-5">Users List</h3>
  <hr>
  <div class="row">
    <div class="col-1"></div>
    <div class="col-10">
      <table class="table table-striped">
        <tr>
        <th>No</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone Number</th>
        <th>Bith Date</th>
        <th>Action</th>
        </tr>
        <?php $i = 1; ?>
        @foreach ($user as $key)
        <tr>
            <td>{{ $i }}</td>
            <td>{{ $key->name }}</td>
            <td>{{ $key->email }}</td>
            <td>{{ $key->no_hp }}</td>
            <td>{{ $key->birthDate }}</td>
            <td><button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop{{ $key->id }}">
                Delete
              </button></td>
        </tr>
         <?php $i++; ?> 
         <div class="modal fade" id="staticBackdrop{{ $key->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="staticBackdropLabel"><b>WARNING !!!</b> </h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  Are you sure to delete <b>{{ $key->name }}</b> ?
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                  <form action="/admin/delete/{{ $key->id }}" method="post">
                    @csrf
                    <button type="submit" class="btn btn-danger" value="{{ $key->id }}">Yes</button>
                  </form>
                  
                </div>
              </div>
            </div>
          </div>
        @endforeach
    </table>
    </div>
    <div class="col-1"></div>
  </div>


</div>


@endsection