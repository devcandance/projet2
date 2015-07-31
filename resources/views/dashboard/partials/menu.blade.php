<ul>
    <li><a href="{{url('/')}}">Retour site public</a></li>
    @if(!Auth::guest())
        <li><a href="{{url('dashboard')}}">Dashboard</a></li>
        <li><a href="{{url('auth/logout')}}">LOGouT</a></li>
    @endif
</ul>