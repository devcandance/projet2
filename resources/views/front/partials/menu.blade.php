<a  href="{{url('/')}}">Accueil</a>
<a  href="{{url('/')}}">à propos</a>
<a  href="{{url('contact')}}">Contact</a>


@if(!Auth::guest())
    <a href="{{url('dashboard')}}">Dashboard</a>
    <a href="{{url('auth/logout')}}">LogOUT</a>
@else
    <a href="{{url('auth/login')}}">LogIN</a>
@endif