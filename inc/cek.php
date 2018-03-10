<?php
session_start();
include"config.php";
$timenow = date('YmdHis');
$login = ''.$urlbase_admin.'login.php';
$user_id = $_REQUEST['id'];
$user_id = $_SESSION['user_id'];

if (!isset($_SESSION['username']))
{
header('location:'.$login.'');
exit;
}
?>
