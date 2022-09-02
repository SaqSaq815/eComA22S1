<html>
<head>
	<title>some title</title>

	<!--can add bootstrap here-->
</head>
<body>
	<p><!--display the data as a table -->
		<tr><th>id</th><th>Name</th><th>action</th></tr>
		<table>
		<?php
		//$data

		foreach ($data as $item) {
			echo "<tr>
			<td>$item->id</td>
			<td>$item->name</td>
			<td><a href='/Food/delete$item->id'>delete</a></td>
			</tr>";
		}

		?>
		</table>
	</p>
	<form action='' method="post">
		Input the food that you like:
		<input type="text" name="new_food" />
		<input type="submit" name="action" value="Send" />
	</form>

<ul>
	<li><a href='/Main/index2/'>index</a> </li>
	<li><a href='/Main/index/'>index2</a> </li>

</ul>

</body>
</html>
