<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('assets/css/main.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/css/app.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/css/skeleton.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/js/vendor/jquery-1.11.3.min.js')}}"/>
    <link rel="stylesheet" href="{{asset('assets/js/vendor/modernizr-2.8.3.min.js')}}"/>
</head>

<body>

<div class="header-container">
    <header class="wrapper clearfix">

        <h1 class="title"><a href="{{url('/')}}">Ceci n'est pas un Blog</a></h1>

        <!--nav>
            {{--@include('partials.menu')--}}
        </nav-->

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