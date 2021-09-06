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
      <h1>Car</h1>
      <h4>Car Make: {{$car->make}}</h4>
      <h3>Car Model: {{$car->model}}</h3>
      <h3>Car Year Of Make: {{$car->year_of_make}}</h3>
      <h3>Vin: {{$car->vin}}</h3>
      <h3>No Plate Allot: {{$car->no_plate_allot}}</h3>
      <p>Created At: {{$car->created_at}}</p>
      <p>Updated At: {{$car->updated_at}}</p>
    </div>
  </body>
</html>
