<html>
<head>
	<title>Welcome user</title>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">

	<style type="text/css">

		* {
			box-sizing: border-box;
		}
		
		body {
			font-family: "Segoe UI";
			background-color: #efefef;
		}
		
		.navbar {
			font-size: 15px;
			line-height: 20px
		}

		ul a {
			color: #313131;
			text-decoration: none;
			font-size: 20px;
		}
		
		a:hover {
				color: black;
				text-shadow: 0 0px 8px rgba(0, 0, 0, 0.3);
				text-decoration: none;
			}
		
		.btn-success {
			background-image: linear-gradient(#79d858, #569e3d);
			border-color: 1px solid #4a993e;
			text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
			padding-top: 5px;
			font-size: 20px;
		}
		
		.btn-success:hover {
			background-image: linear-gradient(#6cc14f, #4c8b36);
			border-color: 1px solid #4a993e;
		}
		
		.btn-success:active {
			background-image: linear-gradient(#5fb244, #3f782b);
			text-shadow: 1px -1px 2px rgba(0, 0, 0, 0.5);
		}
		
		.btn-nav {
			text-shadow: none;
			margin-right: 10px;
		}
		
		.navbar-nav > li > a {
			padding-top: 10px;
			padding-bottom: 15px;
			line-height: 25px;
			padding-left: 25px;
			padding-right: 25px;
		}
		
		.navbar-fixed-top {
			min-height: 80px;
		}
		
		@media (max-width: 1000px) {
			.navbar-nav > li > a {
				margin: 0px;
    			line-height: 0px;
				padding-top: 20px;
				padding-bottom: 20px;
				font-size: 20px;
			}
		}
		
		.navbar .brand { 
			max-height: 40px;
			max-width: 30%; 
			overflow: visible;
			padding-top: 0;
			padding-bottom: 0;
			background-color: white;
		}
				
		.bar1, .bar2, .bar3 {
			width: 30px;
			height: 3px;
			background-color: black;
			margin: 5px 0;
			transition: 0.5s;
		}
		
		.change .bar1 {
			-webkit-transform: rotate(-45deg) translate(-9px, 6px) ;
			transform: rotate(-50deg) translate(-8px,3px) ;
		}

		.change .bar2 {opacity: 0; transition: 0.2s}

		.change .bar3 {
			-webkit-transform: rotate(45deg) translate(-7px, -5px) ;
			transform: rotate(50deg) translate(-7px, -5px) ;
		}
		
		.dir-follow {
			margin-top: 90px;
			margin-left: 50px;
			size: 20px;
		}

	</style>
</head>
<body>
<nav class="navbar navbar-fixed-top" role="banner" style="background-color: white;">
	<br>
	<div class="container-fluid">
   		<div class="navbar-header">
   		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" onclick="myFunction(this)" style="margin-top: 0">
			<div class="bar1"></div>
			<div class="bar2"></div>
			<div class="bar3"></div> 
			</button>
			<a class="navbar-brand" href="usrhome.php" style="margin-top: -30px;"><img src="logo.png" width="70"></a>
   		</div>
   		<div class="collapse navbar-collapse" id="myNavbar" style="margin-left: 50px;">
			<ul class="nav navbar-nav">
				<li><a href="terms.html">Terms</a></li>
				<li><a href="security.html">Security</a></li>
				<li><a href="contact.php">About</a></li>
				<li><a href="contact.php">Contact</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<button class="btn btn-default btn-nav"><a href="usrprofile.php"><span class="glyphicon glyphicon-user"></span> Profile </a></button></li>
				<button class="btn btn-default btn-nav"><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout </a></button></li>

			</ul>
		</div>
	</div>
</nav>
<div style="margin-top: 80px;"></div>
<div class="dir-follow">
	<form autocomplete="off" method="POST"  name="upload_collab" action="upload_collab.php" enctype = "multipart/form-data">
				<div class="form-group">
					<label for="pname">Project Name</label>
					<input type="text" name="pname" class="form-control" required="" width="20%">
					<p class="text-muted form-text">Changes suggested to this project</p>
				</div>
				<input type="file" name="myfile" id="fileToUpload">
				<br>
				<input type="submit" class="btn btn-success" value="Upload">
		</form>
		<h3>A list of ongoing projects</h3>
</div>
<br>
<iframe src="index.php" width="100%" height="100%" style="overflow: hidden; border: none;"></iframe>
<script>
function myFunction(x) {
    x.classList.toggle("change");
}
</script>
</body>
</html>