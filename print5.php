<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="assets/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
</head>
<body>
	<font color="black"><h1><p align="center">
DISPLAY DATA SURAT MASUK</p></h1></font><hr><center>

	
<?php
include "koneksi.php";

print("
<table border=1>
<tr bgcolor=white class='table'>
<td>No</td>
<td>No. Surat</td>
<td>Tanggal Terima</td>
<td>Perihal</td>
<td>Pengirim</td>
<td>Penerima</td>
<td>Tanggal Terima</td>

</tr>");
$result=$sia_connect->query("select * from tblsrtmsk order by nosuratmsk");
if($result->num_rows > 0)
{
$no=1;
while($tblvar=$result->fetch_assoc())
{
print("
<tr>
<td>$no</td>
<td>$tblvar[nosuratmsk]</td>
<td>$tblvar[tglsuratmsk]</td>
<td>$tblvar[hal]</td>
<td>$tblvar[pgrm]</td>
<td>$tblvar[penerima]</td>
<td>$tblvar[tglterima]</td>

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
?>

<script>
		window.print();
</script>

</body>
</html>