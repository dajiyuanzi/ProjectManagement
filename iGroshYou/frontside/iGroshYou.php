<html lang="en">
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<title>iGroshYou--Home Page</title>
		
		<link href="http://www.francescomalagrino.com/BootstrapPageGenerator/3/css/bootstrap-combined.min.css" rel="stylesheet" media="screen">
		
		<link rel="stylesheet" type="text/css" href="iGroshYou.css">

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
			<div class="span4 bg2">
				<form class="form_style">
					<fieldset>
						<h2>Create list</h2>

	                    <label>Put Calorie value</label>
	                    <input type="number" />

	                    <label>Protein value</label>
	                    <input type="number" />
	                     
	                    <label>Carb value</label>
	                    <input type="number" />
	                     
	                    <label>Fat value</label>
	                    <input type="number" />
	                    <br/>
	                    <br/>

	                    <button type="submit" class="btn">Submit</button>
					</fieldset>
				</form>
			</div>
			<div class="span8 bg3" >
				<h2>Generated Grocery List</h2>
	            <div id="output" class="bg4"> 
	            	<!--The food list is to be displayed in this DIV-->
	            </div>
	            <button id="send" class="btn">Send List to Mail</button>
	            <button id="dislike" class="btn">Dislike This List</button>
			</div>
		</div>
	</div>
	</body>
	<!-- Placed at the end of the document so the pages load faster -->
	<script type="text/javascript" src="http://www.francescomalagrino.com/BootstrapPageGenerator/3/js/jquery-2.0.0.min.js"></script>
	<script type="text/javascript" src="http://www.francescomalagrino.com/BootstrapPageGenerator/3/js/jquery-ui"></script>
	<script type="text/javascript" src="http://www.francescomalagrino.com/BootstrapPageGenerator/3/js/bootstrap.min.js"></script>
</html>
