<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>@yield('title', 'FINBEX Corporate Solutions Private Limited')</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="description" content="@yield('meta_description', 'Financial and corporate consultancy solutions for businesses, SMEs and enterprises.')">
  <meta name="author" content="FINBEX Corporate Solutions Private Limited">
  <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}">

  <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('assets/css/owl.carousel.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('assets/css/owl.theme.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('assets/css/venobox.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet" type="text/css">
  @stack('styles')
</head>
<body>

  <div class="finbex-cursor" aria-hidden="true">
    <div class="finbex-cursor-ring"></div>
    <div class="finbex-cursor-dot"></div>
  </div>

  <div id="preloader">
    <span class="margin-bottom">
      <img src="{{ asset('assets/images/loader.gif') }}" alt="Loading...">
    </span>
  </div>

  @include('partials.header')

  @yield('content')

  @include('partials.footer')

  <a id="backTop">Back To Top</a>

  <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('assets/js/wow.min.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.backTop.min.js') }}"></script>
  <script src="{{ asset('assets/js/waypoints.min.js') }}"></script>
  <script src="{{ asset('assets/js/waypoints-sticky.min.js') }}"></script>
  <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.stellar.min.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
  <script src="{{ asset('assets/js/venobox.min.js') }}"></script>
  <script src="{{ asset('assets/js/custom-scripts.js') }}"></script>
  @stack('scripts')
</body>
</html>
