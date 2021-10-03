<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Headland+One&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  </head>
  <body class="bg-white">
      <nav class="navbar navbar-expand-lg navbar-light navbar-lteblue fixed-top">
        <div class="container">
          <a class="navbar-brand" href=""><img src="{{ asset('images/pslogo.png') }}" width="70px" height="70px" alt=""></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#paksweetsNavBar" aria-controls="paksweetsNavBar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="paksweetsNavBar">
            <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="text-white h4 nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link text-white dropdown-toggle h4" id="menuDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Menu
                </a>
                <div class="dropdown-menu" aria-labelledby="menuDropdown">
                  <a class="dropdown-item" href="#">Burger</a>
                  <a class="dropdown-item" href="#">Pizza</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Drinks</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white h4" href="#" id="sweetDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Sweets
                </a>
                <div class="dropdown-menu" aria-labelledby="sweetDropdown">
                  <a class="dropdown-item" href="#">Rasmalai</a>
                  <a class="dropdown-item" href="#">Barfi</a>
                  <a class="dropdown-item" href="#">Gulab Jamun</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <div id="mainCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{ asset('images/pic1.jpg') }}" class="d-block w-100" alt="picture1">
          </div>
          <div class="carousel-item">
            <img src="{{ asset('images/pic2.jpg') }}" class="d-block w-100" alt="picture2">
          </div>
          <div class="carousel-item">
            <img src="{{ asset('images/pic3.jpg') }}"  class="d-block w-100" alt="picture3">
          </div>
        </div>
        <a class="carousel-control-prev" href="#mainCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#mainCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

      <div class="container">
        <div class="my-5">
          <div class="row">
            <img src="{{ asset('images/pic4.jpg') }}" alt="promotion">
          </div>
        </div>
        <div class="my-5">
          <h2 class="text-center text-lteblue display-4">Sweets, Snacks & Food</h2>
          <div class="row">
            <div class="card-deck">
              <div class="card text-center border-0">
                <img src="{{ asset('images/pic8.jpg') }}" alt="HALWA">
                <div class="card-body">
                  <h5 class="text-lteblue">HALWA</h5>
                </div>
              </div>
              <div class="card text-center border-0">
                <img src="{{ asset('images/pic5.jpg') }}" alt="BENGALI SWEETS">
                <div class="card-body">
                  <h5 class="text-lteblue">BENGALI SWEETS</h5>
                </div>
              </div><div class="card text-center border-0">
                <img src="{{ asset('images/pic7.jpg') }}" alt="KALAKAND">
                <div class="card-body">
                  <h5 class="text-lteblue">KALAKAND</h5>
                </div>
              </div><div class="card text-center border-0">
                <img src="{{ asset('images/pic6.jpg') }}" alt="SAMOSA">
                <div class="card-body">
                  <h5 class="text-lteblue">SAMOSA</h5>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-12">
          <div class="row">
            <div class="col-md-6">
                <div id="foodCarousel1" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="{{ asset('images/content-15.jpg') }}" class="d-block w-100" alt="food">
                      <div class="carousel-caption d-none d-md-block">
                        <a class="btn btn-danger btn-lg text-white" href="#">ORDER NOW</a>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <img src="{{ asset('images/content-16.jpg') }}" class="d-block w-100" alt="food">
                      <div class="carousel-caption d-none d-md-block">
                        <a class="btn btn-danger btn-lg text-white" href="#">ORDER NOW</a>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <img src="{{ asset('images/content-17.jpg') }}" class="d-block w-100" alt="food">
                      <div class="carousel-caption d-none d-md-block">
                        <a class="btn btn-danger btn-lg text-white" href="#">ORDER NOW</a>
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#foodCarousel1" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#foodCarousel1" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
                </div>

              </div>
              <div class="col-md-6">
                <div id="foodCarousel2" class="carousel slide carousel-fade" data-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="{{ asset('images/content-18.jpg') }}" class="d-block w-100" alt="food">
                      <div class="carousel-caption d-none d-md-block">
                        <a class="btn btn-danger btn-lg text-white" href="#">ORDER NOW</a>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <img src="{{ asset('images/content-19.jpg') }}" class="d-block w-100" alt="food">
                      <div class="carousel-caption d-none d-md-block">
                        <a class="btn btn-danger btn-lg text-white" href="#">ORDER NOW</a>
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#foodCarousel2" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#foodCarousel2" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>

            <div class="my-5">
              <div class="col-md-12">
                <div class="div row">
                  <div class="col-md-3">
                    <div class="card border-0" style="width: 18rem;">
                      <img src="{{ asset('images/chococookie.jpg') }}" class="card-img-top" alt="">
                      <div class="card-body">
                        <h5 class="card-title text-lteblue">CHOCO CHOOKIE</h5>
                        <p class="card-text text-muted mb-0">BAKERY</p>
                        <p class="card-text">$7.00</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="card border-0" style="width: 18rem;">
                      <img src="{{ asset('images/bakarkhani.jpg') }}" class="card-img-top" alt="">
                      <div class="card-body">
                        <h5 class="card-title text-lteblue">BAKARKHANI</h5>
                        <p class="card-text text-muted mb-0">BAKERY</p>
                        <p class="card-text">$7.00</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="card border-0" style="width: 18rem;">
                      <img src="{{ asset('images/donuts.jpg') }}" class="card-img-top" alt="">
                      <div class="card-body">
                        <h5 class="card-title text-lteblue">DONUTS</h5>
                        <p class="card-text text-muted mb-0">BAKERY</p>
                        <p class="card-text">$7.00</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="card border-0" style="width: 18rem;">
                      <img src="{{ asset('images/orange-juice.jpg') }}" class="card-img-top" alt="">
                      <div class="card-body">
                        <h5 class="card-title text-lteblue">ORANGE JUICE</h5>
                        <p class="card-text text-muted mb-0">DRINKS</p>
                        <p class="card-text">$7.00</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="card border-0" style="width: 18rem;">
                      <img src="{{ asset('images/custard.jpg') }}" class="card-img-top" alt="">
                      <div class="card-body">
                        <h5 class="card-title text-lteblue">CUSTARD</h5>
                        <p class="card-text text-muted mb-0">SWEETS</p>
                        <p class="card-text">$9.00</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="card border-0" style="width: 18rem;">
                      <img src="{{ asset('images/tea.jpg') }}" class="card-img-top" alt="">
                      <div class="card-body">
                        <h5 class="card-title text-lteblue">TEA</h5>
                        <p class="card-text text-muted mb-0">DRINKS</p>
                        <p class="card-text">$9.00</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="my-5">
              <div class="col-12">
                <div class="row">
                  <div class="col-md-3">
                    <div class="card text-center border-0" style="width: 18rem;">
                      <span>
                        <i style="font-size: 125px;" class="fas fa-shipping-fast text-lteblue"></i>
                      </span>
                      <div class="card-body">
                        <h5 class="card-title mt-2">Fast Shipping</h5>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="card text-center border-0" style="width: 18rem;">
                      <span>
                        <i style="font-size: 125px;" class="fas fa-check-circle text-lteblue"></i>
                      </span>
                      <div class="card-body">
                        <h5 class="card-title mt-2">Top Quality Products</h5>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="card text-center border-0" style="width: 18rem;">
                      <span>
                        <i style="font-size: 125px;" class="fas fa-lock text-lteblue"></i>
                      </span>
                      <div class="card-body">
                        <h5 class="card-title mt-2">Securce Payment</h5>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="card text-center border-0" style="width: 18rem;">
                      <span>
                        <i style="font-size: 125px;" class="fas fa-utensils text-lteblue"></i>
                      </span>
                      <div class="card-body">
                        <h5 class="card-title mt-2">Clean Enviorment</h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
      </div>

      <footer class="bg-ltblue">
        <div class="container my-5 py-3">
          <div class="row">
            <div class="col-12 col-sm-6 col-lg-3">
              <h6 class="text-white">Quick Links</h6>
              <ul class="list-unstyled">
                <li>
                  <a class="text-white text-decoration-none" href="#">Home</a>
                </li>
                <li><a href="" class="text-white text-decoration-none">Whats New</a></li>
                <li><a href="" class="text-white text-decoration-none">My Account</a></li>
                <li><a href="" class="text-white text-decoration-none">Support</a></li>
                <li><a href="" class="text-white text-decoration-none">FAQ's</a></li>
              </ul>
            </div>
            <div class="col-12 col-sm-6 col-lg-3">
              <h6 class="text-white">Information</h6>
              <ul class="list-unstyled">
                <li><a href="" class="text-white text-decoration-none">About Us</a></li>
                <li><a href="" class="text-white text-decoration-none">Jobs</a></li>
                <li><a href="" class="text-white text-decoration-none">Press Info</a></li>
                <li><a href="" class="text-white text-decoration-none">Contact</a></li>
                <li><a href="" class="text-white text-decoration-none">Partnership</a></li>
              </ul>
            </div>
            <div class="col-12 col-sm-6 col-lg-3">
              <h6 class="text-white">Follow Us</h6>
              <ul class="list-unstyled">
                <li><a href="" class="text-white text-decoration-none"><i class="fab fa-fw fa-facebook"></i>Facebook</a></li>
                <li><a href="" class="text-white text-decoration-none"><i class="fab fa-fw fa-instagram"></i>Instagram</a></li>
                <li><a href="" class="text-white text-decoration-none"><i class="fab fa-fw fa-twitter"></i>Twitter</a></li>
                <li><a href="" class="text-white text-decoration-none"><i class="fab fa-fw fa-youtube"></i>YouTube</a></li>
                <li><a href="" class="text-white text-decoration-none"><i class="fab fa-fw fa-snapchat"></i>Snapchat</a></li>
              </ul>
            </div>
            <div class="col-12 col-sm-6 col-lg-3">
              <h6 class="text-white">Our Location</h6>
              <ul class="list-unstyled">
                <li><a href="" class="text-white text-decoration-none"><strong>PAKSWEETS</strong></a></li>
                <li><a href="" class="text-white text-decoration-none">350 5th Avenue</a></li>
                <li><a href="" class="text-white text-decoration-none">Chicago, Il 10118</a></li>
                <li><a href="" class="text-white"><i class="fas fa-fw fa-phone"></i>(123) 736-7100</a></li>
                <li><a href="" class="text-white"><i class="fas fa-fw fa-inbox"></i>info@pak-sweets.com</a></li>
              </ul>
            </div>
            <div class="row">
              <ul class="list-inline">
                <li class="text-white list-inline-item">&copy; 2020 pak-sweets.com</li>
                <li class="text-white list-inline-item">All rights reserved</li>
                <li class="text-white list-inline-item">Terms of use and privacy policy</li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
  </body>
</html>
