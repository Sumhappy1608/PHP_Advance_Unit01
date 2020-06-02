<?php
$info = array();
    $info['SP1'] = array(
        'ID'   =>  'SP1',
        'NAME'   =>  'IPhone 4 32GB',
        'PRICE'   =>  '5000000',
    );
    $info['SP2'] = array(
        'ID'   =>  'SP2',
        'NAME'   =>  'Ipad Mini 16GB',
        'PRICE'   =>  '8000000',
    );
    $info['SP3'] = array(
        'ID'   =>  'SP3',
        'NAME'   =>  'IPhone 5 32GB',
        'PRICE'   =>  '7000000',
    );
    $info['SP4'] = array(
        'ID'   =>  'SP4',
        'NAME'   =>  'IPhone 6 32GB',
        'PRICE'   =>  '10000000',
    );
    $info['SP5'] = array(
        'ID'   =>  'SP5',
        'NAME'   =>  'IPhone 6 plus 32GB',
        'PRICE'   =>  '150000000',
    );

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<title>Trang bán hàng</title>

	<!--Latest compiled and minified CSS-->
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

	<!--Optional theme -->
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

	<!--Latest compiled and minified JavaScript-->
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/jv/bootstrap.min.jv"></script>
</head>
<body>
	<table border="1">
		<tr>
			<th colspan="3">DANH SÁCH MUA HÀNG</th>
			<th><a href="cart.php">Xem giỏ hàng</a></th>
		</tr>
		<tr>
			
		    <td><strong>ID</strong></td>
			<td><strong>Tên sản phẩm</strong></td>
			<td><strong>Đơn giá</strong></td>
			<td><strong>Hành động</strong></td>

		</tr>
		    	<!--Thông tin sản phẩm-->
		<?php foreach($info as $product) { ?>
		<tr>
			<td name="ID"><?= $product['ID']; ?></td>
			<td name="NAME"><?= $product['NAME']; ?></td>
			<td name="PRICE"><?= $product['PRICE']; ?></td>
			<td><a href="add_to_cart.php?ID=<?= $product['ID'];?>&NAME=<?= $product['NAME'];?>&PRICE=<?= $product['PRICE'];?>">Add to cart</a></td>
		</tr>
	    <?php } ?>
	</table>
	</form>
</body>
</html>