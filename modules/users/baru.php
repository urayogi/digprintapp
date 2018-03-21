<?php
echo bukahead('Buat Pengguna Baru');
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
//function form ('action formnye', 'judulform', 'name form')
//forminput('jenis input', 'name input', 'label di depan', 'required validasi', 'value kalau ngedit', 'panjang huruf', 'disable ndak')
echo form ('modules/'.$mod.'/proses.php?act=userbaru', 'Tambah Pengguna', 'tambah_pengguna');
echo forminput('text', 'username', 'Username', 'required');
echo forminput('password', 'password', 'Password', '', '', '6');
echo forminput('text', 'first_name', 'Nama Awal');
echo forminput('text', 'last_name', 'Nama Akhir');
?>
<div class="form-group">
              <label class="control-label col-lg-2" for="inputSuccess">Level Pengguna <span class="required">*</span></label>
              <div class="col-lg-10">
                  <select name="level" class="form-control m-bot15" required>
                    <option value="">--Pilih--</option>
              <?php
                    $query = "SELECT * FROM admin_groups ORDER BY name ASC";
                    $result = mysqli_query($con, $query);
                    while ($data = mysqli_fetch_assoc($result)) {
                ?>
                      <option value="<?php echo $data['group_id'] ?>"><?php echo $data['name'] ?></option>
                      <?php } ?>
                </select>
</div>
</div>
<?php
echo forminput('text', 'email', 'E-mail');
echo forminput('submit', 'Simpan');
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
