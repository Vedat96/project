@extends('layout')

@section('title', 'Games')

@section('content')

Display data

<table class="table">
	<tr>
		<td>description</td>
		<td>image</td>
	</tr>
	<?php
		foreach ($images as $image) {
		?>

	<tr>
		{{-- <td>?php echo $images->description ?></td> --}}
		<td>?php echo $images->image ?></td>
		<td><img src="../storage/app/upload/images/<?php echo $image->image ?>" alt="<?php echo $image->image ?>"></td>
	</tr>
	<?php
	}
	?>
</table>
@endsection