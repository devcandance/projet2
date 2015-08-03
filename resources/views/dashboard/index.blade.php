@extends('layouts.admin')

@section('content')

    <ul>
        <li><h3><a href="{{url('comment')}}">gestion des commentaire</a></h3></li>
        <li><h3><a href="{{url('post')}}">gestion des posts</a></h3></li>
        <li><h3><a href="{{url('mail')}}">gestion des mails</a></h3></li>
    </ul>

@endsection