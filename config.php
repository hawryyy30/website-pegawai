<?php 
$host = "sql311.epizy.com";
$user = "epiz_33190583";
$pass = "rMQmWVbc3h4k";
$db = "epiz_33190583_pegawai";

$con = mysqli_connect($host, $user, $pass, $db);

if (mysqli_connect_errno()){
    echo 'Koneksi Gagal: '.mysqli_connect_error();
}

?>