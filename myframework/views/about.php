<?php
	require_once("navbarSnippet.php");
?>

<div class="container">

	<div class="jumbotron">
		<h1>Fruits!</h1>
		<p>A list of fruits that you can add, edit, and delete fruits from.</p>
	</div>
	
	<?php
		foreach ($data['fruits'] as $fruit){
			echo '
				<form name="edit_'.$fruit['id'].'" id="edit_'.$fruit['id'].'" method="POST" action="/about/edit"></form>
			';
		}
	?>
	
	<form name="add" id="add" method="POST" action="/about/add">
		<h1>New Fruit</h1>
		<div class="form-group">
			<label for="name">Fruit Name</label>
			<input type="text" class="form-control" name="name">
		</div>
		<button type="submit" class="btn btn-default">Add Fruit</button>
	</form>
	
	<br/>
	
	<h1>Fruit List</h1>
	
	<div class="table-responsive">
		<table class="table">
			<tr>
				<th>Fruit ID</th>
				<th>Fruit Name</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
			
			<?php
				foreach ($data['fruits'] as $fruit){
					echo '
						<tr>
							<td><input type="number" name="id" value="'.$fruit['id'].'" form="edit_'.$fruit['id'].'" readonly/></td>
							<td><input type="text" name="name" form="edit_'.$fruit['id'].'" value="'.$fruit['name'].'"/></td>
							<td><input type="submit" name="edit" form="edit_'.$fruit['id'].'" value="Edit"/></td>
							<td><input type="submit" name="delete" form="edit_'.$fruit['id'].'" value="Delete"/></td>
						</tr>
					';
				}
			?>
		</table>
	</div>
</div>