<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>

	<form action="store.php" method="post" enctype="multipart/form-data">
		<div>
			<label for ="title">Title:</label>
			<input type="text" name="title" id="title">
		</div>
		<div>
			<label for ="image">Image:</label>
			<input type="file" name="image[]" multiple id="image">
		</div>
		<div>
			<button type="submit">Save</button>
		</div>
	</form>

</body>
</html>