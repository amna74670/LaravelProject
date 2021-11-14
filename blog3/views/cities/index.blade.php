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
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  </head>
  <body>
    <div class="container">
      <div class="">
        <span class="float-left">
          <h1>Cities</h1>
        </span>
        <span class="float-right mt-2">
          <a class="btn btn-primary" href="/cities/create"><i class="fas fa-plus"></i> Create</a>
        </span>
      </div>
      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Status</th>
            <th scope="col">Created At</th>
            <th scope="col">Updated At</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach($cities as $city)
            <tr>
              <td>{{ $city->id }}</td>
              <td>{{ $city->name }}</td>
              <td>{{ $city->status }}</td>
              <td>{{$city->created_at}}</td>
              <td>{{$city->updated_at}}</td>
              <td>
                <div class="btn-group" role="group" aria-label="City Button">
                  <a class="btn btn-info" href="/cities/show/{{$city->id}}"><i class="fas fa-eye"></i></a>
                  <a class="btn btn-warning" href="/cities/edit/{{$city->id}}"><i class="fas fa-edit"></i></a>
                  <span class="float-left mr-1">
                    <form class="" action="/cities/delete/{{$city->id}}" method="post">
                      @csrf
                      <button class="btn btn-danger" type="submit" name="button"><i class="fas fa-trash"></i></button>
                    </form>
                  </span>
                </div>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </body>
</html>
