<?php

$nomemoklr=$_GET['nomemoklr'];
include "koneksi.php";
$cek=$sia_connect->query("delete from tblmemoklr where nomemoklr='$nomemoklr'");
$sia_connect->close();
if($cek===TRUE)
{
header("location:menu8.php");
}
else
{
die("Gagal menghapus data. Klik tombol Back");
}
?>