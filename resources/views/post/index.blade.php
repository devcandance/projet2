@extends('layouts.admin')

@section('title', 'Admin post')

@section('content')
    <p><a href="{{url('post/create')}}">create</a></p>


    @if(count($posts)>0)

        <table class="u-full-width">

            <thead>
            <tr>
                <th>title</th>
                <th>edit</th>
                <th>delete</th>
            </tr>
            </thead>

            <tbody>
            @foreach($posts as $post)
                <tr>
                    <td>{{$post->title}}</td>

                    <td>
                        <button>
                            <a href="{{url('post/'. $post->id)}}">EDIT</a>
                        </button>
                    </td>

                    <td>
                        {!! Form::open(['url'=>'post/'.$post->id, 'method'=>'DELETE', 'class'=>'form']) !!}
                        {!! Form::submit('delete', ['class'=>'button-delete button-primary'])  !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

    @else
        <p>désolé pas de contenu du tout du tout !</p>
        @endif


        </table>

@endsection