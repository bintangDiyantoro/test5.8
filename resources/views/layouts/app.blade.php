<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}">

    <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,700|Muli:300,400" rel="stylesheet">
    <link rel="stylesheet" href="{{url('fonts/icomoon/style.css')}}">
    <link rel="stylesheet" href="{{url('css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{url('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{url('css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{url('css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{url('css/jquery.fancybox.min.css')}}">
    <link rel="stylesheet" href="{{url('css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{url('fonts/flaticon/font/flaticon.css')}}">
    <link rel="stylesheet" href="{{url('css/aos.css')}}">
    <link href="{{url('css/jquery.mb.YTPlayer.min.css')}}" media="all" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{url('css/style2.css')}}">

    <link rel="stylesheet" href="{{url('css/style.css')}}">
    <title>@yield('title')</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <div class="container">
            <a class="navbar-brand" href="/">Laravel Web</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link @yield('nav1')" href="{{ url('/') }}">Home</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link @yield('nav2')" href="{{ url('/scholars') }}">Scholars</a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link @yield('nav3')" href="{{ url('/students') }}">Students</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @yield('nav4')" href="{{ url('/about') }}">About Us</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    @yield('content')
    <!-- loader -->
    <div id="loader" class="show fullscreen">
        <!-- <svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#ff5e15" />
        </svg> -->
    </div>
    <script src="{{url('js/jquery-3.4.1.min.js')}}"></script>
    <script src="{{url('js/bootstrap.min.js')}}"></script>
    <script src="{{url('js/popper.min.js')}}"></script>

    <script src="{{url('js/jquery-migrate-3.0.1.min.js')}}"></script>
    <script src="{{url('js/jquery-ui.js')}}"></script>
    <script src="{{url('js/owl.carousel.min.js')}}"></script>
    <script src="{{url('js/jquery.stellar.min.js')}}"></script>
    <script src="{{url('js/jquery.countdown.min.js')}}"></script>
    <script src="{{url('js/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{url('js/jquery.easing.1.3.js')}}"></script>
    <script src="{{url('js/aos.js')}}"></script>
    <script src="{{url('js/jquery.fancybox.min.js')}}"></script>
    <script src="{{url('js/jquery.sticky.js')}}"></script>
    <script src="{{url('js/jquery.mb.YTPlayer.min.js')}}"></script>
    <script src="{{url('js/main.js')}}"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="{{url('js/scrolltotop.js')}}"></script>
    <script src="{{url('js/sweetalert2.all.min.js')}}"></script>
    <script src="{{url('js/script.js')}}"></script>
</body>

</html>