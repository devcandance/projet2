@extends('layouts.master')

@section('title', 'Bienvenue aux conf\' de l\'AFUP')

@section('content')

    <h1>Mot clef : {{$tag->name}}</h1>
    @if($tag->posts)
        <ul>
            @foreach($tag->posts as $p)
                <li>
                    <a href="{{url('single', [$p->id, $p->slug])}}" class="link-post">{{$p->title}}</a>

                    @if($p->excerpt)
                        <p class="abstract">{{$p->excerpt}}</p>
                        <a href="{{url('single', [$p->id, $p->slug])}}" class="link-post">Lire la suite...</a>
                        <br />
                    @endif

                    <br />
                </li>
            @endforeach
        </ul>
        @endif
    </div>


@endsection