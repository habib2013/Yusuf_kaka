<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from easetemplate.com/html/coach/pages/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 16 May 2020 13:41:15 GMT -->
<head>
    <title>Coach - Blog Thumbnail Page</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Theme CSS -->
    <link rel="stylesheet" href="myassets//css/theme.min.css">

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
     <div class="bg-shape bg-dark" style="height: 60vh">
    <div class="container">
        <div class="row">
          <div class="offset-xl-2 col-xl-8 col-lg-12 col-md-12 col-12">
            <div class="pt-lg-14 pb-lg-8 py-12 text-center">
              <img
                src="images/Rectangle 73.png"
                alt=""
                class="rounded-circle avatar-xxl mx-auto mb-4"
              />
              <h1 class="display-4 text-white">Kaka Yusuf</h1>

            </div>
          </div>
        </div>
      </div>
    </div>
</div>
    <!-- blog post -->
    <div class="pt-12 pb-12">
      <div class="container">
        <!-- navbar scroll -->
        <div class="row d-flex align-items-center mb-5">
          <div class="col-md-8">

          </div>
          <div class="col-md-4">
            <form class="d-none d-md-block">
              <div class="input-group">
                <!-- Input -->
                <input
                  type="text"
                  class="form-control border-right-0 form-control-sm "
                  aria-label="Search our blog..."
                  placeholder="Search our blog..."
                />

                <!-- Append -->
                <div class="input-group-append">
                  <span
                    class="input-group-text py-1 pl-1 pr-3 px-3 bg-transparent border border-left-0"
                  >
                    <i class="fa fa-search font-14"></i>
                  </span>
                </div>
              </div>
            </form>
          </div>
        </div>

        <!-- featured post -->


        <div class="row">

            @foreach($posts as $post)
          <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
            <div class="mb-8">
              <!-- post classic block -->
              <div class="mb-4">
                <a href="/showsingle/{{$post->slug}}"
                  ><img
                    src="/storage/blogs/{{$post->blog_image}}"
                    alt="/showsingle/{{$post->slug}}"
                    class="img-fluid rounded"
                    style="min-height: 250px"
                /></a>
              </div>
              <div>
                <a
                  href=""
                  class="text-info mb-3 font-14 d-inline-block font-weight-semi-bold "
              >{{$post->post_type}}</a
                >
                <a href="/showsingle/{{$post->slug}}">
                  <h3 class="mb-3">
                    {{$post->title}}
                  </h3>
                </a>
                <div class="mb-3">
                  <div class="font-14">
                    <span class="mr-2">{{date('M j, Y',strtotime($post->created_at))}}</span>
                  <span>Posted by <a href="#" class="">{{$post->user->username}}</a></span>
                  </div>
                </div>
              </div>
            </div>
            <!-- post classic block -->
          </div>
@endforeach

{{ $posts->links() }}
          <!-- pagination -->

        </div>
      </div>
    </div>
    <!-- post subscribe form -->
    <div class="py-lg-10 py-5 top-shape bg-light-primary">
      <div class="container">
        <div class="row">
          <div class="offset-lg-3 col-lg-6 col-md-12 col-12">
            <div class=" text-center border-light-primary">
              <div class="card-body p-10 ">
                <h2 class="mb-4">Get great articles direct to your inbox</h2>
                <form class="form-row mb-4">
                  <div class="form-group mb-0  col-9">
                    <label for="email" class="sr-only"></label>
                    <input
                      type="email"
                      class="form-control border-0"
                      id="email"
                      name="email"
                      required=""
                      placeholder="Enter Email Address"
                    />
                  </div>
                  <div class="col-3">
                    <button class="btn btn-primary" type="submit">
                      Submit
                    </button>
                  </div>
                </form>
                <p class="font-14 mb-0">
                  We’ll never share your details with third parties. View our
                  <a href="#">Privacy Policy </a>for more info.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- footer -->

    @include('includes.footer')
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- Libs JS -->
    <script src="myassets//libs/jquery/dist/jquery.min.js"></script>
    <script src="myassets//libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="myassets//libs/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <script src="myassets//libs/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
    <script src="myassets//libs/prismjs/prism.js"></script>
    <script src="myassets//libs/leaflet/dist/leaflet.js"></script>
    <script src="myassets//libs/moment/min/moment.min.js"></script>
    <script src="myassets//libs/lightpick/lightpick.js"></script>
    <script src="js/mycustom.js"></script>




    <!-- clipboard -->
    <script src="../../../../cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.5.12/clipboard.min.js"></script>


    <!-- Theme JS -->
    <script src="myassets//js/theme.min.js"></script>
