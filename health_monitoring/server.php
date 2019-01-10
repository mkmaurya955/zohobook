<?php
  session_start();

  $temperature="temperature";
  $heartbeat="heartbeat";
  $falldetection="falldetection";
  $blinkdetection="blinkdetection";


  // Connect to the database
  $db=mysqli_connect("localhost","root","","heartsensor") or die($db);

  $sql="SELECT temperature,heartbeat,falldetection,blinkdetection FROM heart ORDER BY id";

  if ($result=mysqli_query($db,$sql))
    {
    // Fetch one and one row
      while ($row=mysqli_fetch_array($result))
      { 
        $temperature=$row['temperature'];
        $heartbeat=$row['heartbeat'];
        $falldetection=$row['falldetection'];
        $blinkdetection=$row['blinkdetection'];

         // echo "$temperature<br>$humidity<br><br>";
      }
    // Free result set
    mysqli_free_result($result);
  }

  mysqli_close($db);

$page = $_SERVER['PHP_SELF'];
$sec = "10";
?>
<html>
    <head>
    <meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">
    </head>
</html>
