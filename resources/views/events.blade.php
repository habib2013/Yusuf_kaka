
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from easetemplate.com/html/coach/pages/events.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 16 May 2020 13:40:50 GMT -->
<head>
    <title>Coach - Events Page</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Theme CSS -->
    <link rel="stylesheet" href="myassets/css/theme.min.css">
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
      style=" background: linear-gradient(180deg, rgba(30, 24, 53, 0.4) 0%, rgba(30, 24, 53, 0.4) 90.16%),url(myassets/images/home-slider-edited.png); background-size: cover; background-repeat: no-repeat;
     background-position: center;"
    >
      <div class="container">
        <div class="row">
          <div class="offset-lg-2 col-lg-8 col-md-12 col-12">
            <div class="py-12 py-lg-15 text-light text-center">
              <h1 class="font-weight-bold text-white mb-3 display-4">
                Upcoming Event
              </h1>
              <p class="lead mb-0">
                Find the best upcoming motivation events in India. Get ready to
                explore mindfulness, stress, motivation, self-belief,
                self-esteem, self-confidence, and business growth. Such an event
                may change or transform your self-belief.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- events thumbnail -->
    <div class="py-lg-12 py-10 ">
      <div class="container">
        <div class="row">
          <!-- thumbanil -->

          @foreach ($events as $event)

          <div class="col-md-6 mb-8">
            <div class="card border-0 ">
              <a href="event-single.html"
                ><img
                  class="rounded img-fluid"
            src="/storage/events/{{$event->event_image}}"
                  alt=""
                />
              </a>
            </div>
            <div class="card border-0">
              <div class="card-body mt-n10 bg-white mr-6 rounded-right p-4">
                <a href="event-single.html">
                <h3 class="mb-3 h4">{{$event->title}}</h3>
                </a>
                <p class="small mb-2">
                  <span
                    ><i class="fas fa-calendar-alt mr-2 text-danger"></i></span
                  >{{date('M j, Y', strtotime($event->date))}}
                </p>
                <p class="small mb-4">
                  <span
                    ><i
                      class="fas fa-map-marker-alt mr-2 text-danger"
                    ></i></span
                  >{{$event->address}}
                </p>
                <a href="#" class="btn-secondary-link"
                  >Attend</a
                >
              </div>
            </div>
          </div>
          @endforeach

        </div>
      </div>
    </div>

    <!-- footer -->
    @include('includes.footer')
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- Libs JS -->
    <script src="myassets/libs/jquery/dist/jquery.min.js"></script>
    <script src="myassets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="myassets/libs/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <script src="myassets/libs/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
    <script src="myassets/libs/prismjs/prism.js"></script>
    <script src="myassets/libs/leaflet/dist/leaflet.js"></script>
    <script src="myassets/libs/moment/min/moment.min.js"></script>
    <script src="myassets/libs/lightpick/lightpick.js"></script>
    <script src="js/mycustom.js"></script>



    <!-- clipboard -->
    <script src="../../../../cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.5.12/clipboard.min.js"></script>


    <!-- Theme JS -->
    <script src="myassets/js/theme.min.js"></script>
