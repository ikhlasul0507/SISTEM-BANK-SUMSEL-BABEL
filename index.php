<html>
<head>
<title>Sistem Informasi Arsip</title>

<link rel="stylesheet" href="assets/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="assets/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

</head>
<body bgcolor="white">
<marquee>
<h1 align="enter"><b>
<font color="#000000">
SELAMAT DATANG DI SISTEM INFORMASI ARSIP<br>
PT. BANK PEMBANGUNAN DAERAH SUMATERA SELATAN DAN BANGKA BELITUNG<br>
</font></b></h1></marquee><br>
<p align="center">
<img src="images.png"/></p>
    <form method="post">
<h1 align="center">
    <center>
    <div class="container">
        <div class="col-md-6">
        <table class="table">
            <tr>
               
               
                <td><input class="form form-control" type="text" name="username" placeholder="Username" /></td>
		</h1>
            </tr>
            <tr>
                
              
                <td><input class="form form-control" type="password" name="password" placeholder="Password" /></td>
            </tr>
            <tr>
                
                <td><input class="btn btn-danger form-control" type="submit" name="login" value="Login" /></td>
		
            </tr>
        </table>
        </div>
    </div>
</h1>
    </form>
</body>
<?php
session_start();
$_SESSION["username"]="BSB";
$_SESSION["password"]="12345";
if (isset($_POST["login"])){
    if ($_POST["username"]=="BSB" && $_POST["password"]=="12345"){
        header("location:home.php");
    }else{
        echo "Maaf Username Atau Password Salah !";
    }
}
?>
</head>
</html>