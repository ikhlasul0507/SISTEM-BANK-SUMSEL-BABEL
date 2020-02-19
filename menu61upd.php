<?php

$nosuratklr=$_POST['nosuratklr'];
$tglsuratklr=$_POST['tglsuratklr'];
$hal2=$_POST['hal2'];
$tujuan=$_POST['tujuan'];
$penerima2=$_POST['penerima2'];
$tglkirim=$_POST['tglkirim'];

include "koneksi.php";

$csql="
update tblsrtklr set
tglsuratklr='$tglsuratklr',
hal2='$hal2',tujuan='$tujuan',penerima2='$penerima2',
tglkirim='$tglkirim'
where nosuratklr='$nosuratklr'
";
$cek=$sia_connect->query($csql);
$sia_connect->close();
if($cek===TRUE)
{
header("location:menu6.php");
}
else
{
die("UPDATE DATA GAGAL. Klik tombol Back di browser anda");
}
?>