@extends('layouts.admin')

@section('content')
    <form action="{{url('comment')}}" method="POST">
        <p><input type="email" name="email"></p>
        <textarea name="content" id="" cols="30" rows="10">ici les kikis</textarea>

        {{--LE TOKEN EST LA POUR EMPECHER TOUTE INJECTION EN FORCE => PAS DE TOKEN INCLUS = RIEN DE PASSE--}}
        {{--<input type="hidden" name="_token" value="{{csrf token()}}" />--}}

        <p><input type="submit"/></p>
    </form>
    @endsection