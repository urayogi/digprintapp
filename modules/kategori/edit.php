<?php
echo bukahead('Ubah Pengguna');
echo tutuphead();
include_once 'inc/header.php';
include_once 'inc/sidebar.php';
$query = mysqli_query($con, "SELECT * FROM admin_users where id_user='$_GET[id_user]'");
$row = mysqli_fetch_assoc($query);
?>
<section id="main-content">
    <section class="wrapper">
      <h3><i class="fa fa-angle-right"></i> Ubah Pengguna <?php echo $row['username']?></h3>
    <div class="row mt">
      <div class="col-lg-12">
<?php
//function form ('action formnye', 'judulform', 'name form')
//forminput('jenis input', 'name input', 'label di depan', 'required validasi', 'value kalau ngedit', 'panjang huruf', 'disable ndak')
echo form ('modules/'.$mod.'/proses.php?act=edit', 'FORM ubah pengguna', 'ubah_pengguna');
echo forminput('text', 'username', 'Username', 'required',''.$row['username'].'' ,'' ,'disabled');
echo forminput('passwordedit', 'passwordedit', 'Password', '', '', '3');
echo forminput('text', 'first_name', 'Nama Awal', '',''.$row['first_name'].'');
echo forminput('text', 'last_name', 'Nama Akhir', '',''.$row['last_name'].'');
?>
<div class="form-group">
              <label class="control-label col-lg-2" for="inputSuccess">Level Pengguna </label>
              <div class="col-lg-10">
                  <select name="level" class="form-control m-bot15">
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
echo inputoption('level', 'admin_groups','group_id','name' ,'asc', 'name') ;
echo inputhidden('id_user', ''.$row['id_user'].'');
echo forminput('text', 'email', 'E-mail', '',''.$row['email'].'');
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
