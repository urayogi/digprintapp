<?php
//catat dulu waktu logout
session_start();
include_once "inc/config.php";
$id = $_SESSION['user_id'];
$sql = "update admin_users set last_logout='$timeset' where id='$id'";
$hasil = mysqli_query($con, $sql);
//beri logout
session_destroy();
header("location:./login");
?>
