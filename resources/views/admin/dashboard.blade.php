@extends("layouts.master")
@section("dashboard")
  @include('admin.navbar-top')
    <div class="main container">
        <div class="row g-6">
            <div class="col-lg-3 col-12">
                <div class="main__box p-3 main__box-products mt-2 mt-lg-0">
                    <h5 style="font-family: iranyekanweb;">تعداد محصولات</h5>
                    <div class="main__box-icon d-flex justify-content-end">

                        <span>  <i class="fas fa-shopping-bag"></i> {{ $count_product }} </span>
                    </div>
                </div>


            </div>
            <div class="col-lg-3 col-12">
                <div class="main__box p-3 main__box-packing mt-2 mt-lg-0">
                    <h5 style="font-family: iranyekanweb;">تعداد بسته بندی ها</h5>
                    <div class="main__box-icon d-flex justify-content-end">

                        <span><i class="fas fa-tags"></i> {{ $count_category }} </span>
                    </div>
                </div>


            </div>
            <div class="col-lg-3 col-12">
                <div class="main__box p-3 main__box-brand mt-2 mt-lg-0">
                    <h5 style="font-family: iranyekanweb;">تعداد برندها</h5>
                    <div class="main__box-icon d-flex justify-content-end">

                        <span>  <i class="fas fa-star"></i> {{ $count_brand }} </span>
                    </div>
                </div>


            </div>
            <div class="col-lg-3 col-12">
                <div class="main__box p-3 main__box-orders mt-2 mt-lg-0">

                    <h5 style="font-family: iranyekanweb;">تعداد سفارشات</h5>
                    <div class="main__box-icon d-flex justify-content-end">

                        <span>   <i class="fas fa-shopping-cart"></i> 0 </span>
                    </div>
                </div>


            </div>
        </div>
        <div class="row g-6 mt-3">
            <div class="col-lg-6 col-12">
                <div class="main__box p-3">
                    @if($product_table->count())
                    <h5 class="text-center" style="font-family: iranyekanweb;">محصولات تازه</h5>

                <table class="table striped" style="">
                    @foreach($product_table as $product)
                    <tr>
                    <td style="width: 50px;height:auto;overflow: hidden;"><img class="img-responsive rounded-3 td__img" width="100%"
                                                           height="100%"
                                                           src="{{ asset("storage/products/".$product->img) }}"
                                                           alt="no image"></td>
                        <td>{{ $product->name }}</td>
                        <td class="pt-3 td__category_name">{{ $product->category->name }}</td>
                <td style="width: 50px;height: auto;"><img class="img-responsive rounded-3 td__brand_img" width="100%"
                                                           height="100%"
                                                           src="{{ asset("storage/products/".$product->brand->brand_img) }}"
                                                           alt="no image"></td>
                        <td>{{ $product->price }} تومن </td>
                    </tr>
                    @endforeach

                </table>
                @else
                <h5 class="text-center">هیچ محصولی نیست</h5>

            @endif

                </div>

            </div>
            <div class="row col-lg-6 col-12">
                <div class="col-lg-6 col-12">
                     <div class="main__box p-3">
                    @if($categories_star->count())

                         <h5 class="text-center" style="font-family: iranyekanweb;">بسته بندی های جدید</h5>
                         <ol class="list__style">
                         @foreach($categories_star as $category)
                             <li>{{ $category->name }}</li>
                         @endforeach

                         </ol>
                         @else
                <h5 class="text-center">هیچ بسته بندی نیست</h5>

            @endif
                     </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="main__box p-3">
                    @if($brands_star->count())

                        <h5 class="text-center" style="font-family: iranyekanweb;">برند های جدید</h5>
                        <ol class="list__style">
                         @foreach($brands_star as $brand)
                             <li>{{ $brand->name }}</li>
                         @endforeach

                         </ol>
                         @else
                <h5 class="text-center">هیچ برند نیست</h5>

            @endif
                    </div>
                </div>
                <div class="col-12">
                    <div class="main__box p-3">
                        @if($users->count())

                            <h5 class="text-center" style="font-family: iranyekanweb;">کاربران تازه ثبت نام کرده</h5>

                            <table class="table striped" style="">



                                @foreach($users as $user)
                                    <tr>
                                        <td style="width: 50px;height:auto;overflow: hidden;"><img class="img-responsive rounded-3 td__img" width="100%"
                                                                                                   height="100%"
                                                                                                   src="{{ asset("storage/upload/".$user->avatar) }}"
                                                                                                   alt="no image"></td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->role->name }}</td>
                                        <td>{{ $user->email_phone }}</td>

                                    </tr>
                                @endforeach

                            </table>
                        @else
                            <h5 class="text-center">هیچ کاربری نیست</h5>

                        @endif



                    </div>
                </div>
            </div>

        </div>


    </div>
   


  <!-- <script>
      var xyValues = [
          {x:50, y:7},
          {x:60, y:8},
          {x:70, y:8},
          {x:80, y:9},
          {x:90, y:9},
          {x:100, y:9},
          {x:110, y:10},
          {x:120, y:11},
          {x:130, y:14},
          {x:140, y:14},
          {x:150, y:15}
      ];

      new Chart("myChart", {
          type: "scatter",
          data: {
              datasets: [{
                  pointRadius: 4,
                  pointBackgroundColor: "rgb(0,0,255)",
                  data: xyValues
              }]
          },
          options: {
              legend: {display: false},
              scales: {
                  xAxes: [{ticks: {min: 40, max:160}}],
                  yAxes: [{ticks: {min: 6, max:16}}],
              }
          }
      });
  </script> -->


<script src="{{ asset('asset/js/admin/profile.js') }}"></script>
@stop


