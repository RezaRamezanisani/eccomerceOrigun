@extends("layouts.master")
@section("products")
    @include('admin.navbar-top')
    @include('tables.products')
   

    <div class="main__btns--hide">
        <button class="btn btn__admin pe-2 btn__hide" data-bs-toggle="modal" data-bs-target="#create-product"> افزودن
            محصول <i class="fas fa-arrow-left me-3"></i></button>
    </div>
<div class="loader__ajax">
       <div class="loader"></div>
    </div>
    <div class="alert__product text-center pt-2">

    </div>
 @include('modals.products')



   
@stop
