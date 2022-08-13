
 <!-- table -->
 <div class="main container" style="margin-top: 100px;">
     <div class="search__table">
         <input type="search" class="form-control w-25 rounded-pill  mb-3" style="padding-right: 30px;"  onkeyup="search_table(this)">
         <i class="fas fa-search search__table-icon"></i>
     </div>
<div class="table-responsive-md">
    <table class="table table-striped borderless w-100 mx-auto">
        <thead>
            <tr>
                <th>سفارش</th>
                <th>قیمت</th>
                <th>آدرس</th>
            </tr>
        </thead>
        <tbody>

            @php $id = array_key_last($order_arrs)  @endphp
            @php $id_address = 0 @endphp
        @foreach($order_arrs as $orders)






            @php  $total = 0 @endphp
            @foreach($orders as $order)
                @php $total += ($order['price'] - ($order['price'] * ( $order['discount'] / 100))) * $order['quantity']   @endphp
            @endforeach

        <tr>
            <td class="pe-3 td__name"  style="font-weight: bolder;padding: 50px 0px;">
                @foreach($orders as $order)
                <div class="d-flex flex-direction-column mb-2">
                        <span class="badge bg-secondary ms-2 ">{{ $order['name'] }}</span>
                        <span class="badge bg-secondary">{{ $order['quantity'] }}</span>
                </div>

                        <!-- <span class="badge">{{ $order['name']}}</span> -->
                @endforeach
            </td>
            <td  style="font-weight: bolder;padding: 50px 0px;">
               {{ ($total>999) ? $total / 1000 . " میلیون" : $total." تومن" }}
            </td>


            <td  style="font-weight: bolder;padding: 50px 0px;">
                <i class="fas fa-map-marker-alt border-3 rounded-pill border p-1" style="color:darkorange;"></i>

                @foreach($address_arr as $key=>$add)
                    @if( $key == $id_address )
                        {{ $add }}
                    @endif
                @endforeach
                    @php $id_address++ @endphp



            </td>


        </tr>
         @endforeach



    </table>


</div>
</div>



