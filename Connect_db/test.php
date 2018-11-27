<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
	$conn= mysql_connect("localhost","root") or die ("Khong Ket Noi");
	mysql_select_db("db");
	if ($conn) {
		echo "Ket Noi Thanh Cong";
	}


	?>
</body>
</html>