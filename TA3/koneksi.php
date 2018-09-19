<?php 
	$host = "localhost";
	$username = "root";
	$password = "";
	$db = "db_TA3";
	try{
		$pdo = new PDO("mysql:host={$host}; dbname={$db};", $username,$password);
		$pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $e){
		print "Koneksi gagal" . $e -> getMessage() . "<br>";
		die();
	}
 ?>