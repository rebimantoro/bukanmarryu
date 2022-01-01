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
    <div class="row">
        <div class="col-sm-6 col-md-4 col-lg-4">
            <div class="box">
                <div class="option_container">
                </div>
                <div class="img-box">
                    <img src="{{asset('Template/images/1.jpg')}}" alt="">
                </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-4">
            <div class="box">
                <div class="option_container">
                </div>
                <div class="img-box">
                    <img src="{{asset('Template/images/2.jpg')}}" alt="">
                </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-4">
            <div class="box">
                <div class="option_container">
                </div>
                <div class="img-box">
                    <img src="{{asset('Template/images/3.jpg')}}" alt="">
                </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-4">
            <div class="box">
                <div class="option_container">
                </div>
                <div class="img-box">
                    <img src="{{asset('Template/images/4.jpg')}}" alt="">
                </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-4">
            <div class="box">
                <div class="option_container">
                </div>
                <div class="img-box">
                    <img src="{{asset('Template/images/5.jpg')}}" alt="">
                </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-4">
            <div class="box">
                <div class="img-box">
                    <img src="{{asset('Template/images/6.jpeg')}}" alt="">
                </div>
                </div>
            </div>

            



        </div>
    </div>



    </div>
<br><br>

@endsection