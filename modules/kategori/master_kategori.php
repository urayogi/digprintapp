<?php
echo bukahead('Manajemen Kategori');
echo tutuphead();
include_once 'inc/header.php';
include_once 'inc/sidebar.php';
?>

<section id="main-content">
    <section class="wrapper">
      <h3><i class="fa fa-angle-right"></i>Master Data Kategori</h3>
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
      elseif ($notify=="sukseshapus") {
        echo '<div class="alert alert-warning alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong>Berhasil!</strong> Data Sudah Terhapus.
              </div>
              ';
      }?>
    <div class="row mt">
      <div class="col-lg-12">
                <div class="content-panel">
                  <div class="table-responsive">
                <h4><a href="./?mod=<?php echo $mod?>&act=baru"><button type="button" class="btn btn-primary btn-lg">Tambah Kategori</button></a></h4>


                    <table class="table table-bordered table-striped table-condensed data">
                        <thead>
                            <tr>
                                <th data-sortable="true">Nama Kategori</th>
                                <th data-sortable="true">Kategori Induk</th>
                                <th data-sortable="true">Deskripsi</th>
                                <th data-sortable="false">Tindakan</th>


                            </tr>
                            </thead>
                                <tbody>
                                 <?php
                                    $query = "SELECT * FROM tb_kategori_barang";
                                    $result = mysqli_query($con, $query);
                                    while ($data = mysqli_fetch_assoc($result)) {
                                    $query_c = "SELECT * FROM tb_kategori_barang WHERE parent_id=id_kat";
                                    $result_c = mysqli_query($con, $query_c);
                                    $data_c = mysqli_fetch_row($result_c);
                                    ?>
                                    <tr>
                                      <td><font color="<?php echo $warna?>"><?php echo $data['nama_kat'] ?></td>
                                        <td><?php echo $data_c['nama_kat'] ?></td>
                                        <td><?php echo $data['deskripsi']; ?></td>
                                        <td>
                                        <div class="btn-group">
                          						  <button type="button" class="btn btn-theme dropdown-toggle" data-toggle="dropdown">
                          						    Action <span class="caret"></span>
                          						  </button>
                          						  <ul class="dropdown-menu" role="menu">
                          						    <li><a href="./index.php?mod=<?php echo $mod?>&act=edit&id_kat=<?php echo $data['id_kat']?>&ref=<?php echo $_SESSION['user_id']?>">Edit</a></li>
                          						    <li><a href="modules/<?php echo $mod?>/proses.php?mod=<?php echo $mod?>&act=delete&id_kat=<?php echo $data['id_kat']?>&ref=<?php echo $_SESSION['user_id']?>" onclick="return tanya()">Hapus</a></li>

                          						  </ul>
                          						</div>

                                    <?php
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
<script language="javascript">
  function tanya() {
  if (confirm("Yakin Hapus Record Ini???")) {
  return true;
    }
    else {
    return false;
    }
  }
</script>
<?php
echo tutupfooter();
?>
