@extends('layouts.app ') .

@section('content')
    <a href="/posts" class="btn btn-default"> Go Back </a>
    <h1>{{$post->title}}</h1>
    <div>
        <h3> {{$post->body}} </h3>
    </div>
    <hr>
    <small> written at {{$post->created_at}} </small>
@endsection