<!DOCTYPE html>
<html lang="eng">
<head>
	<title>it_incident</title>
	<link rel="stylesheet" type="text/css" href="bootstrap3/css/bootstrap.css">
	<script type="text/javascript" src="bootstrap3/js/bootstrap.js"></script>
</head>
<body>

	<?php
		//var_dump($category);
	foreach ($category as $value) { ?>
	
		{{$value->category_id;}}
		{{$value->category_name;}}<br>
		
	<?php
	}
	?>	
		

</body>
</html>