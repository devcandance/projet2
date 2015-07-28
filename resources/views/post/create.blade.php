@extends('layouts.admin')

@section('content')

    {!! Form::open(['url'=>'post', 'files' =>'true']) !!}

    <div>
        {!! Form::label('title', 'Title(*):', ['for'=>'title']) !!}<br />
        {!! Form::text('title', old('title'), ['id'=>'title', 'required']) !!}
    </div>

    <div>
        {!! Form::label('content', 'Texte:') !!}<br />
        {!! Form::textarea('content', '', ['cols'=>30, 'rows'=>10, 'id'=>'content']) !!}
    </div>

    <div>
        {!! MyHtml::radio('status', ['value' => 'publish']) !!}
        {!! MyHtml::radio('status', ['value' => 'unpublish']) !!}

    </div>

    @if(count($tags)>0)

            <h2>Mots clefs :</h2>
        @foreach($tags as $tag)

            <label for="{{$tag->id}}">{{$tag->title}}</label>
                <input type="radio" name="tag_id" value="{{$tag->id}}" id="{{$tag->id}}"/>

        @endforeach

    @endif

    <div>
        {!! Form::file('link_thumbnail') !!}
    </div>

    <div>
        {!! Form::submit('create') !!}
    </div>

    {!! Form::close() !!}

    @endsection