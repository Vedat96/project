@extends('layout')

@section('content')

      <!-- The justified navigation menu is meant for single line per list item.
           Multiple lines will require custom code not provided by Bootstrap. -->
<div class="row">
    <div class="col-md-9 col-lg-9 col-sm-9 pull-left">
        <div class="jumbotron">
            <h1>{{ $game->name }}</h1>
            <p class="lead">Description:{{ $game->description}}</p>
            <p class="lead">Gemre:{{ $game->genre}}</p>
            <p class="lead">Developer:{{ $game->developer}}</p>
            <p class="lead">Operating System:{{ $game->os}}</p>
            <p class="lead">Released date:{{ $game->date}}</p>
        </div> 

   @include('partials.comments')


        <div class="row container-fluid">

            <form method="post" action="{{ route('comments.store') }}">
                                        {{ csrf_field() }}

                <input type="hidden" name="commentable_type" value="App\Game">
                <input type="hidden" name="commentable_id" value="{{$game->id}}">


                <div class="form-group">
                    <label for="comment-content">Comment</label>
                    <textarea placeholder="Enter comment" 
                              style="resize: vertical" 
                              id="comment-content"
                              name="body"
                              rows="3" spellcheck="false"
                              class="form-control autosize-target text-left">

                              
                              </textarea>
                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-primary"
                           value="Submit"/>
                </div>
            </form>
        </div>`{{-- //row container-fluid"> --}}
    </div>

    @if(Auth::check())
        @if(Auth::user()->role_id == 1)
        
      
    <div class="col-md-3 col-lg-3 col-sm-3 pull-right">
        <div class="sidebar-module">
            <h4>Actions</h4>
            <ol class="list-unstyled">
                <li><a href="/games/{{$game->id}}/edit"><i class="fas fa-edit"></i> Edit</a></li>
                <li><a href="/games">List of games</a></li>
                <li><a href="/games/create">Create new game</a></li>
                <br>
                <li>

                    <a href="#" onclick="
                          var result = confirm('Are you sure you wish to delete this game?');
                              if( result ){
                                      event.preventDefault();
                                      document.getElementById('delete-form').submit();
                              }
                                  "
                                  >
                          <i class="fas fa-trash-alt"></i> Delete
                      </a>

                    <form id="delete-form" action="{{ route('games.destroy',[$game->id]) }}" 
                        method="POST" style="display: none;">
                                <input type="hidden" name="_method" value="delete">
                                {{ csrf_field() }}
                    </form>
                    <div class="container">
                        @if(isset($details))
                            <p> The Search results for your query <b> {{ $query }} </b> are :</p>
                        <h2>Sample User details</h2>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($details as $game)
                                <tr>
                                    <td>{{$game->name}}</td>
                                    <td>{{$game->description}}</td>
                                    <td>{{$game->genre}}</td>
                                    <td>{{$game->Developer}}</td>
                                    <td>{{$game->os}}</td>
                                    <td>{{$game->date}}</td>

                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        @endif
                    </div>
                </li>
            </ol>
        </div>
        @endif
    @endif
    </div>
</div>
@endsection