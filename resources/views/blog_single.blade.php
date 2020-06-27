
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from easetemplate.com/html/coach/pages/blog-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 16 May 2020 13:41:22 GMT -->
<head>
<title>{{$blog->title}}</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    @laravelPWA
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Theme CSS -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <link rel="stylesheet" href="../myassets/css/theme.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>

<style>

.socials {
  background-color: #23292F;
padding-top: 30px;
  height: 80px;
width: 100%;
  font-family: 'Cera Pro New';
  font-weight: 20;
  font-style: normal;
  font-size: 15px;

}
.imgsearch {
  height: 40px;
  width: 40px;
  margin-right: 150px;
}

.elsocials {
  width: 10px;
  height: 13px;
}



 .socialul {
  display: flex;

}
.allmovey {
  margin-left: -130px;
  margin-top: -68px;
}


.socialul::before {
  content: '\f1e0';
  font-family: fontawesome;
  width: 43px;
  height: 43px;
  border-radius: 50%;
   background:#1BC5EF;
  text-align: center;
  color: #ffffff;
  z-index: 1;
  border: 0px solid #ffffff;
  position: relative;
  margin-top: 8px;
  margin-left: 2px;
  padding-top: 5px;

  -webkit-animation: pulse 2s infinite;
  animation: pulse 2s infinite;
  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  -ms-border-radius: 50%;
  border-radius: 50%;

}

.socialul:hover:before {
  width: 40px;
}

.socialul li {
  position: absolute;
list-style: none;
transition: 1s;

}

.socialul li a {
  display: block;
  width: 60px;
  height: 60px;
  text-align: center;
  color: #fff;
  margin: 0 2px;
  border-radius: 50%;
  font-size: 30px;
  transition: 1s;
}

.checkliquid {
  background-color: #4CDCFC;
  width: 60px;
  height: 30px;
  margin-bottom: -18px;
}





.socialul::before li:nth-child(1) a {
  visibility: hidden;
}
.socialul li:nth-child(2) a::before {
  visibility: hidden;
}
.socialul li:nth-child(3) a::before {
  visibility: hidden;
}
.socialul li:nth-child(4) a::before {
  visibility: hidden;
}




.socialul:hover li:nth-child(1) a {
transform: translateX(40px) rotate(360deg);
transition-delay: 0.6s;
}
.socialul:hover li:nth-child(2) a {
  transform: translateX(80px) rotate(360deg);
  transition-delay: 0.4s;
  }
  .socialul:hover li:nth-child(3) a {
    transform: translateX(120px) rotate(360deg);
    transition-delay: 0.2s;
    }

    .socialul:hover li:nth-child(4) a {
      transform: translateX(160px) rotate(360deg);
      transition-delay: 0s;
      }

      /* Lets talk page starts */

/* Start About us Page */

@media (max-width: 768px) {
/* Start minified Blog */
.allmovey {
  margin-left: 0px;
  margin-top: 4px;
}
.forsidepost{

  margin-top: -900px;
}

}

</style>


</head>

  <body>
    <!-- header -->
    <!-- header -->

    <div class="header fixed-top">
        <!-- navigation start -->
        <div class="container-lg">
       @include('includes/header')
        </div>
        <!-- navigation close -->
      </div>


    <!-- hero section -->
    <div
      class="bg-shape"
      style=" background:linear-gradient(180deg, rgba(30, 24, 53, 0.4) 0%, rgba(30, 24, 53, 0.4) 90.16%), url(../myassets/images/home-slider-edited.png); background-size: cover; background-repeat: no-repeat;height:65vh;
    background-position: center;"
    >
      <div class="container">
        <div class="row">
          <div class="offset-lg-2 col-lg-8 col-md-12 col-12">
            <div class="text-center py-lg-13 py-12">

              <h1 class="mb-3 display-4 text-white">
              {{$blog->title}}
              </h1>
              <div class="mb-3">
                <div class="font-14 text-light">
                  <span class="mr-2">{{date('M j, Y',strtotime($blog->created_at))}}</span>

                <span>Posted by <a href="#" class="">{{$blog->user->username}}</a></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- post desctiptions -->
    <div class="pt-12 pb-12 ">
      <div class="container">
        <div class="row">
          <div
            class="offset-xl-2 col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12"
          >



            <!-- list unstyled -->

            <!-- table -->

            <!-- img alignment -->
            <div class="mb-5">
            <h3 class="mb-3">{{$blog->title}}</h3>

              <img
                src="/storage/blogs/{{$blog->blog_image}}"
                alt=""
                class="img-fluid rounded mb-2 mt-3 w-100"
              />

            </div>
        <input type="hidden" name="blogid" value="{{$blog->id}}" data-id="blogid">

            <div class="mb-4">
              <p>
            {{$blog->body}}
              </p>

