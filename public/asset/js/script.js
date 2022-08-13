window.onload = function () {
    //box__alert-success__processing
    let box__alert_success__processing="";
    let box__alert_success="";
    box__alert_success__processing=document.getElementsByClassName('box__alert-success__processing')[0];
    box__alert_success=document.getElementsByClassName('box__alert')[0];
    if(box__alert_success__processing !== undefined && box__alert_success !== undefined){

        box__alert_success.style.animation = 'box__alert 1s  ease-in-out ';
        box__alert_success.style.top = "5%";
        let width = 100;
        let id = setInterval(procress, 50)

        function procress() {
            if (width == 0) {
                clearInterval(id);
                box__alert_success.style.top = "-50%";
            } else if (width == 60) {
                width--;
                box__alert_success__processing.style.width = width + '%';
                box__alert_success__processing.style.background = "darkorange";
            } else if (width == 20) {
                width--;
                box__alert_success__processing.style.width = width + '%';
                box__alert_success__processing.style.background = " #e77e7e";
            } else {
                width--;
                box__alert_success__processing.style.width = width + '%';

            }

        }
    }
   
}
// Livewrie
document.addEventListener('livewire:load',()=>{
Livewire.on('toast',(type,msg)=>{
        let alert__product =  $(".alert__product");
          alert__product.css({
              'right':"5%",
              "bottom":"5%",
              'height':'45px'
          }).html('<p>'+msg+'</p>');
          setTimeout(() => {
              alert__product.css({
                  'right':"-50%",
                  "bottom":"-50%",
              })
          }, 2000);
    });
});
// Livewrie

