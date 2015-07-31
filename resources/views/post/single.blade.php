{{--
@extends('layouts.master')

@section('title', 'Welcocomeme post\'s page')

@section('sidebar')
    @parent
    <p>this is the sidebar</p>
@endsection

@section('content')
    <div class="post">
        @if(isset($post))
            <header>
                <h1>{{$post->title}}</h1>
                {{$post->content}}
                <p>author: {{$post->user_id}}</p>
            </header>

        @else
            <p>Toujours pas de contenu</p>

        @endif
    </div>
@endsection
--}}