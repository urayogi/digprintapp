<?php
session_start();
//ambil config dan fungsi2
include "inc/config.php";
include "inc/func.template.php";
//cek user di session
$user_id = $_REQUEST['id'];
$user_id = $_SESSION['user_id'];
$login = ''.$urlbase_admin.'login.php';

if (!isset($_SESSION['username']))
	{
header('location:'.$login.'');
exit;
	}

//request di url
$mod = $_REQUEST['mod'];
$sub = $_REQUEST['sub'];
$action =  $_REQUEST['action'];
$id = $_REQUEST['id'];

//ambek module sesuai request
if (!empty($mod)) {
	$mod_path = "modules/$mod/index.php";
	include_once ($mod_path);
}
//link sesat
else {
	include_once ('pages/404.php');
}

?>
