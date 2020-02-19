<?php
$nomemomsk=$_POST['nomemomsk'];
$tglmemomsk=$_POST['tglmemomsk'];
$hal2=$_POST['hal2'];
$pgrm2=$_POST['pgrm2'];
$penerima2=$_POST['penerima2'];
$tglterima2=$_POST['tglterima2'];

if(empty($nomemomsk))
{
die("Kode tidak Valid, klik tombol back");
}
include "koneksi.php";
$csql="
insert into tblmemomsk
(nomemomsk,tglmemomsk,hal2,pgrm2,penerima2,
tglterima2) values
('$nomemomsk','$tglmemomsk','$hal2','$pgrm2','$penerima2',
'$tglterima2')";
if($sia_connect->query($csql) === TRUE)
{
print("
Terima Kasih Data Sebagai Berikut:<br>
No.Memo: <b>$nomemomsk</b><br>
Tanggal Memo: <b>$tglmemomsk</b><br>
Perihal: <b>$hal2</b><br>
Pengirim: <b>$pgrm2</b><br>
Penerima: <b>$penerima2</b><br>
Tanggal Terima: <b>$tglterima2</b><br>
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