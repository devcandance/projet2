@extends('layouts.master')

@section('title', 'Welcome User')

@section('sidebar')
    @parent
    <p>PostHome Sidebar</p>
@endsection

@section('content')
    @if($posts)
        <section id="main">
            @foreach($posts as $post)
                <article class="post" >

                    <header>
                        <h1><a href="{{url('single/', [$post->id, $post->slug])}}">{{$post->title}}</a></h1>
                    </header>

                    @if($post->link_thumbnail)
                        <div class="thumbnail">
                            <img src="{{url('upload', [$post->link_thumbnail])}}" alt=""/>
                        </div>
                    @endif

                    @if($post->user)
                        <a href="{{url('user/' . $post->user->id)}}">{{$post->user->name}}</a>
                    @else
                        <p>'anonymous'</p>
                    @endif

                    <!--div class="tags">
                        <h2>Tags:</h2>
                        {{--@foreach($post->tags as $tag)
                            <span class="tag">{{$tag->name}}</span>
                        @endforeach--}}
                    </div-->

                </article>
            @endforeach
        </section>
    @else
        <p>Désolé pas d'article actuellement</p>

    @endif
@endsection