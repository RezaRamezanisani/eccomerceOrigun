$(function name(params) {
    // $(".sidebar-link").mousemove(function () {
    //     $(this).prev().css("display","block");
    // });
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
    $('.close_sidear').click(function (){
        $(".sidebar").removeClass('wider');
       

    });
    $('.navtop__nav_profile__btn').click(function () {

        $(".navbar__top__profile").toggleClass('visible');
    });
    $(window).click(function (e) {
        console.log(e.target.parentElement);
        let elem = $(".navbar__top__profile");

            if((e.target.classList[0] !== "navtop__nav_profile__btn") && (e.target.classList[0] !== elem[0].className)){

                if(elem.hasClass('visible')){
                    elem.removeClass('visible');
                }
            }
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
    $('.form__product').submit(function (e) {
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
                console.log(data);
                $(".loader__ajax").fadeOut(230);
            

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
    })
//    ajax

})
