<!DOCTYPE html>
<html lang="en">

<head>
    
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-NRR3XQNTCZ"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'G-NRR3XQNTCZ');
    </script>

    <title>IBDL | IBDL Learning Group</title>

    <!-- META TAGS -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{ $article->metadata['description'] ?? 'IBDL | IBDL Learning Group' }}">
    <meta name="keyword" content="{{ $article->metadata['keyword'] ?? 'IBDL | IBDL Learning Group' }}">
    <link rel="shortcut icon" href="{{ asset('site/images/fav.png') }}" type="image/x-icon">
    <link rel="image_src" href="{{ asset('site/images/fav.png') }}" />

    <!-- Open Graph Meta Tags -->
    <meta property="og:site_name" content="IBDL">
    <meta property="og:title" content="{{ $article->metadata['og:title'] ?? 'IBDL | IBDL Learning Group' }}" />
    <meta property="og:description" content="{{ $article->metadata['og:description'] ?? 'IBDL | IBDL Learning Group' }}" />
    <meta property="og:image" content="{{ $article->metadata['og:image'] ?? asset('site/images/fav.png') }}">
    <meta property="og:type" content="{{ $article->metadata['og:type'] ?? 'website' }}" />
    <meta property="og:url" content="{{ $article->metadata['og:url'] ?? url()->current() }}">
    <meta property="og:updated_time" content="IBDL | IBDL Learning Group" />
    <meta name="msapplication-TileImage" content="{{ asset('site/images/fav.png') }}">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="{{ request()->getHost() }}">
    <meta property="twitter:url" content="{{ $article->metadata['twitter:url'] ?? url()->current() }}">
    <meta name="twitter:title" content="{{ $article->metadata['twitter:title'] ?? 'IBDL | IBDL Learning Group' }}">
    <meta name="twitter:description"
        content="{{ $article->metadata['twitter:description'] ?? 'IBDL | IBDL Learning Group' }}">
    <meta name="twitter:image" content="{{ $article->metadata['twitter:image'] ?? asset('site/images/fav.png') }}">


    <!-- Meta Tags Generated via https://www.opengraph.xyz -->




    <!-- GOOGLE FONT -->
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/assets/css/chat.min.css">

    <link rel="stylesheet"
        href="https://atfawry.fawrystaging.com/atfawry/plugin/assets/payments/css/fawrypay-payments.css">
    <!-- Import FawryPay Staging JavaScript Library-->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js"
        integrity="sha256-+C0A5Ilqmu4QcSPxrlGpaZxJ04VjsRjKu+G82kl5UJk=" crossorigin="anonymous"></script>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.bootstrap3.min.css"
        integrity="sha256-ze/OEYGcFbPRmvCnrSeKbRTtjG4vGLHXgOqsyLFTRjg=" crossorigin="anonymous" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css"
        integrity="sha512-t4GWSVZO1eC8BM339Xd7Uphw5s17a86tIZIj8qRxhnKub6WoyhnrxeCIMeAqBPgdZGlCcG2PrZjMc+Wr78+5Xg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" /> {{--
    <link rel="stylesheet" href="https://use.typekit.net/cue6snb.css" /> --}}
    <!-- ALL CSS FILES -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://ibdl.net/site/css/style.css?v=9" rel="stylesheet">
    @yield('css')
    <style>
    
        .shop_icon {


            transition: background-color 0.3s, color 0.3s;
            animation: bounce 0.5s ease infinite alternate;
        }

        .shop_icon:hover {

            /*background-color: #f8f8f8;*/
            color: #7FFF00;
            animation: none;
            /* Disable the bounce animation on hover */
        }

        @keyframes bounce {
            0% {
                transform: translateY(0);
            }

            100% {
                transform: translateY(-1.5px);
            }
        }
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
    
    <link itemprop="thumbnailUrl" href="{{ asset('site/images/fav.png') }}">
    <span itemprop="thumbnail" itemscope itemtype="http://schema.org/ImageObject">
        <link itemprop="url" href="{{ asset('site/images/fav.png') }}">
    </span>
    <header class="main-header">
        <div style="background-color: #1d1a3d;width:100%;height:28px;position: absolute;z-index:500" class="strip">
            <small style="color: white;margin-left:8em"> 901 S. National Ave.
                Springfield, MO 65897</small>
            <small style="color: white;margin-left:5em"> info@ibdl.net </small>
            <small style="color: white;margin-left:7em"> +1417-836-5000 </small>
            <div style="position: absolute; right:6em;top:0" class="">
                <a style="margin-left:30em" target="_blank"
                    href="https://www.linkedin.com/company/ibdllearninggroup"> <i
                        class="fa-brands fa-linkedin" style="color: white;"></i> </a>
                <a style="margin-left:1em" target="_blank" href="https://www.facebook.com/ibdllearninggroup/"><i
                        class="fa-brands fa-square-facebook" style="color: white"></i> </a>
                <a style="margin-left:1em" target="_blank" href="https://youtube.com/@ibdllearninggroup"> <i
                        class="fa-brands fa-youtube" style="color: white"></i> </a>
                <a style="margin-left:1em" target="_blank" href="https://x.com/IBDLGroup"> <i
                        class="fa-solid fa-x" style="color: white"></i>
                        </a>
                <a style="margin-left:1em" target="_blank" href="https://www.instagram.com/ibdllearninggroup"> <i
                        class="fa-brands fa-instagram" style="color: white"></i> </a>
                        <a style="margin-left:1em" target="_blank" href="https://whatsapp.com/channel/0029VahVgUDLtOjBb6U9rm0q"> <i
                        class="fa-brands fa-whatsapp" style="color: white"></i> </a>
            </div>
        </div>
        <nav style="padding-top:20px" id="navbar_top"
            class="navbar navbar-expand-lg main-nav navbar-fixed-top header header--fixed hide-from-print">
            <div class="top-header">
                <div style="overflow: visible" class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="main-brand">
                                <a href="{{url('/')}}">
                                    <img src="{{ asset('site/images/logo.png') }}" alt="" />
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="user-links">

                                <ul class="list-unstyled no-margin links" style="margin-left: auto;">
                                        @if(Route::has('login'))
                                   <li>
                                        <a style="color: white;
                                        background-color: #1c1b39;" class="btn" type="button" class=" shop
                                            text-decoration-none shop" href="{{url('shop')}}">
                                            <strong class="shop_icon"><i class=" fa-solid fa-shopping-cart"></i>
                                                store</strong>

                                        </a>
                                    </li>
                                       @endif
                                    @if(Route::has('login'))
                                    <!--@auth-->
                                    <!--<li>-->
                                    <!--    <a class="text-decoration-none shop" href="{{url('shop')}}">-->
                                    <!--        <i class="fa-solid fa-shopping-cart"></i> store-->
                                    <!--    </a>-->
                                    <!--</li>-->
                                    <li>
                                        <!--@endauth-->
                                        <!--@endif-->
                                        @if(Route::has('login'))
                                        @auth
                                        <a class="d-flex flex-column" href="{{ route('dashboard') }}">
                                            {{-- <i style="color:black" class="fa-solid fa-user fa-xl"></i> --}}
                                            <img style="border:1px solid lightgray;border-radius:100%" class="m-auto"
                                                width="40" height="40"
                                                src="{{asset('storage/avatars/'.Auth::user()->avatar)}}" alt="">
                                            {{-- <small>Hello, {{Auth::user()->name}} </small> --}}
                                        </a>
                                        @else
                                        <div class="dropdown me-1 dropdown-center">
                                            <button style="color: white;
                                            background-color: #1c1b39;" class="btn" type="button"
                                                data-bs-toggle="dropdown" aria-expanded="false" data-bs-offset="10,20">
                                               <i style="color: white" class="fa-solid fa-user"></i>   <stron> Sign In </stron><i
                                                    style="color: white" class="fa-solid fa-angle-down"></i>
                                            </button>

                                            <form method="POST" action="{{ route('login') }}"
                                                class="dropdown-menu login-menu p-5 pb-4">
                                                @csrf
                                                <div class="p-1">
                                                    <div class="mb-3">
                                                        <label style="color:white" for="email" class="form-label">User
                                                            Name</label>
                                                        <x-text-input id="email" class="form-control" type="email"
                                                            name="email" aria-placeholder="User Name"
                                                            :value="old('email')" required />
                                                        <x-input-error style="color:red"
                                                            :messages="$errors->get('email')" class="mt-2" />
                                                    </div>

                                                    <div class="mb-4">
                                                        <label style="color:white" for="password"
                                                            class="form-label">Password</label>
                                                        <x-text-input id="password" class="form-control" type="password"
                                                            name="password" required autocomplete="current-password" />

                                                        <x-input-error style="color:red"
                                                            :messages="$errors->get('password')" class="mt-2" />

                                                    </div>

                                                    <div class="text-center ">
                                                        <button type="submit" class="btn btn-warning button m-auto">Sign in
                                                            </button>
                                                    </div>
                                                    <div class="d-flex mt-4 justify-content-center">
                                                        <p style="color:gray" class="mb-0 me-1">New Here?</p>
                                                        <a style="color:white" href="{{ route('register') }}">
                                                            Sign Up
                                                            
                                                        </a>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        @endauth
                                        @endif

                                    </li>
                                </ul>
                                {{-- <div class="dropdown">
                                    <button class="btn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        language <i class="fa-solid fa-angle-down"></i>
                                    </button>
                                    <ul class="dropdown-menu animated slideIn lang-items">
                                        <li>
                                            <a class="dropdown-item" href="#">عربى <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20"
                                                    xml:space="preserve" version="1.1" viewBox="0 0 20 20">
                                                    <image width="16" height="16"
                                                        xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAACXBIWXMAAADsAAAA7AF5KHG9AAAAGXRFWHRTb2Z0d2FyZQB3d3cuaW5rc2NhcGUub3Jnm+48GgAAA6JJREFUWIW9l29oG2Ucx7936d0l6OV/1j+GZrWpwb6YuDU0LxzNukrtH6uGQuf6RmoopTJ6RaiKL4xzQqvgiyrClPpCZDKnMO180eGk1jHH3MC5FYR2C6luxLRp/iztLbm7nC9c47pu5mma5gvPi7vn9/w+nzuO5+4oEGZhZKyKiiZGlPBiixS8sVONJXVqPEkDAGXUZymzQWRr7EGqwvqDYjKM1bw/EibpS+UrCL069nR2dm5cOnvJlU2t5q0HAJp/SGWe2v0H83jNIfsHb54pSODP4YBZCS19f/vUtAcZiYS7MRwLbUfTL8bHHukwjr4RIxa4eXh8r3h8akqandcVRl4fTW31Ktfs8VZ/+s6veQVuDB3pWfli8lg2GqeLAc9JWE0Kc6CtZ+dHb33zQIGbh8f3pj4+Pp0NLxUVnpPYYVG4zn2e6s/evbh2LgdaHj1qWP188vR2wQFAiUQ16ZkLM9dGjxo2CCQv/D4lzy9otwuek5hf0NHnL3+7TuCvkbH96cnpxu2GryV9arpp4aXX3TkB6er8h6okl4oPyAqUv5cmAICKRqP62598vYh0mi2dAQCtNsO+/IKVSiQSL6qqeqyk8P9ygFZVtbnQ1ZQiglLErQg00wCeKGQlfSsI/mQj+JMe0LeChQrsouLx+CIAa75KJvQd2Otf5Y4pMQJNcg4AoOjroOp25OYyj/ZAcjxLIhApA6AnqZSr9qEsch7stS83zGmSc8AdmYzzIOQqL0lLADAQ73oqw0Pc8zYUW8ODJa0NEHcHoDI8aVvQAJLk1QxS+09AcnRtmJIcz2Gl5QRAM8TtACTKAARB8AzcHbHhCGRbIyjpX3eV0d9XiiDXywD8BsC9mVUqwyPjPFgI8N5cpimK+rEYnQrMGSoSiTw8MTERTZd4K9ZqtZm+vj4LAKC9vX0WgFrK0dnZeQW48zasr68/xDCbenq3FJZl4XK5Xll30ufznSO13+ro7u6eWePmNiKv1/tMbW3tatEv957U1dWtuN3ujvtODgwMPFlRUSFjm668vLxc7u/v//8vr8HBwW6LxVJ0CZvNJguC8DzRbfL7/btcLleyWHCn05ny+/17iOBrEQTB2NXV9RPHcQWDOY5TfT7fz4IgGDcFvzu9vb2e1tbWKzzPZ0nBer0+29bWdnV4eLgpX3+iv10AGBoaKk+lUq+Fw+GWUChUs7y8rIvFYhoAMJlMitlsFh0OR7CysvK03W5/LxAIREj6/gMiJL88Ja/qgAAAAABJRU5ErkJggg==" />
                                                </svg></a>
                                        </li>

                                        <li>
                                            <a class="dropdown-item" href="#">English <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20"
                                                    xml:space="preserve" version="1.1" viewBox="0 0 20 20">
                                                    <image width="16" height="16"
                                                        xlink:href="data:image/png;base64,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" />
                                                </svg></a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">French <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20"
                                                    xml:space="preserve" version="1.1" viewBox="0 0 20 20">
                                                    <image width="16" height="16"
                                                        xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAACXBIWXMAAADsAAAA7AF5KHG9AAAAGXRFWHRTb2Z0d2FyZQB3d3cuaW5rc2NhcGUub3Jnm+48GgAAA1dJREFUWIXFl3tIU1Ecx7/37Hq3pc3N3HJimmHTiLIMU0rzgRK0Hv8URv1ToIZJbyKRBCEKCSrTCEoi6EVCD4plLzQs015Mkx72dM2yNlybzW16d+f6wxxpMy/q5ue/e86P8/1w7z3nx6HAE5PJJKFpWu12uzMBxAOYCUD6Z9oCQAeghaKoOpZlb8nlciufdanRCorOvcx83WGvzJwri9mcHsbwWdR+5hrbe7NOL5ofWxheWXLvf7X0SBMVNR8kz9rMmqOab6ks14+lscF8sgdwOhm2/nmM87H2rm51wVPJkgXLQ4q2dHsrJd4G959/m16h0RsuNBhTWa6ff/Aw3JwLvTfrkn5WXenU55Uk8hLYUdWSc7pOX/vxh0M05uRhcJ/0U/pu1DZ92Vq69r8CJZda0y40/Lhk7HZ6fTPjwWU0Cdjq25c784sTvAoUXWyVVTd23TZZuQkP90iYLAJ7vfZRx67SkH8E3nfYa9532sW+Ch+Ee9c+hftsvD5EYM/Z5myN1pTs6/BB+u48WvZ14+5kj8ArvaOC5dz+ygf6WLBd3VUAQIrPv1A2vvsV67/0AbjH2rm6nQeVxGCh9ll7uVFPxImmv8dOwWrbS76b2Wx/h3swmLKJrssRNVn5XPvXmcRs43y+9UbEYhUTc4/vDp7RcP20CAjl99/vLygKRBZIj73djRMiC3YRaSDtmCwBSjrVQaLlIt1kCQhmRbQTpUx4f7IEKPm0eyRQ6CybKqL92AgGIJIgtyhyxmFyPC/ZkBInafO3AJOa8CastMBIAGBOeOA2Ie3H/ShkIFRFFwJ/2vHR3Pha9aLQJn/li9TpDcpjxfUeAQBQRYjVKqXY5utwgSrKFhw5bdXgs0egbON884r4kJTpwYzLV+EkVNovzErKkJWXWv4RAIDy/IUt6xaH5vhCgkwPdYk3rFobefLA8yHjwwtPFCRcXb5QlhgTNnGfQzA7yha0Jm3xjIr914fPee2E57YnNu9aNy9s/RJFbYBg7LuDCqAhXJn+RJqboww/fUjrrWbEu2FhhqIHQNam8uZEwy/HGVGAQAVAyCtYxPSJ1WkfqLhZhZFHih5Cc2rkWj4LAoDRaAxiGEYNIAPAAgDRGHo9bwfQDOABy7I1CoWih8+6vwGQ/CF8HL9iqgAAAABJRU5ErkJggg==" />
                                                </svg></a>
                                        </li>
                                    </ul>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           

        </nav>
    </header>

    <header class="mobile-menu">
        <div class="containe">
            <div class="content">
                <div class="menu-btn">
                    <a class="btn" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button"
                        aria-controls="offcanvasExample">
                        <i class="fa-solid fa-bars"></i>
                    </a>
                </div>
                <div class="mob-logo">
                    <a class="" href="{{url('')}}">
                        <img src="{{ asset('site/images/logo.png') }}" alt="" />
                    </a>
                </div>
                <div class="main-search">
                    <div class="dropdown">

                        @if(Route::has('login'))
                        @auth
                        <a href="{{ route('dashboard') }}">
                            <i style="" class="fa-solid fa-user fa-xl"></i>
                        </a>
                        @else
                        <div class="dropdown me-1 dropdown-center">
                            <button style="background-color: transparent;" class="btn" type="button"
                                data-bs-toggle="dropdown" aria-expanded="false" data-bs-offset="10,20">
                                <i style="" class="fa-solid fa-user"></i> Sign In <i style=""
                                    class="fa-solid fa-angle-down"></i>
                            </button>

                            <form method="POST" action="{{ route('login') }}" class="dropdown-menu login-menu p-5 pb-4">
                                @csrf
                                <div class="p-1">
                                    <div class="mb-3">
                                        <label style="color:white" for="email1" class="form-label">User
                                            Name</label>
                                        <x-text-input id="email1" class="form-control" type="email" name="email"
                                            aria-placeholder="User Name" :value="old('email')" required />
                                        <x-input-error style="color:red" :messages="$errors->get('email')"
                                            class="mt-2" />
                                    </div>

                                    <div class="mb-4">
                                        <label style="color:white" for="password1" class="form-label">Password</label>
                                        <x-text-input id="password1" class="form-control" type="password"
                                            name="password" required autocomplete="current-password" />

                                        <x-input-error style="color:red" :messages="$errors->get('password')"
                                            class="mt-2" />

                                    </div>

                                    <div class="text-center ">
                                        <button type="submit" class="btn btn-warning button m-auto">Sign
                                            in</button>
                                    </div>
                                    <div class="d-flex mt-4 justify-content-center">
                                        <p style="color:gray" class="mb-0 me-1">New Here?</p>
                                        <a style="color:white" href="{{ route('register') }}">
                                            Sign Up
                                           
                                        </a>
                                    </div>
                                </div>
                            </form>
                        </div>
                        @endauth
                        @endif
                        {{-- <button class="btn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-user"></i>
                        </button> --}}
                        {{-- <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="#">login</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">register</a>
                            </li>
                        </ul> --}}
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="offcanvas-wrapper inc-slider-index-1" style="overflow: hidden">



        <div class="offcanvas offcanvas-start mob-sidebar" tabindex="-1" id="offcanvasExample"
            aria-labelledby="offcanvasExampleLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasExampleLabel"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <div class="logo">
                    <a href="">
                        <img src="{{ asset('site/images/logo.png') }}" class="img-fluid" alt="" />
                    </a>
                </div>
                <div class="links">
                    <ul class="list-unstyled no-margin">
                        <li>
                            <a href="">home</a>
                        </li>
                        <li>
                            <a href="{{ url('Article/index') }}">IBDL Blog</a>
                        </li>
                          <li>
                                        <a style="color: white;
                                        background-color: #1c1b39;" class="btn" type="button" class=" shop
                                            text-decoration-none shop" href="{{url('shop')}}">
                                            <strong class="shop_icon"><i class=" fa-solid fa-shopping-cart"></i>
                                                store</strong>

                                        </a>
                                    </li>
                        <li>
                            <a class="" data-bs-toggle="collapse" href="#collapseMenu_1" role="button"
                                aria-expanded="false" aria-controls="collapseMenu_1">
                                Who we are <i class="fa-solid fa-angle-down"></i>
                            </a>
                            <div class="collapse" id="collapseMenu_1">
                                <ul class=" ms-3 list-unstyled no-margin">
                                    <li> <a class="dropdown-item" href="{{url('pages/about')}}"> About IBDL</a></li>
                                    <li><a class="dropdown-item" href="{{url('pages/strategy')}}">
                                            Strategy</a></li>
                                    <li><a class="dropdown-item" href="{{url('pages/ceo')}}"> CEO
                                            Statement</a></li>
                                    <li><a class="dropdown-item" href="{{url('pages/board_of_trustees')}}">
                                            Board of Trustees</a></li>
                                    <li><a class="dropdown-item" href="{{url('pages/'.'body_of_knowledge')}}">
                                            Body of knowledge</a></li>
                                    <li><a class="dropdown-item" href="{{url('pages/'.'portfolio')}}"> Proud
                                            to Serve</a></li>


                                </ul>
                            </div>
                        </li>
                        <li>
                            <a class="" data-bs-toggle="collapse" href="#collapseMenu_2" role="button"
                                aria-expanded="false" aria-controls="collapseMenu_2">
                                Our Products <i class="fa-solid fa-angle-down"></i>
                            </a>
                            <div class="collapse" id="collapseMenu_2">
                                <ul class="list-unstyled no-margin">

                                    <a class="ms-3" data-bs-toggle="collapse" href="#collapseMenu_sub1" role="button"
                                        aria-expanded="false" aria-controls="collapseMenu_sub1">
                                        Qualifications <i class="fa-solid fa-angle-down"></i>
                                    </a>
                                    <div class="collapse" id="collapseMenu_sub1">
                                        <ul class="ms-5 list-unstyled no-margin">

                                            <li><a class="dropdown-item" href="{{url('qualifications/essential')}}">IBDL
                                                    Essential</a></li>
                                            <li><a class="dropdown-item" href="{{url('qualifications/professional')}}">IBDL
                                                    Professional</a></li>
                                            <li><a class="dropdown-item" href="{{url('qualifications/master')}}">IBDL Master </a>
                                            </li>
                                            <li><a class="dropdown-item" href="{{url('qualifications/ce')}}"> Certified Educator
                                                </a>
                                            </li>
                                            <li><a class="dropdown-item" href="{{url('qualifications/cie')}}"> Certified
                                                    Industrial
                                                    Engineer </a></li>
                                            <li>
                                                <!--<a class="dropdown-item" href="{{url('qualifications/colp')}}"> Certified-->
                                                <!--    Organizational Learning Professional </a>-->
                                            </li>
                                        </ul>
                                    </div>
                                    @if (session('ver') === 'Trainee' )
                                    @else
                                    <a class="ms-3" data-bs-toggle="collapse" href="#collapseMenu_sub2" role="button"
                                        aria-expanded="false" aria-controls="collapseMenu_sub2">
                                        Business Simulation <i class="fa-solid fa-angle-down"></i>
                                    </a>
                                    <div class="collapse" id="collapseMenu_sub2">
                                        <ul class="ms-5 list-unstyled no-margin">
                                            <li><a class="dropdown-item" href="{{url('assessments/win_v_war')}}"> Win vs.
                                                    War
                                                </a></li>
                                            <li><a class="dropdown-item" href="{{url('assessments/master_board_game')}}">
                                                    Master Board Game </a></li>
                                            <li><a class="dropdown-item" href="{{url('assessments/sparta')}}"> Sparta </a>
                                            </li>
                                            <li><a class="dropdown-item" href="{{url('assessments/maven')}}"> Maven </a></li>
                                            <li><a class="dropdown-item" href="{{url('assessments/mogul')}}"> Mogul CEO
                                                </a></li>
                                            <li><a class="dropdown-item" href="{{url('assessments/micromatic')}}">
                                                    Micromatic
                                                </a></li>
                                        </ul>
                                    </div>
                                    @endif

                                    <a class="ms-3" data-bs-toggle="collapse" href="#collapseMenu_sub3" role="button"
                                        aria-expanded="false" aria-controls="collapseMenu_sub3">
                                        Assessment Services <i class="fa-solid fa-angle-down"></i>
                                    </a>
                                    <div class="collapse" id="collapseMenu_sub3">
                                        <ul class="ms-5 list-unstyled no-margin">

                                            <li> <a class="dropdown-item" href="{{url('assessments/pqp')}}"> PQP </a> </li>
                                            <li> <a class="dropdown-item" href="{{url('assessments/cpat')}}"> CPAT </a> </li>
                                        </ul>
                                    </div>
                                    @if (session('ver') === 'Trainee' || session('ver') === 'Center' )
                                    @else
                                    <a class="ms-3" data-bs-toggle="collapse" href="#collapseMenu_sub4" role="button"
                                        aria-expanded="false" aria-controls="collapseMenu_sub4">
                                        Executive Education <i class="fa-solid fa-angle-down"></i>
                                    </a>
                                    <div class="collapse" id="collapseMenu_sub4">
                                        <ul class="ms-5 list-unstyled no-margin">

                                            <li><a class="dropdown-item" href="{{url('executive_education/aelp')}}"> Executive
                                                    Leadership Program
                                                </a></li>
                                            <li><a class="dropdown-item" href="{{url('executive_education/ewlp')}}"> Women Leadership
                                                    Program
                                                </a></li>
                                            <li><a class="dropdown-item" href="{{url('executive_education/economic_diplomacy')}}">
                                                    Economic Diplomacy Program
                                                </a></li>
                                            <li><a class="dropdown-item" href="{{url('executive_education/digital_diplomacy')}}">
                                                    Digital Diplomacy Program
                                                </a></li>
                                            {{-- <li><a class="dropdown-item" href="{{url('executive_education/cldo')}}"> CLDO </a>
                                            </li> --}}
                                            <li><a class="dropdown-item" href="{{url('executive_education/lfc')}}"> Future Creation
                                                    Program </a></li>

                                        </ul>
                                    </div>
                                    @endif
                                </ul>
                            </div>
                        </li>
                        <li>

                            <a class="" data-bs-toggle="collapse" href="#collapseMenu_3" role="button"
                                aria-expanded="false" aria-controls="collapseMenu_3">
                                Our Services <i class="fa-solid fa-angle-down"></i>
                            </a>
                            <div class="collapse" id="collapseMenu_3">
                                <ul class=" list-unstyled no-margin">

                                    <a class="ms-3" data-bs-toggle="collapse" href="#collapseMenu_sub5" role="button"
                                        aria-expanded="false" aria-controls="collapseMenu_sub5">
                                        Customized Learning Solutions
                                        <i class="fa-solid fa-angle-down"></i>
                                    </a>
                                    <div class="collapse" id="collapseMenu_sub5">
                                        <ul class="ms-5 list-unstyled no-margin">
                                            @if (session('ver') === 'Trainee' )
                                            <li><a class="dropdown-item"
                                                    href="{{url('pages/solutions_entrepreneurship')}}">
                                                    Solutions for Entrepreneurship </a></li>
                                            @else
                                            <li><a class="dropdown-item"
                                                    href="{{url('pages/solutions_learning_development')}}">
                                                    Solutions for Learning and Development </a></li>
                                            @if (session('ver') === 'corporate' )
                                            @else
                                            <li><a class="dropdown-item"
                                                    href="{{url('pages/solutions_entrepreneurship')}}">
                                                    Solutions for Entrepreneurship </a></li>
                                            @endif

                                            @if(session('ver') === 'Center')
                                            @else
                                            <li><a class="dropdown-item"
                                                    href="{{url('pages/solutions_higher_education')}}">
                                                    Solutions for Higher Education </a></li>

                                            <li><a class="dropdown-item" href="{{url('pages/solutions_governments')}}">
                                                    Solutions for Governments </a></li>
                                            @endif
                                            <li><a class="dropdown-item" href="{{url('pages/solutions_business')}}">
                                                    Solutions
                                                    for Business </a></li>
                                            <li><a class="dropdown-item" href="{{url('pages/solutions_banks')}}">
                                                    Solutions
                                                    for
                                                    Banks </a></li>
                                            @endif
                                        </ul>
                                    </div>

                                    @if (session('ver') === 'corporate' )
                                    @else
                                    <a class="ms-3" data-bs-toggle="collapse" href="#collapseMenu_sub6" role="button"
                                        aria-expanded="false" aria-controls="collapseMenu_sub6">

                                        Accreditation Services <i class="fa-solid fa-angle-down"></i>
                                    </a>
                                    <div class="collapse" id="collapseMenu_sub6">
                                        <ul class="ms-5 list-unstyled no-margin">


                                            <li><a class="dropdown-item"
                                                    href="{{url('pages/training_provider_accreditation')}}">
                                                    Training provider accreditation </a></li>
                                            <li><a class="dropdown-item"
                                                    href="{{url('pages/testing_provider_accreditation')}}">
                                                    Testing provider accreditation </a></li>
                                            <li><a class="dropdown-item"
                                                    href="{{url('pages/corporate_accreditation')}}">
                                                    Corporate accreditation </a></li>
                                            <li><a class="dropdown-item" href="{{url('pages/academic_accreditation')}}">
                                                    Academic accreditation </a></li>
                                            <li><a class="dropdown-item"
                                                    href="{{url('pages/professional_course_accreditation')}}">
                                                    Professional Course Accreditation </a></li>
                                            <li><a class="dropdown-item"
                                                    href="{{url('pages/professional_corporate_trainer_accreditation')}}">
                                                    Professional Corporate Trainer Accreditation </a></li>
                                            <li><a class="dropdown-item"
                                                    href="{{url('pages/professional_trainer_accreditation')}}">
                                                    Professional IBDL Trainer Accreditation </a></li>

                                            {{--
                                            @if (session('ver') === 'Trainee' )
                                            <li><a class="dropdown-item"
                                                    href="{{url('pages/become_accredited_trainer')}}">
                                                    Become Accredited Trainer </a></li>
                                            @else
                                            <li><a class="dropdown-item"
                                                    href="{{url('pages/become_accredited_examination_centers')}}">
                                                    Become Accredited Examination Center </a></li>
                                            <li><a class="dropdown-item"
                                                    href="{{url('pages/become_accredited_training_centers')}}">
                                                    Become Accredited Training Center </a></li>
                                            @if(session('ver') === 'Center')
                                            @else
                                            <li><a class="dropdown-item"
                                                    href="{{url('pages/become_accredited_trainer')}}">
                                                    Become Accredited Trainer </a></li>
                                            @endif
                                            @endif --}}
                                        </ul>
                                    </div>
                                    @endif
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a class="" data-bs-toggle="collapse" href="#collapseMenu_5" role="button"
                                aria-expanded="false" aria-controls="collapseMenu_5">
                                Media <i class="fa-solid fa-angle-down"></i>
                            </a>
                            <div class="collapse" id="collapseMenu_5">
                                <ul class="ms-3 list-unstyled no-margin">

                        </li> <a style="font-size:13px" class="dropdown-item" href="{{url('pages/news')}}"> News &
                            Events</a></li>
                        </li> <a style="font-size:13px" class="dropdown-item" href="{{url('pages/magazine')}}">
                            The Learning Edit Magazine </a></li>

                    </ul>
                </div>
                </li>
                <li>
                </li>
                <li>
                    <a href="{{url('pages/contact_us')}}" style="cursor: pointer" class="nav-link"> CONTACT
                        US</a>
                </li>
                {{-- <li>
                    <a class="" data-bs-toggle="collapse" href="#collapseMenu_6" role="button" aria-expanded="false"
                        aria-controls="collapseMenu_6">
                        language <i class="fa-solid fa-angle-down"></i>
                    </a>
                    <div class="collapse" id="collapseMenu_6">
                        <ul class="list-unstyled no-margin">
                            <li>
                                <a class="dropdown-item" href="#">عربى <svg xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20"
                                        xml:space="preserve" version="1.1" viewBox="0 0 20 20">
                                        <image width="16" height="16"
                                            xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAACXBIWXMAAADsAAAA7AF5KHG9AAAAGXRFWHRTb2Z0d2FyZQB3d3cuaW5rc2NhcGUub3Jnm+48GgAAA6JJREFUWIW9l29oG2Ucx7936d0l6OV/1j+GZrWpwb6YuDU0LxzNukrtH6uGQuf6RmoopTJ6RaiKL4xzQqvgiyrClPpCZDKnMO180eGk1jHH3MC5FYR2C6luxLRp/iztLbm7nC9c47pu5mma5gvPi7vn9/w+nzuO5+4oEGZhZKyKiiZGlPBiixS8sVONJXVqPEkDAGXUZymzQWRr7EGqwvqDYjKM1bw/EibpS+UrCL069nR2dm5cOnvJlU2t5q0HAJp/SGWe2v0H83jNIfsHb54pSODP4YBZCS19f/vUtAcZiYS7MRwLbUfTL8bHHukwjr4RIxa4eXh8r3h8akqandcVRl4fTW31Ktfs8VZ/+s6veQVuDB3pWfli8lg2GqeLAc9JWE0Kc6CtZ+dHb33zQIGbh8f3pj4+Pp0NLxUVnpPYYVG4zn2e6s/evbh2LgdaHj1qWP188vR2wQFAiUQ16ZkLM9dGjxo2CCQv/D4lzy9otwuek5hf0NHnL3+7TuCvkbH96cnpxu2GryV9arpp4aXX3TkB6er8h6okl4oPyAqUv5cmAICKRqP62598vYh0mi2dAQCtNsO+/IKVSiQSL6qqeqyk8P9ygFZVtbnQ1ZQiglLErQg00wCeKGQlfSsI/mQj+JMe0LeChQrsouLx+CIAa75KJvQd2Otf5Y4pMQJNcg4AoOjroOp25OYyj/ZAcjxLIhApA6AnqZSr9qEsch7stS83zGmSc8AdmYzzIOQqL0lLADAQ73oqw0Pc8zYUW8ODJa0NEHcHoDI8aVvQAJLk1QxS+09AcnRtmJIcz2Gl5QRAM8TtACTKAARB8AzcHbHhCGRbIyjpX3eV0d9XiiDXywD8BsC9mVUqwyPjPFgI8N5cpimK+rEYnQrMGSoSiTw8MTERTZd4K9ZqtZm+vj4LAKC9vX0WgFrK0dnZeQW48zasr68/xDCbenq3FJZl4XK5Xll30ufznSO13+ro7u6eWePmNiKv1/tMbW3tatEv957U1dWtuN3ujvtODgwMPFlRUSFjm668vLxc7u/v//8vr8HBwW6LxVJ0CZvNJguC8DzRbfL7/btcLleyWHCn05ny+/17iOBrEQTB2NXV9RPHcQWDOY5TfT7fz4IgGDcFvzu9vb2e1tbWKzzPZ0nBer0+29bWdnV4eLgpX3+iv10AGBoaKk+lUq+Fw+GWUChUs7y8rIvFYhoAMJlMitlsFh0OR7CysvK03W5/LxAIREj6/gMiJL88Ja/qgAAAAABJRU5ErkJggg==" />
                                    </svg></a>
                            </li>

                            <li>
                                <a class="dropdown-item" href="#">English <svg xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20"
                                        xml:space="preserve" version="1.1" viewBox="0 0 20 20">
                                        <image width="16" height="16"
                                            xlink:href="data:image/png;base64,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" />
                                    </svg></a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">French <svg xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20"
                                        xml:space="preserve" version="1.1" viewBox="0 0 20 20">
                                        <image width="16" height="16"
                                            xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAACXBIWXMAAADsAAAA7AF5KHG9AAAAGXRFWHRTb2Z0d2FyZQB3d3cuaW5rc2NhcGUub3Jnm+48GgAAA1dJREFUWIXFl3tIU1Ecx7/37Hq3pc3N3HJimmHTiLIMU0rzgRK0Hv8URv1ToIZJbyKRBCEKCSrTCEoi6EVCD4plLzQs015Mkx72dM2yNlybzW16d+f6wxxpMy/q5ue/e86P8/1w7z3nx6HAE5PJJKFpWu12uzMBxAOYCUD6Z9oCQAeghaKoOpZlb8nlciufdanRCorOvcx83WGvzJwri9mcHsbwWdR+5hrbe7NOL5ofWxheWXLvf7X0SBMVNR8kz9rMmqOab6ks14+lscF8sgdwOhm2/nmM87H2rm51wVPJkgXLQ4q2dHsrJd4G959/m16h0RsuNBhTWa6ff/Aw3JwLvTfrkn5WXenU55Uk8hLYUdWSc7pOX/vxh0M05uRhcJ/0U/pu1DZ92Vq69r8CJZda0y40/Lhk7HZ6fTPjwWU0Cdjq25c784sTvAoUXWyVVTd23TZZuQkP90iYLAJ7vfZRx67SkH8E3nfYa9532sW+Ch+Ee9c+hftsvD5EYM/Z5myN1pTs6/BB+u48WvZ14+5kj8ArvaOC5dz+ygf6WLBd3VUAQIrPv1A2vvsV67/0AbjH2rm6nQeVxGCh9ll7uVFPxImmv8dOwWrbS76b2Wx/h3swmLKJrssRNVn5XPvXmcRs43y+9UbEYhUTc4/vDp7RcP20CAjl99/vLygKRBZIj73djRMiC3YRaSDtmCwBSjrVQaLlIt1kCQhmRbQTpUx4f7IEKPm0eyRQ6CybKqL92AgGIJIgtyhyxmFyPC/ZkBInafO3AJOa8CastMBIAGBOeOA2Ie3H/ShkIFRFFwJ/2vHR3Pha9aLQJn/li9TpDcpjxfUeAQBQRYjVKqXY5utwgSrKFhw5bdXgs0egbON884r4kJTpwYzLV+EkVNovzErKkJWXWv4RAIDy/IUt6xaH5vhCgkwPdYk3rFobefLA8yHjwwtPFCRcXb5QlhgTNnGfQzA7yha0Jm3xjIr914fPee2E57YnNu9aNy9s/RJFbYBg7LuDCqAhXJn+RJqboww/fUjrrWbEu2FhhqIHQNam8uZEwy/HGVGAQAVAyCtYxPSJ1WkfqLhZhZFHih5Cc2rkWj4LAoDRaAxiGEYNIAPAAgDRGHo9bwfQDOABy7I1CoWih8+6vwGQ/CF8HL9iqgAAAABJRU5ErkJggg==" />
                                    </svg></a>
                            </li>
                        </ul>
                    </div>
                </li> --}}
                </ul>
            </div>
        </div>
    </div>
    @yield('websit_content')
    </div>





    {{-- -- Trigger/Open The Modal -->
    <button id="myBtn">Open Modal</button> --}}

    <!-- The Modal -->
    <!--<div id="myModal" class="modal">-->

        <!-- Modal content -->
        <!--<div class="modal-content">-->
        <!--    {{-- <span class="mclose">&times;</span> --}}-->
        <!--    <div class="modal-header text-center">-->
        <!--        <img src="{{asset('../../images/IBDL_Red.png')}}" alt="" width="100" height="auto">-->
        <!--    </div>-->
        <!--    <div class="modal-body text-center">-->
        <!--        <h5>Customize Your Experience</h5>-->
        <!--        <h2 class="fw-bold">I am a ... </h2>-->
        <!--        <form action="{{ route('version') }}" method="POST">-->
        <!--            @csrf-->
        <!--            <input name="var" type="hidden" value="corporate">-->
        <!--            <button class="close-m" type="submit"> Corporate / Organization</button>-->
        <!--        </form>-->

        <!--        <form action="{{ route('version') }}" method="POST">-->
        <!--            @csrf-->
        <!--            <input name="var" type="hidden" value="Center">-->
        <!--            <button class="close-m" type="submit"> Training Center / Training Providers </button>-->
        <!--        </form>-->

        <!--        <form action="{{ route('version') }}" method="POST">-->
        <!--            @csrf-->
        <!--            <input name="var" type="hidden" value="Trainee">-->
        <!--            <button class="close-m" type="submit"> Trainees / Individuals </button>-->
        <!--        </form>-->

        <!--        <form action="{{ route('version') }}" method="POST">-->
        <!--            @csrf-->
        <!--            <input name="var" type="hidden" value="full">-->
        <!--            <button class="close-m" type="submit" style="background-color: #1d1a3d;color:white;margin: 1em 0;-->
        <!--            height: 3.3em;" class="btn mt-3 py-3 px-5 mb-4">-->
        <!--                Skip to The General Version-->
        <!--            </button>-->


        <!--        </form>-->
        <!--    </div>-->
        <!--</div>-->

    <!--</div>-->






    <script>
        var botmanWidget = {
        aboutText: 'Chatbot',
        introMessage: "Hi there, welcome to IBDL. How can I help you today?",
        title:'IBDL',
        // introMessage: 'Hello, I am a Scarlet! I am here to assist you and answer all your questions about our products and services!',
        mainColor:'#e30618',
        bubbleBackground:'#1d1a3d',
        headerTextColor: '#fff',
    };
    </script>

    <script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script>



    <script>
//         window.onload = function () {
//     if (localStorage.getItem("hasCodeRunBefore") === null) {
//         modal.style.display = "block";
//         localStorage.setItem("hasCodeRunBefore", true);
//     }
// }


// Get the modal
// var modal = document.getElementById("myModal");
// Get the button that opens the modal
// var btn = document.getElementById("myBtn");
// Get the <span> element that closes the modal
// var span = document.getElementsByClassName("mclose")[0];
// var elbtn = document.getElementsByClassName("close-m");
// When the user clicks the button, open the modal 
// btn.onclick = function() {
//   modal.style.display = "block";
// }
// When the user clicks on <span> (x), close the modal
// span.onclick = function() {
//   modal.style.display = "none";
// }
// elbtn.onclick = function() {
//   modal.style.display = "none";
// }
// When the user clicks anywhere outside of the modal, close it
// window.onclick = function(event) {
//   if (event.target == modal) {
//     modal.style.display = "none";
//   }
// }
    </script>













    <footer class="main-footer section" id="section12">
        <div class="">
            <div class="row d-flex">
                <div class="col-lg-3 align-self-center mb-0 mb-md-5 mb-lg-0 mb-sm-0">
                    <div style="" class="footer-logo">
                        <img src="{{ asset('site/images/footer-logo.png') }}" class="img-fluid" alt="logo" />
                    </div>
                </div>
                <div style="padding-left: 5em;" class="col-lg-3 col-md-4 mx-auto quick-link-pad">
                    <div class="quick-links">
                        <h6 class="footer-heading text-uppercase">Quick Links</h6>
                        <ul class="list-unstyled mt-4">
                            <li><a href="{{url('pages/about')}}" class="dropdown-item"> Who We Are</a></li>
                            @if (session('ver') === 'corporate' || session('ver') === 'Center')
                            <li><a href="{{url('pages/find_local_chapter')}}" class="dropdown-item"> Find Your Local
                                    Chapter</a></li>
                            <li><a href="{{url('pages/request_customized_training')}}" class="dropdown-item"> Request A
                                    Customized Training </a></li>
                            @else
                            {{-- <li><a href="{{url('pages/find_local_chapter')}}" class="dropdown-item"> </a></li> --}}
                            <li><a href="{{url('pages/become_member')}}" class="dropdown-item"> Become A
                                    Member
                                </a></li>
                            @endif
                            {{-- <li><a class="dropdown-item"> Become Accredited Examination Center </a></li> --}}
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 ps-0 col-md-4 ">
                    <div class="quick-links">
                        <h6 class="footer-heading text-uppercase">Qualifications</h6>
                        <ul class="list-unstyled mt-4">
                            <li><a class="dropdown-item" href="{{url('qualifications/essential')}}">IBDL Essential</a>
                            </li>
                            <li><a class="dropdown-item" href="{{url('qualifications/professional')}}">IBDL
                                    Professional</a>
                            </li>
                            <li><a class="dropdown-item" href="{{url('qualifications/master')}}">IBDL Master </a></li>
                            <li><a class="dropdown-item" href="{{url('qualifications/ce')}}"> Certified Educator </a>
                            </li>
                            <li><a class="dropdown-item" href="{{url('qualifications/cie')}}"> Certified Industrial
                                    Engineer </a>
                            </li>
                            <li>
                                <!--<a class="dropdown-item" href="{{url('qualifications/colp')}}"> Certified-->
                                <!--    Organizational Learning Professional </a>-->
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 p-sm-0 ps-0 ps-lg-5">
                    <div class="quick-links">
                        <h6 class="footer-heading">HEADQUARTER</h6>
                        <ul class="list-unstyled mt-4">
                            <div class="d-flex mb-3">
                                <i class="fa-sharp fa-solid fa-location-dot red-wrapper me-2"
                                    style="color: #ffffff;padding:10px 12px"></i>
                                <p style="color: white; font-size: 15px;">
                                    901 S. National Ave. Springfield, MO 65897
                                </p>
                            </div>
                            <div class=" d-flex align-items-baseline">
                                <i class="fa-solid fa-phone red-wrapper me-2" style="color: #ffffff;"></i>
                                <p style="color: white; font-size: 15px;">
                                    +1417-836-5000
                                </p>
                            </div>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div style="background-color: #e30618;height:2em;color:white;padding-top: 0.25em;"
        class="d-flex align-items-flex-start ">
        <p class="offset-lg-2 offset-sm-1 offset-1  col-sm-4 col-lg-2" style="color: white">@2024 IBDL LEARNING GROUP</p>
        <a class="offset-1 col-1" style="color: white"  href="{{url('pages/privacy_policy')}}">Privacy policy</a>
        <a class="offset-1 col-3" style="color: white" href="{{url('pages/terms&conditions')}}">Website terms and
            conditions</a>
    </div>
    <script src="{{ asset('site/js/modernizr-3.6.0.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"
        integrity="sha512-oL84kLQMEPIS350nZEpvFH1whU0HHGNUDq/X3WBdDAvKP7jn06gHTsCsymsoPYKF/duN8ZxzzvQgOaaZSgcYtQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/3.3.0/jquery-migrate.min.js"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"
        integrity="sha512-VK2zcvntEufaimc+efOYi622VN5ZacdnufnmX7zIhCPmjhKnOi9ZDMtg1/ug5l183f19gG1/cBstPO4D8N/Img=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="{{ asset('site/plugins/aos.js') }}"></script>
    <script src="{{ asset('site/plugins/headroom.js/headroom.min.js') }}"></script>
    <script src="{{ asset('site/plugins/headroom.js/jQuery.headroom.min.js') }}"></script>
    <script src="{{ asset('site/plugins/jssocials.min.js') }}"></script>
    <script src="{{ asset('site/plugins/plyr.min.js') }}"></script>
    <script src="{{ asset('site/js/scripts.0.0.1.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/js-sha256/0.9.0/sha256.min.js"
        integrity="sha512-szJ5FSo9hEmXXe7b5AUVtn/WnL8a5VofnFeYC2i2z03uS2LhAch7ewNLbl5flsEmTTimMN0enBZg/3sQ+YOSzQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript"
        src="https://atfawry.fawrystaging.com/atfawry/plugin/assets/payments/js/fawrypay-payments.js"></script>
    {{-- <script src="//code.tidio.co/zk6slgwkeuewuvwrymttufgx2rnhbgto.js" async></script> --}}
    @yield('scripts')
</body>

</html>