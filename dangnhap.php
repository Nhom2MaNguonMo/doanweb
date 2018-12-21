<?php
if (!isset($_SESSION)) session_start();
if (!isset($_SESSION['giohang'])) 
	$_SESSION['giohang'] = array();
$tam = $_SESSION['giohang'];

$id = isset($_GET['id'])?$_GET['id']:'';

if ($id !='') //Thêm
{
	$tam[$id] = 1;
}
$_SESSION['giohang'] = $tam ;
header('location:gio_hang.php');