<?php
$nosuratmsk=$_POST['nosuratmsk'];
$tglsuratmsk=$_POST['tglsuratmsk'];
$hal=$_POST['hal'];
$pgrm=$_POST['pgrm'];
$penerima=$_POST['penerima'];
$tglterima=$_POST['tglterima'];

if(empty($nosuratmsk))
{
die("Kode tidak Valid, klik tombol back");
}
include "koneksi.php";
$csql="
insert into tblsrtmsk
(nosuratmsk,tglsuratmsk,hal,pgrm,penerima,
tglterima) values
('$nosuratmsk','$tglsuratmsk','$hal','$pgrm','$penerima',
'$tglterima')";
if($sia_connect->query($csql) === TRUE)
{
print("
Terima Kasih Data Sebagai Berikut:<br>
No.Surat: <b>$nosuratmsk</b><br>
Tanggal Surat: <b>$tglsuratmsk</b><br>
Perihal: <b>$hal</b><br>
Pengirim: <b>$pgrm</b><br>
Penerima: <b>$penerima</b><br>
Tanggal Terima: <b>$tglterima</b><br>
Telah berhasil disimpan.<br>
Isi Data lagi [<a href=menu1.php>Ya</a>] [
<a href=home.php>Tidak</a>]");
}
else
{
echo "Error : " . $csql . "<br>" . $sia_connect->connect_error;
}
//menutup koneksi ke database
$sia_connect->close();
?>