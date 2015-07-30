@extends('layouts.admin')

@section('content')

    <div class="form-group">

        <section>
            <h2>Modérer un commentaire</h2>

                {!! Form::open(['url'=>'comment/'.$comment->id, 'method'=>'PUT']) !!}

                {!! Form::textarea('content', $comment->message) !!}
                {!! $errors->first('content', ':message') !!}

                {!! Form::submit('update')  !!}
                {!! Form::close() !!}

        </section>

    </div>

@endsection