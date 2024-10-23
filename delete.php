<?php

require 'connection.php';
$idD = $_GET["id"];
$choice = $_POST["resp"];

if($choice == "Y" || $choice == "y" || $choice == "Yes" || $choice == "YES" || $choice == "yes"){
	 $sql = "DELETE FROM users WHERE id = $idD";
	 $result = mysqli_query($connection, $sql);
	 echo '<script>
   				alert("User Deleted");
   				window.location.href = "index.php";
				</script>';
				mysqli_close($connection); 
}else{
	mysqli_close($connection); 
	header("Location: index.php");

}



	

?>