@extends('layouts.master')
@section('page-title', 'View your details')
@section('content')
  <p>{{count(Auth::user()->posts)}}</p>
  @foreach (Auth::user()->posts as $video)
    @include('posts.show', ['element' => $video])
  @endforeach
@endsection
