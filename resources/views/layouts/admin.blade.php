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
        <header class="wrapper clearfix">

            <h1 class="title"><a href="{{url('/')}}">Administre à Sion</a></h1>

            <nav>
                @include('dashboard.partials.menu')
            </nav>

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
                @if(!Auth::guest())
                    <ul>
                        <li>Hello {{Auth::user()->name}}</li>
                        <li><a href="{{url('dashboard')}}">Dashboard</a></li>
                        <li><a href="{{url('auth/logout')}}">LOGouT</a></li>
                    </ul>
                    @endif
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