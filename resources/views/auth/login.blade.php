@extends('layouts.master')

@section('content')

    <h2>Loguez-vous svp :</h2>

    <article id="login" class="login" >

        {!! Form::open(['url'=>'auth/login']) !!}

        <div>
            <h3>{!! Form::label('email', 'Email:', ['for'=>'id_de_l_email']) !!}</h3>

            <p>
                {!! Form::email('email', old('email'), ['class'=>'form-control', 'placeholder'=>'Votre email', 'required']) !!}

                {!! $errors->first('email', '<span class="help-block">Merci de vous identifier!</span>') !!}
            </p>
        </div>

        <br />

        <div>
            <h3>{!! Form::label('message', 'Password:', ['for'=>'id_du_commentaire']) !!}</h3>

            <p>
                {!! Form::password('password', null, ['class'=>'form-control', 'required']) !!}

                {!! Form::checkbox('remember', 1, false, ['class'=>'form-control', 'id'=>'Remember']) !!}

                {!! Form::submit('Valider', ['class'=>'btn'])  !!}
            </p>
        </div>

        {!! Form::close() !!}

    </article>

@endsection