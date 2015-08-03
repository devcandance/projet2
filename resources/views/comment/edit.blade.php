@extends('layouts.admin')

@section('content')

    <div class="form-group">

        <section>
            <h2>Modérer un commentaire</h2>

            <div>
                {!! Form::open(['url'=>'comment/'.$comment->id, 'method'=>'PUT']) !!}

                {!! Form::label('content', 'Contenu:') !!}<br />
                {!! Form::textarea('content', $comment->message, ['cols'=>60, 'rows'=>20, 'id'=>'content']) !!}

                {!! Form::submit('update')  !!}
                {!! Form::close() !!}
            </div>

        </section>

    </div>

@endsection