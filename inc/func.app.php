<?php
//deklarasi var
define(username, $_SESSION['username']);
//fungsinye
function thumbprofile ($path=username) {
	$kode = './lib/thumb.php?src=../assets/img/profile/'.$path.'.jpg&size=100x60';
	return $kode;
}

?>
