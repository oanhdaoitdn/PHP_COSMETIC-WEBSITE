<!DOCTYPE html>
<html lang="en">
<head>
	
	  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<?php error_reporting(2);
 require_once("test.php");
if(count($_POST)>0) {
 

  $ten_hinh=$_FILES['hinh_anh']['name'];
  $duong_dan_upload="hinhanh/".$ten_hinh;
  move_uploaded_file($_FILES['hinh_anh']['tmp_name'],$duong_dan_upload);
  $manv = $_POST['manv'];
  $ten_hinh=$_FILES['hinh_anh']['name'];
  $tennv=$_POST['tennv'];
  $tencv=$_POST['tencv'];
  $phucap=$_POST['phucap'];
  $tien1ngay=$_POST['tien1ngay'];
  $ngaylv=$_POST['ngaylv'];


  $sql ="INSERT INTO t_cbnv VALUES ('$manv','hinhanh/$ten_hinh','$tennv','$tencv','$phucap','$tien1ngay','$ngaylv')";
  mysql_query($sql);

 
  } ?>


	<div class="span3" style="margin-left: 300px;">
    <h2>Add New User</h2>
    <form  method="post" enctype="multipart/form-data" action="">
   
    <label>manv</label></br>
    <input type="text" name="manv" class="span3"></br>
    <label>Hinanh</label></br>
    <input type="file" name="hinh_anh" id="myFile">
    <label>tennv</label></br>
    <input type="text" name="tennv" class="span3"></br>
    <label>tencv</label></br>
    <input type="text" name="tencv" class="span3"></br>
    <label>phucap</label></br>
    <input type="text" name="phucap" class="span3"></br>
    <label>tien1ngay</label></br>
    <input type="text" name="tien1ngay" class="span3"></br>
    <label>ngaylv</label></br>
    <input type="text" name="ngaylv" class="span3"></br>
     <input type="submit" name="submit" value="Submit" class="btnSubmit">
    </form>
</div>
</body>
</html>