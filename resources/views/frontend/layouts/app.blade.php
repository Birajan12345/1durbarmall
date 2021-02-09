<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
<head>
    <title>1DurbarMall</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="{{asset('assets/images/1durbarmall/logo/logo1.png')}}" type="image/x-icon">
    <link rel="stylesheet" type="text/css"
          href="//fonts.googleapis.com/css?family=PT+Sans:400,700%7CMontserrat:400,700%7CPlayfair+Display:400,400i,700,700i,900,900i">

    <!-- datatables format -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">

    <!------ For Popup images -------->
    <link rel="stylesheet" href="{{ asset('assets/css/sweetalert2.css') }}">

    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/fonts.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

    <script>
        var sc_project = 11981757;
        var sc_invisible = 1;
        var sc_security = "35d2687e";
        var sc_https = 1;
    </script>
{{--    <script src="https://www.statcounter.com/counter/counter.js" async></script>--}}

    <style>.preloader {
            position: fixed;
            left: 0;
            top: 0;
            bottom: 0;
            right: 0;
            z-index: 10000;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
            background: #fff;
            transition: .3s all ease
        }

        .preloader.loaded {
            opacity: 0;
            visibility: hidden
        }

        .preloader-body {
            text-align: center
        }

        .preloader-body p {
            position: relative;
            right: -8px;
            top: 10px
        }

        #circular3dG {
            position: relative;
            width: 75px;
            height: 75px;
            margin: auto
        }

        .circular3dG {
            position: absolute;
            background-color: #BA9557;
            width: 21px;
            height: 21px;
            border-radius: 23px;
            -o-border-radius: 23px;
            -ms-border-radius: 23px;
            -webkit-border-radius: 23px;
            -moz-border-radius: 23px;
            animation-name: bounce_circular3dG;
            -o-animation-name: bounce_circular3dG;
            -ms-animation-name: bounce_circular3dG;
            -webkit-animation-name: bounce_circular3dG;
            -moz-animation-name: bounce_circular3dG;
            animation-duration: 932ms;
            -o-animation-duration: 932ms;
            -ms-animation-duration: 932ms;
            -webkit-animation-duration: 932ms;
            -moz-animation-duration: 932ms;
            animation-iteration-count: infinite;
            -o-animation-iteration-count: infinite;
            -ms-animation-iteration-count: infinite;
            -webkit-animation-iteration-count: infinite;
            -moz-animation-iteration-count: infinite;
            animation-direction: normal;
            -o-animation-direction: normal;
            -ms-animation-direction: normal;
            -webkit-animation-direction: normal;
            -moz-animation-direction: normal
        }

        #circular3d_1G {
            left: 30px;
            top: 5px;
            animation-delay: .3495s;
            -o-animation-delay: .3495s;
            -ms-animation-delay: .3495s;
            -webkit-animation-delay: .3495s;
            -moz-animation-delay: .3495s
        }

        #circular3d_2G {
            left: 46px;
            top: 18px;
            animation-delay: 466ms;
            -o-animation-delay: 466ms;
            -ms-animation-delay: 466ms;
            -webkit-animation-delay: 466ms;
            -moz-animation-delay: 466ms
        }

        #circular3d_3G {
            left: 55px;
            top: 34px;
            animation-delay: .5825s;
            -o-animation-delay: .5825s;
            -ms-animation-delay: .5825s;
            -webkit-animation-delay: .5825s;
            -moz-animation-delay: .5825s
        }

        #circular3d_4G {
            left: 51px;
            top: 50px;
            animation-delay: 699ms;
            -o-animation-delay: 699ms;
            -ms-animation-delay: 699ms;
            -webkit-animation-delay: 699ms;
            -moz-animation-delay: 699ms
        }

        #circular3d_5G {
            left: 31px;
            top: 55px;
            animation-delay: .8155s;
            -o-animation-delay: .8155s;
            -ms-animation-delay: .8155s;
            -webkit-animation-delay: .8155s;
            -moz-animation-delay: .8155s
        }

        #circular3d_6G {
            left: 6px;
            top: 36px;
            animation-delay: 932ms;
            -o-animation-delay: 932ms;
            -ms-animation-delay: 932ms;
            -webkit-animation-delay: 932ms;
            -moz-animation-delay: 932ms
        }

        #circular3d_7G {
            left: 0;
            top: 10px;
            animation-delay: 1.0485s;
            -o-animation-delay: 1.0485s;
            -ms-animation-delay: 1.0485s;
            -webkit-animation-delay: 1.0485s;
            -moz-animation-delay: 1.0485s
        }

        #circular3d_8G {
            left: 13px;
            top: 0;
            animation-delay: 1.165s;
            -o-animation-delay: 1.165s;
            -ms-animation-delay: 1.165s;
            -webkit-animation-delay: 1.165s;
            -moz-animation-delay: 1.165s
        }

        @keyframes bounce_circular3dG {
            0% {
                transform: scale(1)
            }
            100% {
                transform: scale(.3)
            }
        }

        @-o-keyframes bounce_circular3dG {
            0% {
                -o-transform: scale(1)
            }
            100% {
                -o-transform: scale(.3)
            }
        }

        @-ms-keyframes bounce_circular3dG {
            0% {
                -ms-transform: scale(1)
            }
            100% {
                -ms-transform: scale(.3)
            }
        }

        @-webkit-keyframes bounce_circular3dG {
            0% {
                -webkit-transform: scale(1)
            }
            100% {
                -webkit-transform: scale(.3)
            }
        }

        @-moz-keyframes bounce_circular3dG {
            0% {
                -moz-transform: scale(1)
            }
            100% {
                -moz-transform: scale(.3)
            }
        }

        .ie-panel {
            display: none;
            background: #212121;
            padding: 10px 0;
            box-shadow: 3px 3px 5px 0 rgba(0, 0, 0, .3);
            clear: both;
            text-align: center;
            position: relative;
            z-index: 1;
        }

        html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {
            display: block;
        }</style>
</head>
<body>
<div class="ie-panel">
    <a href="http://windows.microsoft.com/en-US/internet-explorer/">
        <img src="{{asset('assets/images/ie8-panel/warning_bar_0000_us.jpg')}}" height="42" width="820"
            alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today.">
    </a>
</div>
<div class="preloader">
    <div class="preloader-body">
        <div id="circular3dG">
            <div class="circular3dG" id="circular3d_1G"></div>
            <div class="circular3dG" id="circular3d_2G"></div>
            <div class="circular3dG" id="circular3d_3G"></div>
            <div class="circular3dG" id="circular3d_4G"></div>
            <div class="circular3dG" id="circular3d_5G"></div>
            <div class="circular3dG" id="circular3d_6G"></div>
            <div class="circular3dG" id="circular3d_7G"></div>
            <div class="circular3dG" id="circular3d_8G"></div>
        </div>
        <p>Loading...</p>
    </div>
</div>
<div class="page text-center">

    @include('frontend.layouts.partials.header')
    @include('frontend.layouts.partials.menubar')
    <div class="content">

        @yield('content')

    </div>
    @include('frontend.layouts.partials.footer')


</div>
<!-- Global Mailform Output-->
<div class="snackbars" id="form-output-global"></div>
<script src="{{asset('assets/js/core.min.js')}}"></script>

<!-- datatables format -->

<script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>

<script src="{{asset('assets/js/script.js')}}"></script>

<!------ For Popup images -------->
<script src="{{ asset('assets/js/sweetalert2.min.js') }}"></script>

@stack('scripts')

@stack('script')

</body>
</html>
