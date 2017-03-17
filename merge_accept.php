<?php
ob_start();
session_start();
$name = $_SESSION["name"];
$a = $_POST['pname'];
$b = $_POST['fname'];
$acc = "accepted";

$dest = $a."/".$b;
$src = $a."/temp_".$b;    
$link = "Refresh:0.15;url=usrprofile.php";
$host = 'localhost';  
$user = "root";   
$database= "ugitbase";
$conn = mysqli_connect($host, $user, $pass, $database);

if (!$conn) 
{
   echo '<script language="javascript">';
   echo 'alert("server down , try again later!")';
   echo '</script>';
}
else 
{
$sql2 = 'SELECT * FROM admin';  
$retval=mysqli_query($conn, $sql2);  
$i=0;
  
if(mysqli_num_rows($retval) > 0){
    while($row = mysqli_fetch_assoc($retval)){ 
	    if($row['project']==$a && $row['name']==$name){
			$i=2; 
			//mysqli_close($conn); 		
			break;
		}	
	}
} 
	
if($i==0)
{
			echo '<script language="javascript">';
			echo 'alert("No admin rights")';
			echo '</script>';
} 
if($i==2){
   copy($src, $dest);
   mysqli_autocommit($conn, FALSE);
   $sql2 = "UPDATE requests SET status='$acc' WHERE file_change = '$b'";      
   mysqli_query($conn,$sql2);
   mysqli_commit($conn);
}
}    
mysqli_close($conn); 
header($link);
?>