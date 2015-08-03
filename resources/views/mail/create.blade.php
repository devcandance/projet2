@extends('layouts.master')

@section('title', 'Entrons en contact!')

@section('content')


    <aside>
        <h2>Laissez un message</h2>

        {!! Form::open(['url'=>'contact', 'files' =>'true']) !!} {{--balise d'ouverture, lancement du formulaire, en POST par défaut--}}

        <div>
            <p>
                {!! Form::label('email', 'Email:', ['for'=>'email']) !!}
               {{-- {!! Form::email('email', '', ['id'=>'id_de_l_email', 'placeholder'=>'Votre email', 'required']) !!}--}}
                {!! Form::text('email', '', ['id'=>'email', 'required']) !!}
            </p>
        </div>

        <h3>
            {!! Form::label('message', 'Votre message:') !!}
        </h3>

        <div>
            {!! Form::textarea('message', '', ['cols'=>60, 'rows'=>20, 'id'=>'content']) !!}
        </div>

        {!! Form::submit('Valider') !!}
        {!! Form::close() !!}
    </aside>

@endsection
