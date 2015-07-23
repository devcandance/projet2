@extends('layouts.master')

@section('title', 'Welcome User')

@section('content')

    @if($posts)
        <div id="main" role="main">
            <section id="post" >

                @foreach($posts as $post)
                    <article class="news" >

                        <header>
                            <h2>
                                <a href="{{url('single/', [$post->id, $post->slug])}}" class="link-post">{{$post->title}}</a>
                            </h2>
                        </header>

                        @if($post->thumbnail_link)
                            <div class="thumbnail">
                                <a href="{{url('single/', [$post->id, $post->slug])}}" class="link-post">
                                    <img src="{{url('upload_thumb', [$post->thumbnail_link])}}" alt=""/>
                                </a>
                            </div>
                        @endif

                        @if($post->user)
                            <a href="{{url('user/' . $post->user->id)}}">{{$post->user->name}}</a>
                        @else
                            <p>'le post est anonyme'</p>
                        @endif

                    </article>
                @endforeach
            </section>
        </div>
    @else
        <p>Pas pas de post</p>

    @endif
@endsection