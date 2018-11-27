<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="./Css/table.css">
</head>
<body>
	<?php include 'test.php'; ?>
	
	<div class="container">
    <div class="row col-md-12 col-md-offset-2 custyle">
    <table class="table table-striped custab">
    <thead>
   
    <tr> <th>Danh sách</th> </tr>
        <tr>
            <th>STT</th>
            <th>Ma Nhan Vien</th>
            <th>Hinh anh</th>
            <th>Ten Nhan vien</th>
            <th>Tên Chức Vụ</th>
            <th>Phụ Cấp Chức vụ</th>
            <th></th>
            <th>Title</th>
            <th>Parent ID</th>
            <th>ID</th>
            <th>Title</th>
          
        </tr>
    </thead>
            <tr>
                <td></td>
                <td><?php echo $i; ?></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
         
    </table>
    </div>
</div>
</body>
</html>