<?php
session_start();
include '../../inc/config.php';
include '../../lib/func.sql.php';

$act=$_REQUEST['act'];

$id_induk = $_REQUEST['id_induk'];
//$ref = $_SESSION['user_id'];
$nama_induk = $_REQUEST['nama_induk'];

//tambah bangunan
		if ($act=='pelangganbaru') {
		$sql = "insert into tb_kat_induk (nama_induk) values ('$nama_induk')";
		$hasil = mysqli_query($con, $sql);
		}
//edit bangunan

		if ($act=='edit') {
		$sql = "UPDATE tb_kat_induk SET nama_induk='$nama_induk' WHERE id_induk='$id_induk'";
		$hasiledit = mysqli_query($con, $sql);
		}

//hapus record
	if ($act=='delete') {
	$sql = "DELETE FROM tb_kat_induk where id_induk = $id_induk";
	$hasil = mysqli_query($con, $sql);
	}

//notifikasi
if ($hasil or $hasil2){
	header("location:../../?mod=digital&ntfy=sukses");
}
elseif ($hasiledit) {
	header("location:../../?mod=digital&ntfy=sukses&id=".$ref."");
}
else {
	header("location:../../?mod=digital&ntfy=gagal");
}
?>
