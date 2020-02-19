<?php
$nosuratklr=$_POST['nosuratklr'];
$tglsuratklr=$_POST['tglsuratklr'];
$hal2=$_POST['hal2'];
$tujuan=$_POST['tujuan'];
$penerima2=$_POST['penerima2'];
$tglkirim=$_POST['tglkirim'];

if(empty($nosuratklr))
{
die("Kode tidak Valid, klik tombol back");
}
include "koneksi.php";
$csql="
insert into tblsrtklr
(nosuratklr,tglsuratklr,hal2,tujuan,penerima2,
tglkirim) values
('$nosuratklr','$tglsuratklr','$hal2','$tujuan','$penerima2',
'$tglkirim')";
if($sia_connect->query($csql) === TRUE)
{
print("
Terima Kasih Data Sebagai Berikut:<br>
No.Surat: <b>$nosuratklr</b><br>
Tanggal Surat: <b>$tglsuratklr</b><br>
Perihal: <b>$hal2</b><br>
Tujuan: <b>$tujuan</b><br>
Penerima: <b>$penerima2</b><br>
Tanggal Kirim: <b>$tglkirim</b><br>
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