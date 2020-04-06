@extends('layouts.app')
@section('content')
<html>
<head>
<!-- <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->

<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->

<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700" rel="stylesheet">
	 <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
	 <link rel="stylesheet" href="css/magnific-popup.css">
	 <link rel="stylesheet" href="css/cssbutton.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
	 <link rel="stylesheet" href="css/style.css">	 
	 <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />


<meta name="csrf-token" content="{{ csrf_token() }}" />
</head>
<body>


<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar" style="color: #000000;">
		<div class="container">
		  <a class="navbar-brand" href="index.html"> <img src="images/yk_logo.png" class="letstalklogo" alt=""> </a>
	  
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
			 <span class="oi oi-menu"></span> 
		  </button>

		  <div class="collapse navbar-collapse text-uppercase" id="ftco-nav">
			 <ul class="navbar-nav">
			
				<li class="nav-item dropdown">
				 <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-family: 'Cera Pro';
				 font-weight: 900;color: #000000;;
				 font-style: normal;"> <b>ABOUT</b></a>
				 <div class="dropdown-menu" aria-labelledby="dropdown04">
					 <a class="dropdown-item" href="#" style="font-family: 'Cera Pro';
					 font-weight: 900;color: #000000;;
					 font-style: normal;">About Yusuf kaka</a>
					<a class="dropdown-item" href="#" style="font-family: 'Cera Pro';
					font-weight: 900;color: #000000;;
					font-style: normal;">Hire Yusuf</a>
	  <a class="dropdown-item" href="#" style="font-family: 'Cera Pro';
	  font-weight: 900;color: #000000;;
	  font-style: normal;">Foundation</a>

				 </div>
			  </li>
			  
			  <li class="nav-item dropdown">
				  <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-family: 'Cera Pro New';
				  font-weight: 900;color: #000000;;
				  font-style: normal;"><b>EVENTS</b> </a>
				  <div class="dropdown-menu" aria-labelledby="dropdown04">
					  <a class="dropdown-item" href="product-single.html" style="font-family: 'Cera Pro';
					  font-weight: 900;color: #000000;;
					  font-style: normal;">Events Calendar</a>
		 <a class="dropdown-item" href="product-single.html" style="font-family: 'Cera Pro';
		 font-weight: 900;
		 font-style: normal;;color: #000000;">Business Opportunity Meetings</a>

<a class="dropdown-item" href="#" style="font-family: 'Cera Pro';
font-weight: 900;
font-style: normal;;color: #000000;">Initial Planning Orientation</a>

				  </div>
				</li>
				<li class="nav-item"><a href="#" class="nav-link"  style="font-family: 'Cera Pro New';
				  font-weight: 900;color: #000000;;
				  font-style: normal;;color: #000000;"><b>COACHING</b> </a></li>
				<li class="nav-item"><a href="#" class="nav-link " style="font-family: 'Cera Pro New';
				  font-weight: 900;
				  font-style: normal;"><b class="mactive">BLOG</b> </a></li>
				<li class="nav-item"><a href="#" class="nav-link" style="font-family: 'Cera Pro New';
				  font-weight: 900;
				  font-style: normal;;color: #000000;"> <b>PODCAST</b></a></li>
				<li class="nav-item"><a href="#" class="nav-link" style="font-family: 'Cera Pro New';
				  font-weight: 900;
				  font-style: normal;;color: #000000;"><b> KAKA LIBRARY</b></a></li>
				<li class="nav-item"><a href="#" class="nav-link" style="font-family: 'Cera Pro New';
				  font-weight: 900;
				  font-style: normal; color: #000000;"><b>HIRE TO SPEAK</b> </a></li>
				<li class="nav-item"><img src="images/icons/search button white backgroung.svg" class="img-fluid imgs"/></li>
				<!-- <li class="nav-item"><input type="submit" value="LET'S TALK" class="btns" style="font-family: 'Cera Pro';
				  font-weight: 900;
				  font-style: normal;"></li> -->

				
			  </ul>
		  </div>
		</div>
	 </nav>
<!-- End of Nav -->
<div class="" align="center">
  <div class="carding" align="center">
<div class="row">
<div class="holdingtype">
<div class="wealth vactive">WEALTH</div>
<div class="wealth">LIFESTYLE</div>
<div class="wealth">TRAVEL</div>
<div class="wealth">FOOD</div>
<div class="wealth">PHOTOGRAPHY</div>
</div>
</div>
  </div>
</div>

  <!-- loader -->

   <div class="spacers"></div>
   <section class="allbiz">
      <div class="container">
         <div class="row">


         @if($posts->count())
         @foreach($posts as $post)

            <div class="col-md-8 col-sm-12 col-lg-8 forpost1">

