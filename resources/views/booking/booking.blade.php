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
            <?php 
            $no = 1;
            ?>
            @foreach ($booking as $key)
            <div class="col-4">
                <br>
                <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5>Bookingan Nomor {{ $no }}</h5>
                    <br>
                    <p class="card-text" style="text-align: justify;">
                    Dipesan pada :</p>
                    <b><p> {{ $key->created_at }}</p></b>
                </div>
                <ul class="list-group list-group-flush" style="text-align: justify;">
                    <li class="list-group-item">Total Harga : <b>Rp.{{ $key->total_price }}</b></li>
                    <li class="list-group-item">Status : <b>{{ $key->status }}</b> </b></li>
                    <li class="list-group-item">
                    <button class="btn" style="background-color:blue ;color:white;font-size: 0.9rem;">Berikan Feedback</button>
                    <button class="btn" style="background-color: lightseagreen;color:white;font-size: 0.9rem;">Detail</button>
                    </li>
                </ul>
                </div>
            </div>
            <?php $no= $no+1?>
            @endforeach
            </div>
        </div>


    </div>
</section>

@endsection