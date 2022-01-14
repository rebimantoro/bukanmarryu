@extends('layouts.app')



@section('content')


    <div class="container">
        <div class="row w-100">
            <div class="col-lg-12 col-md-12 col-12">
                <div class="heading_container heading_center">
                    <h2>
                        Shipping <span>Address</span>
                    </h2>
                </div>
        <br><br>

        <?php 
        $jumlah = 0;
        foreach ($cart as $key){
            $jumlah = $jumlah + $key->quantity;
        }
        ?>

        <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-muted">Your cart</span>
                <span class="badge badge-secondary badge-pill">{{ $jumlah }}</span>
            </h4>
            <ul class="list-group mb-3">
                @foreach ($cart as $key)
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">{{ $key->title }} x {{ $key->quantity }}</h6>
                    </div>
                    <span class="text-muted">Rp.{{ $key->price * $key->quantity }}</span>
                </li>
                @endforeach
                <?php 
                $total = 0;
                foreach ($cart as $key){
                    $total += $key->price * $key->quantity;
                    $diskon = $total - $total * 0.2 ;
                }
                ?>

                <li class="list-group-item d-flex justify-content-between">
                @if($total==0)
                    <span>Total</span>
                    <strong>Rp.{{ $total }}</strong>
                @else
                <span>Total</span>
                <span><del>Rp.{{ $total }}</del> <strong> Rp.{{$diskon  }}</strong></span>
                @endif
                </li>
            </ul>
            
            </div>

        
            <!-- alamat -->
            <div class="col-md-8 order-md-1">
            <h4 class="mb-3">Address</h4>

            <form class="needs-validation" method="POST" action="/payment/{{ Auth::user()->id }}">
                @csrf
                <input type="hidden" value="{{ Auth::user()->id }}" name="id_user">
                <input type="hidden" value="@foreach($cart as $key) {{ $key->title }} x {{ $key->quantity }} ({{ $key->price * $key->quantity}}) | @endforeach" name="product">
                <input type="hidden" value="{{ $total }}" name="total_price_before_discount">
                <input type="hidden" value="{{ $diskon }}" name="total_price">
                <input type="hidden" value="{{ $jumlah }}" name="total_item">
                <input type="hidden" value="NULL.png" name="proof">
                <input type="hidden" value="no" name="feedback">
                <input type="hidden" value="Belum Terkonfirmasi" name="status">
                <div class="row">
                <div class="col-md-6">
                    <label for="firstName">First name</label>
                    <input type="text" class="form-control" id="firstName" placeholder="First Name" value="" required name="first_name">
                    <div class="invalid-feedback">
                    Valid first name is required.
                    </div>
                </div>
                
                <div class="col-md-6 ">
                    <label for="lastName">Last name</label>
                    <input type="text" class="form-control" id="lastName" placeholder="Last Name" value="" required name="last_name">
                    <div class="invalid-feedback">
                    Valid last name is required.
                    </div>
                </div>
                </div>

                <div class="mb-3">
                <label for="username">Username</label>
                <div class="input-group">
                    <input type="text" class="form-control" id="username" value="{{ Auth::user()->name }}" required name="username" readonly>
                </div>
                </div>

                <div class="mb-3">
                    <label for="no_hp">Phone Number</label>
                    <div class="input-group">
                        <input type="number" class="form-control" id="no_hp" value="{{ Auth::user()->no_hp }}" required name="no_hp">
                    </div>
                    </div>

                <div class="mb-3">
                <label for="username">E-Mail</label>
                <input type="email" class="form-control" id="email" value="{{ Auth::user()->email }}" readonly name="email">
                <div class="invalid-feedback">
                    Please enter a valid email address for shipping updates.
                </div>
                </div>

                <div class="mb-3">
                <label for="address">Address</label>
                <input type="text" class="form-control" id="address" placeholder="Jl. Jakarta No 2" required name="street">
                <div class="invalid-feedback">
                    Please enter your shipping address.
                </div>
                <div class="row">

                <div class="col-md-6 mb-3">
                    <label for="state">Kota</label>
                    <select class="custom-select d-block w-100" id="state" required name="city">
                        <option selected="selected" disabled="disabled" value="">Pilih Kota</option>
                        <option value="Jakarta">Jakarta</option>
                        <option value="Bogor">Bogor</option>
                        <option value="Depok">Depok</option>
                        <option value="Tanggerang">Tanggerang</option>
                        <option value="Bekasi">Bekasi</option>
                        <option value="Bandung">Bandung</option>
                            </select>
                    <div class="invalid-feedback">
                    Please provide a valid state.
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <label for="zip">Kode Pos</label>
                    <input type="text" class="form-control" id="zip" placeholder="" required name="postal_code">
                    <div class="invalid-feedback">
                    Zip code required.
                    </div>
                </div>
                </div>


                </div>


                <button type="submit" class="btn btn-primary btn-lg btn-block btn-dark" type="submit">Continue to Payment</button>
                <br> <br>
            </form>
            </div>
        </div>


            </div>
        </div>
    </main>


            </div>


            </div>
        </div>


    </div>
</section>

@endsection