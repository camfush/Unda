@extends('layouts.master')
@section('page-title', 'Search for "' . $search . '"')

@section('content')
  <div class="sidebar-overlay" id="sidebar-overlay"></div>
  <div class="sidebar-mobile-menu-handle" id="sidebar-mobile-menu-handle"></div>
  <div class="mobile-menu-handle"></div>

  <article class="content dashboard-page">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
        </div>
        @if ($results->isNotEmpty())
          @foreach ($results as $result)
            @include('posts.show', ['element' => $result])
          @endforeach
        @else
          <p>There were no results</p>
        @endif
    </div>
    </div>
    </article>
@endsection
