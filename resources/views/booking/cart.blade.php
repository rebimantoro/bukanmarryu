@extends('layouts.app')

@section('content')


    <div class="container">
        <div class="row w-100">
            <div class="col-lg-12 col-md-12 col-12">
                <div class="heading_container heading_center">
                    <h2>
                        Booking <span>Cart</span>
                    </h2>
                </div>
                <p class="mb-5 text-center">
                    <i class="text-info font-weight-bold">2</i> items in your cart</p>
                <table id="shoppingCart" class="table table-condensed table-responsive">
                    <thead>
                        <tr>
                            <th style="width:60%">Product</th>
                            <th style="width:12%">Price</th>
                            <th style="width:10%">Quantity</th>
                            <th style="width:16%"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td data-th="Product">
                                <div class="row">
                                    <div class="col-md-3 text-left">
                                        <img src="{{asset('Template/images/p2.png')}}" alt="" class="img-fluid d-none d-md-block rounded mb-2 shadow ">
                                    </div>
                                    <div class="col-md-9 text-left mt-sm-2">
                                        <h4>Man Shirt's</h4>
                                        <p class="font-weight-light"></p>
                                    </div>
                                </div>
                            </td>
                            <td data-th="Price">$70.00</td>
                            <td data-th="Quantity">
                                <input type="number" class="form-control form-control-lg text-center" value="1">
                            </td>
                            <td class="actions" data-th="">
                                <div class="text-right">
                                    <button class="btn btn-white border-secondary bg-white btn-md mb-2">
                                        <i class="fa fa-plus"></i>
                                    </button>
                                    <button class="btn btn-white border-secondary bg-white btn-md mb-2">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>


                        <tr>
                            <td data-th="Product">
                                <div class="row">
                                    <div class="col-md-3 text-left">
                                        <img src="{{asset('Template/images/p3.png')}}" alt="" class="img-fluid d-none d-md-block rounded mb-2 shadow ">
                                    </div>
                                    <div class="col-md-9 text-left mt-sm-2">
                                        <h4>Women Dress</h4>
                                        <p class="font-weight-light"></p>
                                    </div>
                                </div>
                            </td>
                            <td data-th="Price">$70.00</td>
                            <td data-th="Quantity">
                                <input type="number" class="form-control form-control-lg text-center" value="1">
                            </td>
                            <td class="actions" data-th="">
                                <div class="text-right">
                                    <button class="btn btn-white border-secondary bg-white btn-md mb-2">
                                        <i class="fa fa-plus"></i>
                                    </button>
                                    <button class="btn btn-white border-secondary bg-white btn-md mb-2">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>

                    </tbody>
                </table>
                <div class="float-right text-right">
                    <h4>Subtotal:</h4>
                    <h1>$99.00</h1>
                </div>
            </div>
        </div>

        <div class="row mt-4 d-flex align-items-center">
            <div class="col-sm-6 order-md-2 text-right">
                <a href="/checkout" class="btn btn-dark mb-4 btn-lg pl-5 pr-5">Checkout</a>
            </div>

            <div class="col-sm-6 mb-3 mb-m-1 order-md-1 text-md-left">
                <a style="color:black;" href="/">
                    <i class="fa fa-arrow-left mr-2"></i> Continue Shopping</a>
            </div>
        </div>
    </div>
</section>

@endsection