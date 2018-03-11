<?php
//set Waktu
date_default_timezone_set('Asia/Jakarta');
$ts = time();
$date = new DateTime("@$ts");
$timeset = $date->format('Y-m-d H:i:s');

//Config Database Mysqli
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'digprintapp';
// Koneksikan db nye
$db = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

$urlbase="http://localhost/digprintapp/";
$urlbase_admin="http://localhost/digprintapp/";
$adminthemepath = "".$urlbase."template/";
// Pathnye Filemanager Editor
$media_path = "media/";

/**
 * Namafile : config.php
// Confignye Judul
$info_query = mysql_query("select * from info");
while ($rowinfo=mysql_fetch_array($info_query)) {
$about = $rowinfo['about'];
$description = $rowinfo['description'];
$app = $rowinfo['program'];
$version = $rowinfo['version'];
}
 * ----------------------------*/

// Turn off all error reporting
error_reporting(0);
//error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
// Report all PHP errors
//error_reporting(E_ALL);

define('app_name', 'DigPrintApp');
define('app_description', '');
define('app_author', 'blackb3ard');
?>
