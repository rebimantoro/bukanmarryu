@extends('layouts.adminLayout')
@section ('home')
active
@endsection
@section('konten')
<?php 
$success = 0;
$failed =0;
$ongoing = 0;
$turn = 0;

foreach($booking as $key){
    if($key->status == 'Dikirim'){
        $success++;
        $turn += $key->total_price;
    }
    elseif($key->status == 'Gagal'){
        $failed++;
    }
    else{
        $ongoing++;
    }
}
?>
<div class="container">
<h3 align="center" class="mt-5">Order List</h3>
<hr>
<div class="row">
    <div class="col">
        <h5 align="center">Success Transaction</h5>
        <p class="text-success" align="center"> <b> {{ $success }}</b></p>
    </div>
    <div class="col">
        <h5 align="center">Failed Transaction</h5>
        <p align="center" class="text-danger"> <b>{{ $failed }}</b> </p>
    </div>
    <div class="col">
        <h5 align="center">On Going Transaction</h5>
        <p align="center" class="text-primary"> <b>{{ $ongoing }}</b> </p>
    </div>
    <div class="col">
        <h5 align="center">Turnover</h5>
        <p align="center" class="text-success"> <b>Rp.{{ $turn }}</b> </p>
    </div>
<hr>
</div>
<div class="row">
    <div class="col-1"></div>
    <div class="col-10">
        <table class="table table-striped">
            <tr>
             <th>No</th>
             <th>Customer</th>
             <th>Booking ID</th>
             <th>Total Price</th>
             <th>Detail</th>
             <th>Action</th>
            </tr>
            <?php $no = 1;?>
            @foreach($booking as $key)
            <tr>
                <td>{{ $no }}</td>
                <td>{{ $key->username}}</td>
                <td>{{ $key->id }}</td>
                <td>Rp.{{ $key->total_price }}</td>
                <td><a href="/admin/home/{{ $key->id }}" class="btn btn-primary">Detail</a></td>
                <td>
            <form action="{{ route('adminUpdate') }}" method="POST">
                @csrf
                <input type="hidden" value={{ $key->id }} name="id">
                <div class="d-flex flex-row bd-highlight">
                    <select name="status" class="form-control">
                        @if ($key->status == "Belum Terkonfirmasi")
                        <option value="{{ $key->status }}">{{ $key->status }}</option>
                        <option value="Terkonfirmasi">Terkonfirmasi</option>
                        <option value="Dikirim">Dikirim</option>
                        <option value="Gagal">Gagal</option>
                        @elseif($key->status == "Terkonfirmasi")
                        <option value="{{ $key->status }}">{{ $key->status }}</option>
                        <option value="Terkonfirmasi">Belum Terkonfirmasi</option>
                        <option value="Dikirim">Dikirim</option>
                        <option value="Gagal">Gagal</option>
                        @elseif($key->status == "Dikirim")
                        <option value="{{ $key->status }}">{{ $key->status }}</option>
                        <option value="Terkonfirmasi">Terkonfirmasi</option>
                        <option value="Dikirim">Belum Terkonfirmasi</option>
                        <option value="Gagal">Gagal</option>
                        @elseif($key->status == "Gagal")
                        <option value="{{ $key->status }}">{{ $key->status }}</option>
                        <option value="Terkonfirmasi">Terkonfirmasi</option>
                        <option value="Dikirim">Dikirim</option>
                        <option value="Gagal">Belum Terkonfirmasi</option>
                        @endif
                    </select>
                    <button type="submit" class="btn btn-warning ms-2">Update</button>
                </div>
            </form>
                </td>
            </tr>
            <?php $no = $no+1;?>
            @endforeach
        </table>
    </div>
    <div class="col-1"></div>
</div>
</div>
@endsection




