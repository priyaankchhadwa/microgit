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
	    if($row['project']==$pname && $row['name']==$name){
			$i=2; 
			//mysqli_close($conn); 		
			break;
		}	
	}
} 
	
if($i==0)
{
			echo '<script language="javascript">';
			echo 'alert("Project does not exists or no admin rights  to delete")';
			echo '</script>';
} 
if($i==2){

//mysqli_autocommit($conn, FALSE);
$sql = "DELETE FROM admin  WHERE project = '$pname' AND name = '$name'";  
mysqli_query($conn,$sql);
 mysqli_commit($conn);
 function delete_directory($dir)
{
if ($handle = opendir($dir))
{
    while (false !== ($file = readdir($handle))) {
        if ($file != "." && $file != "..") {
 
            if(is_dir($dir.$file))
            {
                if(!@rmdir($dir.$file)) 
                {
                delete_directory($dir.$file.'/'); 
                }
            }
            else
            {
               @unlink($dir.$file);
            }
        }
    }
    closedir($handle);
 
    @rmdir($dir);
}
 
}
 
$dir = $pname."/"; 
 
$remove_directory = delete_directory($dir);

if( mysqli_commit($conn)){  
echo '<script language="javascript">';
echo 'alert("project deleted successfully ")';
echo '</script>'; 

}
else{  
echo '<script language="javascript">';
echo 'alert("Could not delete record : Server error")';
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