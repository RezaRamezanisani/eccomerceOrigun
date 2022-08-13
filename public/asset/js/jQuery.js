
$(document).ready(function () {
    //login
    $(".block-form__form-login__input").focus(function () {
        $(this).prev().addClass("act");

    });
    $(".block-form__form-login__input").blur(function () {
        $(this).prev().removeClass("act");
        if($(this).val()){
            $(this).prev().addClass("act");
        }
    });
    $(".block-form__form-login__input").keyup(function () {
        if($(this).val()){
            $(this).prev().addClass("act");
        }else{
            $(this).prev().removeClass("act");
        }
    });
    //signup
    $(".signup__form__input").focus(function () {
        $(this).parent().css("borderBottom","1px solid  #206ce0");
    });
    $(".signup__form__input").blur(function () {
        $(this).parent().css("borderBottom","1px solid lightgray");
    });


    $(".form__signup__password").focus(function () {

        let textPassword=  $(".signup__text__password")
        textPassword.slideDown(200);
    });
    $(".form__signup__password").blur(function () {
        let textPassword=  $(".signup__text__password")
        textPassword.slideUp(200);
    });
    $(".form__signup__password").keyup(function () {
        let value = $(this).val();
        if(value.match(/[0-9]+/g)){
            $(".pwd__num").removeClass("fa-circle text-muted").addClass("fa-check-circle text-success").css("fontSize","1em");
        }else {
            $(".pwd__num").removeClass("fa-check-circle text-success").addClass("fa-circle text-muted").css("fontSize",".5em");

        }
        if(value.length >= 8){
            $(".pwd_leng").removeClass("fa-circle text-muted").addClass("fa-check-circle text-success").css("fontSize","1em");
        }else{
            $(".pwd_leng").removeClass("fa-check-circle text-success").addClass("fa-circle text-muted").css("fontSize",".5em");
        }
        if(value.match(/[A-Z]+/g) && value.match(/[a-z]+/g)){
            $(".pwd__word").removeClass("fa-circle text-muted").addClass("fa-check-circle text-success").css("fontSize","1em");
        }else{
            $(".pwd__word").removeClass("fa-check-circle text-success").addClass("fa-circle text-muted").css("fontSize",".5em");

        }

        if(value.match(/(?=.*\d)(?=.*[a-zA-Z]).{8,}/g)){
            $(this).next().css({
                'opacity':"1",
                'visibility':"visible"
            });
        }else{
            $(this).next().css({
                'opacity':"0",
                'visibility':"hidden"
            });
        }

    });
    $(".form__signup input[type='text']").keyup(function () {
        let value = $(this).val();
        if(value.match(/[^\wشسیبلاتنمکگوئدذرزطظضصثقفغعهخحپ\s]+/gi)){
            $(this).next().css({
                'opacity':"1",
                'visibility':"visible"
            }).removeClass("fa-check-circle text-success").addClass("fa-exclamation-circle text-danger");
        }else if(value.match(/[\wشسیبلاتنمکگوئدذرزطظضصثقفغعهخحپ\s]+/gi)){
            $(this).next().css({
                'opacity':"1",
                'visibility':"visible"
            }).removeClass("fa-exclamation-circle text-danger").addClass("fa-check-circle text-success");
        }else{
            $(this).next().css({
                'opacity':"0",
                'visibility':"hidden"
            });
        }
    });
    $(".form__signup input[name='email_phone']").keyup(function () {
        let value = $(this).val();
        if(value === ""){
            $(this).next().css({
                'opacity':"0",
                'visibility':"hidden"
            });
        }
        if( value.match(/^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/g)){
            $(this).next().css({
                'opacity':"1",
                'visibility':"visible"
            }).removeClass("fa-exclamation-circle text-danger").addClass("fa-check-circle text-success");

        }
        // else if(value.match(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/g)){
        //     $(this).next().css({
        //         'opacity':"1",
        //         'visibility':"visible"
        //     }).
        // }

    });
    $(".confirm-password").keyup(function () {
        let valueInit = $(".form__signup__password").val()
        let valueConfirm = $(this).val();
        let span = $(this).next();
        if(valueConfirm == ""){
            span.css({
                'opacity':"0",
                'visibility':"hidden"
            });
        }
        if(valueInit !== valueConfirm && ! valueConfirm == "" ){
            span.css({
                'opacity':"1",
                'visibility':"visible"
            }).removeClass("fa-check-circle text-success").addClass("fa-exclamation-circle text-danger");
        }else if(valueInit === valueConfirm){
            span.css({
                'opacity':"1",
                'visibility':"visible"
            }).removeClass("fa-exclamation-circle text-danger").addClass("fa-check-circle text-success");
        }
        else{
            span.css({
                'opacity':"0",
                'visibility':"hidden"
            });
        }


    });
    $(".navbar__top__icon-bar").click(function () {
        $(this).toggleClass('act');
        $('.navbar__top-items').toggleClass("visible");
        $('.navbar__top__signup-login').toggleClass("visible");
        $(".navbar__top").toggleClass("padding");

    })
    $('.header__search-input').focus(function () {
        $(this).addClass('wider');

    });
    $('.header__search-input').blur(function () {

        if(this.value !== ""){
            $(this).addClass('wider');
        }else{
            $(this).removeClass('wider');

        }
    });
    $(window).scroll(function () {

        let elem = $(".fade__scroll");
        if(elem[0] !== undefined){
            let offSetTop = elem[0].offsetTop;
            let scroll = $('html')[0].scrollTop || $('body')[0].scrollTop;
            if(scroll + 300  >= offSetTop){
                elem.addClass("fade");
            }
            // console.log(offSetTop,scroll);
        }
        let anim_scroll = $(".anim__scroll");

        if(anim_scroll[0] !== undefined){
            let offSetTop = anim_scroll[0].offsetTop;
            let scroll = $('html')[0].scrollTop || $('body')[0].scrollTop;
            if(scroll  + 300  >= offSetTop){
                anim_scroll.addClass("anim-act");
                $('.anim__scroll-box').addClass('anim-act');
            }
            // console.log(offSetTop,scroll);
        }
        let elem2 = $(".fade__scroll_2");
        if(elem2[0] !== undefined){
            let offSetTop = elem2[0].offsetTop;
            let scroll = $('html')[0].scrollTop || $('body')[0].scrollTop;
            if(scroll + 300 >= offSetTop){
                elem2.addClass("fade");
            }
            // console.log(offSetTop,scroll);
        }

    });
    $('.box__scroll-x,.box__product').mouseenter(function () {
        $(this).find('.boxes__window').addClass('thin');


    })
    $('.box__scroll-x,.box__product').mouseleave(function () {

        $(this).find('.boxes__window').removeClass('thin');

    });




    $.each($('.boxes__scroll-x'),function (key,val) {
    //    console.log(val.childElementCount === 0);

        if(val.childElementCount === 2){
            $(this).parent().css('display','none')

        }
    });
    // console.log($('.boxes__scroll-x'));
// ajax search
$('.header__search-input').keyup(function () {
    if($(this).val() === ""){
        $('.products').fadeIn(400);
        $('.product__search').css('display','none');
    }
})
  $('.form_search').submit(function (e) {



      let block_elem = "";
      $(document).ajaxStart(function () {
          $('.procress').css('display','block');
      })
      e.preventDefault();
      console.log($('.header__search-input').val());

      let form = new FormData(this);
      $.ajax({
          headers:{
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
          url:'/search',
          method:"POST",
          data:form,
          cache:false,
          processData:false,
          contentType:false,
          success:function (data) {
              console.log(data);
              $('.procress').css('display','none');

              if(data === ""){

                let alert__product =  $(".alert__product");
                alert__product.css({
                    'right':"5%",
                    "bottom":"5%",
                    'z-index':'200',

                }).html('<p>ورودی خالی است</p>').addClass('bg-warning text-center');
                setTimeout(() => {
                    alert__product.css({
                        'right':"-50%",
                        "bottom":"-50%",
                        'z-index':'200',

                    })
                }, 2000);

              }else if(data.length === 0){
                $('.products').fadeOut(400);

                $('.product__search').css('display','block')
                $(".product_search_block").html('<h3 class="text-warning text-center">موردی یافت نشد</h3>');
              }else{

           $(".product_search_block").html('');
            $('.products').fadeOut(400);

            $.each(data,function (key,val) {
                // console.log(key,val);
                let num="";
                if(val.num === 0){
                  num+=` <span style="font-size:12px">در انبار موجود نیست</span>`;
                }else{
                    num += val.num + "تا";
                }
                block_elem += `
                <a class="box__product mt-3 me-3 p-3  a  header__icon-bdrs" href="http://127.0.0.1:8000/add-to-cart/${val.id}" style="text-decoration: none;color: #000;" id='${val.id}'>
                    <input name='_token' type='hidden' value="kid0vqqYZeryXhb2JkV9tAKwN27Sg1eFYfNN7gso">

                    <p class="box__product__header">${val.name}</p>
                    <div><img  class="rounded-3" width='100%' height="100%" src="http://127.0.0.1:8000/storage/products/${val.img}" /></div>
                    <div class="my-4" style="width: 50px;height:50px"><img class="rounded-3"  width='100%' height="100%" src="http://127.0.0.1:8000/storage/products/${val.brand.brand_img}" /></div>
                    <span class="border rounded-pill header__icon-bdrs text-center p-1">${num}</span>
                        <div class="box__product__footer">
                            <div style="font-size: 12px" class="box__scroll-x__price text-success pt-2">${ (val.price>999) ? val.price / 1000 + " میلیون": val.price + " تومن" } <span  class="fas fa-money-bill-alt text-success"></span></div>
                        </div>
                        <div class="boxes__window-left boxes__window"></div>
                        <div class="boxes__window-right boxes__window"></div>


              </a>
                `;
            });
            $('.product__search').fadeIn(400);
            $('.product_search_block').append(block_elem);




           }



          },
          error:function (data) {
            $('.procress').css('display','none');
            let alert__product =  $(".alert__product");
            alert__product.css({
                'right':"5%",
                "bottom":"5%",
                'z-index':'200',
                'height':'auto',

            }).html(`<p class="mt-1">${data.responseJSON.errors.search}</p>`).addClass('bg-warning text-center');
            setTimeout(() => {
                alert__product.css({
                    'right':"-50%",
                    "bottom":"-50%",
                    'z-index':'200',


                })
            }, 2000);
            console.log(data.responseJSON);
         }

      });


  })

// ajax search

// ajax cart

        $('body').on('click','.box__product,.box__scroll-x',function (e) {
            e.preventDefault();
            let id = Number($(this).attr('id'));
            let _token = $(this).find('input[name="_token]').val();
            $.ajax({
                headers:{
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  },
                  method:"POST",
                  url:$(this).attr('href'),
                  data:{id:id,_token:_token},
                  cache:false,
                  processData:false,
                  contentType:false,
                  success:function (data) {
                      if(data.status === 200){
                        $('.procress').css('display','none');




                           $('.num__order').text(Object.keys(data.cart).length);
                           $('.list__cart').html('');
                           $.each(Object.values(data.cart) , function (key, val) {

                               $('.list__cart').append(`
                                  <li class='d-flex justify-content-between mb-2'>
                                  <span> ${ val.name }</span>
                                  <span class='badge rounded-pill' style="background: rgba(175, 24, 236, 0.7);padding-top: 7px;">${ val.quantity }</span>
                                  </li>

                               `);

                           })
                           if(Object.keys(data.cart).length > 0){
                            $('.list__cart').append(`
                               <div class="dropdown-divider"><hr></div>

                                <li class='text-center'>
                                   <a  class="btn btn-sm" href="http://127.0.0.1:8000/cart">ادامه خرید</a>
                                </li>
                            `)
                           }


                           console.log(Object.keys(data.cart),Object.values(data.cart));


                        }
                    console.log(data);

                  },
                  error:function (data) {
                    $('.procress').css('display','none');
                    console.log(data);

                  }

            });
        });

        $('.quty--plus').click(function () {

            let quty = $(this).next().html();
            quty = Number(quty);
            quty++
             $(this).next().text(String(quty));
            let _token = $(this).siblings('input').val();
            let id =$(this).parents('tr').attr('data-id');
            calculator()
            $.ajax({
                headers:{
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  },
                  method:"patch",
                  url:'/cart/' + id + "/" + quty,
                  data:{id:id},
                  cache:false,
                  processData:false,
                  contentType:false,
                //   dataType:"json",
                  success:function (data) {

                    console.log(data);

                  },
                  error:function (data) {
                    console.log(data);

                  }

            });

        })
        $('.quty--minus').click(function () {


            let quty = $(this).prev().html();
            quty = Number(quty);
            quty--;
            quty =  (quty < 0) ? 0 : quty;
            $(this).prev().text(String(quty));
            calculator();
            let _token = $(this).siblings('input').val();
            let id =$(this).parents('tr').attr('data-id');
            console.log(id,quty);
            $.ajax({
                headers:{
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  },
                  method:"patch",
                  url:'/cart/' + id + "/" + quty,
                  data:{id:id},
                  cache:false,
                  processData:false,
                  contentType:false,
                //   dataType:"json",
                  success:function (data) {

                    console.log(data);

                  },
                  error:function (data) {
                    console.log(data);

                  }

            });

        })
        $('.cart__remove').submit(function (e) {

            e.preventDefault();
           let form = new FormData(this);
           let id =$(this).parents('tr').attr('data-id');
           if(confirm("آیا از حذف مطمئن هستید؟")){
             $.ajax({
                headers:{
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                method:"DELETE",
                url:'/cart/' + id ,
                data:form,
                cache:false,
                processData:false,
                contentType:false,
                dataType:"json",
                success:function (data) {

                   if(data.status === 200){
                       $.each($(".cart__tr") , function (key1, val1) {
                           $.each(val1.attributes,function (key2,val2) {

                               if(val2.value == id){
                                   //   console.log(val1.style);
                                   val1.style.animation = 'remove_cart 1s ease';

                                 setTimeout(()=>{
                                     val1.parentElement.removeChild(val1);

                                     if($('.table')[0].rows.length === 1){
                                         let table = $('.table')[0];

                                        table.innerHTML="<span class='text-center  text-warning'>سبد خالی است</span>";
                                        table.style.width='20%';
                                        $('.cart__price').html(0);
                                    }
                                 },1000)



                              }
                          })
                        });
                        calculator()


                   }



                },
                error:function (data) {
                    console.log(data);

                }

            });
         }
        //  console.log($('.table')[0].childElementCount , $('.table')[0].rows);

        });
        function calculator() {

            let cartNum =  $('.cart__num');
            let cartQuty = $('.quty');
            let i1 = 0;
            let cartPrice =  $('.cart__price');
            let total = 0;
            // console.log(split($('.cart__price').html(),':');
            for (let i = 0; i < cartNum.length; i++) {
                for ( ;i1 < cartQuty.length; ) {
                    console.log( typeof(Number(cartNum[i].innerHTML)), cartQuty[i1].innerHTML)
                    total += Number(cartNum[i].innerHTML) * Number(cartQuty[i1].innerHTML);
                    i1++
                    break

                }


            }
            total = total.toFixed();
            total = (total>999) ? total / 1000 + " میلیون": total + " تومن" ;
            cartPrice.html(total);
        }


// ajax cart




    // $('.boxes__scroll').mouseleave(function () {
    //
    //     $(this).find('.boxes__window').removeClass('thin');
    //
    // });
    // console.log($('.boxes__scroll-x')[0].scrollWidth-$('.boxes__scroll-x')[0].clientWidth)


})