<h5 style="  font-family: 'Cera Pro';
font-size: 24px;
font-style: normal;">{{$post->title}}</h5>
<div style="display: flex;"><p style=" font-family: 'Cera Pro';
   font-size: 23px;
   font-style: normal;">{{$post->user->username}}</p>
   <p style=" font-family: 'Cera Pro';
   font-size: 13px;
   font-style: normal;margin-top: 10px;margin-left: 30px;" >{{date('M j, Y',strtotime($post->created_at))}}</p></div>
   <img src="images/{{$post->blog_image}}" alt="" class="img-fluid myocean">
      <p class="text-capitalize" style=" font-family: 'Cera Pro';
      font-size: 13px;
      color: #000;
      font-style: normal;padding-top: 5px;">{{$post->body}}</p>
      <div class="resmallspacers"></div>
     
      <div class="d-flex">
  
           <span class="like-btn">

<i id="like{{$post->id}}" class="fa fa-thumbs-up {{ auth()->user()->hasLiked($post) ? 'like-post' : '' }}"></i> <div id="like{{$post->id}}-bs3">{{ $post->likers()->get()->count() }}</div>

</span>

<span style="margin-left:370px">   <button class="comment" style="border:none;background-color:transparent"  value="{{ $post->id }}"><img class="showcomment" src="images/icons/commenters.png" style="height:30px" class="oimg"/> </button></span>


      </div>

      <div class="form-group" id="comment-area" style="display:none">
  
  



    <div id="commentField_{{ $post->id }}" class="panel panel-default" style="padding:10px; margin-top:-20px;">
		 <div id="comment_{{ $post->id }}"></div>
		
		<form id="commentForm_{{ $post->id }}">
			<input type="hidden" value="{{ $post->id }}" name="postid">
			<div class="row"> 
				<div class="col-md-10">
					<input type="text" name="commenttext" id="commenttext" data-id="{{ $post->id }}" class="form-control commenttext" placeholder="Write a Comment..." style="font-family:'Cera Pro New';font-size:15px;font-style:normal;border:1px solid #1BC5EF">
				</div>
				<div class="col-md-2" style="margin-left:-25px;">
					<button style="border:none;background-color:transparent" type="button" class="submitComment" value="{{ $post->id }}"> <img src="images/icons/paper.png" alt=""> </button>
				</div>
			</div>
 
		</form>
	</div>
  
</div>     
            </div>
            @endforeach
@endif
  

             
               </div>
            </div>        
                     </div>
            </div>


<div class="row vbars">


</div>
   </section>
