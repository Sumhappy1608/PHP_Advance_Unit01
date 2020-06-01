<?php
session_start();
if(isset($_GET['masv']))
{
	$masv = $_GET['masv'];
}
if(isset($_GET['hoten']))
{
	$hoten = $_GET['hoten'];
}

if(isset($_SESSION[$hoten]))
{
	unset($_SESSION[$hoten]);
}

if(isset($_SESSION[$hoten]))
{
	$check = true;
}
if( $check != true)
{
	setcookie('msg',"Bạn đã xóa thành công",time() + 2);
	header('Location: list.php');
}
else
{
	setcookie('msg',"Bạn đã xóa thất bại",time() + 2);
	header('Location: list.php');
}

?>