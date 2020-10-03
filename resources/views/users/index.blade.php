@extends('layout')

@section('title', 'Games')

@section('content')


<h1>Game list</h1>

<div class= "col-md-6 col-lg-6 col-md-offset-3 col-lg-offset-3">
	<div class= "panel panel-primary">
		
		<div class= "panel-heading" style= "list-style-type:none;">	
			@if(Auth::check())
				@if(Auth::user()->role_id == 1)
				<ul class="list-group" style= "list-style-type:none;">
					<li>
						<a class="pull-right btn btn-primary btn-sm" style= "padding-top: 0px" href="/users/create">Create new</a>
					</li>
					<div class="panel-body">
				@endif
			@endif
		

			@foreach($users as $user)
				<li class="list-group-item"><a href="/users/{{$user->id}}" >{{ $user->name}}</a></li>
			@endforeach
			
			</ul>
		</div>
	</div>
</div>

@endsection