@extends('layouts.master')
@section('cart')
@if(Session::has('empty__cart'))
    <div class="cart__err alert w-25">
      <span data-bs-dismiss='alert' class='btn-close btn-sm'></span>
        {{ Session::pull('empty__cart') }}
    </div>
@endif
@if($errors->any())
   <ul class='cart__err alert w-25'>
       <span data-bs-dismiss='alert' class='btn-close btn-sm'></span>
       @foreach($errors->all() as $err)
       <li>{{ $err }}</li>
       @endforeach
   </ul>
@endif
<div class="navbar__top fixed-top" style="z-index:1">
        <div style="width: 40px;height: 40px;" class="pt-0 navbar__top-items__img"><img class="rounded-pill"
                                                                                        width="100%" height="100%"
                                                                                        src="{{ (Auth::check())? asset("asset/img/".Auth::user()->avatar):asset('asset/img/iconbar.jpg') }}"
                                                                                        alt=""></div>


        <div class="navbar__top__icon-bar" style="width: 40px;height: 40px;">
            <div class="icon-bar bar1"></div>
            <div class="icon-bar bar2"></div>
            <div class="icon-bar bar3"></div>
        </div>

        <ul class="navbar__top-items d-flex pt-lg-2 pt-md-2 pt-sm-2 pt-5" style="list-style: none">
            <li class="navbar__top__nav-item pt-2  me-lg-5 me-0 mb-lg-0 mb-2"><a href="#"
                                                                                 class="navbar__top__nav-link text-dark">خانه</a>
            </li>
            <li class="navbar__top__nav-item pt-2"><a href="#" class="navbar__top__nav-link text-dark">محصولات</a></li>
            <li class="navbar__top__nav-item pt-2"><a href="#" class="navbar__top__nav-link text-dark">برند</a></li>
           
        </ul>
        <ul class="navbar__top__signup-login d-flex pt-lg-2 pt-md-2 pt-sm-2 pt-0">
            @if(Auth::check())
                <form action="{{ route('logout.user')}}" method="POST">
                    @csrf
                    <button type="submit" class="btn navbar__top__nav-item btn__logout">logout</button>
                </form>

            @else
                <li class="navbar__top__nav-item pb-2" style="padding-top: 9px;"><a href="{{ route('signup') }}"
                                                                                    class="navbar__top__nav-link text-dark ">ثبت
                        نام</a></li>
                <li class="navbar__top__nav-item pb-2" style="padding-top: 9px;"><a href="{{ route('login') }}"
                                                                                    class="navbar__top__nav-link text-dark ">ورود</a>
                </li>
            @endif
        </ul>

    </div>

<div class="container" style="margin-top: 120px;">

    @if(!is_null(Session::get('cart')))
    @php $total = 0  @endphp
    <div class="row">
        <div class="col-lg-8">
            <span  class='bg-info badge mb-3'> سبد خرید :</span>
            @if(!empty(Session::get('cart')))
           <table class="table borderless" style="border: none;">
                    <tr>
                        <th>تصویر</th>
                        <th>نام محصول</th>
                        <th>قیمت (تخفیف)</th>
                        <th>تعداد</th>
                        <th>حذف</th>
                    </tr>
        
                   
                   @foreach(Session::get('cart') as $id => $val)
                   @php $total+= ($val['price'] - ($val['price'] * ( $val['discount'] / 100))) * $val['quantity'] @endphp

                   <tr class='cart__tr' data-id="{{ $id }}">
                        <td class="pt-2" style="width: 50px;height:auto;overflow: hidden;"><img class="img-responsive rounded-3 td__img" width="100%"
                                                           height="100%"
                                                           src="{{ asset("storage/products/".$val['img']) }}"
                                                           alt="no image"></td>
                       <td class='pt-3'>{{ $val['name'] }}</td>
                       <td class='pt-3 cart__num'>{{ $val['price'] - ($val['price'] * ( $val['discount'] / 100 ) ) }}</td>
                       <td class='text-center pt-3'>
                           <div class="d-flex">
                               @csrf
                            <button class="btn ms-3 quty--plus">+</button>
                                <span class='rounded pt-1 text-white quty' style="background: rgba(175, 24, 236, 0.7);width: 35px;height: 35px;display: flex;justify-content: center;align-items: center;">{{ $val['quantity'] }}</span>
                            <button class="btn me-3 quty--minus" style="padding: 0 14px;">-</button>
                           </div>
                        </td>
                        <td class='pt-3'>
                            <form class='cart__remove'>
                                @csrf
                                 <button type='submit' class='border-0' style='background: #f5f5f5;'>
                                     <i style="cursor: pointer;" class="fas fa-trash text-danger cart__remove"></i>
                                 </button>
                                </form>
                            </td>
                   </tr>
                  @endforeach
                 
          </table>
          @else
          <div style='background: #f5f5f5;border-radius: 12px;width: 20%;' ><p class='text-center  p-1 text-warning'>سبد خالی است</p></div>
          @endif
          
        </div>
        <div class="col-lg-4">
            <form action="{{ route('order.cart.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="a" class='bg-info badge'>محل اقامت :</label>
                    <textarea class='form-control mt-2' name="address" id="a" cols="30" rows="10"></textarea>
                </div>
                <input type="submit" class='btn mt-2 btn-lg' value="خرید">
            </form>
        </div>
    </div>
     @endif
    </div>
    <div class="alert__product pt-2">
        
        </div>
        
        
        
        <span class='badge bg-info cart_price--fix'>قیمت کل: <span class="cart__price mb-3">{{ ($total>999) ? $total / 1000 . " میلیون" : $total." تومن" }} </span></span>
        
        @stop
        