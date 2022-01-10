@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="heading_container heading_center">
            <h2>
                My <span>Profile</span>
            </h2>
        </div>
        <!-- konten -->
        <div class="content shadow p-3 mb-5 bg-body rounded">
            <div class="row">
                <div class="col"> 
                    <div class="container rounded bg-white mt-5">
                        <div class="row">
                            <div class="col-md-4 border-right">
                                <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                                    <img class="rounded-circle mt-3" src="{{asset('Template/images/profile.jpg')}}" width="200">
                                    <div class="form-group">
                                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                    </div>  
                                    
                                    <span class="font-weight-bold"></span>
                                    <span class="text-black-50"></span>
                                    <span></span></div>
                            </div>
                            <div class="col-md-8">
                                <div class="p-3 ">
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-md-12">
                                            <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" value=""></div>
                                    </div>

                                    <div class="row mt-3">
                                        <div class="col-md-12">
                                            <input type="text" class="form-control" name="email" id="email" placeholder="E-mail" value=""></div>
                                    </div>

                                    <div class="row mt-3">
                                        <div class="col-md-12">
                                            <input type="text" class="form-control" name="no_hp" id="no_hp" value="" placeholder="No HP"></div>
                                    </div>

                                    <div class="row mt-3">
                                        <div class="col-md-12">
                                            <input type="date" class="form-control" name="ntanggal_lahir" id="tanggal_lahir" placeholder="address" value=""></div>
                                    </div>

                                    <div class="row mt-3">
                                        <div class="col-md-6"><input type="text" class="form-control" placeholder="Kata Sandi" name="kata_sandi" id="kata_sandi" value=""></div>
                                        <div class="col-md-6"><input type="text" class="form-control" name="kata_sandiConfirm" id="kata_sandiConfirm" value="" placeholder="Konfirmasi Kata Sandi"></div>
                                    </div>

                                    <div class="mt-5 text-right"><button class="btn btn-primary profile-button" type="button">Save Profile</button></div>
                                </div>
                            </div>
                </div>
            </div>
        </div>
</div>
</div>

@endsection