<div class="spacers"></div>
<div class="spacers"></div>

   <footer class="footer smallconts">
	
      <div class="container">
      <div class="row">
         <div class="col-md-3 col-6"
         data-aos="fade-down"
            data-aos-offset="200"
            data-aos-delay="50"
            data-aos-duration="1000"
            data-aos-easing="ease-in-out"
            data-aos-mirror="true"
            data-aos-once="false"
         >
   <div class="textinside">OUR COMPANIES</div>
      <div class="elqspacers"></div>	
      <div class="textin"><a href="#">Kaka Capital</a> </div>
      <div class="elqspacers"></div>	
      <div class="textin">Kaka Foundation</div>
      <div class="elqspacers"></div>	
      <div class="textin">Kaka Advertising</div>
      <div class="elqspacers"></div>	
      <div class="textin">Kaka On Demand</div>
      <div class="elqspacers"></div>	
      <div class="textin">Kaka University</div>
      <div class="elqspacers"></div>	
      <div class="textin">Kaka Show</div>
         </div>
         <div class="col-md-3 col-6"
         data-aos="fade-down"
            data-aos-offset="200"
            data-aos-delay="50"
            data-aos-duration="1000"
            data-aos-easing="ease-in-out"
            data-aos-mirror="true"
            data-aos-once="false"
         >
            <div class="textinside">ABOUT YUSUF KAKA</div>
               <div class="elqspacers"></div>	
               <div class="textin"><a href="#">About</a> </div>
               <div class="elqspacers"></div>	
               <div class="textin">Hire Kaka</div>
               <div class="elqspacers"></div>	
               <div class="textin"> Advertise</div>
               <div class="textin"> Careers</div>
            
               </div>
   <div class="spacersw">
   </div>
                  <div class="col-md-3 col-6"
                  data-aos="fade-down"
                  data-aos-offset="200"
                  data-aos-delay="50"
                  data-aos-duration="1000"
                  data-aos-easing="ease-in-out"
                  data-aos-mirror="true"
                  data-aos-once="false"
                  >
                     <div class="textinside">SUPPORT</div>
                        <div class="elqspacers"></div>	
                        <div class="textin"><a href="#">Contact Us</a> </div>
                        <div class="elqspacers"></div>	
                        <div class="textin">Shipping Policy</div>
                        <div class="elqspacers"></div>	
                        <div class="textin"> Privacy Policy</div>
                        <div class="elqspacers"></div>	
                        <div class="textin"> Refund Policy</div>
                        <div class="elqspacers"></div>	
                        <div class="textin">Term Of Use</div>
                     
                           </div>
   
                           <div class="col-md-3 col-6"
                           data-aos="fade-down"
                           data-aos-offset="200"
                           data-aos-delay="50"
                           data-aos-duration="1000"
                           data-aos-easing="ease-in-out"
                           data-aos-mirror="true"
                           data-aos-once="false"
                           >
                              <div class="textinside">RESOURCES</div>
                                 <div class="elqspacers"></div>	
                                 <div class="textin"><a href="#">Quotes</a> </div>
                                 <div class="elqspacers"></div>	
                                 <div class="textin">Free Ebooks</div>
                                 <div class="elqspacers"></div>	
                                 <div class="textin">Podcasts</div>
                                 <div class="elqspacers"></div>	
                                 <div class="textin"> Subscribe</div>
                                 <div class="elqspacers"></div>	
                                 <div class="textin">Free Books</div>
                                 <div class="elqspacers"></div>	
                                 <div class="textin">Shows</div>
                              
                                    </div>
   
   
   
      </div>	
   
      
      </div>
      <div class="spacers"></div>
      <div class="spacers"></div>
      <div class="socials">
         <div class="container">
            <div class="row">
               <div class="col-md-6 col-lg-6 col-xl-6 col-sm-12 col-xs-12"> © YUSUF KAKA 2020. ALL RIGHTS RESERVED | TERMS & CONDITIONS</div>
               <div class="col-md-6 col-lg-6 col-xl-6 col-sm-12 col-xs-12">
                  <div class="row">
                     <div class="col-1"> <i class="fa fa-linkedin"></i> </div>
                     <div class="col-1"><i class="fa fa-facebook"></i></div>
                     <div class="col-1"><i class="fa fa-instagram"></i></div>
                     <div class="col-1"><i class="fa fa-youtube"></i></div>
                     <div class="col-1"><i class="fa fa-twitter"></i></div>
                  
                  </div>
   
               </div>
            </div>
         
            </div>
            </div>
         
   </footer>


   <div id="ftco-loader" class="show fullscreen">
      <svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg>
    </div>


<script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
 
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  
  <script type="text/javascript">
   $(document).ready(function() {  
      $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });


            $(document).on('click', '.comment', function(){
                var id = $(this).val();
                if($('#commentField_'+id).is(':visible')){
                    $('#commentField_'+id).slideUp();
                }
                else{
                    $('#commentField_'+id).slideDown();
                    getComment(id);
                }
            });


            $(document).on('click', '.submitComment', function(){
                var id = $(this).val();
                if($('#commenttext').val()==''){
                    alert('Please write a Comment First!');
                }
                else{
                    var commentForm = $('#commentForm_'+id).serialize();
                    $.ajax({
                        type: 'POST',
                        url: 'writecomment',
                        data: commentForm,
                        success: function(){
                            getComment(id);
                            alert('Commment Added successfully');
                            $('#commentForm_'+id)[0].reset();
                         
                        },
                    });
                }
 
            });


      $('.showcomment').on('click',function(){
         $('#comment-area').css('display','inline');
         $('.hidecomment').css('display','inline');
    
  });

  $('.hidecomment').on('click',function(){
         $('#comment-area').css('display','none');

  });

$('#postBtn').on('click',function(){
  const textie =  $('#comment_text').val();
  if(textie == ''){
     alert("Input field is empty");
     $('#comment_text').focus();
  }
  else {
  

  }
});



   });


 
  </script>



<script type="text/javascript">

    $(document).ready(function() {     



        $.ajaxSetup({

            headers: {

                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

            }

        });



        $('i.fa-thumbs-up, i.fa-thumbs-down').click(function(){    

            var id = $(this).parents(".panel").data('id');

            var c = $('#'+this.id+'-bs3').html();

            var cObjId = this.id;

            var cObj = $(this);



            $.ajax({

               type:'POST',

               url:'/ajaxRequest',

               data:{id:id},

               success:function(data){

                  if(jQuery.isEmptyObject(data.success.attached)){

                    $('#'+cObjId+'-bs3').html(parseInt(c)-1);

                    $(cObj).removeClass("like-post");

                  }else{

                    $('#'+cObjId+'-bs3').html(parseInt(c)+1);

                    $(cObj).addClass("like-post");

                  }

               }

            });



        });      



        $(document).delegate('*[data-toggle="lightbox"]', 'click', function(event) {
            event.preventDefault();
            $(this).ekkoLightbox();
        });                                        
    }); 
</script>
</body>
</html>
@endsection