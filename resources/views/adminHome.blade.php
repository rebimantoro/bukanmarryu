@extends('layouts.adminLayout')
@section('konten')
<!-- konten -->
        <div class="content">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="description">Bookings</h3>

        <div class="container mt-5 mb-5 p-5" style="background-color:white">
            <table class="table table-striped">
            <h3 class="description">Tiara Dwi Syaputri</h3>
                <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Durasi</th>
                    <th>Produk</th>
                    <th>Harga</th>
                    <th>Foto Produk</th>
                    <th>Aksi</th>
                </tr>

                <tr>
                    <td>1</td>
                    <td>2021/12/12</td>
                    <td>1 jam</td>
                    <td>Dress</td>
                    <td>Rp.70000</td>
                    <td><img style="height:80px;width:auto;" src="{{asset('Template/images/p7.png')}}"></td>
                    
                    <td>
                        <div>
                        <a class="btn btn-success" href="#" role="button">Accept</a>
                        <a class="btn btn-danger" href="#" role="button">Reject</a>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><b>Total</b></td>
                    <td>Rp.70000</td>
                    <td></td>
                </tr>
            </table>
            </div>

            <div class="container mt-5 mb-5 p-5" style="background-color:white">
            <table class="table table-striped">
            <h3 class="description">Bima</h3>
                <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Durasi</th>
                    <th>Produk</th>
                    <th>Harga</th>
                    <th>Foto Produk</th>
                    <th>Aksi</th>
                </tr>

                <tr>
                    <td>1</td>
                    <td>2021/12/12</td>
                    <td>1 jam</td>
                    <td>Dress</td>
                    <td>Rp.70000</td>
                    <td><img style="height:80px;width:auto;" src="{{asset('Template/images/p2.png')}}"></td>
                    
                    <td>
                        <div>
                        <a class="btn btn-success" href="#" role="button">Accept</a>
                        <a class="btn btn-danger" href="#" role="button">Reject</a>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><b>Total</b></td>
                    <td>Rp.70000</td>
                    <td></td>
                </tr>
            </table>
            </div>




@endsection




