@extends('layouts.base')

@section('title', $com->title) 

@section('main')

        <h2>{{ $com->title }}</h2>
        <p>{{ $com->content }}</p>
        <p>{{ $com->price }} руб.</p>
        <p>Author: {{$com->user->name}}</p>
        <p><a href="{{ route('index')}}">На перечень объявлений</a></p>
@endsection('main')