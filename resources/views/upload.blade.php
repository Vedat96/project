@extends('layout')

@section('title', 'contact')

@section('content')

{{-- {{dd($files)}} --}}

    <div class="row col-md-9 col-lg-9 col-sm-9 pull-left" style="background: white;">
    @if(Auth::check())
               
        <h5>Upload new post </h5>

      <!-- Example row of columns -->
        <div class="row  col-md-12 col-lg-12 col-sm-12" >

            <div class="container">
            	
            	<div class="row">

            		<form action="{{ route('upload.file')}}" method="post" class="form-horizontal" enctype="multipart/form-data">
            			
                		{{ csrf_field()}}
                		<div class="form-group">
                            {{-- <input type="text" name="description"> --}}
                			<input type="file" name="file">
                            <input type="submit">
                		</div>
                    </form>
                </div>
            </div>   
    @endif
	<div class="row">

        <?php
        $dirname = "../storage/app/public/upload/";
        $images = glob($dirname."*.jpg");

        foreach($images as $image) {
            echo '<img src="'.$image.'" /><br />';
        }
        ?>


		{{-- <img width="300" src="{{asset('storage/upload/zonnenschaduw.png')}}"> --}}


{{--         <img width="300" src="{{asset('storage/upload/x.jpg')}}">

        <img width="300" src="{{asset('storage/upload/y.jpg')}}">
        <img width="300" src="storage//upload/"> --}}


        {{-- <img width="300" src="{{asset('storage/upload/')}}"> --}}

        {{-- <img width="300" src="{{asset('storage/upload/')}}"> --}}


		{{-- <img src="../storage/app/public/upload/"> --}}
	</div>
</div>

@endsection