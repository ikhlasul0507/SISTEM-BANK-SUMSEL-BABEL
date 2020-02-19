<?php
include "koneksi.php";
$nosuratmsk=$_GET['nosuratmsk'];
$query=$sia_connect->query("select * from tblsrtmsk where nosuratmsk='$nosuratmsk'");
$tblvar=$query->fetch_assoc();
?>
<html>
<head>
<title>Sistem Informasi Arsip</title>
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
Back: [<a href="home.php" class="badge badge-primary">home</a>] </div>
<div class="container" style="background-color: white">
<font color="black"><h2><p align="center">
EDIT DATA SURAT MASUK</p></h2></font><br>
<form name="menu51" method="post" action="menu51upd.php">
<input type="hidden" name="nosuratmsk" value="<?php echo $nosuratmsk;?>"/>
<?php
print("
<table class='table'>
<tr>
<td>No. Surat</td>
<td>:</td>
<td><b>$nosuratmsk</b></td>
</tr>
<tr>
<td>Tanggal Surat</td>
<td>:</td>
<td><input type=text name=tglsuratmsk maxlength=10
value='$tblvar[tglsuratmsk]' class='form-control'></td>
</tr>
<tr>
<td>Perihal</td>
<td>:</td>
<td><input type=text name=hal maxlength=150
value='$tblvar[hal]' class='form-control'></td>
</tr>
<tr>
<td>Pengirim</td>
<td>:</td>
<td><input type=text name=pgrm maxlength=75
value='$tblvar[pgrm]' class='form-control'></td>
</tr>
<tr>
<td>Penerima</td>
<td>:</td>
<td><input type=text name=penerima maxlength=30
value='$tblvar[penerima]' class='form-control'></td>
</tr>
<tr>
<td>Tanggal Terima</td>
<td>:</td>
<td><input type=text name=tglterima maxlength=10
value='$tblvar[tglterima]' class='form-control'></td>
</tr>
<tr>
<td></td>
<td></td>
<td><input type=submit name=tblupdate value=UPDATE class='btn btn-primary'></td>
</tr>
</table>");
?>
</body>
</html>