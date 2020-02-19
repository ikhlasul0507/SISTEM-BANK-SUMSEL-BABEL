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
<h1 align="left">
<font color="blue">
<b>SISTEM INFORMASI ARSIP</b><br>
<b>PT. Bank Pembangunan Daerah Sumatera Selatan dan Bangka Belitung</b></font></h1></marquee><br>
Back: [<a href="home.php" class="badge badge-primary">home</a>] </div>
<div class="container" style="background-color: white">
<h2><b><p align="center"><font color="black"><u>
INPUT DATA SURAT MASUK</u></font></p></b></h2><center>
<form name="frmmenu1"
method="post"
action="menu1act.php">
<div class="col-md-10">
<p align="center">
<table class="table">
<h2>
<tr>
<td>No.Surat</td>
<td>:</td>
<td><input type="text" name="nosuratmsk" maxlength="50" class="form-control" placeholder="No Surat Masuk"></td>
</tr>
<tr>
<td>Tanggal Surat</td>
<td>:</td>
<td><input type="text" name="tglsuratmsk" maxlength="10" class="form-control" placeholder="Tanggal Surat Masuk" ></td>
</tr>
<tr>
<td>Perihal</td>
<td>:</td>
<td><input type="text" name="hal" maxlength="150" class="form-control" placeholder="Perihal"></td>
</tr>
<tr>
<td>Pengirim</td>
<td>:</td>
<td><input type="text" name="pgrm" maxlength="75" class="form-control" placeholder="Pengirim"></td>
</tr>
<tr>
<td>Penerima</td>
<td>:</td>
<td><input type="text" name="penerima" maxlength="30" class="form-control" placeholder="Penerima"></td>
</tr>
<tr>
<td>Tanggal Terima</td>
<td>:</td>
<td><input type="text" name="tglterima" maxlength="10" class="form-control" placeholder="Tanggal Terima"></td>
</tr>
<td></td>
<td></td>
<td><input type="submit" name="tblsimpan" value="SIMPAN" class="btn btn-primary"></td>
</tr>
</h2>
</table>
</p>
</div>
</form>
</div>
</body>
</html>