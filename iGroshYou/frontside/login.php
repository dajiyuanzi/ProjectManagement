<html lang="en">
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    	<link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

		<link href="http://www.francescomalagrino.com/BootstrapPageGenerator/3/css/bootstrap-combined.min.css" rel="stylesheet" media="screen">

		<link rel="stylesheet" type="text/css" href="login.css">
		
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
				<div class="span4 offset4 bg2">
					<form class="form-signin form_style">
						<h1 class="form-signin-heading">Login In</h1>
						<div class="control-group">
							<label class="control-label" for="inputEmail">Email</label>
							<div class="controls">
								<input id="inputEmail" type="email" />
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="inputPassword">Password</label>
							<div class="controls">
								<input id="inputPassword" type="password" />
							</div>
						</div>
						<div class="control-group">
							<div class="controls">
								<label class="checkbox"><input type="checkbox" /> Remember Me</label> 
								<button class="btn" type="submit">Login In</button>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="otherway">Otherway</label>
							<div class="controls">
								<input class="btn btn_fblogin" id="otherway" type="button" style="background:url(pic/fblogin.PNG); background-size:100% 100%; width:110px; height:40px;" />
								<input class="btn btn_gologin" id="otherway" type="button" style="background:url(pic/gologin.PNG); background-size:100% 100%; width:110px; height:40px;" />
							</div>
						</div>
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