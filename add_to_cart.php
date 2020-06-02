<?php
session_start();
date_default_timezone_set('Asia/Ho_Chi_Minh');
if(isset($_GET['ID']))
{
	$ID = $_GET['ID'];
}
if(isset($_GET['NAME']))
{
	$NAME = $_GET['NAME'];
}
if(isset($_GET['PRICE']))
{
	$PRICE = $_GET['PRICE'];
}

//Hàm khởi tạo số lượng của món hàng
if(isset($_SESSION[$ID]['AMOUNT']) == false)
{
	$AMOUNT = 1;
}
else
{
	$AMOUNT = $_SESSION[$ID]['AMOUNT'];
	$AMOUNT = $AMOUNT + 1;
}

$MONEY = $AMOUNT * $PRICE;

$info = array(
        'ID'   =>  $ID,
        'AMOUNT'   =>  $AMOUNT,
        'NAME'   => $NAME,
        'PRICE'   =>  $PRICE,
        'MONEY' => $MONEY,
        'DATE'   =>  date('Y-m-d H:i:s'),
    );

echo "<pre>";

$_SESSION[$ID] = $info;
$SUM = 0;
foreach ($_SESSION as $arr) {
	$SUM += $arr['MONEY'];
	print_r($arr);
}

/*$_SESSION['TOTAL MONEY']['TOTAL'] = $SUM;
$_SESSION['TOTAL MONEY']['MONEY'] = 0;   //Do không MONEY thì SESSION sẽ ko chạy đc, được xem như biến tạm*/
print_r($_SESSION);


if(isset($_SESSION[$ID]))
{
	$check = true;
}

if( $check == true)
{
	header('Location: cart.php');
}
else
{
	header('Location: list_product.php');
}

?>