<?php
session_start();
include '../../inc/config.php';
include '../../lib/func.sql.php';

$act=$_REQUEST['act'];

$id_pelanggan = $_REQUEST['id_pelanggan'];
//$ref = $_SESSION['user_id'];
$nama_pelanggan = $_REQUEST['nama_pelanggan'];
$no_hp = $_REQUEST['no_hp'];
$email = $_REQUEST['email'];

$alamat = $_REQUEST['alamat'];
$ket = $_REQUEST['ket'];
$status = $_REQUEST['status'];

//tambah bangunan
		if ($act=='pelangganbaru') {
		$sql = "insert into tb_pelanggan (nama_pelanggan,no_hp,email,alamat,ket,status) values ('$nama_pelanggan','$no_hp','$email','$alamat','$ket','$status')";
		$hasil = mysqli_query($con, $sql);
		}
//edit bangunan

		if ($act=='edit') {
		$sql = "UPDATE tb_pelanggan SET nama_pelanggan='$nama_pelanggan',no_hp='$no_hp',email='$email',alamat='$alamat',ket='$ket',status='$status' WHERE id_pelanggan='$id_pelanggan'";
		$hasiledit = mysqli_query($con, $sql);
		}

//hapus record
	if ($act=='delete') {
	$sql = "DELETE FROM tb_pelanggan where id_pelanggan = $id_pelanggan";
	$hasil = mysqli_query($con, $sql);
	}

//notifikasi
if ($hasil or $hasil2){
	header("location:../../?mod=pelanggan&ntfy=sukses");
}
elseif ($hasiledit) {
	header("location:../../?mod=pelanggan&ntfy=sukses&id=".$ref."");
}
else {
	header("location:../../?mod=pelanggan&ntfy=gagal");
}
?>
