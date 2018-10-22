@extends('layouts.master')
@section('page-title', 'Welcome to Unda')

@section('content')
    <article class="content dashboard-page">
      Show the user's timeline
      @foreach (Auth::user()->timeline as $post)
        @include('posts.show', ['element' => $post])
      @endforeach
    </article>
  @endsection
