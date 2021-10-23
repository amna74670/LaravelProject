<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom fixed-top">
        <div class="container">
          <a class="navbar-brand" href="{{ route('mrpmautos.index') }}">MRPM AUTO</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="#navbarContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarContent">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ route('mrpmautos.index') }}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('mrpmautos.services') }}">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('mrpmautos.about') }}">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('mrpmautos.team') }}">Team</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('mrpmautos.contact') }}">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <div class="bg-light py-3 py-sm-5">
      <div class="container">
        <div class="row">
          <div class="col-12 col-lg-6 mb-3 mb-lg-0">
            <img class="img-fluid" src="{{ asset('images/mrpmCar.jpg') }}" alt="">
          </div>
          <div class="col-12 col-lg-6">
            <h1 class="display-1">MRPM AUTOS</h1>
            <p class="lead">We do all body parts Repair and Replacement, Auto body denting & painting, Damage Assessment, and Metal reshaping.</p>
            <a href="" class="btn btn-primary btn-lg me-2">Read more</a>
            <a href="{{ route('mrpmautos.contact') }}" class="btn btn-outline-primary btn-lg me-2">Contact us</a>
          </div>
        </div>
      </div>
    </div>

    <div class="container my-3 my-sm-5">
      <div class="row bg-light mb-3 mb-sm-5 g-0 p-4">
        <div class="col-12 col-lg-6 mb-4 mb-lg-0">
          <div class="row">
            <div class="col-12 col-sm-6 text-center">
              <img class="img-fluid rounded-circle mb-4 mb-lg-0" src="{{ asset('images/Whatwedo.jpg') }}" alt="whatwedo">
            </div>
            <div class="col-12 col-sm-6">
              <h2>What we do</h2>
              <p>Repairing or replacing flat tyres, replacing chipped windscreens, replacing key engine parts, carrying out annual services and MOTs are all part of the everyday services which garages offer to customers. MOTs fill up much of the schedule at a car repair garage.</p>
              <a class="btn btn-primary" href="#">Read more</a>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-6">
          <div class="row">
            <div class="col-12 col-sm-6 text-center">
              <img class="img-fluid rounded-circle mb-4 mb-lg-0" src="{{ asset('images/Whoweare.jpg') }}" alt="Whoweare">
            </div>
            <div class="col-12 col-sm-6">
              <h2>Who we are</h2>
              <p>Service Technicians. Service technicians carry out routine servicing on cars and vans. ...
Diagnostic Technicians. ...
Brake and Transmission Technicians. ...
Body Repair Technicians. ...
Vehicle Refinishers. ...
Vehicle Inspectors. ...
Auto Mechanic Salary and Growth Trend.</p>
              <a class="btn btn-primary" href="#">Read more</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="py-3">

    </div>
    <div class="py-3">

    </div>
    <footer class="small bg-light">
      <div class="container py-3">
        <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <h6>Quick Links</h6>
            <ul class="list-unstyled">
              <li><a href="{{ route('mrpmautos.index') }}">Home</a></li>
              <li><a href="{{ route('mrpmautos.services') }}">Services</a></li>
              <li><a href="{{ route('mrpmautos.about') }}">About</a></li>
              <li><a href="{{ route('mrpmautos.team') }}">Team</a></li>
              <li><a href="{{ route('mrpmautos.contact') }}">Contact</a></li>
            </ul>
          </div>
          <div class="col-12 col-sm-6 col-md-3">
            <h6>Information</h6>
            <ul class="list-unstyled">
              <li><a href="">Legal information</a></li>
              <li><a href="">Job opportunities</a></li>
              <li><a href="">FAQ's</a></li>
            </ul>
          </div>
          <div class="col-12 col-sm-6 col-md-3">
            <h6>Follow Us</h6>
            <ul class="list-unstyled">
              <li><a href=""><i class="fab fa-fw fa-facebook"></i>Facebook</a></li>
              <li><a href=""><i class="fab fa-fw fa-instagram"></i>Instagram</a></li>
              <li><a href=""><i class="fab fa-fw fa-twitter"></i>Twitter</a></li>
              <li><a href=""><i class="fab fa-fw fa-youtube"></i>YouTube</a></li>
              <li><a href=""><i class="fab fa-fw fa-linkedin"></i>LinkedIn</a></li>
            </ul>
          </div>
          <div class="col-12 col-sm-6 col-md-3">
            <h6>Our Location</h6>
            <address>
              <strong>MrpmAutos</strong>
              <br>
              6257 N Western Ave<br>
              Chicago, IL 60659
              <br>
              <i class="fas fa-fw fa-phone"></i> <a href="tel:+17739778888">(773) 977-8888</a>
              <br>
              <i class="fas fa-fw fa-envelope"></i> <a href="mailto:admin@mrpmautos.com">admin.mrpmautos.com</a>
            </address>
          </div>
          <ul class="list-inline text-center">
            <li class="list-inline-item">&copy; 2021 MrpmAutos</li>
            <li class="list-inline-item">All rights reserved</li>
          </ul>
        </div>
      </div>
    </footer>
  </body>
</html>
