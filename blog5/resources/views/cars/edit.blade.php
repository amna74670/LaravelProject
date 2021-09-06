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
      <h1>Car Edit</h1>
      <form class="" action="/cars/update/{{$car->id}}" method="post">
        @csrf
        <div class="form-group">
          <label for="CarMake">Car Make</label>
          <input type="text" class="form-control" name="CarMake" value="{{$car->make}}" id="CarMake">
        </div>
        <div class="form-group">
          <label for="CarModel">Car Model</label>
          <input type="text" class="form-control" name="CarModel" value="{{$car->model}}" id="CarModel">
        </div>
        <div class="form-group">
          <label for="year_of_make">Year Of Make</label>
          <input type="text" class="form-control" name="year_of_make" value="{{$car->year_of_make}}" id="year_of_make">
        </div>
        <div class="form-group">
          <label for="vin">Vin</label>
          <input type="text" class="form-control" name="vin" value="{{$car->vin}}" id="vin">
        </div>
        <div class="form-group">
          <label for="no_plate_allot">No Plate Allot</label>
          <input type="text" class="form-control" name="no_plate_allot" value="{{$car->no_plate_allot}}" id="no_plate_allot">
        </div>
        <button type="submit" class="btn btn-primary" name="button">Update</button>
      </form>
    </div>
  </body>
</html>
