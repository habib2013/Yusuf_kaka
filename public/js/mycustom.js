$(window).scroll(function(){
   if($(this).scrollTop()>5){

   }
})


$(function(){
   $(window).scroll(function(){
      if($(this).scrollTop()>5){
         $(".navbar .navbar-brand img").attr("src","images/logos/ykpng.png")
      }
      else{
         $(".navbar .navbar-brand img").attr("src","images/logos/yk_png_white.png")
      }
   })
})

