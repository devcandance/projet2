@extends('layouts.admin')

@section('content')

    {!! Form::open(['url'=>'post', 'files' =>'true']) !!}

    <div>
        {!! Form::label('title', 'Titre:', ['for'=>'title']) !!}<br />
        {!! Form::text('title', old('title'), ['id'=>'title', 'required']) !!}
    </div>

    <div>
        {!! Form::label('content', 'Texte:') !!}<br />
        {!! Form::textarea('content', '', ['cols'=>30, 'rows'=>10, 'id'=>'content']) !!}
    </div>

    <div>
        {!! MyHtml::radio('publier immédiatement', ['value' => 'publish']) !!}
        {!! MyHtml::radio('publication en attente', ['value' => 'unpublish']) !!}
    </div>

    <div>
        {!! Form::file('thumbnail_link') !!}
    </div>

    <div>
        {!! Form::submit('create') !!}
    </div>

    {!! Form::close() !!}

    @endsection