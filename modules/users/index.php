<?php
//lempar user ke habitatnye
if (empty($act) and $_SESSION['level']==1) {
	include_once 'default.php';
}
else if (empty($act) and $_SESSION['level']==3) {
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
