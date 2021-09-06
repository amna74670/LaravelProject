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

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  </head>
  <body>
    <div class="container">
      <h1>Car Create</h1>
      <form class="" action="/cars/store" method="post">
        @csrf
        <div class="form-group">
          <label for="CarMake">Car Make</label>
          <input class="form-control" id="CarMake" type="text" name="CarMake" value="">
        </div>
        <div class="form-group">
          <label for="CarModel">Car Model</label>
          <input class="form-control" id="CarModel" type="text" name="CarModel" value="">
        </div>
        <div class="form-group">
          <label for="year_of_make">Year Of Make</label>
          <input class="form-control" id="year_of_make" type="text" name="year_of_make" value="">
        </div>
        <div class="form-group">
          <label for="Vin">Vin</label>
          <input class="form-control" id="Vin" type="text" name="Vin" value="">
        </div>
        <div class="form-group">
          <label for="no_plate_allot">No Plate Allot</label>
          <input class="form-control" id="no_plate_allot" type="text" name="no_plate_allot" value="">
        </div>
        <button type="submit" class="btn btn-primary" name="button">Submit</button>
      </form>
    </div>
  </body>
</html>
