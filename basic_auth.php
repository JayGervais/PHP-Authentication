<?php
if ((!isset($_SERVER['PHP_AUTH_USER'])) && 
	(!isset($_SERVER['PHP_AUTH_PW'])) &&
	(substr($_SERVER['HTTP_AUTHORIZATION'], 0, 6) == 'Basic ')) 
		{
	list($_SERVER['PHP_AUTH_USER'], $_SERVER['PHP_AUTH_PW']) =
	explode(':', base64_decode(substr($_SERVER['HTTP_AUTHORIZATION'], 6)));
}

// replace this statement with database query or similar
if (($_SERVER['PHP_AUTH_USER'] != 'user') ||
	($_SERVER['PHP_AUTH_PW'] != 'pass')) {

	// visitor has not yet given details, or their
	// name and password combined are not correct
	header('WWW-Authenticate: Basic realm="Realm-Name"');
	header('HTTP/1.0 401 Unauthorized');
} else {
	?>
<!DOCTYPE html>
<html>
<head>
	<title>Secret Page</title>
</head>
<body>
<?php
echo '<h1>Here you go!</h1>
		<p>You found the secret page</p>';
}
?>
</body>
</html>