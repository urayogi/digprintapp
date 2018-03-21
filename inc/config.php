<?php
//set Waktu
date_default_timezone_set('Asia/Bangkok');
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

//set default url
$urlbase="http://localhost/digprintapp/";
$urlbase_admin="http://localhost/digprintapp/";
$adminthemepath = "".$urlbase."template/";
// Pathnye Filemanager Editor
$media_path = "media/";

/**
 * Namafile : config.php

 * ----------------------------*/

// Turn off all error reporting
error_reporting(0);
//error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
// Report all PHP errors
//error_reporting(E_ALL);

// name aplikasinye
define('app_name', 'DigPrintApp');
define('app_description', '');
define('app_author', 'blackb3ard');
?>
