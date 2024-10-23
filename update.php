<?php

require 'connection.php';

	$id=$_POST["idu"];
	$name=$_POST["nameu"];
	$lname=$_POST["lnameu"];
	$email=$_POST["emailu"];
	$mobile=$_POST["mobu"];
	$birth=$_POST["birthu"];

	$sql = "UPDATE users SET nameu='$name', lnameu='$lname', email='$email', mobile='$mobile', birth='$birth' WHERE id='$id'";

	$result=mysqli_query($connection,$sql);

	if($result){
		echo '<script>window.setTimeout( function () {
   				alert("Updated User");
   				window.location.href = "index.php";
				}, 2000)</script>';
	}else{
		echo '<script>window.setTimeout( function () {
   				alert("NO Updated User");
   				window.location.href = "index.php";
				}, 2000)</script>';
	}

	mysqli_close($connection);
?>