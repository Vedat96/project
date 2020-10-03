@extends('layout')

@section('title', 'contact')

@section('content')

	<h1>Videos</h1>

	<h3>Search on Youtube</h3>

	<form action="http://www.youtube.com/results" method="get" target="_blank" >
	<input name="search_query" type="text" maxlength="128" />
	<select name="search_type">
	<option value="">Videos</option>
	<option value="search_users">Channels</option>
	</select>
	<input type="submit" value="Search" />
	</form>

	<p></p>
<div class="container mb-4">
	<div class="w3-content mb-2">
	<div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="position:absolute;z-index:1;">
		<div class="carousel-inner">
			<div class="carousel-item active">
				<iframe width="600" height="315" src="https://www.youtube.com/embed/btKivfJ08qg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		    </div>
	    	<div class="carousel-item">
	    		<iframe width="600" height="315" src="https://www.youtube.com/embed/7rEuY4x4zU4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	    	</div>
	    	<div class="carousel-item">
	    		<iframe width="600" height="315" src="https://www.youtube.com/embed/77C0jkT0H8k" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	    	</div>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
	    <span class="carousel-control-next-icon" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>
	</div>


@endsection