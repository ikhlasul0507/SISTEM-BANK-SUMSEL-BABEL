<html>
<head>
<title>Sistem Informasi Arsip</title>
<html>
<head>
<title>Sistem Informasi Arsip Versi 2019</title>
</head>

<link rel="stylesheet" href="assets/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="assets/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>


</head>
<body bgcolor="lightblue" background="2.jpg">
	<div class="col-md-12" style="background-color: #a6db21">
<marquee>
<h1 align="center">
<font color="blue">
<b>SISTEM INFORMASI ARSIP</b><br>
<b>PT BPD SUMATERA SELATAN DAN BANGKA BELITUNG</b></font></h1></marquee><br>
Back: [<a href="home.php" class="badge badge-primary">home</a>]</div><div class="container" style="background-color: white">
<font color="black"><h1><p align="center">
DISPLAY DATA SURAT KELUAR</p></h1></font><hr><center>
	<!-- Cari dan print -->
	<div class="input-group col-md-11 ml-5">
		<form method="get" action="#">
		  <input type="text"  name="cari" class="form-control" placeholder="Masukan Perihal" aria-describedby="button-addon4">
		  <br>
		  <div class="input-group-append" id="button-addon4">
		    <button class="btn btn-outline-success" type="submit">Cari</button>
		</form>
		    <a href="print6.php" target="_blank" class="btn btn-outline-primary ml-2" type="button" >Print</a>
		  </div>
		</div>
	<!-- akhir cari dan print --><br>
<?php 
if(isset($_GET['cari'])){
	$cari = $_GET['cari'];
	echo "<b>Hasil pencarian : ".$cari."</b>";
}
?>

<?php
include "koneksi.php";

print("
<table border=1>
<tr bgcolor=white class='table'>
<td>No</td>
<td>No. Surat</td>
<td>Tanggal Kirim</td>
<td>Perihal</td>
<td>Tujuan</td>
<td>Penerima</td>
<td>Tanggal Kirim</td>
<td colspan='2'>Aksi</td>
</tr>");
if(isset($_GET['cari'])){
		$cari = $_GET['cari'];

$result=$sia_connect->query("select * from tblsrtklr where hal2 like '%".$cari."%'");
if($result->num_rows > 0)
{
$no=1;
while($tblvar=$result->fetch_assoc())
{
print("
<tr>
<td>$no</td>
<td>$tblvar[nosuratklr]</td>
<td>$tblvar[tglsuratklr]</td>
<td>$tblvar[hal2]</td>
<td>$tblvar[tujuan]</td>
<td>$tblvar[penerima2]</td>
<td>$tblvar[tglkirim]</td>
<td><a href=menu61.php?nosuratklr=$tblvar[nosuratklr] class='badge badge-primary'>EDIT</a></td>
<td><a href=menu62.php?nosuratklr=$tblvar[nosuratklr] class='badge badge-danger'>DROP</a></td>
</tr>");
$no++;
}
}
else
{
echo "<tr><td colspan='5'>No Data Avaliable</td></tr>";
}
print("
</table><br>");}else{
	$result=$sia_connect->query("select * from tblsrtklr order by nosuratklr");
if($result->num_rows > 0)
{
$no=1;
while($tblvar=$result->fetch_assoc())
{
print("
<tr>
<td>$no</td>
<td>$tblvar[nosuratklr]</td>
<td>$tblvar[tglsuratklr]</td>
<td>$tblvar[hal2]</td>
<td>$tblvar[tujuan]</td>
<td>$tblvar[penerima2]</td>
<td>$tblvar[tglkirim]</td>
<td><a href=menu61.php?nosuratklr=$tblvar[nosuratklr] class='badge badge-primary'>EDIT</a></td>
<td><a href=menu62.php?nosuratklr=$tblvar[nosuratklr] class='badge badge-danger'>DROP</a></td>
</tr>");
$no++;
}
}
else
{
echo "<tr><td colspan='5'>No Data Avaliable</td></tr>";
}
print("
</table><br>");
}
?>
</body>
</html>