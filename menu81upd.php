<?php

$nomemoklr=$_POST['nomemoklr'];
$tglmemoklr=$_POST['tglmemoklr'];
$hal3=$_POST['hal3'];
$tujuan2=$_POST['tujuan2'];
$penerima3=$_POST['penerima3'];
$tglkirim2=$_POST['tglkirim2'];

include "koneksi.php";

$csql="
update tblmemoklr set
tglmemoklr='$tglmemoklr',
hal3='$hal3',tujuan2='$tujuan2',penerima3='$penerima3',
tglkirim2='$tglkirim2'
where nomemoklr='$nomemoklr'
";
$cek=$sia_connect->query($csql);
$sia_connect->close();
if($cek===TRUE)
{
header("location:menu8.php");
}
else
{
die("UPDATE DATA GAGAL. Klik tombol Back di browser anda");
}
?>