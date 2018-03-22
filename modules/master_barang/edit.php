<?php
echo bukahead('Edit Barang');
echo tutuphead();
include_once 'inc/header.php';
include_once 'inc/sidebar.php';
?>
<section id="main-content">
    <section class="wrapper">
      <h3><i class="fa fa-angle-right"></i> Master Barang</h3>
    <div class="row mt">
      <div class="col-lg-12">
<?php
$edit = mysqli_query($con, "SELECT * FROM tb_stok_barang where id_barang='$_GET[id_barang]'");
				$a = mysqli_fetch_assoc($edit);
//function form ('action formnye', 'judulform', 'name form')
//forminput('jenis input', 'name input', 'label di depan', 'required validasi', 'value kalau ngedit', 'panjang huruf', 'disable ndak')
echo form ('modules/'.$mod.'/proses.php?act=edit', 'Edit Barang', 'edit_barang');
echo forminput('text', 'id_barang', 'ID Barang', 'required' ,''.$a['id_barang'].'');
echo forminput('text', 'id_anak', 'Jenis', 'required' ,''.$a['id_anak'].'');
echo forminput('text', 'nama_barang', 'Nama Barang', 'required',''.$a['nama_barang'].'');
echo forminput('text', 'harga_beli', 'Harga Beli', 'required' ,''.$a['harga_beli'].'');
echo forminput('text', 'harga_jual', 'Harga Jual','' ,''.$a['harga_jual'].'');
echo forminput('text', 'stok', 'Stok' ,'' ,''.$a['stok'].'');
echo formradio('Status');
//radio ('name', 'label', 'value')
echo radio('status','Aktif','Aktif');
echo radio('status','Non Aktif','No_Aktif');
echo tutupradio();
echo forminput('submit', 'Update');
echo forminput('closeform');
?>

                </div><!-- /content-panel -->
      </div><!-- /col-lg-12 -->
    </div><!-- /row -->
  </section>
</section>
<?php
echo bukafooter();
//javascript diantare buka & tutup footer
?>
<script type="text/javascript">
	$(document).ready(function(){
		$('.data').DataTable();
	});
</script>
<?php
echo tutupfooter();
?>
