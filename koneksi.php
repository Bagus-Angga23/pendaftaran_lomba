<?php
$server = "localhost";
$user = "root";
$pass = "";
$db = "webservicephp";

$koneksi = mysqli_connect($server,$user,$pass,$db);
mysqli_set_charset($koneksi,'utf8');
if(mysqli_connect_errno()){
	echo 'Gagal melakukan koneksi ke Database : '.mysqli_connect_error();
}else{
}
?>