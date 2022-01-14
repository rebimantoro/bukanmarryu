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
                    <?php $items=0;
                    foreach($cart as $key){
                        $items = $items + $key->quantity;
                    }
                        
                    ?>
                    
                    <i class="text-info font-weight-bold">{{ $items }}</i> items in your cart</p>
                <table id="shoppingCart" class="table table-condensed table-responsive">
                    <thead>
                        <tr>
                            <th style="width:60%">Product</th>
                            <th style="width:12%">Price/Item</th>
                            <th style="width:10%">Quantity</th>
                            <th style="width:12%">Total Price</th>
                            <th style="width:16%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($cart as $key)
                        <tr>
                            <td data-th="Product">
                                <div class="row">
                                    <div class="col-md-3 text-left">
                                        <img src="{{asset('Template/images/'.$key->picture.'')}}" alt="" class="img-fluid d-none d-md-block rounded mb-2 shadow ">
                                    </div>
                                    <div class="col-md-9 text-left mt-sm-2">
                                        <h4>{{ $key->title }}</h4>
                                        <p class="font-weight-light"></p>
                                    </div>
                                </div>
                            </td>
                            <td data-th="Price">Rp.{{ $key->price }}</td>
                            <?php $price = $key->price * $key->quantity ?>
                            <td data-th="Quantity">
                                <input type="number" class="form-control form-control-lg text-center" value="{{ $key->quantity }}" readonly>
                            </td>
                            <td data-th="Price">Rp.{{ $price }}</td>
                            <td class="actions" data-th="">
                                <div class="d-flex flex-row bd-highlight">
                                    <form action="/minus/{{ $key->id }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="user_id" value="{{ $key->user_id}}">
                                        <input type="hidden" name="product_id" value="{{ $key->product_id}}">
                                        <button type="submit" class="btn btn-white border-secondary bg-white btn-md mb-2 me-1">
                                            <i class="fa fa-minus"></i>
                                        </button>
                                    </form>

                                    <form action="/plus/{{ $key->id }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="user_id" value="{{ $key->user_id}}">
                                        <input type="hidden" name="product_id" value="{{ $key->product_id}}">
                                        <button type="submit" class="btn btn-white border-secondary bg-white btn-md mb-2 me-1">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </form>

                                    <form action="/destroy/{{ $key->id }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="user_id" value="{{ $key->user_id}}">
                                        <input type="hidden" name="product_id" value="{{ $key->product_id}}">
                                        <button type="submit" class="btn btn-white border-secondary bg-white btn-md mb-2 me-1">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach


                    </tbody>
                </table>
                <div class="float-right text-right">
                    <h4>Subtotal:</h4>
                    <?php $total =0;
                    foreach ($cart as $key){
                        $tambah = $key->price * $key->quantity;
                        $total= $total+ $tambah;
                    }
                    $diskon = $total - $total*0.2;
                    ?>
                    @if ($total==0)
                    <h3>Rp.{{ $total }}</h3>
                    @else
                    <del><a>Rp.{{ $total }}</a></del>
                    <h2>Rp.{{ $diskon }}</h2> 
                    @endif
                    
                </div>
            </div>
        </div>

        <div class="row mt-4 d-flex align-items-center">
            <div class="col-sm-6 order-md-2 text-right">
                <a href="/checkout/{{ Auth::user()->id }}" class="btn btn-dark mb-4 btn-lg pl-5 pr-5">Checkout</a>
            </div>

            <div class="col-sm-6 mb-3 mb-m-1 order-md-1 text-md-left">
                <a style="color:black;" href="/">
                    <i class="fa fa-arrow-left mr-2"></i> Continue Shopping</a>
            </div>
        </div>
    </div>
</section>

@endsection