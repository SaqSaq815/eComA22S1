<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Some Title</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
	<h1>Client Information</h1>
	<?php
		$this->view('Owner/detailsPartial', $data['owner']);
	?>

	<h1>New Pet Information</h1>
	<form>
		<label>Name:<input type="text" name="name" /></label><br>
		<label>Date of Birth:<input type="date" name="dob" /></label><br>
		<label>Profile Picture:<input type="file" name="profile_pic" /></label><br>
		<input type="submit" name="action" value="Add new pet" />
	</form>

</body>
</html>