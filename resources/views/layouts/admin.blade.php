<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta content="conférence PHP" name="description">
    <meta content="Antoine AFUP" name="author">
    <meta content="Paris, France" name="geo.placename">

    <title>@yield('title')</title>

    <!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

    <!--[if lt IE 8]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <link rel="stylesheet" href="{{asset('assets/style.css')}}"/>
</head>

<body>

<div class="header-container">
    <div class="wrapper clearfix">
        @include ('front.includes.header')
    </div>
</div>

<div class=main-container">
    <div class="main wrapper clearfix">
        <div id="main" role="main">
            @yield('content')
        </div>
    </div>
</div>

<div class="main-container">
    <div class="main wrapper clearfix">
        @include ('front.includes.sidebar')
    </div>
</div>

<div class="footer-container">
    <aside class="wrapper">
        @include('front.includes.footer')
    </aside>
</div>

</body>

</html>