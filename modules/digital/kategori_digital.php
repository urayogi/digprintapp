<?php
echo bukahead('Manajemen Pengguna');
echo tutuphead();
include_once 'inc/header.php';
include_once 'inc/sidebar.php';
?>
<section id="main-content">
    <section class="wrapper">
      <h3><i class="fa fa-angle-right"></i> Master Data Kategori</h3>
    <?php
    if ($notify=="sukses") {
      echo '<div class="alert alert-success alert-dismissable">
						  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						  <strong>Berhasil!</strong> Data Sudah Disimpan.
						</div>
      				';
    }
    elseif ($notify=="gagal") {
      echo '<div class="alert alert-dangers alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <strong>Operasi Gagal!</strong> Mohon dicek kembali.
            </div>
            ';
    }
               ?>
    <div class="row mt">
      <div class="col-lg-12">
                <div class="content-panel">
                  <div class="table-responsive">
                <h4><i class="fa fa-angle-right"></i> <a href="./?mod=digital&act=input">+ Tambah Data Kategory</a></h4>
                    <table class="table table-bordered table-striped table-condensed data">
                        <thead>
                            <tr>
                                <th data-field="No" data-sortable="true">No</th>
                                <th data-field="Nama Pelanggan" data-sortable="true">Nama Kategori</th>
                             
                              <th data-field="Tindakan" data-sortable="false">Tindakan</th>
                            </tr>
                            </thead>
                                <tbody>
                                 <?php
                                    $query = "SELECT * FROM tb_kat_induk ";
                                    $no = 1;
                                    $result = mysqli_query($con, $query);
                                    while ($data = mysqli_fetch_assoc($result)) {
                                    ?>
                                    <tr>
                                        <td><font color="<?php echo $warna?>"><?php echo $no ?></td>
                                        <td><?php echo $data['nama_induk'] ?></td>
                                      
                                        <td>
                                        <div class="btn-group">
                          						  <button type="button" class="btn btn-theme dropdown-toggle" data-toggle="dropdown">
                          						    Action <span class="caret"></span>
                          						  </button>
                          						  <ul class="dropdown-menu" role="menu">
                          						    <li><a href="./index.php?mod=<?php echo $mod?>&act=edit&id_induk=<?php echo $data['id_induk']?>&ref=<?php echo $_SESSION['user_id']?>">Edit</a></li>
                          						    <li><a href="modules/<?php echo $mod?>/proses.php?mod=<?php echo $mod?>&act=delete&id_induk=<?php echo $data['id_induk']?>&ref=<?php echo $_SESSION['user_id']?>">Hapus</a></li>

                          						  </ul>
                          						</div>
                                    <?php $no++;
                                    }
                                    ?>
                                    </tr>
                        </table>
                      </div>

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
