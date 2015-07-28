<header id="banner" role="banner">

    <h1 id="afup">
        <a class="link-home" href="{{url('/')}}">ConfPHP</a>
    </h1>

    <p id="conf" >Prochaines conférences 2015</p>

    <nav role="navigation" id="navigation">
        <a  href="{{url('/')}}">Accueil</a>
        <a  href="{{url('/')}}">à propos</a>
        <a  href="{{url('contact')}}">Contact</a>

        @if(!Auth::guest())
            <a href="{{url('dashboard')}}">Dashboard</a>
            <a href="{{url('auth/logout')}}">LogOUT</a>
        @else
            <a href="{{url('auth/login')}}">LogIN</a>
        @endif
    </nav>

</header>