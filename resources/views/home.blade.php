@extends("layouts.master")
@section("home")
    @include('products.header')

    @if(Session::has("success_order"))
        <div class="box__alert box__alert-success">
            <p>  {{ Session::get("success_order") }} </p>
            <div class="box__alert-success__processing"></div>
        </div>
    @endif


    <div class="container pt-4 " style="margin-top: 120px;">
        <div class="row">
            <div class="col-lg-6 col-12 header__img" style="position: relative;perspective: 600px;">
                <div style="height:auto;width: 300px;"><img class="rounded-3 header_img-round" width="100%"
                                                            height="100%" src="{{ asset('asset/img/114.png') }}" alt="">
                </div>
                <div class="header__img__background-back"></div>
                <div class="header__img__background-icon1">
                    <i class="fas fa-shopping-basket"></i>
                </div>
                <div class="header__img__background-icon2">
                    <i class="fas fa-shopping-bag"></i>
                </div>
                <div class="header__img__background-icon3">
                    <i class="fas fa-money-bill-alt"></i>
                </div>
                <div class="header__img__background-text p-3 pe-4">
                    <p>محصولاتی با برندهای برتر</p>
                </div>
                <div class="header__img__background-msg p-3 pe-4">
                    <span>سلام</span>
                    <br>
                    <span>با سفارش بیشتر محصول از تخفیفات بیشتری برخوردار می شی!!</span>
                </div>
            </div>
            <div class="col-lg-6 col-12 header_text mt-lg-0 mt-2">

                <div class="header_text__background-text mt-md-4 p-2">
                    <h1 style="font-family: iranyekanweb black">هر چی دلت بخواد هست اینجا</h1>
                    <h5 style="font-family: iranyekanweb black">با عضویت در سایت ما از شرایط ویژه ی برخوردار می شی!</h5>
                    <p class="text-dark">اگر 5 تا سفارش بگیری از تخفیفات بیشتری برخوردار می شی</p>
                    <div class="header_text__statistics mt-5 mb-4">
                        <div
                            class="header_text__statistics-location p-3 header__icon-bdrs mt-lg-0 mt-3 ms-lg-2 text-white"
                            style="background: #bc05ff;">
                            <h6>محل فروشگاه</h6>
                            <p class="fs-6">طبس</p>
                        </div>
                        <div
                            class="header_text__statistics__num__product header__icon-bdrs mt-lg-0 mt-3 p-3 ms-lg-2 bg-white">
                            <h6>تعداد محصولات</h6>
                            <p class="fs-6">305</p>
                        </div>
                        <div
                            class="header_text__statistics__num__view-site header__icon-bdrs mt-lg-0 mt-3 p-3  bg-white">
                            <h6>تعداد بسته بندی ها</h6>
                            <p class="fs-6">450</p>
                        </div>
                    </div>
                    <button class="btn btn-lg mt-5">شروع خرید</button>

                </div>
            </div>
        </div>
    </div>
    <div class="container fade__scroll">
        <div class="header__search">

            <form action="#">
                <button type="submit" class="btn pt-2 mb-1"><i class="fas fa-search"></i></button>
                <input type="search" class="header__search-input header__icon-bdrs">
            </form>
        </div>


        <div class="row header__boxes">
            <div class="col-lg-4 col-md-4 col-12 mt-md-4">
                <div class="header__boxes-shop header__box ">
                    <i class="fas fa-lock header__boxes-shop-icon  header__icon-bdrs  mt-lg-0 mt-3 fs-4 p-5 text-center">
                        <p class="mt-2" style="font-size: 15px">پرداخت امن</p></i>
                    <div class="header__boxes-shop-dots header__box-dots text-danger">
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>


                    </div>
                </div>

            </div>
            <div class="col-lg-4 col-md-4 col-12 mt-md-4">
                <div class="header__boxes-support header__box " style="background: #f5f5f5;">
                    <i class="fas fa-clock header__boxes-support-icon header__icon-bdrs mt-lg-0 mt-3  fs-4  text-center p-5">
                        <p class="mt-2" style="font-size: 15px">پشتیبانی 24 ساعته</p></i>
                    <div class="header__boxes-support-dots header__box-dots text-success">
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>


                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12 mt-md-4">
                <div class="header__boxes-money-back header__box ">
                    <i class="fas fa-money-bill-wave-alt header__boxes-money-back-icon header__icon-bdrs mt-lg-0 mt-3 fs-4 text-center p-5">
                        <p class="mt-2" style="font-size: 15px">بازگشت وجه</p></i>
                    <div class="header__boxes-money-back-dots header__box-dots text-warning">
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>
                        <i class="fas fa-circle"></i>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container main anim__scroll">
        <div class="row">
            <div class="col-lg-6">
                <div class="anim__scroll-box header__icon-bdrs anim__scroll-box--1 p-1">
                    <div class="anim__scroll-imgs anim__scroll-img1"><img src="{{asset('asset/img/burger 1.png')}}"
                                                                          width="100%" height="100%" alt=""></div>
                    <div class="anim__scroll-imgs anim__scroll-img2"><img src="{{asset('asset/img/pizza 1.png')}}"
                                                                          width="100%" height="100%" alt=""></div>
                    <div class="anim__scroll-imgs anim__scroll-img3"><img src="{{asset('asset/img/fries 1.png')}}"
                                                                      width="100%" height="100%" alt=""></div>
                </div>
                <div class="anim__scroll-box header__icon-bdrs anim__scroll-box--2 p-1">
                    <div class="anim__scroll-imgs anim__scroll-img1" style="left: 25%;"><img
                            src="{{asset('asset/img/edit2 4.png')}}" width="100%" height="100%" alt=""></div>
                    <div class="anim__scroll-imgs anim__scroll-img2"><img src="{{asset('asset/img/basketball.png')}}"
                                                                          width="100%" height="100%" alt=""></div>
                    <div class="anim__scroll-imgs anim__scroll-img3"><img src="{{asset('asset/img/football.png')}}"
                                                                          width="100%" height="100%" alt=""></div>
                    <div class="anim__scroll-imgs anim__scroll-img4"><img src="{{asset('asset/img/Gymming.png')}}"
                                                                          width="100%" height="100%" alt=""></div>
                </div>
                <div class="anim__scroll-box header__icon-bdrs anim__scroll-box--3 p-1">
                <div class="anim__scroll-imgs anim__scroll-img3"><img src="{{asset('asset/img/iPhone.png')}}"
                                                                      width="100%" height="100%" alt=""></div>
                <div class="anim__scroll-imgs anim__scroll-img4" style="height: 50px;width: 50px;right: 15%;"><img
                        src="{{asset('asset/img/Group 216.png')}}" width="100%" height="100%" alt=""></div>
                <div class="anim__scroll-imgs anim__scroll-img4"
                     style="height: 50px;width: 50px;right: 5%;bottom: 30%;"><img
                        src="{{asset('asset/img/Group4.png')}}" width="100%" height="100%" alt=""></div>
                <div class="anim__scroll-imgs anim__scroll-img1" style="width: 60px;height: 140px;"><img
                        src="{{asset('asset/img/iPhone-13-Pro.png')}}" width="100%" height="100%" alt=""></div>
                <div class="anim__scroll-imgs anim__scroll-img1" style="right: 2%;"><img
                        src="{{asset('asset/img/Radio.png')}}" width="100%" height="100%" alt=""></div>
            </div>
            </div>
            <div class="col-lg-6">
                <div class="anim__scroll-box header__icon-bdrs anim__scroll-box--4 p-1">
                    <div class="anim__scroll-imgs anim__scroll-img2" style="right: 3%;"><img
                            src="{{asset('asset/img/image 259.png')}}" width="100%" height="100%" alt=""></div>
                    <div class="anim__scroll-imgs anim__scroll-img3" style="left: 28%;"><img
                            src="{{asset('asset/img/image 278.png')}}" width="100%" height="100%" alt=""></div>
                    <div class="anim__scroll-imgs anim__scroll-img1" style="right: 5%;top: 3%;"><img
                            src="{{asset('asset/img/image 268.png')}}" width="100%" height="100%" alt=""></div>
                    <div class="anim__scroll-imgs anim__scroll-img1" style="left: 28%;top: 0;width: 35px;height: 90px;"><img
                            src="{{asset('asset/img/lamp.png')}}" width="100%" height="100%" alt=""></div>

                </div>
                <div class="anim__scroll-box header__icon-bdrs anim__scroll-box--5 p-1">
                    <div class="anim__scroll-imgs anim__scroll-img4" style="width: auto;height: auto;"><img
                            src="{{asset('asset/img/car.png')}}" width="100%" height="100%" alt=""></div>
                    <div class="anim__scroll-imgs anim__scroll-img1" style="width: auto;height: auto;"><img
                            src="{{asset('asset/img/car2.png')}}" width="100%" height="100%" alt=""></div>
                    <div class="anim__scroll-imgs anim__scroll-img3" style="left: 5%;top: 2%;width: 50px;height: 50px;"><img
                            src="{{asset('asset/img/Frame 17.png')}}" width="100%" height="100%" alt=""></div>
                    <div class="anim__scroll-imgs anim__scroll-img2" style="width: 50px;height: 50px;"><img
                            src="{{asset('asset/img/Frame 206.png')}}" width="100%" height="100%" alt=""></div>
                    <div class="anim__scroll-imgs anim__scroll-img4" style="width: 50px;height: 50px;top :5%;right: 12%;"><img
                            src="{{asset('asset/img/Frame 167.png')}}" width="100%" height="100%" alt=""></div>
                </div>
                <div class="anim__scroll-box header__icon-bdrs anim__scroll-box--6 p-1">
                        <div class="anim__scroll-imgs anim__scroll-img1" style="width: 100%;height: 100%;top: 0;left: 0;"><img
                                style="-webkit-border-radius: 12px;-moz-border-radius: 12px;border-radius: 12px;"
                                src="{{asset('asset/img/city.png')}}" width="100%" height="100%" alt=""></div>
                        <div class="anim__scroll-imgs anim__scroll-img2" style="width: 50px;height: 50px;top: 5%;right: 6%;"><img
                                src="{{asset('asset/img/Group.png')}}" width="100%" height="100%" alt=""></div>
                        <div class="anim__scroll-imgs anim__scroll-img1" style="width: 50px;height: 50px;top: 15%;left: 25%;"><img
                                src="{{asset('asset/img/Group2.png')}}" width="100%" height="100%" alt=""></div>
                        <div class="anim__scroll-imgs anim__scroll-img1 text-white" style="top: 5%;"><h4>Viditor</h4></div>

                    </div>
            </div>
        </div>
    </div>

    {{--    <div class="container main fade__scroll">--}}
    {{--        <div class="main__foods">--}}
    {{--            <div class="main__foods-box">--}}

    {{--            </div>--}}
    {{--        </div>--}}
    {{--        <div class="main__shirts">--}}
    {{--            <div class="main__shirts-box">--}}

    {{--            </div>--}}
    {{--        </div>--}}
    {{--        <div class="main__lvazims">--}}
    {{--            <div class="main__lvazims-box">--}}

    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
    <div class="container main fade__scroll_2">

        @foreach($categories as $category)

            <div class="col-lg-12 mt-5 mb-3">
                <div class="d-flex justify-content-between">
                    <h5 style="font-family: iranyekanweb;">{{ $category->name }}</h5>
                    <a href='{{ url("products-p$category->id") }}' class="btn">همه رو ببین</a>
                </div>

                <div class="boxes__scroll-x">
                    @foreach($products as $product)
                        @if( $category->name === $product->category->name )

                            <!-- <div class="box__scroll-x me-3 p-3 header__icon-bdrs"> -->
                            <a class='box__scroll-x me-3 p-3 header__icon-bdrs text-dark'
                               style="text-decoration: none;border: none;"
                               href="{{ route('add.to.cart',$product->id) }}" id="{{ $product->id }}">
                                @csrf
                                <p class="box__scroll-x__header">{{ $product->name }}</p>
                                <div><img class="rounded-3" width='100%' height="100%"
                                          src="{{ asset("storage/products/".$product->img) }}"/></div>
                                <div class="my-4" style="width: 50px;height:50px"><img class="rounded-3" width='100%'
                                                                                       height="100%"
                                                                                       src="{{ asset("storage/products/".$product->brand->brand_img) }}"/>
                                </div>
                                <span class="border rounded-pill header__icon-bdrs text-center p-1">
                        @if($product->num === 0)
                                        <span style="font-size:12px">
                            در انبار موجود نیست
                        </span>
                                    @else
                                        {{ $product->num . " تا"}}
                                    @endif
                    </span>
                                <div class="box__scroll-x__footer">
                                    <div style="font-size: 12px"
                                         class="box__scroll-x__price text-success pt-2">{{ ($product->price>999) ?  ($product->price - ($product->price * ($product->discount / 100))) / 1000 . " میلیون":$product->price - ($product->price * ($product->discount / 100))." تومن"}}
                                        <span class="fas fa-money-bill-alt text-success"></span></div>
                                    <span
                                        style="font-size: 12px">{{  ($product->discount === 0.00) ? "" : "با تخفیف ".$product->discount."%"  }}</span>
                                </div>
                                <!-- <a href="{{ route('order.show',$product->id) }}"  style="text-decoration: none;" class="box__product__btn mt-3 text-dark" >سفارش</a> -->
                                <div class="boxes__window-left boxes__window"></div>
                                <div class="boxes__window-right boxes__window"></div>
                            </a>
                            <!-- </div> -->
                        @endif

                    @endforeach
                    <div class="boxes__scroll-left{{$category->id}} boxes__scroll left"></div>
                    <div class="boxes__scroll-right{{$category->id}} boxes__scroll right"></div>


                </div>

            </div>
        @endforeach


    </div>



    @if(Session::has("again-login"))
        <p>{{ Session::get("again-login") }}</p>
    @endif
    {{--{{ dd($products) }}--}}
@stop


