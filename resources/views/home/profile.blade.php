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
                @foreach($user as $key)
                <div class="col"> 
                    <form action="{{ route('profileUpdate', $key->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="container rounded bg-white ">
                            <div class="row">
                                <div class="col-md-4 border-right">
                                    <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                                        <img class="rounded-circle mt-5 mb-3" src="{{asset('Template/images/'.$key->picture.'')}}" width="200" height="200">
                                        <div class="form-group">
                                            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="picture">
                                        </div>  
                                        
                                        <span class="font-weight-bold"></span>
                                        <span class="text-black-50"></span>
                                        <span></span></div>
                                </div>
    
                                <div class="col-md-8">
                                    <div class="p-3 ">
                                        </div>
                                        <div class="row ">
                                            <div class="col-md-12">
                                                <label for="name" >User Name</label>
                                                <input type="text" class="form-control" name="name" id="name"  value="{{ $key->name }}" required></div>
                                        </div>
    
                                        <div class="row mt-2">
                                            <div class="col-md-12">
                                                <label for="email" >Email</label>
                                                <input type="email" class="form-control" name="email" id="email" placeholder="E-mail" value="{{ $key->email }}" readonly></div>
                                        </div>
    
                                        <div class="row mt-2">
                                            <div class="col-md-12">
                                                <label for="no_hp" >Phone Number</label>
                                                <input type="text" class="form-control" name="no_hp" id="no_hp" value="{{ $key->no_hp }}" placeholder="No HP" required></div>
                                        </div>
    
                                        <div class="row mt-2">
                                            <div class="col-md-12">
                                                <label for="birthDate" >Birth Date</label>
                                                <input type="date" class="form-control" name="birthDate" id="birthDate" placeholder="address" value="{{ $key->birthDate }}" readonly></div>
                                        </div>
    
                                        <div class="row mt-2">
                                            <label for="password" >Password</label>
                                            <div class="col-md-6"><input type="password" class="form-control" placeholder="password" name="password" id="password" value=""></div>
                                            <div class=" col-md-6"><button class="btn btn-primary profile-button" type="submit">Update Profile</button></div>
                                        </div>   
                                    </div>
                                </div>
                    </form>
                    
                </div>
                @endforeach
            </div>
            
        </div>
</div>
</div>

@endsection
