@extends('layouts.admin')

@section('title', 'Modération des commentaires')

@section('content')

@if(Session::has('message'))
    <div class="alert">{{Session::get('message')}}</div>
@endif

@if(count($comments)>0)
    <table class="u-full-width">

        <thead>
            <tr>
                <th>email</th>
                <th>moderate</th>
                <th>delete</th>
            </tr>
        </thead>

        <tbody>
        @foreach($comments as $c)
            <tr>
                <td>{{$c->email}}</td>
                <td><a href="{{url('comment/'. $c->id . '/edit')}}">MODERATE</a></td>
                <td>{!! Form::open(['url'=>'comment/'.$c->id, 'method'=>'DELETE']) !!}
                    {!! Form::submit('delete')  !!}
                    {!! Form::close() !!}</td>
            </tr>
        @endforeach
        </tbody>

    </table>
@endif

@endsection