<div class="d-flex">
    {{-- <div id="social-links">
        <ul>
            <a href="https://twitter.com/intent/tweet?text=my share text&amp;url=http://192.168.43.72/showsingle/{{$blog->slug}}" class="social-button " id=""><span class="fa fa-firefox"></span></a>
            <a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=http://192.168.43.72/showsingle/{{$blog->slug}}&amp;title=my share text&amp;summary=dit is de linkedin summary" class="social-button " id=""><span class="fa fa-linkedin"></span></a>
            <a href="https://www.facebook.com/sharer/sharer.php?u=http://192.168.43.72/showsingle/{{$blog->slug}}" class="social-button " id=""> <i class="fa fa-facebook"></i></a>
            <a href="https://wa.me/?text=http://192.168.43.72/showsingle/{{$blog->slug}}" class="social-button " id=""><span class="fas fa-whatsapp"></span></a>
        </ul>
    </div> --}}




</div>

            </div>

<br>
            <div class="row allmovey">
                <div class="col-6">

                    <ul class="socialul">
                <li id="vespas1"><a href="https://www.facebook.com/sharer/sharer.php?u=http://192.168.43.72/showsingle/{{$blog->slug}}"><img src="../images/icons/face1.png" class="imgsearch" alt=""> </a></li>

                    <li id="vespas2"><a href="https://twitter.com/intent/tweet?text={{$blog->title}}&amp;url=http://192.168.43.72/showsingle/{{$blog->slug}}"> <img src="../images/icons/twitter.png" class="imgsearch" alt=""></a></li>
                    <li id="vespas3"><a href="https://wa.me/?text={{$blog->title}} + www.yusufkaka.com/showsingle/{{$blog->slug}}"> <img src="../images/icons/whatsapp.png" class="imgsearch" alt=""></a></li>

                    {{-- <li id="vespas3"> <a href="https://api.whatsapp.com/send?text=www.google.com" data-action="share/whatsapp/share"><img src="../images/icons/whatsapp.png" class="imgsearch" alt=""></a> </li> --}}

                    <li id="vespas4"><a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=http://192.168.43.72/showsingle/{{$blog->slug}}&amp;title=my share text&amp;summary=dit is de linkedin summary"> <img src="../images/icons/linkedin.png" class="imgsearch" alt=""></a></li>

                </ul>
                </div>
                </div>

            <!-- author post -->
            <div class="mb-4">
                <div class="card bg-transparent">
                  <div class="card-header bg-transparent p-3">
                  <h4 class="mb-0 h5"> <span id="smsnum" class="smsnum"></span>  Comments</h4>
                  </div>
                  <div class="card-body">
                    <div class="media">
                      <img
                        src="../assets/images/avatar-2.png"
                        alt=""
                        class="avatar-lg rounded-circle mr-3"
                      />
                      <div class="media-body">
                        <div class="mb-2">
                          <h5 class="h6 mb-0">Aubrey Wilson</h5>
                          <small>December 31, 2020 12:47 PM</small>
                        </div>
                        <p>Donec ullamcorper maximus ie aliquam vmentume.</p>
                        <a href="#" class="btn-primary-link">Reply</a>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
            <!-- comment section -->

            <div class="mb-4">
                <div class="card bg-transparent">
                  <div class="card-header bg-transparent p-3">
                    <h4 class="mb-0 h5">Leave A Comment</h4>
                  </div>
                  <div class="card-body">

             <form  method="post" onsubmit="return SubmitComment()" role="form" style="display: block;">
                @csrf
             <input type="hidden" name="postid" value="{{$blog->id}}" id="postid">
             <label for="messages">username</label>
             <input type="text" name="username" class="form-control pl-3"  id="username">

                      <div class="form-group col-12">
                        <label for="messages">Comment</label>
                        <textarea
                          name="comment"
                          rows="4"
                          class="form-control"
                          id="comment"

                        >
                        </textarea>
                      </div>
                      <div class="col-12">
                        <button type="submit" class="btn btn-primary">
                          Submit
                        </button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            {{-- End comments --}}
          </div>
        </div>
      </div>
    </div>
    <!-- footer -->
    @include('includes.footer')


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- Libs JS -->

    {{-- <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script> --}}
    {{-- <script src="{{ asset('js/share.js') }}"></script> --}}
    <script src="myassets/libs/shared/share.js"></script>

    <script src="../myassets/libs/jquery/dist/jquery.min.js"></script>
    <script src="../myassets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../myassets/libs/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <script src="../myassets/libs/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
    <script src="../myassets/libs/prismjs/prism.js"></script>
    <script src="../myassets/libs/leaflet/dist/leaflet.js"></script>
    <script src="../myassets/libs/moment/min/moment.min.js"></script>
    <script src="../myassets/libs/lightpick/lightpick.js"></script>
    <script src="../js/mycustom.js"></script>
    <script src="../myassets/typed.js/lib/typed.min.js"></script>




    <!-- clipboard -->
    <script src="../../../../cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.5.12/clipboard.min.js"></script>


    <!-- Theme JS -->
    <script src="../myassets/js/theme.min.js"></script>


    <script type="text/javascript">

        function SubmitComment()
        {
            var token    = $("input[name=_token]").val();
            var postid    = $("input[name=postid]").val();
            var username    = $("input[name=username]").val();
            var comment    = $("textarea[name=comment]").val();

            var data = {
                _token:token,
                postid:postid,
                username:username,
                comment:comment,
            };
            // Ajax Post
            $.ajax({
                type: "post",
                url: "/submitcomment",
                data: data,
                cache: false,
                beforeSend:function(){
                //   $("#register_button").attr("disabled", "disabled");
                //         $("#register_button").html('Proccessing . . <i class="fas fa-spinner fa-spin text-white"></i>')

                },

                success: function (data)
                {
                    console.log('Comment request sent !');

    if(data.status == 'success'){
        const username =  $('#username').val('');
        const comment =  $('#comment').val('');
    swal({
        title: data.status,
        text: data.message,
        type: "success",
        showCancelButton: false,
        dangerMode: false,
        cancelButtonClass: '#4FE870',
            confirmButtonColor: '#4FE870',
            confirmButtonText: 'OKAY!',
    }

    );


    }


                },

                error: function (data){
                  console.log('Fail to run Login..');
                    // alert("Fail to run Login..");


                }
            });
            return false;
        }
    </script>


<script type="text/javascript">
    setInterval(countComment,1000);
    setInterval(allMessageView,1000);

    function countComment() {
var blogid = $('#blogid').val();
console.log(blogid);
$.ajax({
    type:'get',
    url:'{{URL::to('/seen/blogid')}}',
    datatype:'html',
    success:function(response){
        if(response > 0){
            $('#smsnum').show();
            $('#smsnum').html(response);

        }else{
            $('#smsnum').hide();
        }

       }
    });
}


</script>
