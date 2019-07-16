<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="icon" href={{asset("favicon.ico")}}>
    <title> @yield('title') </title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link href={{asset("frontend/dist/css/bootstrap.css")}} rel="stylesheet">
    {{-- <link href={{asset("frontend/dist/css/login.css")}} rel="stylesheet"> --}}
    <link href={{asset("frontend/dist/css/carousel.css")}} rel="stylesheet">
    <link href="carousel.css" rel="stylesheet">
    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/carousel/">
  </head>
  <body>
        @include('Frontend.header')

        <div class="mt-2">
            @yield('content')
        </div>


        @include('Frontend.footer')
  </body>
</html>
