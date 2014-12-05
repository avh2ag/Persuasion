<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="fb blue.png">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,500,700' rel='stylesheet' type='text/css'>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

    <title>Profile</title>
	


      <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<link href="../../dist/css/bootstrap-theme.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <!-- <link href="grid.css" rel="stylesheet"> -->
    <link href="style.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
	  <style>
   .status{
    border: 1px solid black;
    min-height: 50px;
    width: 400px; 
    display: block;
    border-radius: 5px;
    margin-top: 10px;
    margin-bottom: 3px;
   }
   .status-content{
    margin-left: 15px;
    margin-top: 10px;
    margin-right: 15px;
    margin-bottom: 15px;
    border: 1px solid black;
    border-radius: 5px;
    padding: 4px;
   }
   .footer{
      background: #f9f9f9;
      border-bottom: 1px solid;
      border-radius: 5px;
      min-height: 20px;
      padding-left: 5px;
      padding-left: 5px;
   }
   .people{
      display: inline-block; /*fix this then switch over */
   }
   .person-from{
    margin-left: 10px;
    display: inline-block;
   }
   .person-to{
    display: inline-block;
   }
   .arrow{
    font-weight: bold;
    font-size: large;
   }
  </style>
    
    <div class="navbar navbar-fixed-top" role="navigation" id="back">
      <div class="container">
        <div class="navbar-header">          
          <a href="persuasion.php"><img class="logosmall" src="fb white.png"></a>
        </div>
        <form class="navbar-form navbar-right" role="form" action="profile.php" method="GET">
	        <div class="form-group">
	          <label for="category" class="charsearch"><i class="fa fa-search fa-lg"></i></label>
			  		<select class="form-control" id="category" name="category">
			  			<option selected disabled hidden value=''></option>
			      		<option value="Anne_Elliot">Anne Elliot</option>
  						<option value="Captain_Frederick_Wentworth">Capt. Fredrick Wentworth</option>
			     		<option value="Sir_Walter_Elliot">Sir Walter Elliot</option>
						<option value="Elizabeth_Elliot">Elizabeth Elliot</option>
						<option value="Mary_Elliot_Musgrove">Mary Elliot Musgrove </option>
						<option value="Charles_Musgrove">Charles Musgrove</option>
						<option value="Louisa_Musgrove">Louisa Musgrove</option>
						<option value="Henrietta_Musgrove">Henrietta Musgrove</option>
						<option value="Lady_Russell">Lady Russell</option>
						<option value="Admiral_Croft">Admiral Croft</option>
						<option value="Sophia_Croft">Sophia Croft</option>
						<option value="Captain_Harville">Captian Harville</option>
						<option value="William_Elliot">William Elliot</option>
						<option value="Mrs_Smith">Mrs. Smith </option>
						<option value="Lady_Dalyrmple">Lady Dalyrmple</option>
						<option value="Miss_Carteret">Miss Carteret</option>
						<option value="Captain_Benwick">Captain Benwick</option>
						<option value="Mrs_Penelope_Clay">Mrs. Penelope Clay</option>
						<option value="John_Shepard">John Shepard</option>
						<option value="Charles_Hayter">Charles Hayter</option> 
						  
			  		 	</select>
	        </div>
	        <button type="submit" class="btn btn-link">Submit</button>
      	</form>
      	</div>
    </div>
		
	<section class="profilepage">

	<div class="col-md-3 col-md-offset-1">

		    <?php
		    // Create connection
		    $topic = "http://studio1.shanti.virginia.edu/MDST3703F14/data/view/cmm4kd"; 
		    $cat = $_GET['category'];
		 	?>
			<img src="<?php include("$topic/about/text/code/$cat/img_url"); ?>" alt="profile picture" class="prof_pic">
				
				<div class="box2">

				<div class="relationships">Relationships</div>

				<div class="people">
				<?php
				// Create connection
				$con=mysqli_connect("dbm2.itc.virginia.edu","publicread","","MDST3703F14_cmm4kd");
				// Check connection
				if ($con->connect_error) {
				    die("Connection failed: " . $con->connect_error);
				}
				
				$sql = "SELECT * FROM relationships WHERE code='$cat'";
				$result = $con->query($sql);
				
				if ($result->num_rows >= 0) {
				    while($row = $result->fetch_assoc()) {
						echo "<mem>" . $row["member_1"]. "</mem> <br> <cap>" . $row["relationship_1"]. "</cap>" . "<br>";
						echo "<mem>" . $row["member_2"]. "</mem> <br> <cap>" . $row["relationship_2"]. "</cap>" . "<br>";
						echo "<mem>" . $row["member_3"]. "</mem> <br> <cap>" . $row["relationship_3"]. "</cap>" . "<br>";
						echo "<mem>" . $row["member_4"]. "</mem> <br> <cap>" . $row["relationship_4"]. "</cap>" . "<br>";
						echo "<mem>" . $row["member_5"]. "</mem> <br> <cap>" . $row["relationship_5"]. "</cap>" . "<br>";
						echo "<mem>" . $row["member_6"]. "</mem> <br> <cap>" . $row["relationship_6"]. "</cap>" . "<br>";
						echo "<mem>" . $row["member_7"]. "</mem> <br> <cap>" . $row["relationship_7"]. "</cap>" . "<br>";
						echo "<mem>" . $row["member_8"]. "</mem> <br> <cap>" . $row["relationship_8"]. "</cap>" . "<br>";
						echo "<mem>" . $row["member_9"]. "</mem> <br> <cap>" . $row["relationship_9"]. "</cap>" . "<br>";
						echo "<mem>" . $row["member_10"]. "</mem> <br> <cap>" . $row["relationship_10"]. "</cap>" . "<br>";
						echo "<mem>" . $row["member_11"]. "</mem> <br> <cap>" . $row["relationship_11"]. "</cap>" . "<br>";
						echo "<mem>" . $row["member_12"]. "</mem> <br> <cap>" . $row["relationship_12"]. "</cap>" . "<br>";
						echo "<mem>" . $row["member_13"]. "</mem> <br> <cap>" . $row["relationship_13"]. "</cap>" . "<br>";	
					}				    
				} else {
				    echo "";
				} 
				$con->close();			
				?>
				</div>
				</div>
		
			</div>
					 
	</div>		
	  	
	<div class="col-md-5">	
		<div class="profilename"><?php include("$topic/about/text/code/$cat/full_name"); ?></div>
	
		
	    <div class="box">
			<ul id="myTab" class="nav nav-tabs" role="tablist">
			  <li role="nav active"><a href="#timeline" data-toggle="tab">Timeline</a></li>
			  <li role="nav"><a href="#about" data-toggle="tab">About Me</a></li>
			  <li role="nav"><a href="#photos" data-toggle="tab">Photos</a></li>
			</ul>
	  
	  
	      <div class="tab-content">
	        <div class="tab-pane fade in active" id="timeline">
					
		<?php
				// Create connection
				$con=mysqli_connect("dbm2.itc.virginia.edu","publicread","","MDST3703F14_cmm4kd");
				// Check connection
				if ($con->connect_error) {
				    die("Connection failed: " . $con->connect_error);
				}
			
				$sql2 = "SELECT * FROM interactions WHERE code='$cat'";
				$result2 = $con->query($sql2);

				  $status1 = '<div class="status">';
				  $people = '<div class="people">';
				  $open_person_from = '<h3 class="person-from">'; //add "from"
				  $close_h3 = '</h3>';
				  $arrow = '<span class="arrow"> > </span>';
				  $open_person_to = '<h3 class="person-to">';
				  $open_status_content = '<div class="status-content">';
				  $open_footer = '<div class="footer">';
				  $close_div = '</div>';

				if ($result2->num_rows >= 0) {
					while($row2 = $result2->fetch_assoc()) {
						      $content = $row2["content"];
						      $to = $row2["sent_to"];
						      $from = $row2["sent_from"];
						      $chapter = $row2["chapter"];
						      $order = $row2["order"];
						      $type = $row2["type"];
						      //create div
						      echo $status1;
						      echo $people;
						      echo $open_person_from;
						      echo $from;
						      echo $close_h3;
						      if ($type =="post"){
						        echo $arrow;
						        echo $open_person_to;
						        echo $to;
						        echo $close_h3;
						      }
						      echo $close_div; // end people
						      echo $open_status_content;
						      echo $content;
						      echo $close_div; //end status content
						      echo $open_footer;
						      echo "Write a comment...";
						      echo $close_div; //end footer

						      echo $close_div; // end status
			    	}
				} else {
				echo "";
				}

				$con->close();	
				?>
	        </div>
			
				<div class="tab-pane fade" id="about">
					<div class="aboutme"> About me </div>
					<div class="descr"><?php include("$topic/about/text/code/$cat/about_me"); ?></div>
					<div class="aboutme"> Location</div>
					<div class="descr"> <?php include("$topic/about/text/code/$cat/city"); ?></div>
					<div class="aboutme"> Occupation </div>
					<div class="descr"><?php include("$topic/about/text/code/$cat/occupation"); ?></div>
					<div class="aboutme"> Birthday </div>
					<div class="descr"><?php include("$topic/about/text/code/$cat/birthday"); ?></div>
					<div class="aboutme"> Relationship Status </div>
					<div class="descr"><?php include("$topic/about/text/code/$cat/relationship_status"); ?></div>
				</div>
				<div class="tab-pane fade" id="photos">
				<?php
				// Create connection
				$con=mysqli_connect("dbm2.itc.virginia.edu","publicread","","MDST3703F14_cmm4kd");
				// Check connection
				if ($con->connect_error) {
				    die("Connection failed: " . $con->connect_error);
				}
				$cat = $_GET['category'];
				
				$sql = "SELECT full_name FROM about WHERE code='$cat'";
				$result = $con->query($sql);
				
				if ($result->num_rows >= 0) {
				    while($row = $result->fetch_assoc()) {
				        $var= $row["full_name"];
				    }
				} else {
				    echo "";
				} 
								
				$sql2 = "SELECT image FROM photos WHERE character_1='$var' OR character_2='$var' OR 				character_3='$var' OR character_4='$var' OR character_5='$var' OR character_6='$var' OR 				character_7='$var'";
				$result2 = $con->query($sql2);
				
				if ($result2->num_rows > 0) {
				    // output data of each row
				    while($row2 = $result2->fetch_assoc()) {
				        //echo "image: " . $row2["image"]. "<br>";
						echo '<img src="'. $row2["image"]. '" alt="pic" class="img"/>';
				    }
				} else {
				    echo "";
				}

				$con->close();			
				?>	
				</div>
	        </div>
		  </div>
	    </div>
	</div>

	</section>

  	<section class="footer">
    	<div class="mdst">MDST 3703 Final Project</div>
    	<div class="pers">Persuabook &copy; 2014 </div>
    	<div class="team">Alex Harasty | Christina Mandell | Sarah Smaltz | Helen He | Laura Holshauser</div>
    </section>
	 




    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
