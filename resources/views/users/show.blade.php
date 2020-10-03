@extends('layout')

@section('content')

      <!-- The justified navigation menu is meant for single line per list item.
           Multiple lines will require custom code not provided by Bootstrap. -->
<div class="row">
    <div class="col-md-9 col-lg-9 col-sm-9 pull-left">
      <!-- Jumbotron -->
        <div class="jumbotron">
            <h1>{{ $user->name }}</h1>
            <p class="lead">{{ $user->email}}.</p>
            {{-- <p class="lead">{{ $user->password}}.</p> --}}
        </div> 


    </div>

    @if(Auth::check())
      
    <div class="col-md-3 col-lg-3 col-sm-3 pull-right">
        <div class="sidebar-module">
            <h4>Actions</h4>
            <ol class="list-unstyled">
                <li><a href="/users/{{$user->id}}/edit"><i class="fas fa-user-edit"></i> Edit</a></li>
                @if(Auth::user()->role_id == 1)
                <li><a href="/users"><i class="fas fa-users"></i> All users</a></li>
                <li><a href="/users/create">Create new user</a></li>
                @endif
                <br>
                <li>

                <a href="#" onclick="
                      var result = confirm('Are you sure you wish to delete this user?');
                          if( result ){
                                  event.preventDefault();
                                  document.getElementById('delete-form').submit();
                          }
                              "
                              >
                      <i class="fas fa-trash-alt"></i> Delete
                  </a>

                <form id="delete-form" action="{{ route('users.destroy',[$user->id]) }}" 
                    method="POST" style="display: none;">
                            <input type="hidden" name="_method" value="delete">
                            {{ csrf_field() }}
                </form>

                </li>
            </ol>
        </div>

    @endif


    </div>
</div>
@endsection