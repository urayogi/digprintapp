<?php
session_start();
include '../../inc/config.php';
include '../../lib/func.sql.php';

$act=$_REQUEST['act'];

$id_kat = $_REQUEST['id_kat'];
$ref = $_SESSION['user_id'];
$nama_kat = $_POST['nama_kat'];
$parent_id = $_POST['parent_id'];
$deskripsi = $_POST['deskripsi'];

//prosesnye

    if (empty($parent_id) && $act=='katbaru') {
  $sql = "insert into tb_kategori_barang (nama_kat,deskripsi) values ('$nama_kat','$deskripsi')";
  $hasil = mysqli_query($con, $sql);
  }
	  elseif (!empty($parent_id) && $act=='katbaru') {
  $sql = "insert into tb_kategori_barang (nama_kat,deskripsi,parent_id) values ('$nama_kat','$deskripsi','$parent_id')";
  $hasil = mysqli_query($con, $sql);
  }

		else if ($act=='edit' AND $pass=='') {
		$sql = "update admin_users SET email='$email',first_name='$first_name',last_name='$last_name' where id='$id_user'";
		$hasiledit = mysqli_query($con, $sql);
		}

//hapus record
	if ($act=='delete') {
	$sql = "DELETE FROM tb_kategori_barang where id_kat = $id_kat";
	$hasildelete = mysqli_query($con, $sql);
	}

//notifikasi
if ($hasil or $hasil2){
	header("location:../../?mod=kategori&ntfy=sukses");
}
elseif ($hasiledit) {
	header("location:../../?mod=kategori&ntfy=sukses&ref_id=".$id_user."");
}
elseif ($hasildelete) {
	header("location:../../?mod=kategori&ntfy=sukseshapus&ref_id=".$id_user."");
}
?>
