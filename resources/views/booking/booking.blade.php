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

            <div class="col text-center">
                <br>
                <div class="card" style="width: 18rem;">
                <img src="{{asset('Template/images/p13.png')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Kebaya Set</h5>
                    <br>
                    <p class="card-text" style="text-align: justify;">
                    Kebaya Hitam satu set dengan rok lilit kain warna</p>
                </div>
                <ul class="list-group list-group-flush" style="text-align: justify;">
                    <li class="list-group-item">Total Harga : <b>Rp48.606</b></li>
                    <li class="list-group-item">Estimasi Sampai : <b>17-02-2022</b></li>
                    <li class="list-group-item">
                    <center><a href="/tracking" class="btn" style="background-color: lightseagreen;color:white;font-size: 0.9rem;">Tracking Barang</a>
                    </center>
                    </li>
                </ul>
                </div>
            </div>

            </div>
        </div>


    </div>
</section>

@endsection