<?php
session_start();
//ambil yang diperlukan
include_once 'inc/config.php';
include_once 'inc/func.template.php';

//tampilkan fungsi template --> bukahead('Judul halamannye')
echo  bukahead('Login Aplikasi');
echo  tutuphead();

if (isset($_POST['username'])){

  $username = stripslashes($_REQUEST['username']);
  $username = mysqli_real_escape_string($con,$username);
  $password = stripslashes($_REQUEST['password']);
  $password = mysqli_real_escape_string($con,$password);
  $pass = md5($_REQUEST['password']);
  $query = "SELECT * FROM admin_users WHERE username='$username'
and password='".md5($password)."'";
  $result = mysqli_query($con,$query) or die(mysql_error());
  $rows = mysqli_fetch_array($result, MYSQLI_ASSOC);
        if($rows['password']==$pass) {
      $level = $rows['group_id'];
      $_SESSION['level'] = $level;
      $_SESSION['username'] = $rows['username'];
      $first_name = $rows['first_name'];
      $last_name = $rows['last_name'];
      $_SESSION['name'] = "$first_name $last_name";
      $_SESSION['user_id'] = $rows['id'];
      $id = $rows['id'];
      //edit last login
      $sql = "update admin_users set last_login='$timeset' where id='$id'";
      $hasil = mysqli_query($con, $sql);
            // Redirect user to index.php
      header("location:index.php?mod=users&user_id=".$rows['id']."");
         }
         else {
  echo '
<div id="login-page">
  <div class="container">

      <form class="form-login" action="" method="post">
        <h2 class="form-login-heading">Masuk Aplikasi</h2>
        <div class="login-wrap">
            <input type="text" class="form-control" name="username" placeholder="Username" autofocus>
            <br>
            <input type="password" class="form-control" name="password" placeholder="Password">
            <br>
            <button class="btn btn-theme btn-block" href="index.html" type="submit"><i class="fa fa-lock"></i> Masuk</button>
            <br>
            <span>Username/password Salah.</span>
      </form>

  </div>
</div>
';
  }
  }
    else {
?>
<div id="login-page">
  <div class="container">

      <form class="form-login" action=""  method="post">
        <h2 class="form-login-heading">Masuk Aplikasi</h2>
        <div class="login-wrap">
            <input type="text" class="form-control" name="username" placeholder="Username" autofocus>
            <br>
            <input type="password" class="form-control" name="password" placeholder="Password">
            <br>
            <button class="btn btn-theme btn-block" href="index.html" type="submit"><i class="fa fa-lock"></i> Masuk</button>

      </form>

  </div>
</div>
<?php
//tutup koding login
  }
  ?>

  <!-- js placed at the end of the document so the pages load faster -->
  <script src="assets/js/jquery.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>

  <!--BACKSTRETCH-->
  <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
  <script type="text/javascript" src="assets/js/jquery.backstretch.min.js"></script>
  <script>
      $.backstretch("assets/img/login-bg.jpg", {speed: 500});
  </script>

  <?php
//tampilkan footer
echo footer();
?>
