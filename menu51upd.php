<?php

$nosuratmsk=$_POST['nosuratmsk'];
$tglsuratmsk=$_POST['tglsuratmsk'];
$hal=$_POST['hal'];
$pgrm=$_POST['pgrm'];
$penerima=$_POST['penerima'];
$tglterima=$_POST['tglterima'];

include "koneksi.php";

$csql="
update tblsrtmsk set
tglsuratmsk='$tglsuratmsk',
hal='$hal',pgrm='$pgrm',penerima='$penerima',
tglterima='$tglterima'
where nosuratmsk='$nosuratmsk'
";
$cek=$sia_connect->query($csql);
$sia_connect->close();
if($cek===TRUE)
{
header("location:menu5.php");
}
else
{
die("UPDATE DATA GAGAL. Klik tombol Back di browser anda");
}
?>