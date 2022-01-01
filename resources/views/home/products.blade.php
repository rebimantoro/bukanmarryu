@extends('layouts.app')



@section('content')

<!-- product section -->
<section class="product_section layout_padding">
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
                    <form action="">
                    <div class="input-group rounded">
                        <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                        <span class="input-group-text border-0" id="search-addon">
                            <i class="fa fa-search"></i>
                        </span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 md-5">
                            <div class="title ">
                                <ul class="categiri">
                                    <li class="active"><a href="#">Man</a></li>
                                    <li><a style="color:black" href="#">Women</a></li>
                                    <li><a style="color:black" href="#">Accessories</a></li>
                                    <li><a style="color:black" href="#">Decoration</a></li>
                                    <li><a style="color:black" href="#">Other</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
        </div>
    </div>

<!-- produk 1 -->
    <div class="row">
        <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="box">
                <div class="option_container">
                    <!-- pilihan hover -->
                    <div class="options">
                        <a href="" class="option1">
                            Add to Cart
                        </a>
                        <a href="" class="option2">
                            Booking Now
                        </a>
                    </div>
                </div>
                <div class="img-box">
                    <img src="{{asset('Template/images/p1.png')}}" alt="">
                </div>
                <div class="detail-box">
                    <h5>
                        Men's Shirt
                    </h5>
                    <h6>
                        $75
                    </h6>
                </div>
            </div>
            </div>


        </div>
    </div>

    <!-- pagination -->
        <br>
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1">Previous</a>
                </li>

                <li class="page-item"><a style="color:black;" class="page-link" href="#">1</a></li>
                <li class="page-item active"><a style="color:black;" class="page-link" href="#">2</a></li>
                <li class="page-item"><a style="color:black;" class="page-link" href="#">3</a></li>
                <li class="page-item">
                <a style="color:black;" class="page-link" href="#">Next</a>
                </li>
            </ul>
        </nav>

    </div>


@endsection