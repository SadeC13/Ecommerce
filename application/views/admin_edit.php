<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<style type="text/css">

	</style>
</head>
<body>
	<div class="container">
		<div class="row">
			<h3>Edit Product - ID 2</h3>
			<form class="col-md-6">
				<label for="name">Name</label>
				<input class="form-control" name="name" type="text">
				<label for="description">Description</label>
				<textarea class="form-control" name="description"></textarea>
				<label for="genre">Genre</label>
				<select class="form-control">
					<option>Alternative</option>
					<option>Country</option>
					<option>Hip/Hop</option>
					<option>Pop</option>
					<option>Reggae</option>
					<option>Rock</option>
				</select>
				<label for="new_genre">or add new genre</label>
				<input class="form-control" name="new_genre" type="text"
				
				<form action="upload.php" method="post" enctype="multipart/form-data">
				    <label for="fileToUpload">Images</label>
				    <input type="file" name="fileToUpload" id="fileToUpload">
				

				<button class="btn btn-default"type="submit">Cancel</button>
				<button class="btn btn-success"type="submit">Preview</button>
				<button class="btn btn-primary"type="submit">Update</button>
				</form>
			</form>
		</div>
	</div>
</body>
</html>