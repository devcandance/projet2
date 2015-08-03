@extends('layouts.admin')

@section('content')

    <ul>
        <li><a href="{{url('comment')}}">gestion des commentaire</a></li>
        <li><a href="{{url('post')}}">gestion des posts</a></li>
        <li><a href="{{url('mail')}}">gestion des mails</a></li>
    </ul>

@endsection