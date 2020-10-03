{{-- 		<form action="/search" method="get">
			<div class="input-group">
				<input type="search" name="search" class="form-control">
				<span class="input-group-prepend">
					<button type="submit" class="btn btn-primary">Search</button>
				</span>
			</div>
		</form>

		<table class="table table-bordered">
			<thead>
				<tr>
					<th>name</th>
					<th>description</th>
					<th>genre</th>
					<th>developer</th>
					<th>os</th>
					<th>date</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					@foreach($games as $game)
					<td>{{ $game->name}}</td>
					<td>{{ $game->description}}</td>
					<td>{{ $game->genre}}</td>
					<td>{{ $game->developer}}</td>
					<td>{{ $game->os}}</td>
					<td>{{ $game->date}}</td>
				</tr>
			</tbody>

		</table> --}}


		<form class= "search" method="POST">
		<input type="text" value="" name="datum">
		<input type="submit" name="find" value="Zoek">
		<br><br>
		<table class="myTable">
			<thead>
				<th>Datum	</th>
				<th>Stories </th>
			</thead>
			<tbody>
			<?php
				// als er wat in find zit dan wordt dat getoond
				if (isset($_POST['find'])){
					$searchdata = $story->find($id_dagboek, $_POST['datum']);
				
					foreach ($searchdata as $value) {
						echo "<tr>
						<td>" . $value['datum'] . "</td>
						<td>" . $value['post'] . "</td>
						</tr>";
					}
				}
			?>
			</tbody>
		</table>
	</form>