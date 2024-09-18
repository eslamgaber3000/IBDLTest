<!DOCTYPE html>
<html lang="en">

<head>
    <title>IBDL | International Business Driving License</title>
    <!-- META TAGS -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="IBDL | International Business Driving License">
    <meta name="keyword" content="IBDL, International Business, Driving License">

    <link rel="shortcut icon" href="{{ asset('site/images/fav.png') }}" type="image/x-icon">

    <!-- GOOGLE FONT -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css"
        integrity="sha512-t4GWSVZO1eC8BM339Xd7Uphw5s17a86tIZIj8qRxhnKub6WoyhnrxeCIMeAqBPgdZGlCcG2PrZjMc+Wr78+5Xg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" /> {{--
    <link rel="stylesheet" href="https://use.typekit.net/cue6snb.css" /> --}}
    <!-- ALL CSS FILES -->
    {{--
    <link href="../../site/css/style.css" rel="stylesheet"> --}}
    @yield('css')
    <style>
        @font-face {
            font-family: 'Aeonik';
            src: url("../../fonts/Aeonik/AeonikTRIAL-Regular.otf") format("opentype");
            font-weight: normal;
            font-style: normal
        }

        @font-face {
            font-family: 'Aeonik';
            src: url("../../fonts/Aeonik/AeonikTRIAL-Bold.otf") format("opentype");
            font-weight: bold;
            font-style: normal
        }

        @font-face {
            font-family: 'Aeonik';
            src: url("../../fonts/Aeonik/AeonikTRIAL-BoldItalic.otf") format("opentype");
            font-weight: bold;
            font-style: italic
        }

        @font-face {
            font-family: 'Aeonik';
            src: url("../../fonts/Aeonik/AeonikTRIAL-Light.otf") format("opentype");
            font-weight: light;
            font-style: normal
        }

        @font-face {
            font-family: 'Aeonik';
            src: url("../../fonts/Aeonik/AeonikTRIAL-LightItalic.otf") format("opentype");
            font-weight: light;
            font-style: italic
        }

        @font-face {
            font-family: 'Aeonik';
            src: url("../../fonts/Aeonik/AeonikTRIAL-RegularItalic.otf") format("opentype");
            font-weight: normal;
            font-style: italic
        }

        body {
            font-family: 'Aeonik'
        }
    </style>
</head>

<body class="">

    <div class="offcanvas-wrapper inc-slider-index-1">
        @yield('websit_content')
    </div>

    {{-- <script src="{{ asset('site/js/modernizr-3.6.0.min.js') }}"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"
        integrity="sha512-oL84kLQMEPIS350nZEpvFH1whU0HHGNUDq/X3WBdDAvKP7jn06gHTsCsymsoPYKF/duN8ZxzzvQgOaaZSgcYtQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/3.3.0/jquery-migrate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"
        integrity="sha512-VK2zcvntEufaimc+efOYi622VN5ZacdnufnmX7zIhCPmjhKnOi9ZDMtg1/ug5l183f19gG1/cBstPO4D8N/Img=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    {{-- <script src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script> --}}
    {{-- <script src="{{ asset('site/plugins/aos.js') }}"></script>
    <script src="{{ asset('site/plugins/headroom.js/headroom.min.js') }}"></script>
    <script src="{{ asset('site/plugins/headroom.js/jQuery.headroom.min.js') }}"></script>
    <script src="{{ asset('site/plugins/jssocials.min.js') }}"></script>
    <script src="{{ asset('site/plugins/plyr.min.js') }}"></script>
    <script src="{{ asset('site/js/scripts.0.0.1.js') }}"></script> --}}
    {{-- <script src="//code.tidio.co/zk6slgwkeuewuvwrymttufgx2rnhbgto.js" async></script> --}}
    @yield('scripts')
</body>

</html>