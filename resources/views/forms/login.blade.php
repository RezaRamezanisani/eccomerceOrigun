
@extends("layouts.base")
@section("login")
{{--    @if(Session::has('success_register'))--}}
{{--        <p>{{ Session::get('success_register') }}</p>--}}
{{--    @endif--}}
   


{{--    @if($errors->any())--}}
{{--        @foreach($errors->all() as $error)--}}
{{--                <p>{{ $error }}</p>--}}
{{--        @endforeach--}}
{{--    @endif--}}

{{-- page login--}}
<div class="login">
    {{--image for page login--}}
    <div class="bg-img">
        <h2 class="text-center pt-3 text-white viditor">ویدیتور</h2>
        <div class="bg-img__poster bg-img__poster--big">
            <img width="200px" height="120px" src="{{ asset("asset/img/alejandro-luengo--c1-ZT-hLzM-unsplash.jpg") }}" alt="" class="bg-img__poster__img img-responsive">

        </div>
        <div class="bg-img__poster bg-img__poster--min">
            <img width="200px" height="120px" src="{{ asset("asset/img/revolt-164_6wVEHfI-unsplash.jpg") }}" alt="" class="bg-img__poster__img img-responsive">
        </div>
        <div class="bg-img__poster bg-img__poster--medium">

            <img width="200px" height="120px" src="{{ asset("asset/img/rachit-tank-2cFZ_FB08UM-unsplash.jpg") }}" alt="" class="bg-img__poster__img img-responsive">
        </div>
        <div class="bg-img__drop bg-img__drop--green"></div>
        <div class="bg-img__drop bg-img__drop--red"></div>
        <div class="bg-img__drop bg-img__drop--yellow"></div>
        <div class="bg-img__drop bg-img__drop--pink"></div>
        <div class="bg-img__drop bg-img__drop--white"></div>
        <div class="bg-img__drop bg-img__drop--gold"></div>
        <div class="bg-img__drop bg-img__drop--blue"></div>
        <div class="bg-img__drop bg-img__drop--lightblue"></div>
        <div class="bg-img__drop bg-img__title--bottom"></div>


    </div>
    {{--/image for page login--}}
    {{-- form login--}}
    <div class="block-form">
        <div class="block-form__logo mt-5">
            <i class="fas fa-apple-alt fa-3x"></i>
        </div>
        <div class="block-form__text">
            <h3 class="h3 ">!سلامی دوباره</h3>
            <p style="font-weight: lighter; padding: 0 90px;">این یک وب سایت تجارت الکترونیک است  ما در تلاش هستیم تا برای شما محیطی امن و آرام ایجاد کنیم چون شما  خاص هستید</p>
            <p style="font-family: iranyekanweb black;font-weight:bolder;">با سرمایه گذاری در این اینجا دیگه نگران ضرر مالی نیستی</p>
        </div>
        <div class="block-form__form mb-3">

            <form action="{{ route('login.submit') }}" method="POST" class="block-form__form-login" >
                @csrf
                <br>
                <div class="form-group">

                    <label for="email" class="block-form__form-login__label">ایمیل</label>
                    <input type="text" id="email" dir="rtl" name="email_phone" class="block-form__form-login__input"/>

                </div>
                    <span style="font-size:12px" class="pb-2 text-danger">@if($errors->has('email_phone')) {{ $errors->first('email_phone') }} @endif</span>
                <br>
                <div class="form-group">

                    <label for="email" class="block-form__form-login__label">پسورد</label>
                    <input type="password" id="email"  dir="rtl" name="password" class="block-form__form-login__input"/>

                </div>
                    <span style="font-size:12px" class="pb-2 text-danger">@if($errors->has('password')) {{ $errors->first('password') }} @endif</span>
                <div class="d-flex justify-content-between mx-2">
                    <div class="pt-1">
                        <input type="checkbox" /><span class="text-muted mx-2" style="font-size: .7em">مرا به خاطر بسپار</span>
                    </div>
                    <a href="#" class="text-muted pt-2" style="font-size: .7em">پسورد را فراموش کردم</a>

                </div>

                <br>
                <br>

                <button type="submit" class="block-form__form-login__btn-submit py-2">ورود</button>
                <br>
                <br>
                <div class="block-form__form-login__btn-google">
                    <button class="bg-white w-100 btn border"><img width="5%" height="5%" src="{{ asset('asset/img/index.jpg') }}" alt=""> ورود با گوگل </button>
                </div>


            </form>

            <div class="block-form__text--bottom mt-4">
                <p class="text-muted">اکانت نداری پس <a href="{{ url('/sign-up') }}">ثبت نام</a> کن</p>
            </div>
        </div>


    </div>
    {{-- /form login--}}


</div>
{{-- /page login--}}
@stop


