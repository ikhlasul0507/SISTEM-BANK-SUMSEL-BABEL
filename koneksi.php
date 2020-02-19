	<?php
	$localhost = "localhost";
	$username = "root";
	$psw = "";
	$db = "dbarsip";
	$sia_connect = new mysqli($localhost,$username,$psw,$db);
	if($sia_connect->connect_error)
	{
	die("Connection failed : " . $sia_connect->connect_error);
	}
	?>