<?php  
ob_start();
$host = 'localhost';  
$user = "root";  
$pass = '';  
$database= "ugitbase";
$conn = mysqli_connect($host, $user, $pass, $database);
if(isset($_POST["name"])AND($_POST["mail"])AND($_POST["password"])!=''){

if($conn){
$name=mysqli_real_escape_string($conn, $_POST["name"]);
$mail=mysqli_real_escape_string($conn, $_POST["mail"]);
$password=mysqli_real_escape_string($conn, $_POST["password"]);
}
if(is_null($password)){
	echo '<script language="javascript">';
	echo 'alert("Enter password!")';
	echo '</script>';
 	$link = "Refresh:0.15;url=register.html";
}
else{

if (!$conn) {
	echo '<script language="javascript">';
	echo 'alert("server down , try again later!")';
	echo '</script>';
	$link = "Refresh:0.15;url=register.html";
}
else {

$sql2 = 'SELECT * FROM user';  
$retval=mysqli_query($conn, $sql2);  $i=0;
  
if(mysqli_num_rows($retval) > 0){
    while($row = mysqli_fetch_assoc($retval)){ 
	    if($row['name']==$name){
			$i=2; 
			mysqli_close($conn); 
			echo '<script language="javascript">';
			echo 'alert("name already registered!")';
			echo '</script>';
			$link = "Refresh:0.15;url=register.html";			
			break;
		}	
	}
} 
	 
if($i==0){
mysqli_autocommit($conn, FALSE);
$sql = "INSERT INTO USER VALUES ('$name','$mail','$password')";  
mysqli_query($conn,$sql);
 mysqli_commit($conn);
if( mysqli_commit($conn)){  

$link = "Refresh:0.15;url=aftersignup.html";  

}else{  
echo '<script language="javascript">';
echo 'alert("Could not insert record : Server error")';
echo '</script>'; 
$link = "Refresh:0.15;url=register.html";
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
$link = "Refresh:0.15;url=register.html";  
 }
 header($link);
?>  