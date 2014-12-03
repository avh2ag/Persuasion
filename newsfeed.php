<html>
<head></head>
<body>
<?php
//Must Create Connection/Iterate through the category
  $con=mysqli_connect("dbm2.itc.virginia.edu","publicread","","MDST3703F14_cmm4kd");

  // Check connection
  if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
 

    $topic = "http://studio1.shanti.virginia.edu/MDST3703F14/data/view/cmm4kd"; 
	    $cat = $_GET['category'];
//		$req1 = include("$topic/interactions/text/type");
		echo $req1;
	$test_query = "SELECT * from interactions";
	$execute = mysql_fetch_array(mysql_query($test_query)); 
	echo $execute



?>
</body>
</html>