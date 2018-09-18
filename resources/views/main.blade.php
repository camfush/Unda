@extends('layouts.master')
@section('page-title', 'Welcome to Unda')

@section('content')

  <div class="topmenu">
		<div class="search">
			<input type="text" id="searchInput" placeholder="Search Unda"/>
			<div class="searchIcon">
				<img src="http://icons.iconarchive.com/icons/icons8/ios7/256/Very-Basic-Search-icon.png"></img>
			</div>
		</div>
	</div>

		<aside class="column-left">
			<header>
				<h1><a href="#">Unda</a></h1>
				<h2>Welcome to Unda, the home of video social media!</h2>
			</header>
			<nav id="mainnav">
				<ul>
	            	<li class="selected-item"><a href="index.html">Home</a></li>
	           		<li><a href="{{URL::to('/account')}}">My account</a></li>
	           		<li><a href="{{URL::to('/posts/create')}}">Upload</a></li>
	            	<li><a href="{{URL::to('/')}}">Friends</a></li>
	            	{{--<li><a href="">Settings</a></li>--}}
	        	</ul>
			</nav>
		</aside>

    {{-- Replace later with actual content --}}
		<section class="column-middle">
      @for ($i=0; $i < 5; $i++)
        @include('posts.show')
      @endfor
		</section>

		<section class="column-right">
		Test text.. Not sure what would go here.. Ads? Stories? Dunno.
		</section>

@endsection
