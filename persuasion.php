<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,500,700' rel='stylesheet' type='text/css'>
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

    <title>Persuasion</title>

    <!-- Bootstrap core CSS -->
  	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

    <!-- Custom styles for this template -->
    <!-- <link href="jumbotron.css" rel="stylesheet"> -->
    <link href="style.css" rel="stylesheet">


   <!-- Placed at the end of the document so the pages load faster -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
   <script src="../../dist/js/bootstrap.min.js"></script>
   <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
   <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
   <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
   
 
  </head>

  <body>

    <div class="navbar navbar-fixed-top" role="navigation" id="back2">
      <div class="container">
        <div class="navbar-header">          
          <a href="persuasion.php"><img class="persuabooklogo" src="persuabook.png"></a>
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

    <section class="mainpage">
    	<?php
        include 'newsfeed.php';
      ?>
    </section>


    <section class="footer">
    	<div class="mdst">MDST 3703 Final Project</div>
    	<div class="pers">Persuabook &copy; 2014 </div>
    	<div class="team">Alex Harasty | Christina Mandell | Sarah Smaltz | Helen He | Laura Holshauser</div>
    </section>
	
  </body>

</html>
