<?php
	
	function authenticate(){
		// if(empty($_SERVER['PHP_AUTH_USER']))
		if($_SERVER['PHP_AUTH_USER'] !== 'admin' && $_SERVER['PHP_AUTH_PW'] !== 'admin')
		{
			header("WWW-Authenticate: Basic realm=\"zohobook.co.in\"");
			header("HTTP\ 1.0 401 Unauthorized");
			echo "There was an error";
			exit;
		}
	}
	authenticate();

?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<p>Hello world</p>

</body>
</html>