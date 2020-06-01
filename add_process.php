<?php
session_start();
//session_destroy();

if(isset($_GET['masv']))
{
	$masv = $_GET['masv'];
}
if(isset($_GET['hoten']))
{
	$hoten = $_GET['hoten'];
}
if(isset($_GET['sdt']))
{
	$sdt = $_GET['sdt'];
}
if(isset($_GET['email']))
{
	$email = $_GET['email'];
}
if(isset($_GET['gioitinh']))
{
	$gioitinh = $_GET['gioitinh'];
}
if(isset($_GET['diachi']))
{
	$diachi = $_GET['diachi'];
}


$info = array();
$info['masv']= $masv;
$info['hoten']= $hoten;
$info['sdt']= $sdt;
$info['email']= $email;
$info['gioitinh']= $gioitinh;
$info['diachi']= $diachi;

$_SESSION[$hoten][$masv] = $info;

if(isset($_SESSION[$hoten][$masv]))
{
	$check = true;
}

if( $check == true)
{
	setcookie('msg',"Bạn đã thêm thành công",time() + 2);
	header('Location: list.php');
}
else
{
	setcookie('msg',"Bạn đã thêm thất bại",time() + 2);
	header('Location: add.php');
}

echo "<pre>";
print_r($_SESSION);
echo "<pre>";
?>