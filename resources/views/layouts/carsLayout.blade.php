<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <script src="{{ mix('js/app.js') }}" charset="utf-8"></script>

        <title>Cars</title>

    </head>
    <body>
      <div class="container">

        <a href="{{ route('cars.index') }}">
          <h1>CARS</h1>
        </a>

        @yield('content')

      </div>

    </body>
</html>
