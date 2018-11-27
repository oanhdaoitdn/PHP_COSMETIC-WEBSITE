<!DOCTYPE html>
<html>
<head>

   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
table, th, td {
   border: 1px solid black;
   border-collapse: collapse;
}
th, td {
   padding: 5px;
   text-align: left;
}
</style>
</head>
<body>
<?php
  require_once("test.php");
  error_reporting(2);
?>

   <div class = "row" style = "margin: 0 auto;">
<?php 
 require_once("test.php");
 error_reporting(2);
 $sql1 = "select * from t_cbnv;";
 $result = mysql_query( $sql1);
 if ($result == true) {
   $i=0;
   while($kq=mysql_fetch_assoc($result))
   {
   $i++;
   $pc = $kq["PhucCapCV"];
   $motngay = $kq["Tien1ngay"];
   $ngaylam =$kq["SoNgayLamViec"];
   $luong = $motngay * $ngaylam;
   if ($ngaylam  >= 28){
     $thuong = 300000;
   }else if ($ngaylam  >= 26){
     $thuong = 150000;
   }else
   $thuong =0 ;
   $thunhap= $luong + $thuong + $pc;
 ?>

  
  <div class = "col-sm-6 col-md-3">
     <div class = "thumbnail">
        <img src = " <?php echo $kq['HinhAnh'];?>" width="118" height="107" alt = "Generic placeholder thumbnail">
     </div>
     
     <div class = "caption">
        <h3><?php echo $kq["TenNV"];?></h3>
        <p><?php echo $kq["Tien1ngay"];?></p>
        
        <p>
           <a href = "#" class = "btn btn-primary" role = "button">
              Button
           </a> 
           
           <a href = "#" class = "btn btn-default" role = "button">
              Button
           </a>
        </p>
        
     </div>
  </div>
 <?php } }?>
</div>
</body>
</html>