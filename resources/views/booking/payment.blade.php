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
        <div class="container mt-5">

            <div class="alert alert-warning" role="alert" style="text-align: center;">
                Harap transfer sebesar : <b>Rp48.606</b> Ke Rekening Bank Mandiri <b>031234242223</b> A.n <b>Nama Pemilik Bank</b>
            </div>
            <center>
            <div class="col">
                <br>
                <div class="card" style="width: 18rem;padding: 20px;">
                <form>
                    <div class="mb-3">
                    <label for="bukti_transfer" class="form-label">Masukkan Bukti Transfer</label>
                    <input class="form-control" type="file" id="bukti_transfer" name="bukti_transfer">
                    </div>
                    <div class="mb-3" style="float: left;">
                    <a href="/booking"class="btn" style="background-color: lightseagreen;color: white;" type="submit">Kirim</a>
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