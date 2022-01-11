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
        <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-muted">Your cart</span>
                <span class="badge badge-secondary badge-pill">2</span>
            </h4>
            <ul class="list-group mb-3">
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Man Shirt</h6>
                        <small class="text-muted">kemeja pria warna hitam</small>
                    </div>
                    <span class="text-muted">Rp 120.000</span>
                </li>

                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Woman Dress</h6>
                        <small class="text-muted">gaun wanita warna ungu</small>
                    </div>
                    <span class="text-muted">Rp 80.000</span>
                </li>

                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Ongkos Kirim</h6>
                        <small class="text-muted">JnT Express</small>
                    </div>
                    <span class="text-muted">Rp 10.000</span>
                </li>


                <li class="list-group-item d-flex justify-content-between">
                    <span>Total (Rp)</span>
                    <strong>Rp 210.000</strong>
                </li>
            </ul>
            
            </div>



            <!-- alamat -->
            <div class="col-md-8 order-md-1">
            <h4 class="mb-3">Address</h4>

            <form class="needs-validation" novalidate>
                <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="firstName">First name</label>
                    <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                    <div class="invalid-feedback">
                    Valid first name is required.
                    </div>
                </div>
                
                <div class="col-md-6 mb-3">
                    <label for="lastName">Last name</label>
                    <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                    <div class="invalid-feedback">
                    Valid last name is required.
                    </div>
                </div>
                </div>

                <div class="mb-3">
                <label for="username">Username</label>
                <div class="input-group">
                    <input type="text" class="form-control" id="username" value="Bima" required>
                </div>
                </div>

                <div class="mb-3">
                <label for="username">E-Mail</label>
                <input type="email" class="form-control" id="email" value="bima@gmail.com">
                <div class="invalid-feedback">
                    Please enter a valid email address for shipping updates.
                </div>
                </div>

                <div class="mb-3">
                <label for="address">Address</label>
                <input type="text" class="form-control" id="address" placeholder="Jakarta" required>
                <div class="invalid-feedback">
                    Please enter your shipping address.
                </div>
                <div class="row">

                <div class="col-md-4 mb-3">
                    <label for="state">Kota</label>
                    <select class="custom-select d-block w-100" id="state" required>
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

                <div class="col-md-3 mb-3">
                    <label for="zip">Kode Pos</label>
                    <input type="text" class="form-control" id="zip" placeholder="" required>
                    <div class="invalid-feedback">
                    Zip code required.
                    </div>
                </div>
                </div>


                </div>


                <a href="/payment" class="btn btn-primary btn-lg btn-block btn-dark" type="submit">Continue to Payment</a>
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