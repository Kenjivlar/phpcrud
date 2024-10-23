<?php

require 'connection.php';

$name = $_POST["nameu"];
$lname = $_POST["lnameu"];
$emailu = $_POST["emailu"];
$mob = $_POST["mobu"];
$bir = $_POST["birthu"];

$sql = "INSERT INTO users (id, nameu, lnameu, email, mobile, birth, registertime) VALUES('', '$name', '$lname', '$emailu', '$mob', '$bir', CURRENT_TIMESTAMP)";

$result = mysqli_query($connection, $sql);

if($result){
		echo '<script>window.setTimeout( function () {
   				alert("User Added");
   				window.location.href = "index.php";
				}, 2000);</script>';
	}else{
		echo '<script>window.setTimeout( function () {
   				alert("User NO Added");
   				window.location.href = "index.php";
				}, 2000);</script>';
	}

mysqli_close($connection);
?>