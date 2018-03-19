<?php
//lempar user ke habitatnye
if (empty($act) and $_SESSION['level']==1) {
	include_once 'kategori_digital_anak.php';
}
else if ($_SESSION['level']==3 OR $_SESSION['level']==2 OR $_SESSION['level']==4) {
	include_once 'profile.php';
}

//panggil action nye
else if ($act=="input") {
	include_once 'input.php';
}
else if ($act=="edit") {
	include_once 'edit.php';
}
else if ($act=="detail") {
	include_once 'detail.php';
}
else if ($act=="newalat") {
	include_once 'newalat.php';
}
?>
