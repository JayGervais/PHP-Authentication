
<!DOCTYPE html>
<html>
<head>
	<title>Secret Page</title>
</head>
<body>
<?php

if ((!isset($_POST['name'])) || (!isset($_POST['password']))) {
	// visitor needs to enter name and password

?>
<h1>Please log in</h1>
<p>This page is secret</p>
<form method="post" action="authentication.php">
	<p><label for="name">Username:</label>
		<input type="text" name="name" id="name" size="15" /></p>
	<p><label for="pasword">Password:</label>
		<input type="password" name="password" id="password" size="15" /></p>
		<button type="submit" name="submit">Log In</button>
	</form>
<?php
} else if(($_POST['name']=='user') && ($_POST['password']=='pass')) {
	// visitor names and password are correct
	echo '<h1>Congradulations!</h1>
	<p>Now you get to see the secret page.</p>';
} else {
	// password not correct
	echo '<h1>You are wrong!</h1><p>Fail.</p>';
}


?>
</body>
</html>