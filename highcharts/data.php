<?php
	// databse connection
	$dbhost='localhost';
	$dbname='highcharts';
	$dbuser='root';
	$dbpass='';

	try{
		$dbcon=new PDO("mysql:host={$dbhost};dbname={$dbname}",$dbuser,$dbpass);
		$dbcon->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

	}catch(PDOException $ex){
		die($ex->getMessage());
	}

	// we select the table and display the records of the table using while loop 

	//Data for Temperature Charts

	$stmt=$dbcon->prepare("SELECT * FROM highcharts");
	$stmt->execute();
	$json=[];
	while ($row=$stmt->fetch(PDO::FETCH_ASSOC)) {
		extract($row);
		$json[]=[(string)$name, (int)$temperature];
	}
	echo json_encode($json);

//$page = $_SERVER['PHP_SELF'];
//$sec = "5";
?>
