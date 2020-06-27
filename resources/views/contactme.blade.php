
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from easetemplate.com/html/coach/pages/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 16 May 2020 13:41:14 GMT -->
<head>
    <title>Coach - Contact Page</title>
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
      style=" background:linear-gradient(180deg, rgba(30, 24, 53, 0.4) 0%, rgba(30, 24, 53, 0.4) 90.16%), url(myassets/images/home-slider-edited.png);height:70vh; background-size: cover; background-repeat: no-repeat;
     background-position: center;"
    >
      <div class="container">
        <div class="row">
          <div class="offset-lg-2 col-lg-8 col-md-12 col-12">
            <div class="text-center py-lg-16 py-12">
              <h1 class="mb-3 display-4 text-white">Get Connect</h1>

            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- conatc form -->
    <div class="pb-14">
      <div class="container">
        <div class="row">
          <div class="offset-lg-2 col-lg-8 col-md-12 col-12">
            <div class="card mt-n12 text-center mb-12">
              <div class="card-body p-4 p-lg-8">
                <div class="mb-5">
                  <h2 class="mb-3">I love Hearing From You</h2>
                  <p>
                    If you are looking for advice, please fill out this form. We
                    will <br />find you and get in touch.
                  </p>
                </div>
                <form class="form-row">
                  <div class="from-group col-md-6 col-12 mb-3">
                    <label for="fname" class="sr-only">First Name</label>
                    <input
                      type="text"
                      class="form-control"
                      id="fname"
                      placeholder="First Name"
                      name="fname"
                      required
                    />
                  </div>
                  <div class="from-group col-md-6 col-12 mb-3">
                    <label for="lname" class="sr-only">Last Name</label>
                    <input
                      type="text"
                      class="form-control"
                      id="lname"
                      placeholder="Last Name"
                      name="lname"
                      required
                    />
                  </div>
                  <div class="from-group col-12 mb-3">
                    <label for="email" class="sr-only"> Email</label>
                    <input
                      type="email"
                      class="form-control"
                      id="email"
                      placeholder="Email"
                      name="email"
                      required
                    />
                  </div>
                  <div class="form-group col-12 mb-3">
                    <label for="purpose" class="sr-only">Purpose</label>
                    <select class="custom-select" id="purpose">
                      <option selected>Select Purpose</option>
                      <option value="1">Business Coaching</option>
                      <option value="2">Relationship</option>
                      <option value="3">Lifecoaching</option>
                    </select>
                  </div>
                  <div class="col-12">
                    <button type="submit" class="btn btn-primary btn-block">
                      Send Messages
                    </button>
                  </div>
                </form>
              </div>
            </div>
            <!-- contact info -->
            <div class="row">
              <div class="col-lg-4 col-md-4 col-12">
                <div class="text-center">
                  <h4 class="h5 mb-3">Speaking inquiries:</h4>
                  <p class="text-danger font-weight-bold">123-456-7890</p>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-12">
                <div class="text-center">
                  <h4 class="h5 mb-3">Business inquiries:</h4>
                  <a href="#" class="text-danger font-weight-bold"
                    >info@coachexample.com</a
                  >
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-12">
                <div class="text-center">
                  <h4 class="h5 mb-3">Press Contact:</h4>
                  <a href="#" class="text-danger font-weight-bold"
                    >farris@coach.com
                  </a>
                </div>
              </div>
            </div>
            <!-- social media -->
            <div class="row">
              <div class="offset-lg-3 col-lg-6 col-md-12 col-12">
                <div class="text-center mt-14">
                  <h4 class="mb-4">Follow me on</h4>
                  <ul class="list-inline">
                    <li class="list-inline-item">
                      <a
                        href="#"
                        class="icon-shape icon-md bg-light text-dark rounded-circle "
                        ><i class="fab fa-facebook-f"></i
                      ></a>
                    </li>
                    <li class="list-inline-item">
                      <a
                        href="#"
                        class="icon-shape icon-md bg-light text-dark rounded-circle "
                        ><i class="fab fa-twitter"></i
                      ></a>
                    </li>
                    <li class="list-inline-item">
                      <a
                        href="#"
                        class="icon-shape icon-md bg-light text-dark rounded-circle "
                        ><i class="fab fa-linkedin"></i
                      ></a>
                    </li>
                    <li class="list-inline-item">
                      <a
                        href="#"
                        class="icon-shape icon-md bg-light text-dark rounded-circle "
                        ><i class="fab fa-youtube"></i
                      ></a>
                    </li>
                    <li class="list-inline-item">
                      <a
                        href="#"
                        class="icon-shape icon-md bg-light text-dark rounded-circle "
                        ><i class="fab fa-instagram"></i
                      ></a>
                    </li>
                  </ul>
                </div>
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
    <script src="myassets/libs/jquery/dist/jquery.min.js"></script>
    <script src="myassets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="myassets/libs/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <script src="myassets/libs/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
    <script src="myassets/libs/prismjs/prism.js"></script>
    <script src="myassets/libs/leaflet/dist/leaflet.js"></script>
    <script src="myassets/libs/moment/min/moment.min.js"></script>
    <script src="myassets/libs/lightpick/lightpick.js"></script>
    <script src="js/mycustom.js"></script>
    <script src="myassets/typed.js/lib/typed.min.js"></script>




    <!-- clipboard -->
    <script src="../../../../cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.5.12/clipboard.min.js"></script>


    <!-- Theme JS -->
    <script src="myassets/js/theme.min.js"></script>
