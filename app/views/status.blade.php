<!DOCTYPE html>
<html lang="eng">
<head>
	<title>try</title>
	<link rel="stylesheet" type="text/css" href="bootstrap3/css/bootstrap.css">
	<script type="text/javascript" src="bootstrap3/js/bootstrap.js"></script>
</head>
<body>

	this is all of myapp status <br>
	<?php
	foreach ($allstatus as $value ) { ?>
		{{$value->status_id;}}
		{{$value->status_name;}}<br>
	<?php	
	}
	?>

	


</body>
</html>