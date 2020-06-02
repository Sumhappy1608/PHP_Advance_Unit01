<?php 
session_start();
if(isset($_GET['ID']))
{
	$ID = $_GET['ID'];
}
echo "$ID";

if(isset($_SESSION[$ID]))
{
	unset($_SESSION[$ID]);
}
if(isset($_SESSION[$ID]))
{
	$check = true;
}
if( $check != true)
{
	header('Location: cart.php');
}
else
{
	header('Location: cart.php');
}



?>