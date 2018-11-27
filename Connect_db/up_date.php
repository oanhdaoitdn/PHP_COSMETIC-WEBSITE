<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Cập Nhật Thông Tin Nhân Viên Công Ty MYCOM</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	<style type="text/css" media="screen">
		form {margin-top: 20px;}
		.image { text-align: center; padding-bottom: 20px; margin-top: 20px;}
		td {text-align: center;}
		a:link {color: green; background-color: transparent; text-decoration: none;}
		a:visited {	color: red;background-color: transparent;text-decoration: none;}
		a:hover {color: pink;background-color: transparent;text-decoration: underline;}
		a:active {color: yellow;-color: transparent;text-decoration: underline;}
	</style>
</head>
<body>

	<?php
		require_once("test.php");
		$sql = "SELECT MaNV, HinhAnh, TenNV, TenCV, PhuCapCV, Tien1ngay, SoNgayLamViec FROM t_cbnv WHERE MaNV='$_GET[id]'";
		$result = mysql_query($sql);
		$kq = mysql_fetch_array($result);
	?>

	<form id="form1" name="form1" method="post" enctype="multipart/form-data" action="">
		<table width="650" align="center" cellpadding="10" cellspacing="0" bordercolor="#660099" border="1" class="tblSaveForm">
      		<div class="image">
    			<a href="list.php" class="link"><img alt='List' title='List' src='hinhanh/l.png' width='15px' height='20px'/> List User</a>
    		</div>
			<hr>
      		<tr>
        		<td colspan="2" bgcolor="#fd01e8"><strong>Cập Nhật Thành Viên</strong></td>
     		</tr>
  			<tr>
    			<td><label>Mã Nhân Viên</label></td>
    			<td><input type="text" name="manv" class="txtField" value="<?php echo $kq['MaNV']; ?>"></td>
  			</tr>
  			<tr>
		        <td><label>Hình Ảnh</label></td>
		        <td>
		        	<img src="hinhanh/<?php echo $kq['HinhAnh']; ?>" width="118" height="107"/>
		        	<input type="file" name="hinh_anh" class="txtField">
		        </td>
	      	</tr>
		        <td><label>Tên Nhân Viên</label></td>
		        <td><input type="text" name="tennv" class="txtField" value="<?php echo $kq['TenNV']; ?>"></td>
  			</tr>
		        <td><label>Tên Chức Vụ</label></td>
		        <td><input type="text" name="tencv" class="txtField" value="<?php echo $kq['TenCV']; ?>"></td>
  			</tr>
   			</tr>
		        <td><label>Phụ Cấp</label></td>
		        <td><input type="number" name="phucap" class="txtField" value="<?php echo $kq['PhuCapCV']; ?>"></td>
  			</tr>
  			</tr>
		        <td><label>Tiền 1 Ngày</label></td>
		        <td><input type="number" name="tien1ngay" class="txtField" value="<?php echo $kq['Tien1ngay']; ?>"></td>
  			</tr>
  			</tr>
		        <td><label>Ngày Làm Việc</label></td>
		        <td><input type="number" name="ngaylv" class="txtField" value="<?php echo $kq['SoNgayLamViec']; ?>"></td>
  			</tr>
  			<tr>
    			<td colspan="2" align="center">
    				<input type="submit" name="submit" value="Update" class="btn btn-success">
    			</td>
  			</tr>
		</table>
	</form>

	<?php
		if (isset($_POST['submit']))
		{
			$manv = $_POST['manv'];
			if (isset($_FILES['hinh_anh']['name']) && ($_FILES['hinh_anh']['name']) != "")
			{
				$tenhinh = $_FILES['hinh_anh']['name'];
				// hinh_anh là name text box name là bat buộc
				$duong_dan_upload = "hinhanh/".$tenhinh;
				// hinhanh là ten thu muc lưu h.a
  				move_uploaded_file($_FILES['hinh_anh'],$duong_dan_upload);
  				// day file lên de hien thi tmp_name = biến tạm của file
  				$tennv = $_POST["tennv"];
  				$tencv = $_POST["tencv"];
	  			$phucap = $_POST["phucap"];
	  			$tien1ngay = $_POST["tien1ngay"];
	  			$ngaylv = $_POST["ngaylv"];
			}

			$update = "UPDATE t_cbnv SET MaNV = '$manv', HinhAnh = 'hinhanh/$tenhinh', TenNV = '$tennv', TenCV = '$tencv', PhuCapCV = '$phucap', Tien1ngay = '$tien1ngay', SoNgayLamViec = '$ngaylv' WHERE MaNV = '$_GET[id]'";
			$results = mysql_query($update);
			header("Location:list.php");

			if ($results) {
				echo "<script>alert('Data Update successfuly!')</script>";
			}else{
				echo "<script>alert('Data Update failed')</script>";
			}
		}

	?>
</body>
</html>