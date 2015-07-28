@extends('layouts.admin')

@section('content')

    <div class="form-group">

        {!! Form::open(['url'=>'comment/'.$comment->id, 'method'=>'PUT']) !!}
        {!! Form::email('email', $comment->email) !!}
        {!! $errors->first('email', ':message') !!}

        {!! Form::textarea('content', $comment->content) !!}
        {!! $errors->first('content', ':message') !!}

        {!! Form::submit('update')  !!}
        {!! Form::close() !!}

    </div>

@endsection


