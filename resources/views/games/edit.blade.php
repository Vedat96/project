@extends('layout')

@section('content')

      <!-- The justified navigation menu is meant for single line per list item.
           Multiple lines will require custom code not provided by Bootstrap. -->
<div class="row">
    <div class="col-md-9 col-lg-9 col-sm-9 pull-left">
            <h1>Update game</h1>
        <!-- Example row of columns -->
        <div class="row col-lg-12 col-md-12 col-sm-12" style="background: white; margin: 10px;">
            <form method="post" action="{{ route('games.update',[$game->id]) }}">
                            {{ csrf_field() }}

                            <input type="hidden" name="_method" value="put">

                            <div class="form-group">
                                <label for="game-name">Name<span class="required">*</span></label>
                                <input   placeholder="Enter name"  
                                          id="game-name"
                                          required
                                          name="name"
                                          spellcheck="false"
                                          class="form-control"
                                          value="{{ $game->name }}"
                                           />
                            </div>

                            <div class="form-group">
                                <label for="game-content">Description</label>
                                <textarea placeholder="Enter description" 
                                          style="resize: vertical" 
                                          id="game-content"
                                          name="description"
                                          rows="5" spellcheck="false"
                                          class="form-control autosize-target text-left">
                                          {{ $game->description }}</textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary"
                                       value="Submit"/>
                            </div>
            </form>


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
                <li><a href="/games/{{$game->id}}">View games</a></li>
                <li><a href="/games">All games</a></li>
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