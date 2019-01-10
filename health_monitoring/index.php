<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>status</title>
</head>
<body>
	<h2 style="color:blue;text-align: center;padding-top: 50px;padding-bottom: 50px;">Temperature and Heart sensor</h2>
	
	<table border="0" align="center" width="400px" style="background-color:silver;border-radius: 20px">
	<form method="post" action="temphmdt.php">
		<!-- display validation errors here -->
		<!-- <?php include('errors.php');   ?>  -->
		<tr><td style="padding-top: 20px;padding-left: 50px;padding-bottom: 20px">tamperature</td>
			<td><input type="text" name="temperature" value="<?php echo $temperature; ?>"></td></tr>
		
		<tr><td style="padding-top: 15px;padding-left: 50px;padding-bottom: 20px">
			Heartbeat</td>
			<td><input type="text" name="heartbeat" value="<?php echo $heartbeat; ?>"></td>
		
		</tr>
		<tr><td style="padding-top: 20px;padding-left: 50px;padding-bottom: 20px">
			Fall detection</td>
			<td><input type="text" name="falldetection" value="<?php echo $falldetection; ?>"></td></tr>
		
		<tr><td style="padding-top: 15px;padding-left: 50px;padding-bottom: 20px">
			blink detection</td>
			<td><input type="text" name="blinkdetection" value="<?php echo $blinkdetection; ?>"></td>
		
		</tr>
		</form>
	</table>
</body>
</html>