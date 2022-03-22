<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'BADABADUM') }}</title>


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
  <!-- Owl Carousel -->
  <link href="/plugins/slick-carousel/slick/slick.css" rel="stylesheet">
  <link href="/plugins/slick-carousel/slick/slick-theme.css" rel="stylesheet">
  <!-- Fancy Box -->
  <link href="/plugins/fancybox/jquery.fancybox.pack.css" rel="stylesheet">
  <link href="/plugins/jquery-nice-select/css/nice-select.css" rel="stylesheet">
  <!-- CUSTOM CSS -->
  <link href="/css/style.css" rel="stylesheet">
</head>
<body class="body-wrapper">
    @include('_nav')
    @yield('content')
    @include ('_footer')
        
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
<!-- JAVASCRIPTS -->
<script src="/plugins/bootstrap/js/bootstrap-slider.js"></script>
  <!-- tether js -->
<script src="/plugins/tether/js/tether.min.js"></script>
<script src="/plugins/raty/jquery.raty-fa.js"></script>
<script src="/plugins/slick-carousel/slick/slick.min.js"></script>
<script src="/plugins/jquery-nice-select/js/jquery.nice-select.min.js"></script>
<script src="/plugins/fancybox/jquery.fancybox.pack.js"></script>
<script src="/plugins/smoothscroll/SmoothScroll.min.js"></script>
<!-- google map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU&libraries=places"></script>
<script src="/plugins/google-map/gmap.js"></script>
<script src="/js/script.js"></script>
</body>

</html>
