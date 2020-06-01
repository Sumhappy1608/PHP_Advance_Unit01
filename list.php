<?php
session_start();

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<title>Danh sách các học sinh</title>
	<!--Latest compiled and minified CSS-->
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

	<!--Optional theme -->
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

	<!--Latest compiled and minified JavaScript-->
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/jv/bootstrap.min.jv"></script>
</head>
<body>
	<div class="container">
	<h3 align="center">Student List</h3>
	<a href="add.php" type="button" class="btn btn-primary">Thêm mới</a>
	 <?php if(isset($_COOKIE['msg'])){ ?>
	    <div class="alert alert-success">
	    	<strong>Thành công!</strong> <?= $_COOKIE['msg']?>
	    </div>
	<?php } ?>
	<hr>
	    <table class="table">
	    	<thead>
	    		<tr>
	    			<th scope="col">#</th>
	    			<th scope="col">Mã sinh viên</th>
	    			<th scope="col">Họ và tên</th>
	    			<!--<th scope="col">Password</th>-->
	    			<th scope="col">Action</th>
	    		</tr>
	    	</thead>
	    	<tbody>
	    	<?php 
	    		$dem = 1;  //đếm thứ tự của học sinh
	    		foreach($_SESSION as $a) { ?>
	    		<tr>
	    			<th scope="row"><?= $dem ?></th>
	    		<?php foreach($a as $info) { ?>
	    			<td><?= $info['masv'] ?></td>
	    			<td><?= $info['hoten'] ?></td>
	    			<td>
	    				<a href="detail.php?masv=<?=$info['masv']?>" type="button" class="btn btn-default">Xem</a>
	    				<a href="delete.php?masv=<?=$info['masv']?>&hoten=<?=$info['hoten']?>" type="button" class="btn btn-warning">Xóa</a>
	    				<!--<a href="delete.php" class="btn btn-warning">Xóa</a>-->
	    			</td>
	    		<?php } ?>

	    		</tr>
	    	<?php $dem++; } ?>
	    	</tbody>
	    </table>
	</div>
</body>
</html>