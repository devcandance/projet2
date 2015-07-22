@if(isset($categories))

    <ul>
        @foreach($categories as $category)
            <li {{($category->id == $active)? 'class="active"' : ''}}>
                <a href="{{url('category/' . $category->id)}}" >{{$category->title}}</a>
            </li>
        @endforeach

        @if(!Auth::guest())
            <li><a href="{{url('dashboard')}}">Dashboard</a></li>
            <li><a href="{{url('auth/logout')}}">LogOUT</a></li>
        @else
            <li><a href="{{url('auth/login')}}">LogIN</a></li>
        @endif
    </ul>

@endif
