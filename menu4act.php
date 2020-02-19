<?php
$nomemoklr=$_POST['nomemoklr'];
$tglmemoklr=$_POST['tglmemoklr'];
$hal3=$_POST['hal3'];
$tujuan2=$_POST['tujuan2'];
$penerima3=$_POST['penerima3'];
$tglkirim2=$_POST['tglkirim2'];

if(empty($nomemoklr))
{
die("Kode tidak Valid, klik tombol back");
}
include "koneksi.php";
$csql="
insert into tblmemoklr
(nomemoklr,tglmemoklr,hal3,tujuan2,penerima3,
tglkirim2) values
('$nomemoklr','$tglmemoklr','$hal3','$tujuan2','$penerima3',
'$tglkirim2')";
if($sia_connect->query($csql) === TRUE)
{
print("
Terima Kasih Data Sebagai Berikut:<br>
No.Surat: <b>$nomemoklr</b><br>
Tanggal Surat: <b>$tglmemoklr</b><br>
Perihal: <b>$hal3</b><br>
Tujuan: <b>$tujuan2</b><br>
Penerima: <b>$penerima3</b><br>
Tanggal Kirim: <b>$tglkirim2</b><br>
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