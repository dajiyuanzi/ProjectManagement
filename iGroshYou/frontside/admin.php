<html lang="en">
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<title>iGroshYou--Admin</title>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    	<link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

		<link href="http://www.francescomalagrino.com/BootstrapPageGenerator/3/css/bootstrap-combined.min.css" rel="stylesheet" media="screen">
		<link rel="stylesheet" type="text/css" href="admin.css">

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    	<!--[if lt IE 9]>
      		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    	<![endif]-->
	</head>
	<body class="bg1">
		<div class="container-fluid">
			<?php require_once('navbar.html'); ?>
			
			<div class="row-fluid" style="position:absolute;z-index:-99;">
				<div class="span8 offset2 bg2">
					<form class="form-signin form_style">
						<div class="inputbg">
							<fieldset>
								<legend>Admin: Food Update</legend>
								<label>Food Name</label>
			                    <input type="text" name="fdname" />

								<label>Put Calorie value</label>
			                    <input type="number" name="calorie" />

			                    <label>Protein value</label>
			                    <input type="number" name="protein" />
			                     
			                    <label>Carb value</label>
			                    <input type="number" name="carb" />
			                     
			                    <label>Fat value</label>
			                    <input type="number" name="fat" />
							</fieldset>
						</div>
						<br/>
						<button class="btn" type="submit">Update</button>			
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