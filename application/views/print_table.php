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
			<th>first_name</th>
			
		</thead>
		<tbody>
			<?php foreach ($result as $row)
				# code...
			 {?><tr>
			<td><?php echo $row->first_name ?></td>
			
			
			</tr>
		<?php } ?>

		</tbody>
	</table>

</body>
</html>