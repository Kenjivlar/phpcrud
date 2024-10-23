<?php
require 'connection.php';
require_once 'config/parameters.php';

$idU = $_GET["id"];
$sql = "SELECT * FROM users WHERE id = $idU";
$result = mysqli_query($connection, $sql);

?>
<h1 style="text-align: center;" class="m-5">Edit User</h1>
<div class="container">
	<div class="tedit">
<form action="update.php" method="POST">
	
	<table class="tediti">
		<?php
		if($result){
			while($renglon=mysqli_fetch_assoc($result)){
		?>
		<tr>
			<td>ID</td>
			<td><input type="hidden" name="idu" value="<?php echo $renglon["id"] ?>">
				<?php
				echo $renglon["id"];
				?></td>
		</tr>
		<tr>
			<td>Name</td>
			<td><input name="nameu" type="text" value="<?php echo $renglon["nameu"]?>"></td>
		</tr>
		<tr>
			<td>Last Name</td>
			<td><input name="lnameu" type="text" value="<?php echo $renglon["lnameu"]?>"></td>
		</tr>
		<tr>
			<td>Email</td>
			<td><input name="emailu" type="email" value="<?php echo $renglon["email"]?>"></td>
		</tr>
		<tr>
			<td>Mobile</td>
			<td><input name="mobu" type="number" value="<?php echo $renglon["mobile"]?>"></td>
		</tr>
		<tr>
			<td>Birth</td>
			<td><input name="birthu" type="date" value="<?php echo $renglon["birth"]?>"></td>
		</tr>
		<?php
			}
		}
		?>
	</table>

	<button type="submit" class="bedit">Update</button>
	
</form>
<button onclick="location.href='index.php'" class="bedit"><img src="img/home.png" width="25" height="25"></button>
</div>

</div>