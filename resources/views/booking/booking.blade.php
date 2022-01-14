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
                    <li class="list-group-item">Status : <b>{{ $key->status }}</b></li>

                    <li class="list-group-item">
                      @if ($key->proof=="NULL.png")
                      <form method="post" action="/booking/{{ $key->id }}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" value="{{ Auth::user()->id}}" name="id_user">
                        <div class="mb-3">
                        <p class="text-danger">Anda Belum memasukan Bukti Transfer pada Pesanan Ini</p>
                        <label for="bukti_transfer" class="form-label">Masukkan Bukti Transfer</label>
                        <input class="form-control" type="file" id="proof" name="proof">
                        </div>
                        <div class="mb-3" style="float: left;">
                        <button type="submit" class="btn" style="background-color: green;color: white;" type="submit">Kirim</button>
                        <b class="btn" style="background-color: lightseagreen;color:white;font-size: 0.9rem;" data-bs-toggle="modal" data-bs-target="#detail{{ $key->id }}">Detail</b>
                        </div>
                    </li>
                  </form>
                  @else
                  <li class="list-group-item">
                    @if ($key->proof=="NULL.jpg")
                    
                    @endif
                    @if ($key->status=="Dikirim")
                    @if ($key->feedback=="no")
                    <button class="btn" style="background-color:blue ;color:white;font-size: 0.9rem;" data-bs-toggle="modal" data-bs-target="#feedback{{ $key->id }}">Berikan Feedback</button>
                    @else
                    @endif
                    @else
                    <button class="btn" style="background-color:grey ;color:white;font-size: 0.9rem;">Berikan Feedback</button>
                    @endif
                    <button class="btn" style="background-color: lightseagreen;color:white;font-size: 0.9rem;" data-bs-toggle="modal" data-bs-target="#detail{{ $key->id }}">Detail</button>
                    </li>
                  @endif
                   
                </ul>
                </div>
            </div>
            <div class="modal fade" id="detail{{ $key->id }}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Detail Pesanan No {{ $no }}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        Hallo, <b>{{ $key->first_name }} {{ $key->last_name }}</b> <br>
                        Anda telah berbelanja pada di MarryU <b>{{ $key->created_at }}</b><br> <br>
                        Dengan Pesanan : <br>
                        <b>{{ $key->product }}</b><br><br>
                        Anda mendapatkan diskon 20%,
                        sehingga anda hanya perlu membayar sebanyak <b>Rp.{{ $key->total_price }} </b> 
                        atau <b>Rp.{{ $key->total_price_before_discount - $key->total_price }}</b> lebih hemat. <br><br>

                        Terimakasih telah berbelanja di MarryU, Kami harap dapat memberikan pelayanan yang baik lagi untuk anda kedepanya!
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
            </div>

            <div class="modal fade" id="feedback{{ $key->id }}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Terimakasih telah memilih MarryU</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <form action="/booking/feedback/{{ $key->id }}" method="POST">
                        @csrf
                        <input type="hidden" value="{{ Auth::user()->id }}" name="id_user">
                        <input type="hidden" value="{{ Auth::user()->picture }}" name="picture">
                        <input type="hidden" value="{{ $key->first_name }} {{ $key->last_name }}" name="name">
                        <input type="hidden" value="no" name="show">
                        <input type="hidden" value="yes" name="feedback">
                      <div class="modal-body">
                          <p>Feedback anda akan sangat berguna untuk startup seperti kami, oleh karena itu , silahkan isi feedback :D</p>
                          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="desc"></textarea>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                      </div>
                    </form>
                    </div>
                  </div>
            </div>
            <?php $no= $no+1?>
            @endforeach
            </div>
        </div>


    </div>
</section>

@endsection