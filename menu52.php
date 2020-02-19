<?php

$nosuratmsk=$_GET['nosuratmsk'];
include "koneksi.php";
$cek=$sia_connect->query("delete from tblsrtmsk where nosuratmsk='$nosuratmsk'");
$sia_connect->close();
if($cek===TRUE)
{
header("location:menu5.php");
}
else
{
die("Gagal menghapus data. Klik tombol Back");
}
?>