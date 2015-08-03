@extends('layouts.admin')

@section('title', 'Administration des Conférences')

@section('content')


    @if(count($mails)>0)

        <table class="u-full-width">

            <thead>
            <tr>
                <th>id</th>
                <th>email</th>
                <th>message</th>
            </tr>
            </thead>

            <tbody>
            @foreach($mails as $mail)
                <tr>
                    <td>{{$mail->id}}</td>
                    <td>{{$mail->email}}</td>
                    <td>{{$mail->message}}</td>

                    <td>
                        {!! Form::open(['url'=>'mail/'. $mail->id . '/', 'method'=>'DELETE', 'class'=>'form']) !!}
                        {!! Form::submit('delete', ['class'=>'button-delete button-primary'])  !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

    @else
        <p>pas de mails !</p>
    @endif

@endsection