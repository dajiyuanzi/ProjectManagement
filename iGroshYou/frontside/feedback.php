<html lang="en">
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	    
	    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    	<link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    	
		<title>iGroshYou--Feedback</title>
		
		<link href="http://www.francescomalagrino.com/BootstrapPageGenerator/3/css/bootstrap-combined.min.css" rel="stylesheet" media="screen">

		<link rel="stylesheet" type="text/css" href="feedback.css">

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
					<form class="form-signin form_style" id="feedbackform">
						<h1 class="form-signin-heading">Feedback</h1>
						<div class="control-group">
							<div class="controls">
								<textarea form="feedbackform" cols="150" rows="10"></textarea>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="inputEmail">Email</label>
							<div class="controls">
								<input id="inputEmail" type="email" />
							</div>
						</div>
						<div class="control-group">
							<div class="controls">
								<button class="btn" type="submit">Submit</button>
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