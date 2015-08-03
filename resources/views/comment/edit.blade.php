@extends('layouts.admin')

@section('content')

    <div class="form-group">

        <section>
            <h2>Modérer un commentaire</h2>

            <div>
                {!! Form::open(['url'=>'comment', 'method'=>'GET']) !!}

                {!! Form::label('message', 'Contenu:') !!}<br />
                {!! Form::textarea('message', $comment->message, ['cols'=>60, 'rows'=>20, 'id'=>'content']) !!}

                {!! Form::submit('update')  !!}
                {!! Form::close() !!}
            </div>

        </section>

    </div>

@endsection