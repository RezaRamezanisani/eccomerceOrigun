$(function () {

    $(window).click(function (e) {
        // console.log(e.target.parentElement);
        let elem = $(".navbar__top__profile");
        if(elem[0] !== undefined){

            if((e.target.classList[0] !== "navtop__nav_profile__btn") && (e.target.classList[0] !== elem[0].className)){

                if(elem.hasClass('visible')){
                    elem.removeClass('visible');
                }
            }

        }

    });
})
