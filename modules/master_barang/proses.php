<?php
session_start();
include '../../inc/config.php';
include '../../lib/func.sql.php';

$act         = $_REQUEST['act'];

$id_barang   = $_REQUEST['id_barang'];
$id_anak     = $_REQUEST['id_anak'];
$nama_barang = $_REQUEST['nama_barang'];
$harga_beli  = $_REQUEST['harga_beli'];
$harga_jual  = $_REQUEST['harga_jual'];
$stok        = $_REQUEST['stok'];
$status      = $_REQUEST['status'];

//tambah bangunan
		if ($act=='barangbaru') {
		$sql = "insert into tb_stok_barang (id_anak, nama_barang, harga_beli, harga_jual, stok, status) values ('$id_anak', '$nama_barang', '$harga_beli','$harga_jual','$stok','$status')";
		$hasil = mysqli_query($con, $sql);
		}
//edit bangunan

		if ($act=='edit') {
		$sql = "UPDATE tb_stok_barang SET 
		   id_anak='$id_anak',
		   nama_barang='$nama_barang',
		   harga_beli='$harga_beli',
		   harga_jual='$harga_jual',
		   stok='$stok',
		   status='$status'
		   WHERE id_barang='$id_barang'";
		$hasiledit = mysqli_query($con, $sql);
		}

//hapus record
	if ($act=='delete') {
	$sql = "DELETE FROM tb_stok_barang where id_barang = $id_barang";
	$hasil = mysqli_query($con, $sql);
	}

//notifikasi
if ($hasil or $hasil2){
	header("location:../../?mod=master_barang&ntfy=sukses");
}
elseif ($hasiledit) {
	header("location:../../?mod=master_barang&ntfy=sukses&id=".$ref."");
}
else {
	header("location:../../?mod=master_barang&ntfy=gagal");
}
?>
