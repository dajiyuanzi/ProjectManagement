<html lang="en">
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    	<link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

		<title>iGroshYou--Register</title>
		
		<link href="http://www.francescomalagrino.com/BootstrapPageGenerator/3/css/bootstrap-combined.min.css" rel="stylesheet" media="screen">

		<link rel="stylesheet" type="text/css" href="register.css">

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    	<!--[if lt IE 9]>
      		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    	<![endif]-->
	</head>
	<body class="bg1">
		<div class="container-fluid">
			<?php require_once('navbar.html'); ?>
			<div class="row-fluid">
				<div class="span4 offset1 bg2">
					<form class="form-signin form_style">
						<h1 class="form-signin-heading">Register</h1>
						<label class="control-label" for="inputEmail">Email</label>
						<input id="inputEmail" type="email" />
						<label class="control-label" for="inputPassword">Password</label>
						<input id="inputPassword" type="password" />
						<label class="control-label" for="inputgender">Gender</label>
						Male:<input id="inputgender" type="radio" name="gender" value="male" />
						Female:<input id="inputgender" type="radio" name="gender" value="female" />
						<label class="control-label" for="inputweight">Weight(KG)</label>
						<input id="inputweight" type="number" />
						<label class="control-label" for="inputheight">Height(CM)</label>
						<input id="inputheight" type="number" />
						<label class="control-label" for="dislike">Dislike Food</label>
						<div id="dislike" style="width:200px; height:80px; overflow:scroll;"> 
						<!--Disliked food is generated from backside-->
							haha<input type="checkbox" value="haha"><br/>
							haha<input type="checkbox" value="haha"><br/>
							haha<input type="checkbox" value="haha"><br/>
							haha<input type="checkbox" value="haha"><br/>
							haha<input type="checkbox" value="haha"><br/>
							haha<input type="checkbox" value="haha"><br/>
						</div>
						<br/>
						<button class="btn" type="submit">Register</button>			
					</form>
				</div>
			</div>
		</div>    
	</body>
	<!-- Placed at the end of the document so the pages load faster --> 
	<script type="text/javascript" src="http://www.francescomalagrino.com/BootstrapPageGenerator/3/js/jquery-2.0.0.min.js"></script>
	<script type="text/javascript" src="http://www.francescomalagrino.com/BootstrapPageGenerator/3/js/jquery-ui"></script>
	<script type="text/javascript" src="http://www.francescomalagrino.com/BootstrapPageGenerator/3/js/bootstrap.min.js"></script>
</html>