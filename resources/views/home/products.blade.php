@extends('layouts.app')

@section('products')
active
@endsection

@section('content')

<!-- product section -->
<section class="product_section">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>
                Our <span>products</span>
            </h2>
        </div>

<!-- categorie -->
        <div class="text-center" >
        </div>
        <div class="Search my-5">
            <div class="row height d-flex justify-content-center align-items-center">
                <div class="col-md-6">
                    <form action="/products">
                    <div class="input-group rounded">
                        <input type="text" name="search" style="height=20px;" class="form-control rounded" placeholder="Cari Product Disini" aria-label="Search" aria-describedby="search-addon" value="{{request('search')}}"/>
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="submit"><i class="fa fa-search"></i></button>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 md-5">
                            <div class="title">
                                <ul class="categiri">
                                    <?php 
                                    $man= 'Man';
                                    $women = 'Woman';
                                    $accessories = 'Accessoris';
                                    $decoration = 'Decoration';
                                    $other = 'Other';
                                    ?>
                                    @if(isset($categorie))
                                    @if($categorie=="Man")
                                    <li class=""><a href="/products">All</a></li>
                                    <li class="active"><a href="/products/{{ $man }}">Man</a></li>
                                    <li class=""><a href="/products/{{ $women }}">Women</a></li>
                                    <li class=""><a href="/products/{{ $accessories }}">Accessories</a></li>
                                    <li class=""><a href="/products/{{ $decoration }}">Decoration</a></li>
                                    <li class=""><a href="/products/{{ $other }}">Other</a></li>
                                    @elseif($categorie=="Woman")
                                    <li class=""><a href="/products">All</a></li>
                                    <li class=""><a href="/products/{{ $man }}">Man</a></li>
                                    <li class="active"><a href="/products/{{ $women }}">Women</a></li>
                                    <li class=""><a href="/products/{{ $accessories }}">Accessories</a></li>
                                    <li class=""><a href="/products/{{ $decoration }}">Decoration</a></li>
                                    <li class=""><a href="/products/{{ $other }}">Other</a></li>
                                    @elseif($categorie=="Accessoris")
                                    <li class=""><a href="/products">All</a></li>
                                    <li class=""><a href="/products/{{ $man }}">Man</a></li>
                                    <li class=""><a href="/products/{{ $women }}">Women</a></li>
                                    <li class="active"><a href="/products/{{ $accessories }}">Accessories</a></li>
                                    <li class=""><a href="/products/{{ $decoration }}">Decoration</a></li>
                                    <li class=""><a href="/products/{{ $other }}">Other</a></li>
                                    @elseif($categorie=="Decoration")
                                    <li class=""><a href="/products">All</a></li>
                                    <li class=""><a href="/products/{{ $man }}">Man</a></li>
                                    <li class=""><a href="/products/{{ $women }}">Women</a></li>
                                    <li class=""><a href="/products/{{ $accessories }}">Accessories</a></li>
                                    <li class="active"><a href="/products/{{ $decoration }}">Decoration</a></li>
                                    <li class=""><a href="/products/{{ $other }}">Other</a></li>
                                    @elseif($categorie=="Other")
                                    <li class=""><a href="/products">All</a></li>
                                    <li class=""><a href="/products/{{ $man }}">Man</a></li>
                                    <li class=""><a href="/products/{{ $women }}">Women</a></li>
                                    <li class=""><a href="/products/{{ $accessories }}">Accessories</a></li>
                                    <li class=""><a href="/products/{{ $decoration }}">Decoration</a></li>
                                    <li class="active"><a href="/products/{{ $other }}">Other</a></li>
                                    @endif
                                    @else
                                    <li class="active"><a href="/products">All</a></li>
                                    <li class=""><a href="/products/{{ $man }}">Man</a></li>
                                    <li class=""><a href="/products/{{ $women }}">Women</a></li>
                                    <li class=""><a href="/products/{{ $accessories }}">Accessories</a></li>
                                    <li class=""><a href="/products/{{ $decoration }}">Decoration</a></li>
                                    <li class=""><a href="/products/{{ $other }}">Other</a></li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>
        </div>
    </div>

<!-- produk 1 -->
    <div class="row">
    @foreach ($product as $key)
        <div class="col-sm-6 col-md-4 col-lg-4">
            <div class="box">
                <div class="option_container">
                    <!-- pilihan hover -->
                    <div class="options">
                        @guest
                        <a href="/login" class="option1">
                            Add to Cart
                        </a>
                        @else
                        <form action="/cart/{{ $key->id }}" method="post">
                        @csrf
                        <input type="hidden" value="{{Auth::user()->id }}" name="user_id">
                        <input type="hidden" value="{{ $key->id }}" name="product_id">
                        <input type="hidden" value="{{ $key->title }}" name="title">
                        <input type="hidden" value="{{ $key->price }}" name="price">
                        <input type="hidden" value="1" name="quantity">
                        <input type="hidden" value="{{ $key->picture}}" name="picture">
                        <button type="submit" class="btn option1">Add to Cart</button>
                        </form>
                        
                        @endguest
                    </div>
                </div>
                <div class="img-box">
                    <img src="{{asset('Template/images/'.$key->picture.'')}}" alt="">
                </div>
                <div class="detail-box">
                    <h5>
                    {{ $key->title }}
                    </h5>
                    <h6>
                    <a>Rp. </a>{{ $key->price }}
                    </h6>
                </div>
            </div>
            </div>
    @endforeach
        </div>
    </div>


    <!-- pagination -->

        <div class="pagination justify-content-center mt-5">

        {{$product -> links()}}

        </div>


    </div>


@endsection