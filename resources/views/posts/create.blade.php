@extends('layout')

@section('content')

<div class="row">     
    <div class="row col-md-9 col-lg-9 col-sm-9 pull-left" style="background: white;">
        <h3>Create new post </h3>
        <div class="row  col-md-12 col-lg-12 col-sm-12" >   
            <div class="container">
                <div class="row">
                    <form method="post" action="{{ route('posts.store') }}">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="post-description">Description</label>
                            <textarea placeholder="Enter description" 
                                      style="resize: vertical" 
                                      id="post-description"
                                      name="description"
                                      rows="2" spellcheck="false"
                                      class="form-control autosize-target text-left"></textarea>
                        </div>

                        <div class="form-group">
                            <input type="submit" class="btn btn-primary"
                                   value="Submit"/>
                        </div>
                    </form>

                </div>
            </div>
            <p><H5>Posts: </H5></p> 
            <br>    
            <div>
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
<div class="col-sm-3 col-md-3 col-lg-3 pull-right">
    <div class="sidebar-module">
    <h4>Actions</h4>
        <ol class="list-unstyled">
            <li><a href="/posts"> <i class="fa fa-building-o" aria-hidden="true"></i> Posts</a></li>
        </ol>
    </div>
</div>
@endsection