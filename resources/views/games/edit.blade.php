@extends('layout')

@section('content')

<div class="row">
    <div class="col-md-9 col-lg-9 col-sm-9 pull-left">
        <h1>Update game</h1>
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
                    <label for="game-description">Description</label>
                    <textarea placeholder="Enter description" 
                              style="resize: vertical" 
                              id="game-description"
                              name="description"
                              rows="5" spellcheck="false"
                              class="form-control autosize-target text-left"
                              >{{ $game->description }}</textarea>
                </div>

                <div class="form-group">
                    <label for="game-genre">Genre<span class="required">*</span></label>
                    <input   placeholder="Enter genre"  
                              id="game-genre"
                              required
                              name="genre"
                              spellcheck="false"
                              class="form-control"
                              value="{{ $game->genre }}"
                               />
                </div>

                <div class="form-group">
                    <label for="game-developer">Developer<span class="required">*</span></label>
                    <input   placeholder="Enter developer"  
                              id="game-developer"
                              required
                              name="developer"
                              spellcheck="false"
                              class="form-control"
                              value="{{ $game->developer }}"
                               />
                </div>

                <div class="form-group">
                    <label for="game-os">OS<span class="required">*</span></label>
                    <input   placeholder="Enter os"  
                              id="game-os"
                              required
                              name="os"
                              spellcheck="false"
                              class="form-control"
                              value="{{ $game->os }}"
                               />
                </div>

                <div class="form-group">
                    <label for="game-date">Date<span class="required">*</span></label>
                    
                    <input type="date" 
                        id="game-date"
                        name="date"
                        value="date"
                        min="" 
                        max=""
                        class="form-control"
                        />

                </div>  
                <div class="form-group">
                    <input type="submit" class="btn btn-primary"
                           value="Submit"/>
                </div>
            </form>
        </div>
    </div>
  
    <div class="col-md-3 col-lg-3 col-sm-3 pull-right">
        <div class="sidebar-module">
            <h4>Actions</h4>
            <ol class="list-unstyled">
                <li><a href="/games/{{$game->id}}">View games</a></li>
                <li><a href="/games">All games</a></li>
            </ol>
        </div>
    </div>
</div>
@endsection