<ul class="sidebar pb-3 pt-2 mt-4 ">

    <button  class="close_sidebar btn-close"></button>

    {{--        <div class="sidebar__img"><img class="rounded-pill" width="100%" height="100%" src="{{ asset('asset/img/post-portrait-6.jpg') }}" alt=""></div>--}}

    <li class="sidebar-item mt-3">
        <span class="sidebar-text">خانه</span>
        <a href="{{ route('dashboard') }}" class="sidebar-link">
            <i class="fas fa-home"></i>
        </a>
    </li>
    <li class="sidebar-item mt-3">
        <span class="sidebar-text">محصولات</span>

        <a href="{{ route('products.index') }}" class="sidebar-link">
            <i class="fas fa-shopping-bag"></i>
        </a>
    </li>
    <li class="sidebar-item mt-3" style="margin-left:24px">
            <span class="sidebar-text">
                <div class="d-flex">
                    <span class='ms-1'> بسته</span>
                    <span>بندی</span>
                </div>
            </span>

        <a href="{{ route('category') }}" class="sidebar-link">
            <i class="fas fa-tags"></i>
        </a>
    </li>
    <li class="sidebar-item mt-3" style="margin-left:24px">
        <span class="sidebar-text">برند</span>
        <a href="#" class="sidebar-link">
            <i class="fas fa-star"></i>
        </a>
    </li>
    <li class="sidebar-item mt-3" style="margin-left:24px">
        <span class="sidebar-text">سفارشات</span>
        <a href="{{ route('order.index') }}" class="sidebar-link">
            <i class="fas fa-shopping-cart"></i>
        </a>
    </li>
    <li class="sidebar-item mt-3" style="margin-left:24px">
        <span class="sidebar-text">کاربران</span>

        <a href="#" class="sidebar-link">
            <i class="fas fa-users"></i>

        </a>
    </li>
    <li class="sidebar-item mt-3" style="margin-left:20px">
        <span class="sidebar-text">تنظیمات</span>

        <a href="#" class="sidebar-link">
            <i class="fas fa-wrench"></i>

        </a>
    </li>

    {{--            خانه و محصولات و بسته بندی و برند و سفارشات و کاربران--}}

</ul>
<div class="navbar__top fixed-top" style="z-index: 1">
    <h2>پنل مدیریت</h2>

    <div class="d-flex mt-2">
        <div class="icon-bars" style="width: 40px;height: 40px;">
            <div class="icon-bar bar1"></div>
            <div class="icon-bar bar2"></div>
            <div class="icon-bar bar3"></div>
        </div>
        @if(Auth::check())
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn bg-danger btn-admin navtop__nav_profile__btn p-3">خروج</button>
            </form>
        @endif
        <button class="navtop__nav_profile__btn btn me-2">پروفایل</button>

    </div>


    <div class="navbar__top__profile rounded-3 text-end p-2 pe-3">

        <h3>پروفایل</h3>
        <p>{{ Auth::user()->name }}</p>
        <img class="navbar__top__img__avatar responsive-img rounded-pill border" width="10%" height="auto"
             src="{{ asset("storage/upload/".Auth::user()->avatar) }}" alt="no image">
        <p>{{ Auth::user()->email_phone }}</p>
        <p>وضعیت:{{ Auth::user()->status }}</p>
        <a href="{{ route('users.edit',Auth::user()->id) }}" class="btn bg-white text-dark">آپدیت</a>

    </div>


</div>
<br>
