<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<title>Contact us</title>

	<script>
		function myFunction(x) {
			x.classList.toggle("change");
		}
	</script>

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
				
		.intro-form {
			margin-top: 0;
			margin: auto;
			font-size: 25px;
			width: 350px;
		}
		
		.form-control {
			width: 350px;
			padding: 20px 12px;
			border-color: #d4d4d4;
		}
		
		.tile-block {
			border-top: 1px solid #e5e5e5;
			border-bottom: 1px solid #e5e5e5;
		}
		
		@media (min-width: 900px)
			.tile-row {
				display: table;
				max-width: 1330px;
				margin: 0 auto;
				overflow: hidden;
		}
		
		@media (max-width: 850px){
			
			.navbar-right > li {
				float: left;
				margin-left: 20px;
				margin-bottom: 15px;
			}
			
		}

		.info {
			text-align: center;
			margin-top: 100px;
		}

		.info-box {
			padding: 10px 10px;
			box-shadow: 5px 10px 20px -5px;
		}

		.info-box:hover {
			
		}

		.headline{
		font-family: Times New Roman;
 		color: #444;
 		margin: 0;
 		padding: 0px 0px 6px 0px;
 		font-size: 40px;
 		line-height: 44px;
 		letter-spacing: -2px;
 		font-weight: 600;
	}

	.text {
    	color: #424242;
        font-family: "Adobe Caslon Pro", "Hoefler Text", Georgia, Garamond, Times, serif;
 		letter-spacing:0.1em;
 		text-align:center;
 		margin: 40px auto;
 		text-transform: lowercase;
 		line-height: 145%;
 		font-size: 14pt;
 		font-variant: small-caps;
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
			<a class="navbar-brand" style="margin-top: -30px;"><img src="logo.png" width="70"></a>
   		</div>
   		<div class="collapse navbar-collapse" id="myNavbar" style="margin-left: 50px;">
			<ul class="nav navbar-nav">
				<li><a href="terms.html">Terms</a></li>
				<li><a href="security.html">Security</a></li>
				<li><a href="contact.php">About</a></li>
				<li><a href="contact.php">Contact</a></li>
			</ul>
		</div>
	</div>
</nav>
<div style="margin-top: 80px">&nbsp;</div>
<div class="">
	<div style="text-align: center;">
	<h4>This site is developed with <span class="glyphicon glyphicon-heart" style="color: #ff2121;"></span> by </h4>
	</div>
	<div class="info">
		<div class="info-box" style="float: left; margin-left: 300px">
			<h3>Priyaank Chhadwa</h3>
			<h4>TE CMPN A</h4>
			<h4>Worked majorly on the front-end</h4>
			<h4>Inbox at priyaank29@gmail.com</h4>
		</div>
		<div class="info-box" style="float: right; margin-right: 300px; ">
			<h3>Gaurav Chemburkar</h3>
			<h4>TE CMPN A</h4>
			<h4>Worked majorly on the back-end</h4>
			<h4>Inbox at gaurav.mrc@gmail.com</h4>
		</div>
		<br><br><br>
		
		<div class="info-about" style="margin-top: 200px">
			<p class="headline">µGit</p>
			<p class="text">µGit is how people build software.</p>
			<p class="text">We hope to support a community where people learn, share and work together to build software</p>
			<p class="text"> and are working hard to build a supportive , welcoming place for users.</p>
			<p class="text">Inbox us at ugit@gmail.com , we value your feedback.</p>
		</div>
	</div>
</div>
</body>
</html>