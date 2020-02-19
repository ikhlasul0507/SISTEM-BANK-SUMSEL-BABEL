<?php

$nomemomsk=$_POST['nomemomsk'];
$tglmemomsk=$_POST['tglmemomsk'];
$hal2=$_POST['hal2'];
$pgrm2=$_POST['pgrm2'];
$penerima2=$_POST['penerima2'];
$tglterima2=$_POST['tglterima2'];

include "koneksi.php";

$csql="
update tblmemomsk set
tglmemomsk='$tglmemomsk',
hal2='$hal2',pgrm2='$pgrm2',penerima2='$penerima2',
tglterima2='$tglterima2'
where nomemomsk='$nomemomsk'
";
$cek=$sia_connect->query($csql);
$sia_connect->close();
if($cek===TRUE)
{
header("location:menu7.php");
}
else
{
die("UPDATE DATA GAGAL. Klik tombol Back di browser anda");
}
?>