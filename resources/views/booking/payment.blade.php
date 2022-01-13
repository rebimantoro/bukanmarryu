@extends('layouts.app')



@section('content')
    <?php
    $jumlah= 0;
    $id = 0;
    foreach ($booking as $key){
        $jumlah = $jumlah + $key->total_price;
        $id = $key->id;
    }
    ?>

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
        <div class="container mt-5">

            <div class="alert alert-warning" role="alert" style="text-align: center;">
                Harap transfer sebesar : <b>Rp.{{ $jumlah }}</b> Ke Rekening Bank Mandiri <b>031234242223</b> A.n <b>Nama Pemilik Bank</b>
            </div>
            <center>
            <div class="col">
                <br>
                <div class="card" style="width: 18rem;padding: 20px;">
                <form method="post" action="/booking/{{ $id }}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value="{{ Auth::user()->id}}" name="id_user">
                    <div class="mb-3">
                    <label for="bukti_transfer" class="form-label">Masukkan Bukti Transfer</label>
                    <input class="form-control" type="file" id="proof" name="proof">
                    </div>
                    <div class="mb-3" style="float: left;">
                    <button type="submit" class="btn" style="background-color: lightseagreen;color: white;" type="submit">Kirim</button>
                    </div>
                </form>
                </div>
            </div>
            </center>


            </div>
        </div>
        <br><br>
    </main>

            </div>
        </div>


    </div>
</section>

@endsection