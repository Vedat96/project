@extends('layout')

@section('content')

      <!-- The justified navigation menu is meant for single line per list item.
           Multiple lines will require custom code not provided by Bootstrap. -->
<div class="row">
    <div class="col-md-9 col-lg-9 col-sm-9 pull-left">
      <!-- Jumbotron -->
        <div class="jumbotron">
            <h1>{{ $game->name }}</h1>
            <p class="lead">{{ $game->description}}.</p>
        {{-- <p><a class="btn btn-lg btn-success" href="#" role="button">Get started today</a></p> --}}
        </div> 



{{--        Site footer
      <footer class="footer">
        <p>© 2016 Company, Inc.</p>
      </footer> --}}
    </div>
  
    <div class="col-md-3 col-lg-3 col-sm-3 pull-right">
        <div class="sidebar-module">
            <h4>Actions</h4>
            <ol class="list-unstyled">
                <li><a href="/games/{{$game->id}}/edit">Edit</a></li>
                </li>
                <li><a href="/games">List of games</a></li>
                <li><a href="/games/create">Create new game</a></li>
                <br>
                <li>

                <a href="#" onclick="
                      var result = confirm('Are you sure you wish to delete this Company?');
                          if( result ){
                                  event.preventDefault();
                                  document.getElementById('delete-form').submit();
                          }
                              "
                              >
                      Delete
                  </a>

                <form id="delete-form" action="{{ route('games.destroy',[$game->id]) }}" 
                    method="POST" style="display: none;">
                            <input type="hidden" name="_method" value="delete">
                            {{ csrf_field() }}
                </form>

                </li>
            </ol>
        </div>

    {{--   <div class="sidebar-module">
        <h4>Memers</h4>
        <ol class="list-unstyled">
          <li><a href="#">March 2014</a></li>
        </ol>
      </div> --}}

    </div>
</div>
    @endsection