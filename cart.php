<?php
session_start();
//session_destroy();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<title>Giỏ hàng</title>

	<!--Latest compiled and minified CSS-->
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

	<!--Optional theme -->
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

	<!--Latest compiled and minified JavaScript-->
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/jv/bootstrap.min.jv"></script>
	<style type="text/css">
		table {
			border: 1px solix black;
		}
	</style>
</head>
<body>
	<table border="1">
		<tr>
			<th colspan="6"></th>
			<th><a href="list_product.php">Tiếp tục mua hàng</a></th>
		</tr>
		<tr>
		    <td colspan="7" align="center"><strong>Thông tin giỏ hàng</strong></td>
		</tr>
		<tr>
		    <td><strong>ID</strong></td>
		    <td><strong>Số lượng</strong></td>
			<td><strong>Tên sản phẩm</strong></td>
			<td><strong>Đơn giá</strong></td>
			<td><strong>Thành tiền</strong></td>
	        <td><strong>Thời gian cập nhật</strong></td>
		    <td><strong></strong></td>
		</tr>

		<!--Thông tin sản phẩm-->
		<?php foreach($_SESSION as $info) { ?>
		<tr>
		    <td><?= $info['ID'];?></td>
		    <td><?= $info['AMOUNT'];?></td>
			<td><?= $info['NAME'];?></td>
			<td><?= $info['PRICE'];?></td>
			<td><?= $info['MONEY'];?></td>
	        <td><?= $info['DATE'];?></td>
		    <td><a href="delete.php?ID=<?= $info['ID'];?>">Xóa khỏi giỏ hàng</a></td>
		</tr>
	    <?php } ?>
		<!--Tổng tiền-->
		<tr>
		    <td colspan="4" align="center"><strong>Tổng tiền</strong></td>
		    <td><strong></strong></td>
			<td colspan="2"></td>
		</tr>

	</table>
	</form>
</body>
</html>