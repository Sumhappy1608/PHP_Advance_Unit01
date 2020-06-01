<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Bài 1.3</title>

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
		<h1 style="text-align: center;">PHP - SESSION</h1>
		<hr>
		<div class="container">
		 <form action="add_process.php" method="GET" role="form" enctype="multipart/form-data">

	    	<div class="form-group">
	    		<label for="">Mã sinh viên</label>
	    		<input type="text" class="form-control" id="" placeholder="Nhập mã sinh viên" name="masv" value="">
	    	</div>

	    	<div class="form-group">
	    		<label for="">Họ và tên</label>
	    	   <input type="text" class="form-control" id="" placeholder="Nhập họ và tên" name="hoten" value="">
	    	</div>

	    	<div class="form-group">
	    		<label for="">Số điện thoại</label>
	    	   <input type="text" class="form-control" id="" placeholder="Nhập số điện thoại" name="sdt" value="">
	    	</div>

	    	<div class="form-group">
	    		<label for="">Email</label>
	    	    <input type="text" class="form-control" id="" placeholder="Nhập email" name="email" value="">
	    	</div>

	    		<div class="form-group">
	    		<label for="">Giới tính</label>
	    	    <label><input type="radio" name="gioitinh" value="Nam">Male</label>
	    	    <label><input type="radio" name="gioitinh" value="Nữ">Female</label>
	    	    <label><input type="radio" name="gioitinh" value="Khác">Other</label>
	    	</div>

            <div class="form-group">
	    		<label for="">Địa chỉ</label>
	    	   <input type="text" class="form-control" id="" placeholder="Nhập địa chỉ" name="diachi" value="">
	    	</div>
	    	<button type="submit" class="btn btn-primary">Lưu thông tin</button>
	    </form>
		<!-- jQuery Plugins -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/main.js"></script>
		</div>
	</body>
</html>
