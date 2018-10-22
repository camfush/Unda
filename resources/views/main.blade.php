@extends('layouts.master')
@section('page-title', 'Welcome to Unda')

@section('content')
    <article class="content dashboard-page">
      @foreach (Auth::user()->timeline as $post)
        @include('posts.show', ['element' => $post])
      @endforeach
    </article>
  @endsection
