@extends('layouts.master')

{{--@section('content')
    edit
@endsection--}}

@section('content')

    <article id="login" class="login" >

    {!! Form::open(['url'=>'auth/login']) !!}


    {!! Form::email('email', old('email'), ['class'=>'form-control', 'required']) !!}

    {!! $errors->first('email', ':message') !!}


    {!! Form::password('password', null, ['class'=>'form-control', 'required']) !!}


    {!! Form::checkbox('remember', 1, false, ['class'=>'form-control', 'id'=>'Remember']) !!}


    {!! Form::submit('Valider', ['class'=>'btn'])  !!}


    {!! Form::close() !!}

    </article>

@endsection