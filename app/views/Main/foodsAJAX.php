<html>
<head>
	<title>Some title</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

<script type="text/javascript">
	$(document).ready(
		function(){
			$.getJSON('/Main/foodsJSON',
				function(data){
					output = "";

					for(const item of data) {
						output = output + "item id: " + item.id + " has the name " + item.name + "<br/>";
					}


					$('#foods').html(output);
				}
			);
		}
	);
</script>

</head>

<body>

	<div id ="foods">
		there is nothing to read here
		
	</div>










	<!-- <pisplay the data as a table
		<table>
		<tr><th>id</th><th>Name</th><th>action</th></tr>
		
		<?php
		//$data

		/*foreach ($data as $item) {
			echo "<tr>
			<td>$item->id</td>
			<td>$item->name</td>
			<td><a href='/Food/delete$item->id'>delete</a></td>
			</tr>";
		}

		*/?>
		</table>
	</p>
	<form action='' method="post">
		Input the food that you like:
		<input type="text" name="new_food" />
		<input type="submit" name="action" value="Send" />
	</form> -->
<ul>
	<li><a href='/Main/index/'>index</a> </li>
	<li><a href='/Main/index2/'>index2</a> </li>

</ul>

</body>
</html>