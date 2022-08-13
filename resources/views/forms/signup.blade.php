@extends("layouts.base")
@section("signup")
    @if(Session::has('error_register'))
        <p>{{ Session::get('error_register') }}</p>
    @endif
    <div class="signup">
        <div class="signup__form">
            <div style="margin-right: 100px">
            <div class="signup__title-top">
                <button class="signup__title-top-btn pt-1"><i class="fas fa-arrow-left"></i></button>
                <div>
                    <p>ثبت نام کردی؟ پس <a href="#">وارد شو</a></p>
                </div>
            </div>
            <div class="signup__header pt-4" dir="rtl" style='overflow:auto'>
                <h2 style="font-weight: bolder;font-family: iranyekanweb black;" >ثبت نام</h2>
                <p class="text-muted" >امنیت تجارت مالی شما با تجارت الکترونیک</p>
                <form action="{{ route("signup.submit") }}" method="POST" class="form__signup" autocomplete="off">
                    @csrf
                    <div>
                    <div class="form-group form-group-signup p-1 pt-3">
                        <label for="" class="form__signup__label"><i class="far fa-user text-muted "></i></label>
                        <input name="name" placeholder="نام" type="text" class="signup__form__input" autofocus value="{{ old('name') }}">
                        <span class="fas fa-check-circle text-success form__signup--icon"></span>
                    </div>
                    <span style="font-size:12px;color:red;opacity:.7"> @if($errors->has("name")) {{ $errors->first('name') }} @endif </span>
                    <div class="form-group form-group-signup p-1 pt-3">
                        <label for="" class="form__signup__label"><i class="far fa-envelope-open text-muted"></i></label>
                        <input placeholder="ایمیل" name="email_phone" type="text" class="signup__form__input" value="{{ old('email_phone') }}">
                        <span class="fas fa-check-circle text-success form__signup--icon"></span>
                    </div>
                   <span style="font-size:12px;color:red;opacity:.7"> @if($errors->has("email_phone")) {{ $errors->first('email_phone') }} @endif </span>

                    <div class="form-group form-group-signup p-1 pt-3">
                        <label for="" class="form__signup__label"><i class="far fa-eye-slash text-muted "></i></label>
                        <input name="password" placeholder="رمز عبور"  type="password" class="signup__form__input form__signup__password" autocomplete="on" value="{{ old('password') }}" >
                        <span class="fas fa-check-circle text-success form__signup--icon"></span>
                    </div>
                    <span style="font-size:12px;color:red;opacity:.7"> @if($errors->has("password")) {{ $errors->first('password') }} @endif </span>
                    <ul class="signup__text__password m-0 pe-4">
                        <li class="text-muted pt-2"> <i class="fas fa-circle text-muted ps-2 pwd_leng"></i>رمز باید حداقل 8 کارکتر داشته باشد.</li>
                        <li class="text-muted pt-1"><i class="fas fa-circle text-muted ps-2 pwd__num"></i> رمز باید شامل عدد باشد.</li>
                        <li class="text-muted pt-1"><i class="fas fa-circle text-muted ps-2 pwd__word"></i>رمز باید حروف کوچک (a-z) و بزرگ (A-Z) انگلیسی باشد.</li>
                    </ul>
                    <div class="form-group form-group-signup p-1 pt-3">
                        <label for="" class="form__signup__label"><i class="fas fa-light fa-user-lock text-muted"></i></label>
                        <input name="password_confirm" placeholder="تکرار رمز عبور" type="password" class="signup__form__input confirm-password" value="{{ old('password_confirm') }}">
                        <span class="fas fa-check-circle text-success form__signup--icon"></span>
                    </div>
                    <span style="font-size:12px;color:red;opacity:.7"> @if($errors->has("password_confirm")) {{ $errors->first('password_confirm') }} @endif </span>
                   </div>
                    <div class="signup__form--bottom pt-4">
                        <div class="signup__form__btn">
                            <button type="submit" class="btn signup__form__btn--blue py-2"><i class="fas fa-arrow-right text-white border p-1"></i> <span>ثبت نام</span></button>
                            <span class="pt-2">یا</span>
                            <div class="signup__form__btn--social pt-1 d-flex">
                                <div class="border pb-1 pe-1  ms-2" style="-webkit-border-radius: 50%;-moz-border-radius: 50%;border-radius: 50%;width: 30px;height: 30px;">
                                    <img width="20px" height="20px" src="{{ asset('asset/img/index1.png') }}" alt="">
                                </div>
                                <div class="border pb-1 pe-1 " style="-webkit-border-radius: 50%;-moz-border-radius: 50%;border-radius: 50%;width: 30px;height: 30px;">
                                    <img width="20px" height="20px" src="{{ asset('asset/img/index.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            </div>
        </div>
        <div class="bg__img--signup">
            <div class="bg__img--signup-square1"></div>
            <div class="bg__img--signup-square2"></div>

            <div class="bg__img--signup-big"></div>
            <div class="bg__img--signup-small p-4">
                <p  class="text-end bg__img--signup-small-inbox">جعبه</p>
                <p  class="text-end bg__img--signup-small-num pb-4">176,80</p>
                <div class="bg__img--signup-small--circle text-white">45</div>
                <img width="100%" height="30%" src="{{ asset('asset/img/index3.png') }}" alt="">

            </div>
            <div class="bg__img--signup-insta p-1">
                <img width="100%" height="100%" style="-webkit-border-radius: 50%;-moz-border-radius: 50%;border-radius: 50%;" src="{{ asset('asset/img/index5.jpg') }}" alt="">
            </div>
            <div class="bg__img--signup-tiktak">
                <img width="70%" height="70%" style="-webkit-border-radius: 50%;-moz-border-radius: 50%;border-radius: 50%;" src="{{ asset('asset/img/index6.jpg') }}" alt="">
            </div>
            <div class="bg__img--signup-square3"></div>
            <div class="bg__img--signup-square4"></div>
            <div class="bg__img--signup-square5"></div>
        </div>

    </div>


@stop
