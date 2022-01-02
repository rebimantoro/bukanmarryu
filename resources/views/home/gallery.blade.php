@extends('layouts.app')


@section('content')

<!-- product section -->
<section class="product_section layout_padding">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>
                Our <span>Gallery</span>
            </h2>
        </div>

<!-- produk 1 -->
    @if ($jumlah==0)
    <h3 align="center">There is no Galleries</h3>
    @else
    <div class="row">
        @foreach ($gallery as $key)
        <div class="col-sm-6 col-md-4 col-lg-4">
            <div class="box">
                <div class="option_container">
                </div>
                <div class="img-box">
                    <img src="{{asset('Template/images/'.$key->picture.'')}}" alt="">
                </div>
                </div>
            </div>
        </div>
        @endforeach
        
    </div>
    @endif



    </div>
<br><br>

@endsection