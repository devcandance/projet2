@extends('layouts.admin')

@section('content')

    <div class="form-group">

        <section>
            <h2>Corriger un post</h2>

                {!! Form::open(['url'=>'post/'.$post->id, 'method'=>'PUT']) !!}
            {{--{!! Form::email('email', $post->user_id) !!}--}}
            {{--{!! $errors->first('email', ':message') !!}--}}

            <div>
                {!! Form::label('title', 'Titre:') !!}<br />
                {!! Form::text('title', $post->title) !!}
            </div>

            <br/>

                {!! Form::label('content', 'Contenu:') !!}<br />
                {!! Form::textarea('content', $post->content) !!}
                {!! $errors->first('content', ':message') !!}

                {!! Form::submit('update') !!}
                {!! Form::close() !!}

    </div>

@endsection


