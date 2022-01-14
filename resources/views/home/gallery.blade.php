@extends('layouts.app')

@section('gallery')
active
@endsection

@section('content')

<!-- product section -->
<link href="{{ asset('Template/modal.css') }}" rel="stylesheet">

<section class="product_section">
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
                <div class="img-box">
                    <img src="{{asset('Template/images/'.$key->picture.'')}}" data-toggle="modal" data-target="#coba{{ $key->id }}">
                </div>
                </div>
            </div>
            <div class="modal fade" id="coba{{ $key->id }}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <img src="{{asset('Template/images/'.$key->picture.'')}}" >
                    </div>
                    <br>
                    <h5 align="center" style="color:white;">Style : {{ $key->title }}</h5>
                    <p class="text-center" style="color:white;">{{ $key->desc }}</p>
                </div>
            </div>
        @endforeach
        </div>
    </div>
    

<!-- Modal -->

@endif


    



    </div>
<br><br>

@endsection