<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<style>
		table, th, td {
  border: 1px solid black;
}



	</style>

	
</head>
<body>
	<table>
		<thead>
			<th>name</th>
			<th>id</th>
			<th>The_brand</th>
			<th>Price_of_the_brand</th>
		</thead>
		<tbody>
			<?php foreach ($result as $row)
				# code...
			 {?><tr>
			<td><?php echo $row->name ?></td>
			<td><?php echo $row->id ?></td>
			<td><?php echo $row->The_brand ?></td>
			<td><?php echo $row->Price_of_the_brand ?></td>
			</tr>
		<?php } ?>

		</tbody>
	</table>

</body>
</html>