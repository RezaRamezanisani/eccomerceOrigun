$(function () {
    // form fix category
    // $('.btn__form--fix').click(function () {
    //     $('.form--fix').toggleClass('display');
    //     if($('.form--fix').hasClass('display')){
    //         $(this).text("بستن فرم بسته بندی");
    //     }else{
    //         $(this).text("ایجاد یک بسته بندی جدید");
    //     }
    // })
    // form fix category

    

    $(".sidebar-link").on({
        'mouseenter':function () {
           $(this).prev().css("display","block");
        //    console.log($(this).find('span'));



        },
        'mousemove':function () {
            $(this).prev().css({
                "display":"block",
            });

        },
        'mouseout':function () {
           $(this).prev().css("display","none");



        }
    });
    $(".icon-bars").click(function () {
        $(".sidebar").toggleClass('wider');
        $(this).toggleClass('act');


    });
    $('.close_sidebar').click(function (){
        $(".sidebar").removeClass('wider');
        $(".icon-bars").removeClass('act');

    });
    $('.navtop__nav_profile__btn').click(function () {

        $(".navbar__top__profile").toggleClass('visible');
    });


    $(".main__btns--hide").mouseenter(function () {
       $(this).css("right","0");
       $(this).find('.fa-arrow-left').css('opacity','0');
    })
    $(".main__btns--hide").mouseleave(function () {
        $(this).css("right","-120px");
        $(this).find('.fa-arrow-left').css('opacity','1');

    });
//    ajax
// store product
    $('.form__product-create').submit(function (e) {
        $(document).ajaxStart(function () {
            $(".loader__ajax").fadeIn(230);
        })
        e.preventDefault();
        $(".err").html("");
        let form = new FormData(this);
        $.ajax({
            method:"POST",
            url:"products",
            processData:false,
            dataType:"json",
            contentType:false,
            headers:{
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data:form,
            success:function (data) {


                $("#create-product").modal('hide');
                let alert__product =  $(".alert__product");
                alert__product.css({
                    'right':"5%",
                    "bottom":"5%",
                    'height':'45px'
                }).html('<p>با موفقیت محصول ثبت شد</p>');
                setTimeout(() => {
                    alert__product.css({
                        'right':"-50%",
                        "bottom":"-50%",
                    })
                }, 2000);
                $(".loader__ajax").fadeOut(230);

                console.log(data.product);
                let product = data.product;
                let price = (product.price > 999) ? product.price + ' میلیون تومن' : product.price +' هزار تومن'
                $('.table tbody').prepend(`
                    <tr>
                        <td class='d-none td__id'>${ product.id }</td>

                    <td class="pt-2" style="width: 50px;height: auto;"><img class="img-responsive rounded-3" width="100%" height="100%" src="../../storage/products/${ product.img}" alt="no image"></td>
                        <td class="td__name pt-3">${ product.name }</td>
                        <td class="td__category_name pt-3">${ product.category_name }</td>
                        <td class="pt-2" style="width: 50px;height: auto;"><img class="img-responsive rounded-3" width="100%"
                        height="100%"
                        src="../../storage/products/${product.brand_img}"
                        alt="no image"></td>
                        <td class="td__brand_name pt-3">${ product.brand_name }</td>
                        <td class="td__price pt-3">
                        ${ price }
                        </td>
                        <td class="td__discount pt-3">${ (product.discount === 0.00) ? 'بدون تخفیف' : product.discount + "%" }</td>
                        <td class="td__num pt-3 " style="width: 15%;">${ (product.num === 0) ? 'در انبار موجود نیست' : product.num +" تا"  }</td>
                        <td class="td__description pt-3">${ product.description }</td>
                        <td class="pt-3">
                        <div class="amaleyat">
                            <a class="btn btn__admin btn__update ms-1" id="${ product.id }" >آپدیت</a>

                            <a class="btn btn__admin btn_delete" id="${ product.id }">حذف</a>
                        </div>
                        </td>

                    </tr>
                `);

            },
            error:function (data) {

                if(data.status === 422){

                    $.each(data.responseJSON.errors,function (key,val) {
                        $('.err_'+key).fadeIn(300).html(val[0]).removeClass('text-success').addClass('text-da');
                        // console.log(key,val);
                    })
                $(".loader__ajax").fadeOut(230);



                }
                console.log(data);
            }

        });
    });
    // store product
    // edit product
    // این قسمت مهم هست وقتی یک ردیف با ایجکس اضافه کردیم روی دکمه آپدیت میزدیم مودال نمی آمد ولی با این روش مودال آمد
    $('body').on('click','.btn__update',function () {
        $(document).ajaxStart(function () {
            $(".loader__ajax").css('display','none');
        });
        // alert('food');
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data:{id:$(this).attr('id')},
                url:"products" + "/" + $(this).attr('id') + "/edit",
                method:"get",
                contentType: false,
                processData: false,
                cache:false,
                dataType: 'json',
                success:function (data) {
                    $(".loader__ajax").css('display','none');

                    console.log(data.status,data);
                    $("#update-product").modal('show');
                    let product = data.product;
                    $(".input__hidden").val(product.id);
                    $('#update-product').modal('show');
                    $(".input__name").val(product.name);
                    $(".input__price").val(product.price);
                    $(".input__num").val(product.num);
                    $(".input__discount").val(product.discount);
                    $(".input__description").text(product.description);
                    $.each($('.input__brand_id option'),function (key,val) {
                        if(Number(product.brand_id) === Number(val.value)){
                            val.selected=true;
                        }
                        console.log(key,val);
                    })
                    $.each($('.input__category_id option'),function (key,val) {
                        if(Number(product.category_id) === Number(val.value)){
                            val.selected=true;
                        }
                        console.log(key,val);
                    })



                    $(".loader__ajax").fadeOut(230);
                    console.log(data)
                    $(document).ajaxStart(function () {
                        $(".loader__ajax").css('display','none');
                    });

                },
                error:function (data) {
                    console.log(data)
                    $(".loader__ajax").fadeOut(230);
                    $(document).ajaxStart(function () {
                        $(".loader__ajax").css('display','none');
                    });
                }

            });
        });

         // edit product
         //  update product
          $(".form__product-update").submit(function (e) {
            e.preventDefault()
            let form = new FormData(this);
            let id = $('.input__hidden').val();
            $.ajax({
                method:"POST",
                data:{id:id},
                url:"products/"+id,
                processData:false,
                dataType:"json",
                contentType:false,
                headers:{
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data:form,
                success:function (data) {
                    if(data.status === 200){
                        $("#update-product").modal('hide');
                        $.each($(".td__id"), function (key,val) {
                            if( id === val.innerHTML ){
                            // console.log(val.parentElement.cells);

                    let arrTds = val.parentElement.cells;
                    // $("#update-product").modal('hide');
                    // let img =  $(".td__img").attr('src').split('/');
                    // let img_pop  =  $(".td__img").attr('src').split('/').slice(0,5);
                    // let brand =  $(".td__brand_img").attr('src').split('/');
                    // let brand_pop  =  $(".td__brand_img").attr('src').split('/').slice(0,5);
                    // img_pop.push(data.product.img);
                    // brand_pop.push(data.product.brand_img);
                    //  img_pop.join('/');
                    // arrTds[4].innerHTML =
                    // brand_pop.join('/');
                    // console.log(brand_pop,img_pop,img_pop.join('/'),brand_pop.join('/'));
                     let price = (data.product.price > 999) ? data.product.price/1000 + ' میلیون تومن' : data.product.price +' هزار تومن'


                    arrTds[1].innerHTML = `<img class=\"img-responsive rounded-3 td__img\" src=\"http://127.0.0.1:8000/storage/products/${ data.product.img }\" alt=\"no image\" width=\"100%\" height=\"100%\">`;
                    arrTds[4].innerHTML = `<img class=\"img-responsive rounded-3 td__img\" src=\"http://127.0.0.1:8000/storage/products/${ data.product.brand_img }\" alt=\"no image\" width=\"100%\" height=\"100%\">`;

                    arrTds[2].innerText = data.product.name;
                    arrTds[3].innerText = data.product.category_name;
                    arrTds[5].innerText =  data.product.brand_name;

                    arrTds[6].innerText = price;
                    if(data.product.discount == 0){

                        arrTds[7].innerText =  "بدون تخفیف";


                    }else{

                        arrTds[7].innerText = data.product.discount+"%";

                    }
                    arrTds[8].innerText = data.product.num+" تا";
                    arrTds[9].innerText = data.product.description;



                    let alert__product =  $(".alert__product");
                    alert__product.css({
                        'right':"5%",
                        "bottom":"5%",
                        'height':'45px',
                    }).html('<p>با موفقیت آپدیت  شد</p>');
                    setTimeout(() => {
                        alert__product.css({
                            'right':"-50%",
                            "bottom":"-50%",
                        })
                    }, 2000);




                    console.log(data)
                }
            });

                }else{

                    alert('خطایی رخ داده');

                }

                },
                error:function (data) {

                    if(data.status === 422){

                        $.each(data.responseJSON.errors,function (key,val) {
                            $('.err_'+key).fadeIn(300).html(val[0]).removeClass('text-success').addClass('text-da');
                            // console.log(key,val);
                        })
                    // $(".loader__ajax").fadeOut(230);



                    }
                    console.log(data)
                }
            });
        });
        //  update product
        // delete product
        $('body').on('click','.btn_delete',function () {
            
            let id = $(this).attr('id');
            $(".alert__product").css({
                'display':'flex',
                'right':"5%",
                "bottom":"5%",
                "padding":"30px",
                "background":"#f5f5f5",
                "color":"black",
                "border":"1px solid rgb(235, 8, 152)",
                "flex-direction":"column",
                'height':'85px'

            }).html(`<p class='d-none' id=${ id }></p><div>محصول حذف شود؟</div><div class='d-flex mt-2 justify-content-center'><button class='btn bg-white text-dark ms-2 btn__del-yes'>بله</button><button class='btn bg-danger btn__del-no'>خیر</button></div>`);
        });

        $('body').on('click','.btn__del-no',function () {

            $(".alert__product").css({
                'right':"-50%",
                "bottom":"-50%",
            });

        });

        $('body').on('click','.btn__del-yes',function () {

             let id = $('p.d-none').attr('id');

            $.ajax({

                method:"DELETE",
                data:{id:id},
                url:"products/"+id,
                processData:false,
                dataType:"json",
                contentType:false,
                caches:false,
                headers:{
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },

                success:function (data) {
                    console.log(data);

                    if(data.status === 200){

                        $(".alert__product").css({
                            'right':"-50%",
                            "bottom":"-50%",
                        });
                        $.each($('.td__id'),function (key , val){

                            if(val.innerText == data.product){
                                // console.log(val.parentElement);
                                val.parentElement.style.display="none";
                                setTimeout(() => {
                                    $(".alert__product").css({
                                        'right':"5%",
                                        "bottom":"5%",
                                        'height':"45px",
                                        "padding-top":"30px !important",


                                    }).html('محصول پاک شد');
                                    setTimeout(() => {
                                        $(".alert__product").css({
                                            'right':"-50%",
                                            "bottom":"-50%",
                                        });
                                    }, 1000);
                                }, 500);

                            }

                        });

                    }
                },
                error:function (data) {
                    console.log(data);
                }


            });

            // $(".alert__product").css({
            //     'right':"-50%",
            //     "bottom":"-50%",
            // });

        });

        // delete product


//    ajax




})
    // let tr_ind=0;
function search_table(x) {
    // alert();
    let val_input  =  x.value.toUpperCase().trim();
    let trs = document.querySelectorAll(".table tbody tr");
    for (let i = 0; i < trs.length; i++) {
        let tds= trs[i].getElementsByTagName("td");
        let ind = 0;
        for (let o = 0; o < tds.length; o++) {
            let td= tds[o].innerText.toUpperCase();

            if(td.indexOf(val_input) === -1){
                ind++;
            }
            if(ind===tds.length){
                trs[i].style.display="none";


            }else{
                trs[i].style.display="";
            }



        }

    }

}
