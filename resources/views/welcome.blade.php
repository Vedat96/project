@extends('layout')

@section('title', 'Home')

@section('content')

<div class="row">
    <div class="col-sm-8" style="background-color:lavender;">
    <h1>A-Games</h1>
		<div class="block">  
			<div class="block__content">   
				<div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="position:relative;z-index:1;">
					<div class="carousel-inner">
						<div class="carousel-item active">
							<iframe src="https://player.twitch.tv/?channel=Karim_suus" frameborder="0" allowfullscreen="true" scrolling="no" height="378" width="700"></iframe><a href="https://www.twitch.tv/mnmbe?tt_content=text_link&tt_medium=live_embed" style="padding:2px 0px 4px; display:block; width:345px; font-weight:normal; font-size:10px; text-decoration:underline;">	</a>
					    </div>
				    	<div class="carousel-item">
				    		<iframe src="https://player.twitch.tv/?channel=djwoodsgaming" frameborder="0" allowfullscreen="true" scrolling="no" height="378" width="700"></iframe><a href="https://www.twitch.tv/djwoodsgaming?tt_content=text_link&tt_medium=live_embed" style="padding:2px 0px 4px; display:block; width:345px; font-weight:normal; font-size:10px; text-decoration:underline;"></a>
							</figure> 
				    	</div>
				    	<div class="carousel-item">
				    		<iframe src="https://player.twitch.tv/?channel=mnmbe" frameborder="0" allowfullscreen="true" scrolling="no" height="378" width="700"></iframe><a href="https://www.twitch.tv/mnmbe?tt_content=text_link&tt_medium=live_embed" style="padding:2px 0px 4px; display:block; width:345px; font-weight:normal; font-size:10px; text-decoration:underline;">
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
			</div>			 
		</div> 
		<div class="container">
	    @if(isset($details))
	        <h5> The Search results for<b> {{ $query }} </b> are :</h5>
		    <table class="table table-striped">
		        <thead>
		            <tr>
		                <th>Name</th>
		                <th>Description</th>
		                <th>Genre</th>
		                <th>Developer</th>
		                <th>OS</th>
		                <th>Date</th>
		            </tr>
		        </thead>
		        <tbody>
		            @foreach($details as $user)
		            <tr>
		                <td>{{$user->name}}</td>
		                <td>{{$user->description}}</td>
		                <td>{{$user->genre}}</td>
		                <td>{{$user->developer}}</td>
		                <td>{{$user->os}}</td>
		                <td>{{$user->date}}</td>
		            </tr>
		            @endforeach
		        </tbody>
		    </table>
		    @endif
		</div>
	</div>

    <div class="col-sm-4" style="background-color:lavenderblush;">
		<h4> Join our Discord server!</h4>
		<iframe src="https://discordapp.com/widget?id=577443038444650506&theme=dark" width="350" height="500" allowtransparency="true" frameborder="0"></iframe>

    </div>
</div>

@endsection