<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>status</title>
</head>
<body>
	<h2 style="color:blue;text-align: center;padding-top: 50px;padding-bottom: 50px;">Temperature and Humidity sensor</h2>
	
	<table border="0" align="center" width="400px" style="background-color:silver;border-radius: 20px">
	<form method="post" action="temphmdt.php">
		<!-- display validation errors here -->
		<!-- <?php include('errors.php');   ?>  -->
		<tr><td style="padding-top: 20px;padding-left: 50px;padding-bottom: 20px">
			<img src="thermo.png" style="width: 100px;height: 100px;"></td>
			<td><input type="text" name="temperature" value="<?php echo $temperature; ?>"></td>
		
		<tr><td style="padding-top: 15px;padding-left: 50px;padding-bottom: 20px">
			<img src="h1.jpg" style="width: 100px;height: 100px;border-radius: 50px"></td>
			<td><input type="text" name="humidity" value="<?php echo $humidity; ?>"></td>
		
		</tr>
		</form>
	</table>
</body>
</html>