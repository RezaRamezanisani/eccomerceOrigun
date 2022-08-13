@extends('layouts.master')
@section('foods')
@include('products.header')
<!-- search -->
<div class="alert__product pt-2">

</div>
<div class="container" style='margin-top: 120px;'>
        <div class="header__search">

            <form class='form_search'>
            
                <button  type="submit" class="btn pt-2 mb-1"><i class="fas fa-search"></i></button>
                <input type="search" name='search' class="header__search-input header__icon-bdrs">
            </form>
        </div>
</div>
<div class="procress">
    <div class="loader_user procress__loader1"></div>
    <div class="loader_user procress__loader2"></div>
    <div class="loader_user procress__loader3"></div>
</div>
<!-- search -->
<!-- product search -->
<!--  -->
<div class="product__search box__products container  mt-4 mb-3">
        <div class="d-flex justify-content-center flex-wrap product_search_block">
             <h2 class="text-center text-warning">no</h2>
        </div>
</div>

<!-- product search -->
<!-- products -->
<div class="container products">



<div class="col-lg-12">
    <div class="boxes__slides d-flex justify-content-center">
         <div style="width: auto;height: auto;position: relative;" class="boxes__slide-1 box__slide">
             <img class="rounded-3" width='100%' height="100%" src="{{ asset('asset/img/fh1.png') }}" alt="">
             <div class="slide text-white text-center">
                 <p class="pt-4 fs-4 mt-3">پیتزا</p>
             </div>
         </div>
         <div class="boxes__slide-2 box__slide me-3" style="width: auto;height: auto;position: relative;">
             <img class="rounded-3" width='100%' height="100%" src="{{ asset('asset/img/hp2.png') }}" alt="">
             <div class="slide text-white text-center">
                 <p class="pt-4 fs-4 mt-3">دلستر</p>
             </div>
         </div>
         <div class="boxes__slide-3 box__slide me-3" style="width: auto;height: auto;position: relative">
             <img class="rounded-3" width='100%' height="100%" src="{{ asset('asset/img/hp3.png') }}" alt="">
             <div class="slide text-white text-center">
                 <p class="pt-4 fs-4 mt-3">مرغ سوخاری</p>
             </div>
         </div>
    </div>

 <div class="box__products container d-flex justify-content-center flex-wrap mt-4 mb-3">
     @foreach($products as $product)
     @if($product->category->name === "مواد غذایی" )
    <a class="box__product mt-3 me-3 p-3  header__icon-bdrs" href="{{ route('add.to.cart',$product->id) }}" style="text-decoration: none;color: #000;" id='{{ $product->id }}'>
         @csrf
         <p class="box__product__header">{{ $product->name }}</p>
         <div><img  class="rounded-3" width='100%' height="100%" src="{{ asset("storage/products/".$product->img) }}" /></div>
         <div class="my-4" style="width: 50px;height:50px"><img class="rounded-3"  width='100%' height="100%" src="{{ asset("storage/products/".$product->brand->brand_img) }}" /></div>
         <span class="border rounded-pill header__icon-bdrs text-center p-1">
                @if($product->num === 0)
                <span style="font-size:12px">
                    در انبار موجود نیست 
                </span>
                @else
                    {{ $product->num . " تا"}}
                @endif
            </span>
            <div class="box__product__footer">
                <div style="font-size: 12px" class="box__scroll-x__price text-success pt-2">{{ ($product->price>999)?$product->price / 1000 . " میلیون":$product->price." تومن"}} <span  class="fas fa-money-bill-alt text-success"></span></div>
            </div>
         <!-- <a href="{{ route('order.store') }}" style="text-decoration: none;" class="box__product__btn mt-3 text-dark" >سفارش</a> -->

         <div class="boxes__window-left boxes__window"></div>
         <div class="boxes__window-right boxes__window"></div>

     
        </a>
     @endif

     @endforeach

   </div>
</div>





</div>
<!-- products -->

@stop
