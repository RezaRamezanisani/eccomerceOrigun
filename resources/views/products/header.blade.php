
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
            <li class="navbar__top__nav-item pt-2  me-lg-5 me-0 mb-lg-0 mb-2"><a href="{{route('home')}}"
                                                                                 class="navbar__top__nav-link text-dark">خانه</a>
            </li>
            <li class="navbar__top__nav-item pt-2"><a href="#" class="navbar__top__nav-link text-dark">محصولات</a></li>
            <li class="navbar__top__nav-item pt-2"><a href="#" class="navbar__top__nav-link text-dark">برند</a></li>
            <li class="navbar__top__nav-item pt-2 dropdown">
                <span class="navbar__top__nav-link text-dark" data-bs-toggle='dropdown'>
                  <i class="fas fa-cart-arrow-down"></i><span class="rounded-pill badge bg-danger  me-2 text-white num__order">
                      @if(!is_null(Session::get('cart')))
                      {{ count(Session::get('cart')) }} 
                      @else
                        0
                      @endif</span>
                </span>
                <ul class="dropdown-menu p-2 list__cart">
                @if(!is_null(Session::get('cart')))
                   
                        @foreach(Session::get('cart') as $id=>$val)
                        <li id="{{ $id }}" class='d-flex justify-content-between mb-2'><span>{{ $val['name'] }}</span><span class='badge rounded-pill' style="background: rgba(175, 24, 236, 0.7);padding-top: 7px;">{{ $val['quantity'] }}</span></li>
                       @endforeach
                       <div class="dropdown-divider"><hr></div>
                       @if(count(Session::get('cart')))
                            <li class='text-center'>
                                <a  class="btn btn-sm" href="{{ route('cart') }}">ادامه خرید</a>
                            </li>
                       @endif
                @endif
                </ul>
            </li>
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
