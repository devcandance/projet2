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
                {{--<th>id</th>
                <th>status</th>--}}
                <th>message</th>
                <th>email</th>
                {{--<th>date début</th>
                <th>date fin</th>--}}
                <th>moderate</th>
                <th>delete</th>
            </tr>
        </thead>

        <tbody>
        @foreach($comments as $c)
            <tr>
                {{--<td>{{$c->id}}</td>
                <td>{{$c->status}}</td>--}}
                <td>{{$c->message}}</td>
                <td>{{$c->email}}</td>

                {{--<td>{{$c->created_at}}</td>
                <td>{{$c->updated_at}}</td>--}}

                <td>
                    <a href="{{url('comment/'. $c->id . '/edit')}}">MODERATE</a>
                </td>

                <td>{!! Form::open(['url'=>'comment/'.$c->id, 'method'=>'DELETE']) !!}
                    {!! Form::submit('delete')  !!}
                    {!! Form::close() !!}</td>
            </tr>
        @endforeach
        </tbody>

    </table>
@endif

@endsection