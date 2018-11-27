<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title></title>
<style>
table, th, td {
   border: 1px solid black;
   border-collapse: collapse;;
}
</style>
</head>
<body>
<?php
require_once("test.php");
  error_reporting(2);
?>
<table>
<tr>
<th>STT</th>
<th>Ma nha vien</th>
<th>Hinh anh</th>
<th>Ten nhan vien</th>
<th>Ten chuc vu</th>
<th>Phu cap chuc vu</th>
<th>tien mot ngay</th>
<th>So ngay lam viec</th>
<th>luong</th>
<th>thuong</th>
<th>thu nhap</th>
<th>hanh dong</th>
</tr>
<?php 
require_once("test.php");
$sql1="select * from t_cbnv";
$result = mysql_query($sql1);
if($result==true){
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
   <tr>
     <td ><?php echo $i;?> </td>
     <td  ><?php echo $kq["MaNV"];?> </td>
     <td  ><img src="<?php echo $kq['HinhAnh'];?>" width="118" height="107" /> </td>
     <td  ><?php echo $kq["TenNV"];?> </td>
     <td  ><?php echo $kq["TenCV"];?> </td>
     <td  ><?php echo $kq["PhuCapCV"];?> </td>
     <td  ><?php echo $kq["Tien1ngay"];?> </td>
     <td  ><?php echo $kq["SoNgayLamViec"];?> </td>
     <td  ><?php echo $luong;?> </td>
     <td  ><?php echo $thuong;?> </td>
     <td  ><?php echo $thunhap;?> </td>
 	 <td> <a href="Insert.php?page=Add">Thêm</a> ||<a href="up_date.php?page=edit&id=<?php echo $kq['MaNV'];?>">Sửa</a> ||
<a onclick="return confirm('Ban chac chan khong')" 
href="Delete.php?page=dell&id=<?php echo $kq['MaNV'];?>">Xóa</a></td>
</tr>
<?php } }?>
</tbody>
</table>
</body>
</html>