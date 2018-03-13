<?php
session_start();
//ambil config dan fungsi2
include "inc/config.php";
include "inc/func.template.php";

//cek user di session
$login = ''.$urlbase_admin.'login.php';
if (!isset($_SESSION['username']))
	{
header('location:'.$login.'');
exit;
	}

//request di url module
$mod = $_REQUEST['mod'];
$sub = $_REQUEST['sub'];
$act =  $_REQUEST['act'];
$id = $_REQUEST['id'];

//set halaman dashboard landing awal
$landing = "modules/users/index.php";

//ambek module sesuai request
if (!empty($mod)) {
	$mod_path = "modules/$mod/index.php";
	include_once ($mod_path);
}
//link landing
elseif (empty($mod)) {
	include_once ($landing);
}

?>
