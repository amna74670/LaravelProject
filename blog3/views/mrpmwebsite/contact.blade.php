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
                <a class="nav-link" aria-current="page" href="{{ route('mrpmautos.index') }}">Home</a>
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
                <a class="nav-link active" href="{{ route('mrpmautos.contact') }}">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <div class="container my-sm-5">
      <h1 class="text-center mb-sm-4 display-1"></h1>
      <div class="row">
        <div class="col-12 col-md-6">
          <h2>Address:</h2>
          <address>
            <strong>MRPM AUTOS</strong>
            <br>
            6257 N Western Ave
            <br>Chicago, IL 60659
            <br>
            <i class="fas fa-fw fa-phone"></i> <a href="tel:+17739778888">+1  (773) 977-8888</a>
            <br>
            <i class="fas fa-fw fa-envelope"></i> <a href="mailto:admin@mrpmautos.com">admin@mrpm.com</a>
          </address>
        </div>
        <div class="col-12 col-md-6">
          <h2>Opening Hours</h2>
          <p>
            Monday-Friday: <span class="float-end">10 am - 6 pm</span>
            <br>
            Saturday: <span class="float-end">10 am - 3 pm</span>
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-lg-6 mb-3">
          <h2>Send us a message</h2>
          <form>
            <div class="row">
              <div class="col-12 col-sm-6">
                <div class="mb-3">
                  <label class="form-label" for="name">Name</label>
                  <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                    <input id="name" type="text" name="" value="" class="form-control" placeholder="Name" required>
                  </div>
                </div>
              </div>
              <div class="col-12 col-sm-6">
                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <div class="input-group">
                    <span class="input-group-text"><i class="fas-fa-envelope"></i></span>
                    <input id="email" type="text" name="" value="" class="form-control" placeholder="Email" required>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
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
