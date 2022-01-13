@extends('layouts.adminLayout')
@section ('home')
active
@endsection
@section('konten')
<div class="container">
<div class="row">
    <?php 
        foreach($booking as $key){
            $id = $key->id;
        }
    ?>
    <h3 align="center" class="mt-5">Transaction ID : {{ $id }}</h3>
    <hr>
    <div class="col-2"></div>
    @foreach($booking as $key)
    <div class="col-4 mt-2">
        <td><img src="{{asset('Template/images/'.$key->proof.'')}}" width="330px"></td>
    </div>
    <div class="col-4 mt-2">
        <h5>Customer : </h5>
        <p>{{ $key->first_name }} {{ $key->last_name }}</p>
        <h5>Address : </h5>
        <p>{{ $key->street }}, {{ $key->city}}, {{ $key->postal_code }}</p>
        <h5>Product: </h5>
        <p>{{ $key->product }}</p>
        <h5>Price: </h5>
        <p> <del>Rp.{{ $key->total_price_before_discount }}</del> Rp.{{ $key->total_price}}</p>
        <h5>Status: </h5>
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
        </div>
        <button class="btn btn-warning ms-2">Update</button>
    </div>
    @endforeach
    <div class="col-2"></div>
</div>
</div>
@endsection




