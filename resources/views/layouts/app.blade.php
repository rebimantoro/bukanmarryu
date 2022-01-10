<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>MarryU </title>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- Mobile Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <!-- Site Metas -->
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <link rel="shortcut icon" href="{{asset('Template/images/logo.png')}}" type="">
        <!-- bootstrap core css -->
        <link rel="stylesheet" type="text/css" href="{{asset('Template/css/bootstrap.css')}}" />
        <!-- font awesome style -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{asset('Template/css/font-awesome.min.css')}}" rel="stylesheet" />
        <!-- Custom styles for this template -->
        <link href="{{asset('Template/css/style.css')}}" rel="stylesheet" />
        <!-- responsive style -->
        <link href="{{asset('Template/css/responsive.css')}}" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
</head>
<body>
    <div id="app">
        @include('partials.navbar')  

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    @include('partials.footer')

    <!-- jQery -->
    <script src="{{asset('Template/js/jquery-3.4.1.min.js')}}"></script>
    <!-- popper js -->
    <script src="{{asset('Template/js/popper.min.js')}}"></script>
    <!-- bootstrap js -->
    <script src="{{asset('Template/js/bootstrap.js')}}"></script>
    <!-- custom js -->
    <script src="{{asset('Template/js/custom.js')}}"></script>  

    

</body>
</html>
