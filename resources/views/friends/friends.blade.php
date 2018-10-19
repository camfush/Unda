@extends('layouts.master')
@section('page-title', 'View your details')

@section('content')
  <div class="sidebar-overlay" id="sidebar-overlay"></div>
  <div class="sidebar-mobile-menu-handle" id="sidebar-mobile-menu-handle"></div>
  <div class="mobile-menu-handle"></div>

  <article class="content dashboard-page">
    <div class="container-fluid">
      <div class="row">
        @foreach (Auth::user()->friends as $friends)
          @include('friends.show', ['element' => $friends])
        @endforeach

        @foreach (Auth::user()->friends2 as $friends)
          @include('friends.show', ['element' => $friends])
        @endforeach
      </div>
    </div>
  </article>
@endsection
