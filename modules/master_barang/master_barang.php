<?php
echo bukahead('Manajemen Pengguna');
echo tutuphead();
include_once 'inc/header.php';
include_once 'inc/sidebar.php';
?>
<section id="main-content">
    <section class="wrapper">
      <h3><i class="fa fa-angle-right"></i> Master Barang</h3>
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
                <h4><i class="fa fa-angle-right"></i> <a href="./?mod=master_barang&act=baru">+ Tambah Barang</a></h4>
                    <table class="table table-bordered table-striped table-condensed data">
                        <thead>
                            <tr>
                                <th data-field="No" data-sortable="true">No</th>
                                <th data-field="Jenis" data-sortable="false">Jenis</th>
                                <th data-field="Nama Barang" data-sortable="true">Nama Barang</th>
                                <th data-field="Harga Beli"  data-sortable="true">Harga Beli</th>
                                <th data-field="Harga Jual" data-sortable="true">Harga Jual</th>
                                <th data-field="Stok" data-sortable="true">Stock</th>
                                <th data-field="Status" data-sortable="false">Status</th>
                                <th data-field="Tindakan" data-sortable="false">Tindakan</th>
                            </tr>
                            </thead>
                                <tbody>
                                 <?php
                                    $query = "SELECT * FROM tb_stok_barang ";
                                    $no = 1;
                                    $result = mysqli_query($con, $query);
                                    while ($data = mysqli_fetch_assoc($result)) {
                                    ?>
                                    <tr>
                                        <td><font color="<?php echo $warna?>"><?php echo $no ?></td>
                                        <td><?php echo $data['id_anak'] ?></td>
                                        <td><?php echo $data['nama_barang'] ?></td>
                                        <td><?php echo $data['harga_beli']; ?></td>
                                        <td><?php echo $data['harga_jual'] ?></td>
                                        <td><?php echo $data['stok'] ?></td>
                                        <td><?php echo $data['status'] ?></td>
                                        <td>
                                        <div class="btn-group">
                          						  <button type="button" class="btn btn-theme dropdown-toggle" data-toggle="dropdown">
                          						    Action <span class="caret"></span>
                          						  </button>
                          						  <ul class="dropdown-menu" role="menu">
                          						    <li><a href="./index.php?mod=<?php echo $mod?>&act=edit&id_barang=<?php echo $data['id_barang']?>&ref=<?php echo $_SESSION['user_id']?>">Edit</a></li>
                          						    <li><a href="modules/<?php echo $mod?>/proses.php?mod=<?php echo $mod?>&act=delete&id_barang=<?php echo $data['id_barang']?>&ref=<?php echo $_SESSION['user_id']?>">Hapus</a></li>

                          						  </ul>
                          						</div>
                                      </td>
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
