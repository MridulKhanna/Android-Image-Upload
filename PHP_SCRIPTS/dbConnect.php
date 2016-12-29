<?php
	$host = "mysql.hostinger.in";
	$db_user = "user";
	$db_password = "password";
	$db_name = "database";
	
	$con = mysqli_connect($host,$db_user,$db_password,$db_name);
        if($con)
            echo "connection success";
        else
            echo "connection error";
?>
