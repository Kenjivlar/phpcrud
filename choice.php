<?php  
require 'config/parameters.php';

require 'connection.php';
$idU = $_GET["id"];
$sql = "SELECT id, nameu, lnameu FROM users WHERE id = $idU";
$result = mysqli_query($connection, $sql);


?>
<h1 style="text-align: center;" class="m-5">Edit User</h1>
<div class="container">
	<div class="cdelete">
		<form action="delete.php?id=<?php echo $idU; ?>" method="POST">
			<label>Do you really want to delete this user? 
				<?php
					while($renglon = mysqli_fetch_assoc($result)){
						?>
						<label>Id: <?php echo $renglon["id"];?></label>
						<label>Name: <?php echo $renglon["nameu"];?></label>
						<label>Last Name: <?php echo $renglon["lnameu"];?></label>
						
						
						<?php
					}

					mysqli_close($connection);
				?>
				<br>
			<label class="warning">Type Yes to delete it or No to return Home</label>
			<input type="text" name="resp">
			<button type="submit" class="bdelete">Send</button>
		</form>
	</div>
</div>
