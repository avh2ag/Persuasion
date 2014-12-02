
<?
// set body tag
$body='<body id="welcome">';
$gamti="true"; 
//test connection
   $con=mysqli_connect("stardock.cs.virginia.edu","cs4720sms2av","sarah27","cs4720sms2av");

    // Check connection
    if (mysqli_connect_errno()) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

  $cat = $_GET['category'];
  
  $test = mysqli_query($con,"SELECT full_name FROM mdst WHERE code='Anne_Elliot");
  echo $test;

	// grab the active tournament from the constants table
	

?>

