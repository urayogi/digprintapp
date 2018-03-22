<?php
echo bukahead('Tambah Kategori Barang');
echo tutuphead();
include_once 'inc/header.php';
include_once 'inc/sidebar.php';
?>
<section id="main-content">
    <section class="wrapper">
      <h3><i class="fa fa-angle-right"></i> Tambah Kategori Barang</h3>
    <div class="row mt">
      <div class="col-lg-12">
<?php
//function form ('action formnye', 'judulform', 'name form')
//forminput('jenis input', 'name input', 'label di depan', 'required validasi', 'value kalau ngedit', 'panjang huruf', 'disable ndak')
echo form ('modules/'.$mod.'/proses.php?act=katbaru', 'Tambah Kategori', 'tambah_kategori');
echo forminput('text', 'nama_kat', 'Nama Kategori', 'required');

?>
<div class="form-group">
              <label class="control-label col-lg-2" for="inputSuccess">Level Pengguna <span class="small mt">(Hanya Diisi Jika Merupakan SubKategori) </span></label>
              <div class="col-lg-10">
                  <select name="parent_id" class="form-control m-bot15">
                    <option value="">--Pilih--</option>
              <?php
                    $query = "SELECT * FROM  tb_kategori_barang ORDER BY nama_kat ASC";
                    $result = mysqli_query($con, $query);
                    while ($data = mysqli_fetch_assoc($result)) {
                ?>
                      <option value="<?php echo $data['id_kat'] ?>"><?php echo $data['nama_kat'] ?></option>
                      <?php } ?>
                </select>
</div>
</div>
<?php
echo forminput('text', 'deskripsi', 'Deskripsi');
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
