<?php
echo bukahead('Buat Pelanggan Baru');
echo tutuphead();
include_once 'inc/header.php';
include_once 'inc/sidebar.php';
?>
<section id="main-content">
    <section class="wrapper">
      <h3><i class="fa fa-angle-right"></i> Master Data Pengguna sdfdsf</h3>
    <div class="row mt">
      <div class="col-lg-12">
<?php
$edit = mysqli_query($con, "SELECT * FROM tb_pelanggan where id_pelanggan='$_GET[id_pelanggan]'");
				$a = mysqli_fetch_assoc($edit);
//function form ('action formnye', 'judulform', 'name form')
//forminput('jenis input', 'name input', 'label di depan', 'required validasi', 'value kalau ngedit', 'panjang huruf', 'disable ndak')
echo form ('modules/'.$mod.'/proses.php?act=edit', 'Edit Pelanggan', 'tambah_pelanggan');
echo forminput('text', 'id_pelanggan', 'id_pelanggan', 'required' ,''.$a['id_pelanggan'].'');
echo forminput('text', 'nama_pelanggan', 'Nama Pelanggan', 'required',''.$a['nama_pelanggan'].'');
echo forminput('text', 'no_hp', 'No HP', 'required' ,''.$a['no_hp'].'');
echo forminput('text', 'email', 'E-mail','' ,''.$a['email'].'');
echo forminput('text', 'alamat', 'Alamat' ,'' ,''.$a['alamat'].'');
echo forminput('text', 'ket', 'Keterangan' ,'' ,''.$a['ket'].'');
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
