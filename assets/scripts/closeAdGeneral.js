$(document).ready(function(){
   $('.closeIcon').click(function(){
       if (!$('.aviso-general').hasClass('close')) {
           $('.aviso-general').addClass('close');
       }
       else{
           $('.aviso-general').removeClass('close');
       }

   });
})