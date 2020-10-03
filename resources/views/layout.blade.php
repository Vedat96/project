<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<title>A-Games</title>

    {{-- bootstrap --}}
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    {{-- scripts --}}
    <script src="{{ asset('js/app.js') }}" defer></script>

    {{-- css links --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



    <script src="https://kit.fontawesome.com/652f09b2b6.js"></script>



    <link rel="stylesheet" type="text/css" href="https://static.twitchcdn.net/assets/pages.directory-game-41d69841b8e3b07ef30f.css">

</head>
<body>
    <nav class="navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand" href="#">A-Games</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample02" aria-controls="navbarsExample02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

    	<div class="collapse navbar-collapse" id="navbarsExample02">
    	    <ul class="navbar-nav mr-auto">
    	    	<li class="nav-item active">
    	    		<a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
    	    	</li>
                {{-- <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        Games
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="{{ route('games.index') }}">{{ __(' Games') }}</a>        
                        <a class="dropdown-item" href="/run">Can I run it</a>
                        <a class="dropdown-item" href="#">Cheats</a>
                    </div>  
                </li>  --}} 
                <li class="nav-item">
                    <a class="nav-link" href="/games">Games</a>
                </li> 
                {{-- <li class="nav-item">
                    <a class="nav-link" href="/posts">Posts</a>
                </li> --}}
                <li class="nav-item">
                    <a class="nav-link" href="/file">Posts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/videos">Video's</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/about">About</a>
                </li>
    	    	<li class="nav-item">
    	    		<a class="nav-link" href="/contact">Contact</a>
    	    	</li>

    	    </ul>
            <ul class="navbar-nav ml-auto">
            @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
            <li class="nav-item">
                <a class="nav-link" href="/users"><i class="fas fa-users"></i> Users</a>
            </li>
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/users/{{$auth->id}}"><i class="fas fa-user"></i> Profile</a>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt"></i>                         {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    {{-- @if(Auth::check())
                       @if(Auth::user()->role_id == 1)
                    <a class="dropdown-item" href="/users">Users</a>
                        @endif
                    @endif --}}
                    {{-- <a class="dropdown-item" href="#">Settings</a> --}}
                </div>
            </li>           
            @endguest
         </ul>

        <form action="/search" method="POST" role="search">
            {{ csrf_field() }}
            <div class="input-group">
                <input type="text" class="form-control" name="q"
                    placeholder="Search game"> <span class="input-group-btn">
                    <button type="submit" class="btn btn-default">
                        <span class="glyphicon glyphicon-search"></span>
                    </button>
                </span>
            </div>
        </form>
            
            {{-- <form class="form-inline my-2 my-md-0">
                <input class="form-control" type="text" placeholder="Search">
            </form> --}}
    </div>
</nav>
<main class="py-4">
    <div class="container">
        @include('partials.errors')
        @include('partials.success')
        <div class="row"></div>
            @yield('content')   
        </div>
    </div>
</main>
</body>
</html>