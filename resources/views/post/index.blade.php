@extends('layouts.admin')

@section('title', 'Administration des Conférences')

@section('content')

    <p><a href="{{url('post/create')}}">create</a></p>


    @if(count($posts)>0)

            <table class="u-full-width">

                <thead>
                    <tr>
                        <th>id</th>
                        <th>status</th>
                        <th>title</th>
                        <th>date début</th>
                        <th>date fin</th>
                        <th>mots clefs</th>
                        <th>edit</th>
                        <th>delete</th>
                    </tr>
                </thead>

                <tbody>
                @foreach($posts as $post)
                    <tr>
                        <td>{{$post->id}}</td>
                        <td>{{$post->status}}</td>
                        <td>{{$post->title}}</td>

                        <td>{{$post->date_start}}</td>

                        <td>{{$post->date_end}}</td>

                        <td>
                            @foreach($post->tags as $tag)
                                <a href="{{url('tag'. $tag->id)}}">{{$tag->name}}</a>
                            @endforeach
                        </td>

                        <td>
                            <a href="{{url('post/'. $post->id . '/edit')}}">EDIT</a>
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