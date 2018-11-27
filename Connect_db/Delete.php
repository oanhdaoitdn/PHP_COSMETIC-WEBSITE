<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
  require_once("test.php");
$xoa="DELETE  from  t_cbnv where MaNV='$_GET[id]' ";
mysql_query($xoa);
if ($xoa==true)
	{
		echo "<script type=\"text/javascript\">alert(\"xoa thanh cong!\");   </script>";
		echo"<script language='javascript'> window.location = 'Information.php';            </script>";
	}
 ?>
</body>
</html>