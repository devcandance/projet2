@extends('layouts.master')

@section('title', 'Bienvenue aux conf\' de l\'AFUP')

@section('content')

    <h1>Mots clefs :</h1>
        @foreach($tags as $tag)
            <div class="link-keyword">
                <a href="{{url('tag/'. $tag->id)}}">{{$tag->name}}</a>
            </div>
        @endforeach
    </div>

@endsection