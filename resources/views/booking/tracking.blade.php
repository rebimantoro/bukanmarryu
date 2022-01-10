@extends('layouts.app')



@section('content')


    <div class="container">
        <div class="row w-100">
            <div class="col-lg-12 col-md-12 col-12">
                <div class="heading_container heading_center">
                    <h2>
                        My <span>Booking</span>
                    </h2>
                </div>

            </div>

    <main>
        <div class="container">
            <div class="row">
            <center>
                <br>
                <h4>Proses</h4>
                <div class="progress">
                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%">75% - Sedang Dalam Perjalanan</div>
                </div>
            </center>
            
            
            <center>
            <div class="col">
                <br>
                <div class="card" style="width: 18rem;">
                <img src="barang.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Nama Barang</h5>
                    <br>
                    <p class="card-text" style="text-indent: 1.2rem;text-align: justify;">Masukkan Deskripsi Barang disini....</p>
                </div>
                <ul class="list-group list-group-flush" style="text-align: left;">
                    <li class="list-group-item" style="font-size: 0.9rem;">Total Harga : <b>Rp99.000</b></li>
                    <li class="list-group-item" style="font-size: 0.9rem;">Estimasi Sampai : <b>17-02-2022</b></li>
                    <li class="list-group-item" style="font-size: 0.9rem;">Status : <b>Sedang Dalam Perjalanan</b></li>
                    <li class="list-group-item">
                    <center><a href="pengembalian.html" onclick="return confirm('Yakin Mengajukan Pengembalian?');" class="btn" style="background-color: red;color:white;font-size: 0.9rem;">Kembalikan Barang</a>
                    </center>
                    </li>
                </ul>
                </div>
            </div>
            </center>


            </div>
        </div>
    </main>

            </div>
        </div>


    </div>
</section>

@endsection