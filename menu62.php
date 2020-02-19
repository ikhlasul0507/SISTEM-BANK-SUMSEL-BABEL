<?php

$nosuratklr=$_GET['nosuratklr'];
include "koneksi.php";
$cek=$sia_connect->query("delete from tblsrtklr where nosuratklr='$nosuratklr'");
$sia_connect->close();
if($cek===TRUE)
{
header("location:menu6.php");
}
else
{
die("Gagal menghapus data. Klik tombol Back");
}
?>