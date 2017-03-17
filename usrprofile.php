<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Profile page</title>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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

		.nav {
			margin-bottom: 20px;
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

		.usr-details {
			margin-top: 20px;
			margin-left: 40px;
		}
		.card {
		    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
		    transition: 0.3s;
	    	width: 250px;
	    	border-radius: 5px;
	    	float: left;
	    	margin-right: 10px;
		}

		.card:hover {
    		box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
		}

		img {
    		border-radius: 5px 5px 0 0;
		}

		.details {
			margin-left: 40px;
			padding-left: 40px;
			line-height: 1.5;
			font-size: 20px;
		}

		.notif {
			margin-left: 40px;
	
		}

				
		.form-control {
			width: 400px;
			background-color: #f7f7f7;
			border-color: #ddd;
		}
		.form-control:focus {
			background-color: #fff;
		}

		.form-text {
			font-size: 12px;
		}
		.container {
			width: 80%;
			align-self: left;
		}
		table {
    background-color: #F3F3F3;
    border-collapse: collapse;
    width: 100%;
    margin: 15px 0;
}

th {
    background-color: #5453ff;
    color: #FFF;
    cursor: pointer;
    padding: 5px 10px;
}

th small {
    font-size: 12px; 
}

td, th {
    text-align: left;
}

a {
    text-decoration: none;
}

td a {
    color: #252525;
    display: block;
    padding: 5px 10px;
}
th a {
    padding-left: 0
}

td:first-of-type a {
    padding-left: 35px;
}
th:first-of-type {
    padding-left: 35px;
}

td:not(:first-of-type) a {
    background-image: none !important;
} 

tr:nth-of-type(odd) {
   background-color: #E6E6E6;
}

tr:hover td {
    background-color:#CACACA;
}

tr:hover td a {
    color: #000;
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

<br><br><br><br><br><br>


<div class="container">
 
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#info">Info</a></li>
    <li><a data-toggle="tab" href="#file">File Handling</a></li>
    <li><a data-toggle="tab" href="#proj">Your projects</a></li>
    <li><a data-toggle="tab" href="#req">Requests</a></li>
  </ul>

  <div class="tab-content">
    
    <div id="info" class="tab-pane fade in active">
		<div class="card">
  			<img src="img_avatar.png" alt="Avatar" style="width:100%">
  			<div calss="container">
    			<h4 style="padding-left: 10px;"><b><?php echo $_SESSION["name"];?></b></h4> 
    			<p style="padding-left: 10px;: "><?php echo $_SESSION["mail"];?></p> 
  			</div>
		</div>
	</div>

    <div id="file" class="tab-pane fade">
      	<form autocomplete="off" method="POST"  name="create" >
				<div class="form-group">
					<label for="pname">Project Name</label>
					<input type="text" name="pname" class="form-control" required="">
					<p class="text-muted form-text">This will be your project name</p>
				</div>
				<input type="submit" class="btn btn-success" value="Create" formaction="create.php">
				<span style="display:inline-block; width:40px;"></span>
				<input type="submit" class="btn btn-success" value="Delete" formaction="delete.php">
		</form>
		<br><br><br>
		<form autocomplete="off" method="POST"  name="upload_admin" action="upload_admin.php" enctype = "multipart/form-data">
				<div class="form-group">
					<label for="pname">Project Name</label>
					<input type="text" name="pname" class="form-control" required="">
					<p class="text-muted form-text">File will be uploaded to this project</p>
				</div>
				<input type="file" name="myfile" id="fileToUpload">
				<br>
				<input type="submit" class="btn btn-success" value="Upload">
		</form>
	</div>

    <div id="proj" class="tab-pane fade">
    	<iframe src="index_admin.php" width="100%" height="500px" style="overflow: hidden; border: none;"></iframe>
    </div>
    <br><br>

    <div id="req" class="tab-pane fade">

  <div class="container">
 <?php
ob_start();
session_start();
$link = "Refresh:0.15;url=usrprofile.php";
$host = 'localhost';  
$user = "root";   
$database= "ugitbase";
$conn = mysqli_connect($host, $user, $pass, $database);

if($conn)
{
    $name = $_SESSION["name"];
    $acc = "accepted";
	$deny = "denied";
	$pen = "pending";
}

if (!$conn) 
{
   echo '<script language="javascript">';
   echo 'alert("server down , try again later!")';
   echo '</script>';
}
else 
{
   $sql2 = "SELECT * FROM requests";  
   $retval=mysqli_query($conn, $sql2); 

   ?>
   	<table class="sortable" width="100%">
   	
      <thead>
        <tr>
          <th>To</th>
          <th>From</th>
          <th>Project</th>
          <th>Update</th>
          <th>Status</th>
        </tr>
      </thead>
      <tbody> 

      <?php
      session_start();
  
   if(mysqli_num_rows($retval) > 0)
   {
      while($row = mysqli_fetch_assoc($retval))
      { 
         if($row['status'] == $pen)
         {
         	echo "
         	<tr>
         	<td>{$row['to']}</td>
         	<td>{$row['from_collab']}</td>
         	<td>{$row['project']}</td>
         	<td>{$row['file_change']}</td>
         	<td>{$row['status']}</td>
         	</tr>";
         
         }
         if($row['status'] != $pen)
         {
         	echo "
         	<tr>
         	<td>{$row['to']}</td>
         	<td>{$row['from_collab']}</td>
         	<td>{$row['project']}</td>
         	<td>{$row['file_change']}</td>
         	<td>{$row['status']}</td>
         	</tr>";
         }
          
      }
   } 
} 
mysqli_close($conn); 
?>
		<form autocomplete="off" method="POST"  name="merge_accept" >
				<div class="form-group">
					<label for="pname">Project Name</label>
					<input type="text" name="pname" class="form-control" required="">
					<label for="fname">File Name</label>
					<input type="text" name="fname" class="form-control" required="">
				</div>
				<input type="submit" class="btn btn-success" value="Accept" formaction="merge_accept.php">
				<span style="display:inline-block; width:40px;"></span>
				<input type="submit" class="btn btn-success" value="Deny" formaction="merge_deny.php">
		</form>
		<!--<br><br><br>
		<form autocomplete="off" method="POST"  name="merge_deny" action="asdf.php">
				<div class="form-group">
					<label for="pname">Project Name</label>
					<input type="text" name="pname" class="form-control" required="">
					<label for="fname">File Name</label>
					<input type="text" name="fname" class="form-control" required="">
				</div>
				<input type="submit" class="btn btn-success" value="Deny">
		</form>-->
  </div>
  <br><br>
  <h3> Requests: </h3>
</div>
</body>
</html>

<script type="text/javascript">
	function asdf() {
		document.getElementById("dispnotif").style.display = "block";
			}


</script>