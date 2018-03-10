<?php
include "inc/config.php";
include "inc/func.template.php";
include "inc/func.sql.php";
$user_id = $_REQUEST['id'];
$user_id = $_SESSION['user_id'];

$mod = $_REQUEST['mod'];
$sub = $_REQUEST['sub'];
$ntfy = $_REQUEST['ntfy'];
$act =  $_REQUEST['act'];

$id = $_REQUEST['id'];

if (!empty($mod)) {
	$mod_path = "modules/$mod/index.php";
	include ($mod_path);
}
else {
	include('pages/404.php');
}

?>
