<?php

if(isset($_POST['masv']))
{
	$masv = $_POST['masv'];
}
if(isset($_POST['hoten']))
{
	$hoten = $_POST['hoten'];
}
if(isset($_POST['sdt']))
{
	$sdt = $_POST['sdt'];
}
if(isset($_POST['email']))
{
	$email = $_POST['email'];
}
if(isset($_POST['gioitinh']))
{
	$gioitinh = $_POST['gioitinh'];
}
if(isset($_POST['diachi']))
{
	$diachi = $_POST['diachi'];
}


?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	    <title>Bài 1.2</title>

		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Nunito+Sans:700%7CNunito:300,600" rel="stylesheet"> 

		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="css/font-awesome.min.css">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="css/style.css"/>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

    </head>
	<body>
		<h1 style="text-align: center;">PHP - Thực hành gửi dữ liệu bằng POST</h1>
		<hr>
	    <h3 align="center">THÔNG TIN SINH VIÊN</h3>
	    <div class="container">
	        <h2>Mã sinh viên: <?= $masv ?></h2>
	        <h2>Họ và tên: <?= $hoten ?></h2>
	        <h2>Số điện thoại: <?= $sdt ?></h2>
            <h2>Email: <?= $email ?></h2>
            <h2>Giới tính: <?= $gioitinh ?></h2>
            <h2>Địa chỉ: <?= $diachi ?></h2>
        </div>
	</body>
</html>
