<?php
require_once 'config/parameters.php';
require 'connection.php';

if(isset($_GET["id"])){
	$idU = $_GET["id"];
	$sql = "SELECT * FROM users WHERE id = $idU";
}else if(isset($_GET["name"])){
	$idN = $_GET["name"];
	$sql = "SELECT * FROM users WHERE nameu = '$idN'";
}else{
	$sql = "SELECT * FROM users";
}

$result = mysqli_query($connection, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	
</head>
<body>
	
	<h1 style="text-align: center;" class="m-5">User's List</h1>
<?php

if($connection){
	?>
	<script>console.log("It's alive")</script>
	<?php
}else{
	?>
	<script>console.log("Something it's wrong")</script>
	<?php
}

?>

<div class="container">
	
		<div class="ptable">
			<table class="table table-striped table-hover">
	<tr class="trh">
		<th>ID</th>
		<th>Name</th>
		<th>Last Name</th>
		<th>Email</th>
		<th>Mobile</th>
		<th>Birth</th>
		<th></th>
		<th></th>
	</tr>
	<?php
	while($renglon = mysqli_fetch_assoc($result)){
	?>
	<tr>
		<td data-label="ID">
			<?php
				echo $renglon["id"];
			?>
		</td>
		<td data-label="Name">
			<?php 
			echo $renglon["nameu"];
			?>
		</td>
		<td data-label="Last Name">
			<?php 
			echo $renglon["lnameu"];
			?>
		</td>
		<td data-label="Email">
			<?php 
			echo $renglon["email"];
			?>
		</td>
		<td data-label="Mobile">
			<?php 
			echo $renglon["mobile"];
			?>
		</td>
		<td data-label="Birth">
			<?php 
			echo $renglon["birth"];
			?>
		</td>
		<td>
			<button onclick="location.href='editor.php?id=<?php echo $renglon["id"];?>'" class=" btne b"><img src="img/edit.png" width="25" height="25"></button>
		</td>
		<td>
			<button onclick="location.href='choice.php?id=<?php echo $renglon["id"];?>'" class="btne r"><img src="img/delete.png" width="25" height="25"></button>


		<!-- <script>
		function validateDeletion(){
			var validate = prompt('Do you want to delete the user? \nType Yes to delete it or No to continue');

			if(validate == null || validate == "" || validate == "N" || validate == "n" || validate == "No" || validate == "NO" || validate == "no"){
				alert("Continue");
			}else if(validate == "Y" || validate == "y" || validate == "Yes" || validate == "YES" || validate == "yes"){
			}


		}
		</script> -->


		</td>
	</tr>
	<?php
		}
	?>
			</table>
		</div>

		<div class="nuser">
			<h2>NEW USER</h2>
			<button onclick="location.href='create.php'" class="cbutton">Create New User</button>
		</div>
	
</div>
</body>
</html>