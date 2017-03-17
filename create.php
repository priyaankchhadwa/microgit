<?php
ob_start();
session_start();
$name = $_SESSION["name"];
$host = 'localhost';  
$user = "root";   
$database= "ugitbase";
$link = "Refresh:0.15;url=usrprofile.php";
$conn = mysqli_connect($host, $user, $pass, $database);
if(isset($_POST["pname"])!=''){	

if($conn){
$pname=mysqli_real_escape_string($conn, $_POST["pname"]);

}
if(is_null($pname)){
	echo '<script language="javascript">';
	echo 'alert("Enter project name!")';
	echo '</script>';
}
else{

if (!$conn) {
	echo '<script language="javascript">';
	echo 'alert("server down , try again later!")';
	echo '</script>';
}
else {

$sql2 = 'SELECT * FROM admin';  
$retval=mysqli_query($conn, $sql2);  
$i=0;
  
if(mysqli_num_rows($retval) > 0){
    while($row = mysqli_fetch_assoc($retval)){ 
	    if($row['project']==$pname){
			$i=2; 
			mysqli_close($conn); 
			echo '<script language="javascript">';
			echo 'alert("project already exists!")';
			echo '</script>';		
			break;
		}	
	}
} 
	 
if($i==0){
mkdir($pname);
chmod($pname, 0777);
$temp = $pname;
$dest = "$temp"."/index.php";
copy("index.php", $dest);
mysqli_autocommit($conn, FALSE);
$sql = "INSERT INTO ADMIN VALUES ('$pname','$name')";  
mysqli_query($conn,$sql);
 mysqli_commit($conn);
if( mysqli_commit($conn)){  
echo '<script language="javascript">';
echo 'alert("project created successfully")';
echo '</script>'; 

}
else{  
echo '<script language="javascript">';
echo 'alert("Could not insert record : Server error")';
echo '</script>'; 
}  
  
mysqli_close($conn); 
        }
}
}
}
 else
 {
 	echo '<script language="javascript">';
echo 'alert("All details not entered !")';
echo '</script>'; 
 }
 header($link);
?>  