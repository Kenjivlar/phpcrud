<?php

require_once 'config/parameters.php';

?>
<h1 style="text-align: center;" class="m-5">New User</h1>
<div class="container">

	<div class="cuser">
		<form action="insertion.php" method="POST">
	<label for="">Name:</label>
	<input name="nameu" type="text" required>

	<label for="">Last Name:</label>
	<input name="lnameu" type="text" required>

	<label for="">Email:</label>
	<input name="emailu" type="email" required>

	<label for="">Mobile:</label>
	<input name="mobu" type="number">

	<label for="">Birth:</label>
	<input name="birthu" type="date" required>

	<button type="submit">Create</button>
</form>
<button onclick="location.href='index.php'" class="bhome"><img src="img/home.png" width="25" height="25"></button>
	</div>

</div>
