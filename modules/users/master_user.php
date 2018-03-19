<?php
echo bukahead('Manajemen Pengguna');
echo tutuphead();
include_once 'inc/header.php';
include_once 'inc/sidebar.php';
?>

<section id="main-content">
    <section class="wrapper">
      <h3><i class="fa fa-angle-right"></i>Master Data Pengguna</h3>
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
                <h4><a href="./?mod=<?php echo $mod?>&act=baru"><button type="button" class="btn btn-primary btn-lg">Tambah Pengguna Baru</button></a></h4>


                    <table class="table table-bordered table-striped table-condensed data">
                        <thead>
                            <tr>
                                <th data-field="Nama Awal" data-sortable="true">Nama Awal</th>
                                <th data-field="Nama Akhir"  data-sortable="true">Nama Akhir</th>
                                <th data-field="Username" data-sortable="true">Username</th>
                                <th data-field="Email" data-sortable="true">Email</th>
                                <th data-field="Level Pengguna" data-sortable="false">Level Pengguna</th>
                                <th data-field="last login" data-sortable="false">Login Terakhir</th>
                                <th data-field="Tindakan" data-sortable="false">Tindakan</th>


                            </tr>
                            </thead>
                                <tbody>
                                 <?php
                                    $query = "SELECT * FROM admin_users, admin_groups WHERE admin_groups.group_id = admin_users.group_id";
                                    $result = mysqli_query($con, $query);
                                    while ($data = mysqli_fetch_assoc($result)) {
                                    ?>
                                    <tr>
                                        <td><font color="<?php echo $warna?>"><?php echo $data['first_name'] ?></td>
                                        <td><?php echo $data['last_name'] ?></td>
                                        <td><?php echo $data['username']; ?></td>
                                        <td><?php echo $data['email'] ?></td>
                                        <td><?php echo $data['name'] ?></td>
                                        <td><?php echo $data['last_login'] ?></td>
                                        <td>
                                        <div class="btn-group">
                          						  <button type="button" class="btn btn-theme dropdown-toggle" data-toggle="dropdown">
                          						    Action <span class="caret"></span>
                          						  </button>
                          						  <ul class="dropdown-menu" role="menu">
                          						    <li><a href="./index.php?mod=<?php echo $mod?>&act=edit&id_user=<?php echo $data['id_user']?>&ref=<?php echo $_SESSION['user_id']?>">Edit</a></li>
                          						    <li><a href="modules/<?php echo $mod?>/proses.php?mod=<?php echo $mod?>&act=delete&id_user=<?php echo $data['id_user']?>&ref=<?php echo $_SESSION['user_id']?>" onclick="return tanya()">Hapus</a></li>

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
