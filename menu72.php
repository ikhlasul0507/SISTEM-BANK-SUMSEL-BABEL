<?php

$nomemomsk=$_GET['nomemomsk'];
include "koneksi.php";
$cek=$sia_connect->query("delete from tblmemomsk where nomemomsk='$nomemomsk'");
$sia_connect->close();
if($cek===TRUE)
{
header("location:menu7.php");
}
else
{
die("Gagal menghapus data. Klik tombol Back");
}
?>