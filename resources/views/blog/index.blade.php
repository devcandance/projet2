@extends('layouts.master')

@section('title', 'Bienvenu à l\'AFUP')

@section('content')

    @if($posts)
        <div id="main" role="main">
            <section id="post" >

                @foreach($posts as $post)
                    <article class="news" >

                        <header>
                            <h2>
                                <a href="{{url('single', [$post->id, $post->slug])}}" class="link-post">{{$post->title}}</a>
                            </h2>
                        </header>

                        @if($post->thumbnail_link)
                            <div class="thumbnail">
                                <a href="{{url('single', [$post->id, $post->slug])}}" class="link-post">
                                    <img class="left" src="{{url('upload_thumb', [$post->thumbnail_link])}}" alt=""/>
                                </a>
                            </div>
                        @endif

                        @if($post->excerpt)
                            <p class="abstract">{{$post->excerpt}}</p>
                            <a href="{{url('single', [$post->id, $post->slug])}}" class="link-post">Lire la suite...</a>
                            <br />
                        @endif

                        @if($post->url_site)
                                <br />
                            <a href="{{url('link' . $post->user->id)}}" class="link-outside">Site web de la conférence</a>
                        @endif

                        <div class="link-keyword">Mots clefs :
                            @foreach($post->tags as $tag)
                                <a href="{{url('tag'. $tag->id)}}">{{$tag->name}}</a>
                            @endforeach
                        </div>

                        @if(count($comments)>0)
                            <p>Nombre de commentaires: {{$post->comments->count()}}</p>
                            @endif

                        @if($post->date_start)
                            <br />
                            <h3 class="date">début: {{$post->date_start}} fin: {{$post->date_end}}</h3>
                        @endif


                    </article>
                @endforeach
            </section>
        </div>
    @else
    <p>Pas de post</p>

    @endif
@endsection