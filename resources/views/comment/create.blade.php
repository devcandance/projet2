@extends('layouts.admin')

@section('content')
    <!-- action="{{--url('comment')--}}" method="POST">
        <p><input type="email" name="email"></p>
        <textarea name="content" id="" cols="30" rows="10">ici les kikis</textarea>

        {{--LE TOKEN EST LA POUR EMPECHER TOUTE INJECTION EN FORCE => PAS DE TOKEN INCLUS = RIEN DE PASSE--}}
        <input type="hidden" name="_token" value="{{--csrf_token()--}}" />

        <p><input type="submit"/></p>
    </form-->

    {!! Form::open(['url'=>'comment']) !!}

    <div class="form-group">

        {!! Form::label('email', 'Email(*):', ['for'=>'Email']) !!}

        {!! Form::email('email', old('email'), ['class'=>'form-control', 'id'=>'Email']) !!}

        {!! $errors->first('email', ':message') !!}

    </div>

    {!! Form::textarea('content', '') !!}

    {!! $errors->first('content', ':message') !!}

    {!! Form::submit('Click Me!', ['class'=>'btn'])  !!}

    {!! Form::close() !!}

    @endsection