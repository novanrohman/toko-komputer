<?php
$host = "localhost"; //sesuaikan dengan host anda
$user = "root"; //username untuk akses database anda
$pass = ""; //password untuk akses database anda
$db = "toko_komputer"; //nama database anda

$mysql = mysql_connect($host, $user, $pass) or die ("connection filed!!"); //untuk koneksi ke host
mysql_select_db($db, $mysql) or die ("connection to database filed!!"); //untuk koneksi ke database

?>