@extends('layouts.master')

@section('title', 'Entrons en contact!')

@section('content')


    <aside>
        <h2>Laissez un message</h2>

        {!! Form::open(['url'=>'contact']) !!} {{--balise d'ouverture, lancement du formulaire, en POST par défaut--}}

        <div>
            <p>
                {!! Form::label('email', 'Email:', ['for'=>'id_de_l_email']) !!}
                {!! Form::email('email', old('email'), ['id'=>'id_de_l_email', 'placeholder'=>'Votre email', 'required']) !!}
                {!! $errors->first('email', '<span class="help-block">: message</span>') !!}
            </p>
        </div>

        <h3>
            {!! Form::label('message', 'Votre message:', ['for'=>'id_du_message']) !!}
        </h3>

        <div>
            {!! Form::textarea('message', '', ['id'=>'id_du_message', 'placeholder'=>'Votre message', 'required']) !!}
            {!! $errors->first('message', '<span class="help-block">: message</span>') !!}
        </div>

        {!! Form::submit('Valider') !!}
        {!! Form::close() !!}
    </aside>

@endsection
