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

    <link rel="stylesheet" href="{{asset('assets/style.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/css/main.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/css/app.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/css/skeleton.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/js/vendor/jquery-1.11.3.min.js')}}"/>
    <link rel="stylesheet" href="{{asset('assets/js/vendor/modernizr-2.8.3.min.js')}}"/>
</head>

<body>

<div class="header-container">
    <header class="wrapper clearfix" id="banner" role="banner">
            @include ('front.includes.header')
    </header>
</div>

<div class=main-container">
    <div class="main wrapper clearfix">

        <section>
            @yield('content')
        </section>

        <aside>
            @section('sidebar')
                <h1>Sidebar</h1>
                <ul>
                    <li><a href="{{url('student')}}">tous les students</a></li>
                </ul>
            @show
        </aside>

    </div>
</div>

<div class="footer-container">
    <footer class="wrapper">
        <ul>
            <li><a href="#">mentions légales</a></li>
        </ul>
    </footer>
</div>

</body>

</html>