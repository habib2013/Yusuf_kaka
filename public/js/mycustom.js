$(function () {
    $(document).scroll(function () {
      var $nav = $(".fixed-top");
      $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());

    });
  });


$(function(){
   $(window).scroll(function(){
      if($(this).scrollTop()>5){
         $(".navbar .navbar-brand img").attr("src","images/logos/yk_png_white.png")
      }
      else{
         $(".navbar .navbar-brand img").attr("src","images/logos/yk_png_white.png")
      }
   })
})

