<!doctype html>
<html lang="en" dir="rtl" class="dark">
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
    <link rel="stylesheet" href="{{ asset('disc/output.css') }}">

    <script src="{{ asset('asset/js/jQuery.js') }}"></script>
    <script src="{{ asset('asset/js/admin/jq.js') }}"></script>
    <script src="{{ asset('asset/js/scrollAtomatic.js') }}"></script>
    <livewire:styles />
</head>
<body>

   {{ $slot }}
{{--   <div class="bg-rose-600  md:bg-lime-300 container p-6 ">--}}
{{--       Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam cupiditate, enim id illum inventore ipsa, ipsam minus mollitia non odit officiis pariatur praesentium quidem unde velit vitae voluptas. Adipisci, natus.--}}
{{--   </div>--}}
{{--   <div class="columns-1 md:columns-3 font-bold gap-y-72 ">--}}
{{--       <div class="bg-rose-600">--}}
{{--           <img class="w-full h-full" src="{{asset('asset/img/car.png')}}" alt="">--}}
{{--       </div>--}}
{{--       <div class="bg-neutral-600">2</div>--}}
{{--       <div class="bg-lime-600">--}}
{{--           Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad assumenda commodi consequuntur corporis dolorem error expedita fugiat, hic impedit itaque modi, nemo nostrum obcaecati pariatur quidem quisquam ullam voluptas voluptates.--}}
{{--       </div>--}}
{{--       <div class="bg-amber-700">4</div>--}}
{{--       <div class="bg-cyan-600">5</div>--}}
{{--   </div>--}}
   <div>
       <a class="no-underline" href="#">link</a>
    <p class="text-e">1/4</p>
   </div>
   <div class="flex flex-row space-x-32 space-x-reverse">
       <div class="bg-cyan-600">1</div>
       <div class="bg-cyan-600">2</div>
       <div class="bg-cyan-600">3</div>
   </div>
   <ul class="list-decimal">
       <li>HI</li>
       <li>hi</li>
   </ul>
   <div class="bg-rose-800 py-8 ml-96 mt-5">
       Hi i'm reza
   </div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
<script src="{{ asset('asset/js/script.js') }}"></script>
   <livewire:scripts />
</body>
</html>
