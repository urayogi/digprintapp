<?php
//lempar user ke habitatnye
if (empty($act) and $_SESSION['level']==1) {
	include_once 'master_user.php';
}
else if ($_SESSION['level']==3 OR $_SESSION['level']==2 OR $_SESSION['level']==4) {
	include_once 'profile.php';
}

//panggil action nye
else if ($act=="userbaru") {
	include_once 'userbaru.php';
}
else if ($act=="edituser") {
	include_once 'edituser.php';
}
else if ($act=="detail") {
	include_once 'detail.php';
}
else if ($act=="newalat") {
	include_once 'newalat.php';
}
?>
