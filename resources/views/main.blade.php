@extends('layouts.master')
@section('page-title', 'Welcome to Unda')

@section('content')
    <article class="content dashboard-page">
      @for ($i=0; $i < 10; $i++)
                @include('posts.show')
      @endfor
    </article>
  @endsection
