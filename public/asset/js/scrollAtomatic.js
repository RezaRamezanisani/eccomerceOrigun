 $(function () {
     
 //scroll automatic 1
  function scrollLeft1() {
    // console.log($('.boxes__scroll-x'));
    // console.log('scroll left start');
   
        // console.log('no undefined');

        // console.log($('.boxes__scroll-x')[0].scrollLeft,Math.floor($('.boxes__scroll-x')[0].scrollLeft),'l1');
//    let maxScroll = $('.boxes__scroll-x')[0].scrollWidth - $('.boxes__scroll-x')[0].clientWidth
    if($('.boxes__scroll-x')[0] !== undefined){
   let maxScroll = $('.boxes__scroll-x')[0].scrollWidth - $('.boxes__scroll-x')[0].clientWidth
   
   // console.log(document.getElementsByClassName('boxes__scroll-x')[0]);
   let id=  setInterval(()=>{
       let scroll_left = Math.floor($('.boxes__scroll-x')[0].scrollLeft);
        // if(Math.floor($('.boxes__scroll-x')[0].scrollLeft)  >= -maxScroll ){
        //     scroll_left = -maxScroll;
        // }
       
       if( -$('.boxes__scroll-x')[0].scrollLeft >= maxScroll ){
        //    console.log('finish Left');
           clearInterval(id);
           scrollRight1();
            // scrollRight();

        }else{
            // console.log('left');
            
                    $('.boxes__scroll-x')[0].scrollLeft+=-1;
                    // console.log(maxScroll,scroll_left);
        
        }

    //        
    // }


    },5);
}

      
  }

scrollLeft1();
function scrollRight1() {
//    alert('funright');
//    console.log('scroll Right start');
 if( document.getElementsByClassName('boxes__scroll-x')[0] !== undefined){

   // alert('right');
   let maxScroll = $('.boxes__scroll-x')[0].scrollWidth-$('.boxes__scroll-x')[0].clientWidth
//    console.log($('.boxes__scroll-x')[0].scrollLeft <= -maxScroll,-maxScroll,$('.boxes__scroll-x')[0].scrollLeft ,'r1')
//    if(Math.floor($('.boxes__scroll-x')[0].scrollLeft)   <= -maxScroll ){
    // console.log('pass if right');
            let id2 = setInterval(()=>{
                if($('.boxes__scroll-x')[0].scrollLeft == 0  ){
                //    console.log('finish right');
                    clearInterval(id2);
                    scrollLeft1();
                }else{

                    // console.log('right');


                            $('.boxes__scroll-x')[0].scrollLeft+= 1;
                             console.log(Math.floor($('.boxes__scroll-x')[0].scrollLeft),'r1');


                }

        },5);


 }
}
$('.boxes__scroll-left1').mousemove(function () {

    // console.log($('.boxes__scroll-x')[0].scrollLeft,Math.floor($('.boxes__scroll-x')[0].scrollLeft));
        // console.log($('.boxes__scroll-x'))

    $('.boxes__scroll-x')[0].scrollLeft+=-7;

})


$('.boxes__scroll-right1').mousemove(function () {
    // console.log($('.boxes__scroll-x'));
    $('.boxes__scroll-x')[0].scrollLeft+=7;

});
//scroll automatic 1
//scroll automatic 2

function scrollLeft2() {
    // console.log($('.boxes__scroll-x'));
    // console.log('scroll left start');
   
        // console.log('no undefined');

        // console.log($('.boxes__scroll-x')[0].scrollLeft,Math.floor($('.boxes__scroll-x')[0].scrollLeft),'l1');
//    let maxScroll = $('.boxes__scroll-x')[0].scrollWidth - $('.boxes__scroll-x')[0].clientWidth
if($('.boxes__scroll-x')[1] !== undefined){
   let maxScroll = $('.boxes__scroll-x')[2].scrollWidth - $('.boxes__scroll-x')[2].clientWidth
   
   // console.log(document.getElementsByClassName('boxes__scroll-x')[0]);
   let id=  setInterval(()=>{
       let scroll_left = Math.floor($('.boxes__scroll-x')[2].scrollLeft);
        // if(Math.floor($('.boxes__scroll-x')[0].scrollLeft)  >= -maxScroll ){
        //     scroll_left = -maxScroll;
        // }
       
       if( -$('.boxes__scroll-x')[2].scrollLeft  >= maxScroll ){
        //    console.log('finish Left');
           clearInterval(id);
           scrollRight2();
            // scrollRight();

        }else{
            // console.log('left');
            
                    $('.boxes__scroll-x')[2].scrollLeft+=-1;
                    console.log(maxScroll,scroll_left);
        
        }

    //        
    // }


    },5);
       }
      
  }

scrollLeft2();
function scrollRight2() {
//    alert('funright');
//    console.log('scroll Right start');
 if( document.getElementsByClassName('boxes__scroll-x')[2] !== undefined){

   // alert('right');
   let maxScroll = $('.boxes__scroll-x')[2].scrollWidth-$('.boxes__scroll-x')[2].clientWidth
//    console.log($('.boxes__scroll-x')[0].scrollLeft <= -maxScroll,-maxScroll,$('.boxes__scroll-x')[0].scrollLeft ,'r1')
//    if(Math.floor($('.boxes__scroll-x')[0].scrollLeft)   <= -maxScroll ){
    // console.log('pass if right');
            let id2 = setInterval(()=>{
                if( $('.boxes__scroll-x')[2].scrollLeft == 0){
                //    console.log('finish right');
                    clearInterval(id2);
                    scrollLeft2();
                }else{

                    // console.log('right');


                            $('.boxes__scroll-x')[2].scrollLeft+= 1;
                            //  console.log(Math.floor($('.boxes__scroll-x')[2].scrollLeft),'r1');


                }

        },5);


 }
}

$('.boxes__scroll-left3').mousemove(function () {

    // console.log($('.boxes__scroll-x')[0].scrollLeft,Math.floor($('.boxes__scroll-x')[0].scrollLeft));


    $('.boxes__scroll-x')[2].scrollLeft+=-7;

})


$('.boxes__scroll-right3').mousemove(function () {

    $('.boxes__scroll-x')[2].scrollLeft+=7;

});
// //scroll automatic 2
});