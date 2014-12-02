<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
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

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
	  
    
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
			$req1 = include("$topic/about/code/$cat/full_name");
			echo "$req1";
		 	?>
			<img src="<?php include("$topic/about/text/code/$cat/img_url"); ?>" alt="profile picture" class="prof_pic">
					 
	</div>		
	  	
	<div class="col-md-5">	
		<div class="profilename"><?php include("$topic/about/text/code/$cat/full_name"); ?></div>
	
	    <div class="box">
			<ul class="nav nav-tabs">
			  <li role="presentation" class="active"><a href="#timeline">Timeline</a></li>
			  <li role="presentation"><a href="#">About Me</a></li>
			  <li role="presentation"><a href="#">Photos</a></li>
			</ul>

			<div id="timeline">
				hi
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
