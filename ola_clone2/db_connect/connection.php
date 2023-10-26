<?php  
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "ola_database";
	
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	
	if($conn){
		echo "print";
	}
	else{
		echo "error";
	}
?>