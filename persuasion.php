<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
	<link href='http://fonts.googleapis.com/css?family=Roboto+Slab' rel='stylesheet' type='text/css'>

    <title>Persuasion</title>

    <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

    <!-- Custom styles for this template -->
    <link href="jumbotron.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	
   <!-- Bootstrap core JavaScript
   ================================================== -->
   <!-- Placed at the end of the document so the pages load faster -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
   <script src="../../dist/js/bootstrap.min.js"></script>
   <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
   <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
   <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
   
 
  </head>

  <body>
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation" id="back2">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Welcome to the GuestBook!</a>
        </div>
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav navbar-right">
		        <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Explore the site<span class="caret"></span></a>
		          <ul class="dropdown-menu" role="menu">
		            <li><a href="http://www.charlottesville.org/Index.aspx?page=1725">Profile List</a></li>
		            <li><a href="http://www.bikecharlottesville.org/">Photos</a></li>
		            <li><a href="http://www.reelingandrafting.com/tubing.htm">Events</a></li>
		          </ul>
		        </li>
		      </ul>
		    </div><!-- /.navbar-collapse -->
      </div>
    </div>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
		<div class="container" id="back">
			
		    <div class="container">
				<div class="row">
					<div class="col-md-6">
						<h2>View a Character</h2>
		    			<form role="form" action="profile.php" method="GET">
							<div class="form-group">
			  				  <label for="category">Character</label>
			  				<select class="form-control" id="category" name="category">
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
							<button type="submit" class="btn btn-default">Go to profile</button>
						</form>
					</div>
      
      </div>
    </div>
	

	
  </body>
</html>
