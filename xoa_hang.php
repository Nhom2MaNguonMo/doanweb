<?php
if (!isset($_SESSION)) session_start();
$id = $_GET['id'];
unset($_SESSION['giohang'][$id] ) ;
header('location:gio_hang.php');