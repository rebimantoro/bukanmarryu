@extends('layouts.app')

@section('contact')
active
@endsection

@section('content')

<div class="container">
    <div class="row ">

    <div class="col-sm-12 mb-3">
      <img class="d-block w-100" src="{{asset('Template/images/banner.jpg')}}" alt="First slide">
    </div>
        <div class="col-sm-12 mb-3">
            <h2 class="my-3">MarryU</h2>
            <p class="text-justify">
                Hari pernikahan adalah momen yang diimpikan oleh para calon pengantin.
                Setiap pasangan pasti ingin merealisasikan konsep pernikahan yang telah
                lama diidamkan agar berkesan seumur hidupnya. Maka dari itu, diperlukan
                pertimbangan yang matang saat akan menentukan gaya pernikahan agar tidak
                menyesal.</p>
        </div>
        <div class="col-sm-6 mb-3">
            <h2 class="my-3">Visi</h2>
            <ol class="text-justify">
                <li>Menjadi sebuah startup yang dapat mempermudah dan mempercepat
                    persiapan pernikahan masyarakat melalui kemajuan teknologi.</li>
                <li>Menjadi salah satu perusahaan E-Commerce terbaik yang bergerak di bidang Pernikahan
                    di Indonesia maupun dunia.</li>
            </ol>
        </div>
        <div class="col-sm-6 mb-3">
            <h2 class="my-3">Misi</h2>
            <ol class="text-justify">
                <li>Memberikan kemudahan dan kenyamanan bagi setiap pelanggan.</li>
                <li>Menghadirkan produk dan layanan terbaik untuk pelanggan.</li>
                <li>Meningkatkan kemampuan SDM agar dapat memberikan pelayanan terbaik kepada
                    seluruh pelanggan.</li>
                <li>Menjalin dan meningkatkan kerjasama dengan Wedding ORganizer, baik domestik maupun Internasional.</li>
                <li>Memberikan daya pikat dan kenangan pernikahan yang sesuai ekspetasi</li>
            </ol>
        </div>
    </div>



    <!-- OUR TEAM -->
    <br>
        <div class="heading_container heading_center">
            <h2>
                Our <span>Team</span>
            </h2>
            <!-- team baris 1 -->
            <div class="row text-center my-5">
                <div class="col-md-4">
                    <a target="_blank" href="">
                        <img src="{{asset('Template/images/team2.png')}}" width="200px" height="200px" class="rounded-circle" alt="Erza Putra Albasori">
                    </a>
                    <div class="text-center my-4">
                        <h4 class="card-main-font">M. Rizal Bimantoro</h4>
                        <p class="card-desc-font">Fullstack Developer</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <a target="_blank" href="">
                        <img src="{{asset('Template/images/team1.png')}}" width="200px" height="200px" class="rounded-circle" alt="Hasan M Dipo">
                    </a>
                    <div class="text-center my-4">
                        <h4 class="card-main-font">Fitria Dewi Wulandari</h4>
                        <p class="card-desc-font">Back-End Developer</p>
                        <!-- <a class="btn" target="_blank" href=""><i class="fa fa-instagram"></i></a>
                        <a class="btn" target="_blank" href=""><i class="fa fa-linkedin-square"></i></a> -->
                    </div>
                </div>

                <div class="col-md-4">
                    <a target="_blank" href="">
                        <img src="{{asset('Template/images/team5.png')}}" width="200px" height="200px" class="rounded-circle" alt="Erza Putra Albasori">
                    </a>
                    <div class="text-center my-4">
                        <h4 class="card-main-font">Muh. Taufiqurrahman</h4>
                        <p class="card-desc-font">Front-End Developer</p>
                    </div>
                </div>

            <!-- team baris 2 -->
            <div class="row text-center my-5">
            <div class="col-md-4">
                    <a target="_blank" href="">
                        <img src="{{asset('Template/images/team3.png')}}" width="200px" height="200px" class="rounded-circle" alt="Wiguna Ramadhan">
                    </a>
                    <div class="text-center my-4">
                        <h4 class="card-main-font">Pradita Cahyani</h4>
                        <p class="card-desc-font">Front-End Developer</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <a target="_blank" href="">
                        <img src="{{asset('Template/images/team4.png')}}" width="200px" height="200px" class="rounded-circle" alt="Hasan M Dipo">
                    </a>
                    <div class="text-center my-4">
                        <h4 class="card-main-font">Tiara Dwi Syaputri</h4>
                        <p class="card-desc-font">Back-End Developer</p>
                    </div>
                </div>



                <div class="col-md-4">
                    <a target="_blank" href="">
                        <img src="{{asset('Template/images/team6.png')}}" width="200px" height="200px" class="rounded-circle" alt="Wiguna Ramadhan">
                    </a>
                    <div class="text-center my-4">
                        <h4 class="card-main-font">Tasya Lu'Lu Armina W.</h4>
                        <p class="card-desc-font">Front-End Developer</p>
                    </div>
                </div>
            </div>




        <div class="row justify-content-center mb-5">
            <div class="text-center mb-5 col-md-12">
                <h2>Contact Us</h2>
            </div>

            <div class="col-sm-6 text-left">
                <h3>If you have further questions, please let us know.</h3>
                <p class="small">MarryU Org
                    Jl. Sukapura N0.2
                    Kec. Bojongsoang, Kabupaten Bandung
                    Jawa Barat 40123</p>
                <div class="contact">
                    <p><i class="fa fa-phone pr-2"></i>+62 81 234 567 890</p>
                    <p><i class="fa fa-envelope pr-2"></i>
                    <a>contact@marryu.com</a></p>
                </div>
            </div>

            <div class="col-sm-6 text-left">
                <form method="get" action="#">
                    <input type="hidden" name="_token" value="ijcmdIijfUpg1Rx7jlOQY4qXBpZcF7OWn5e7Zehu">
                        <div class="form-group">
                            <input type="text" class="form-control " name="name" placeholder="Nama" aria-describedby="nameHelp">
                        </div>

                        <div class="form-group">
                            <input type="email" class="form-control" name="email" placeholder="Email" aria-describedby="emailHelp">
                        </div>

                        <div class="form-group">
                            <textarea class="form-control " placeholder="Message" name="message"></textarea>
                        </div>

                        <button type="submit" class="btn1 w-100 btn-dark">Submit</button>
                </form>
            </div>
        </div>
    </div>





@endsection