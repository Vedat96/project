@extends('layout')

@section('title', 'Games')

@section('content')

<h1>Posts</h1>

<div class= "col-md-6 col-lg-6 col-md-offset-3 col-lg-offset-3">
	<div class= "panel panel-primary">
		
		<div class= "panel-heading" style= "list-style-type:none;">	

			@if(Auth::check())
				<a class="pull-right btn btn-primary btn-sm" style= "padding-top: 0px,"  href="/posts/create">Add new post</a></div>
				<div class="panel-body">
			@endif
			<ul class="list-group">
				@foreach($posts as $post)
					<li class="list-group-item">
						<a href="/posts/{{$post->id}}" >{{ $post->description}}</a>
					</li>
				@endforeach
			</ul>
				
		</div>
	</div>
</div>
@endsection