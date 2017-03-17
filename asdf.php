<?php  
ob_start();
$host = 'localhost';  
$user = "root";  
$pass = '';  
$database= "ugitbase";
$conn = mysqli_connect($host, $user, $pass, $database);
if(isset($_POST["pname"])AND($_POST["fname"])!=''){

if($conn){
$a=mysqli_real_escape_string($conn, $_POST["pname"]);
$b=mysqli_real_escape_string($conn, $_POST["fname"]);
}
if(true){
if (!$conn) {
  echo '<script language="javascript">';
  echo 'alert("server down , try again later!")';
  echo '</script>';
  $link = "Refresh:0.15;url=register.html";
}
else {

$sql2 = 'SELECT * FROM requests';  
$retval=mysqli_query($conn, $sql2);

$deny = "denied";
   
if($i==0){
mysqli_autocommit($conn, FALSE);
$sql = "UPDATE requests SET status=$deny WHERE file_change = $b";  
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