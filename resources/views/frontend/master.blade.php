<!doctype html>
<html lang="en">

<!-- Mirrored from technext.github.io/medic-care/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Jul 2022 17:28:16 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>MHMS</title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">

    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&amp;display=swap"
        rel="stylesheet">

    <link href="{{asset('/frontend/css/bootstrap.min.css')}}" rel="stylesheet">

    <link href="{{asset('/frontend/css/bootstrap-icons.css')}}" rel="stylesheet">

    <link href="{{asset('/frontend/css/owl.carousel.min.css')}}" rel="stylesheet">

    <link href="{{asset('/frontend/css/owl.theme.default.min.css')}}" rel="stylesheet">

    <link href="{{asset('/frontend/css/templatemo-medic-care.css')}}" rel="stylesheet">

</head>

<body id="top">

    @include('frontend.fixed.header')


    <main>
       

        @yield('frontend_content')

    </main>

    <footer class="site-footer section-padding" id="contact">

        @include('frontend.fixed.footer')
    </footer>

    <!-- JAVASCRIPT FILES -->
    <script src="{{asset('/frontend/js/jquery.min.js')}}"></script>
    <script src="{{asset('/frontend/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('/frontend/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('/frontend/js/scrollspy.min.js')}}"></script>
    <script src="{{asset('/frontend/js/custom.js')}}"></script>

</body>



</html>
