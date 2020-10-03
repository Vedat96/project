@extends('layout')

@section('content')

<div class="row">
    <div class="col-md-9 col-lg-9 col-sm-9 pull-left">
        <div class="jumbotron">
            <h1>{{ $post->name }}</h1>
            <p class="lead">{{ $post->description}}.</p>
        </div> 


@include('partials.comments')

            <div class="row container-fluid">

                <form method="post" action="{{ route('comments.store') }}">
                                            {{ csrf_field() }}

                    <input type="hidden" name="commentable_type" value="App\Post">
                    <input type="hidden" name="commentable_id" value="{{$post->id}}">


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
                    <li><a href="/posts/{{$post->id}}/edit">Edit</a></li>
                    </li>
                    <li><a href="/posts">List of posts</a></li>
                    <li><a href="/posts/create">Create new post</a></li>
                    <br>
                    <li>

                    <a href="#" onclick="
                          var result = confirm('Are you sure you wish to delete this post?');
                              if( result ){
                                      event.preventDefault();
                                      document.getElementById('delete-form').submit();
                              }
                                  "
                                  >
                          Delete
                      </a>

                    <form id="delete-form" action="{{ route('posts.destroy',[$post->id]) }}" 
                        method="POST" style="display: none;">
                                <input type="hidden" name="_method" value="delete">
                                {{ csrf_field() }}
                    </form>

                    </li>
                </ol>
            </div>

            @endif
        @endif
    </div>
</div>
@endsection