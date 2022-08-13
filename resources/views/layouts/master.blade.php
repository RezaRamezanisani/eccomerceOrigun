<!doctype html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
{{--    ajax--}}
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>تجارت</title>

    <link rel="shortcut icon" href="{{ asset('asset/img/iconbar.jpg') }}" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <!-- <link rel="stylesheet" href="{{ asset('css/products.css') }}"> -->
    <link rel="stylesheet" href="{{ asset('asset/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/dashboard.css') }}">

    <script src="{{ asset('asset/js/jQuery.js') }}"></script>
    <script src="{{ asset('asset/js/admin/jq.js') }}"></script>
    <script src="{{ asset('asset/js/scrollAtomatic.js') }}"></script>


</head>
<body>
@if(Session::has('wellcome'))
<div class="box__alert box__alert-success">
    <p> {{ Session::get('wellcome') }} <span class="pt-2 me-1">{{ Auth::user()->name }}</span></p>
    <div class="box__alert-success__processing"></div>
</div>
@endif
@if(Session::has("exit"))
    <div class="box__alert box__alert-danger">
        <p>  {{ Session::get("exit") }} </p>
        <div class="box__alert-success__processing"></div>
    </div>
@endif
@if(Session::has("access"))
<div class="box__alert box__alert-danger">
        <p>  {{ Session::get("access") }} </p>
        <div class="box__alert-success__processing"></div>
</div>
@endif
@yield("home")
@yield("dashboard")
@yield("update-profile")
@yield('products')
@yield('foods')
@yield('cart')
@yield('order')



<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
<script src="{{ asset('asset/js/script.js') }}"></script>


</body>
</html>
