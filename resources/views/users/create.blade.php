@extends('layout')

@section('content')

<div class="row">

    <div class="row col-md-9 col-lg-9 col-sm-9 pull-left" style="background: white;">
    <h1>Create new user </h1>
      <div class="row  col-md-12 col-lg-12 col-sm-12" >

        <form method="post" action="{{ route('users.store') }}">
            {{ csrf_field() }}


            <div class="form-group">
                <label for="user-name">Name<span class="required">*</span></label>
                <input   placeholder="Enter name"  
                          id="user-name"
                          required
                          name="name"
                          spellcheck="false"
                          class="form-control"
                           />
            </div>

            <div class="form-group">
                <label for="user-email">Email<span class="required">*</span></label>
                <input   placeholder="Enter email"  
                          id="user-email"
                          required
                          name="email"
                          spellcheck="false"
                          class="form-control"
                           />
            </div>

            <div class="form-group">
                <label for="user-password">Password<span class="required">*</span></label>
                <input   placeholder="Enter password"  
                          id="user-password"
                          required
                          name="password"
                          spellcheck="false"
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


<div class="col-sm-3 col-md-3 col-lg-3 pull-right">
    <div class="sidebar-module">
        <h4>Actions</h4>
            <ol class="list-unstyled">
                <li><a href="/users"> <i class="fa fa-building-o" aria-hidden="true"></i> All users</a></li>
            </ol>
        </div>
    </div>

</div>
@endsection