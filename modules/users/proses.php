<?php
session_start();
include '../../inc/config.php';
include '../../lib/func.sql.php';

$act=$_REQUEST['act'];

$id_user = $_REQUEST['id_user'];
$ref = $_SESSION['user_id'];
$username = $_POST['username'];
$email = $_POST['email'];
$pass = $_POST['password'];
$passedit = $_POST['passwordedit'];
$password = md5($pass);
$passwordedit = md5($passedit);
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$level = $_POST['level'];

//prosesnye
  if ($act=='save') {
$sql = "insert into admin_users (username,email,password,first_name,last_name) values ('$username','$email','$password','$first_name','$last_name')";
$hasil = @mysql_query($sql);
}
  if ($act=='userbaru') {
$sql = "insert into admin_users (username,email,password,first_name,last_name,group_id,ref) values ('$username','$email','$password','$first_name','$last_name','$level','$ref')";
$hasil = mysqli_query($con, $sql);
}
//edit pengguna
	if (!empty($level)) {
		if ($act=='edit' AND $pass!=='') {
		$sql = "update admin_users SET group_id='$level',password='$password',email='$email',first_name='$first_name',last_name='$last_name' where id=$id_user";
		$hasiledit = mysqli_query($con, $sql);
		}
		else if ($act=='edit' AND $pass=='') {
		$sql = "update admin_users SET group_id='$level',email='$email',first_name='$first_name',last_name='$last_name' where id='$id_user'";
		$hasiledit = mysqli_query($con, $sql);
		}
	}
	else if (empty($level)) {
		if ($act=='edit' AND $pass!=='') {
		$sql = "update admin_users SET password='$password',email='$email',first_name='$first_name',last_name='$last_name' where id=$id_user";
		$hasiledit = mysqli_query($con, $sql);
		}
		else if ($act=='edit' AND $pass=='') {
		$sql = "update admin_users SET email='$email',first_name='$first_name',last_name='$last_name' where id='$id_user'";
		$hasiledit = mysqli_query($con, $sql);
		}
	}
//hapus record
	if ($act=='delete') {
	$sql = "DELETE FROM admin_users where id_user = $id_user";
	$hasildelete = mysqli_query($con, $sql);
	}

//notifikasi
if ($hasil or $hasil2){
	header("location:../../?mod=users&ntfy=sukses");
}
elseif ($hasiledit) {
	header("location:../../?mod=users&ntfy=sukses&ref_id=".$id_user."");
}
elseif ($hasildelete) {
	header("location:../../?mod=users&ntfy=sukseshapus&ref_id=".$id_user."");
}
?>
