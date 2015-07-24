@extends('layouts.master')

@section('title', 'Welcome post\'s page')

@section('content')
    <div class="post">
        @if($post)
            <div id="main" role="main">

                <section id="post" >
                        <article class="news" >

                            <header>
                                <h2>{{$post->title}}</h2>
                            </header>

                            @if($post->thumbnail_link)
                                <div class="thumbnail">
                                    <img class="left" src="{{url('upload_thumb', [$post->thumbnail_link])}}" alt=""/>
                                </div>
                            @endif

                            <p class="abstract">{{$post->content}}</p>

                            <br />

                                <p>
                                    <a href="{{url('link/' . $post->url_site)}}" class="link-outside">Site web de la conférence</a>
                                </p>

                            <div class="link-keyword">Mots clefs :
                                @foreach($post->tags as $tag)
                                    <a href="{{url('tag/'. $tag->id)}}">{{$tag->name}}</a>
                                @endforeach
                            </div>

                            <br />
                            <h3 class="date">début: {{$post->date_start}} fin: {{$post->date_end}}</h3>
                        </article>
                </section>

                <section>
                    @if($comments)
                        @foreach($comments as $c)
                            <ul>
                                <li>
                                    <h2>{{$c->email}}</h2>
                                </li>

                                <li>
                                    <p>{{$c->message}}</p>
                                </li>
                            </ul>
                        @endforeach
                    @endif
                </section>

                <aside>
                    <h2>Laisser un commentaire</h2>

                    {!! Form::open(['url'=>'comment']) !!} {{--balise d'ouverture, lancement du formulaire, en POST par défaut--}}
                    {!! Form::hidden('post_id', $post->id) !!} {{--champs caché, attribue d'office un post_id au commentaire--}}

                    <div>
                        <p>
                        {!! Form::label('email', 'Email:', ['for'=>'id_de_l_email']) !!}
                        {!! Form::email('email', old('email'), ['id'=>'id_de_l_email', 'placeholder'=>'Votre email', 'required']) !!}
                        {!! $errors->first('email', '<span class="help-block">: message</span>') !!}
                        </p>
                    </div>

                    <h3>
                        {!! Form::label('message', 'Commentaire:', ['for'=>'id_du_commentaire']) !!}
                    </h3>

                    <div>
                        {!! Form::textarea('message', '', ['id'=>'id_du_commentaire', 'placeholder'=>'Votre commentaire', 'required']) !!}
                        {!! $errors->first('message', '<span class="help-block">: message</span>') !!}
                    </div>

                    {!! Form::submit('Valider') !!}
                    {!! Form::close() !!}

                   {{--<form>
                        <p><label>Email:</label><input type="text"></p>
                        <h3>commentaire:</h3>
                        <p><button>valider</button></p>
                    </form>--}}

                </aside>
            </div>
        @else

            <p>Toujours pas de contenu</p>

        @endif
    </div>
@endsection