<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Edit Animal</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</head>

<body>
<h1>Client Information</h1>
<?php
	$this->view('Owner/detailsPartial', $data['owner']);
?>
<h1>New Pet Information</h1>
<form action='' method='post' enctype="multipart/form-data">
	<label>Name:<input type="text" name="name" value="<?= $data['animal']->name ?>" /></label><br>
	<label>Date of Birth:<input type="date" name="dob" value="<?= $data['animal']->dob ?>" /></label><br>
	<label>Profile picture:<input type="file" name="profile_pic" /></label><br>
	<input type="submit" name="action" value="Modify pet" />
</form>

<a href="/Animal/index/<?= $data['owner']->owner_id ?>">Cancel</a>

</body>
</html>