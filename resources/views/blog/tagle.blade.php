@extends('layouts.master')

@section('title', 'Bienvenue aux conf\' de l\'AFUP')

@section('content')

    <h1>Mots clefs :</h1>
    @if($tag->posts)
        <ul>
            @foreach($tag->posts as $p)
                <li>
                    <h3>{{$p->title}}</h3>
                    <br />
                </li>
            @endforeach
        </ul>
        @endif
    </div>

@endsection