<?php 
ob_start();

if(isset($_POST["name"],$_POST["password"])){

$host = 'localhost';  
$user = "root";  
$pass = '';  
$database= "ugitbase";
$conn = mysqli_connect($host, $user, $pass, $database);  
if ($conn) {
$name=mysqli_real_escape_string($conn, $_POST["name"]);
$password=mysqli_real_escape_string($conn, $_POST["password"]);
$sql = 'SELECT * FROM user';  
$retval=mysqli_query($conn, $sql);  
  
if(mysqli_num_rows($retval) > 0){
  $i=0; 
    while($row = mysqli_fetch_assoc($retval)){ 
	    if($row['name']==$name && $row['password']==$password){
	        $i=1; 
	        $mail=$row['mail'];
	        $name=$row['name'];
			break;
		}	
	}
if($i==1){
	session_start();
	$_SESSION["name"]=$name;
	$_SESSION["mail"]=$mail; 
	$link = "Refresh:0.15;url=usrhome.php";   
	} 
	else{
		echo '<script language="javascript">';
		echo 'alert("Either emailid or password is incorrect. Go back and try again!")';
		echo '</script>';  
		$link = "Refresh:0.15;url=login.html";
		 }
}
else{  
		echo '<script language="javascript">';
		echo 'alert("no such user !")';
		echo '</script>';  
		$link = "Refresh:0.15;url=login.html";
	}
     mysqli_close($conn); 
}
else {
		echo '<script language="javascript">';
		echo 'alert("Connection NOT established or Database NOT Found ")';
		echo '</script>'; 
		$link = "Refresh:0.15;url=login.html"; 
	} 
}else{
		echo '<script language="javascript">';
		echo 'alert("please login again")';
		echo '</script>';
		$link = "Refresh:0.15;url=login.html"; 
	 }
	 header($link);
?>  