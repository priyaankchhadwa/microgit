<?php
ob_start();
   if(isset($_FILES['myfile'])){
      $errors= array();
      $dir = $_POST['pname'];
      $file_name = $_FILES['myfile']['name'];
      $file_tmp = $_FILES['myfile']['tmp_name'];
      $dir = $dir."/";     
      $link = "Refresh:0.15;url=usrprofile.php";
      $i = 0;

session_start();
$name = $_SESSION["name"];
$host = 'localhost';  
$user = "root";   
$database= "ugitbase";
$conn = mysqli_connect($host, $user, $pass, $database);

if($conn)
{
   $pname=mysqli_real_escape_string($conn, $_POST["pname"]);
}

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
  
   if(mysqli_num_rows($retval) > 0)
   {
      while($row = mysqli_fetch_assoc($retval))
      { 
         if($row['project'] == $pname )
         {
         	if($row['name'] == $name)
         	{
         		$i=2;  
            	break;
         	}            
         }  
      }
   } 
} 
  
mysqli_close($conn); 
            
      if(empty($errors)==true && $i==2)
      {
         move_uploaded_file($file_tmp,$dir.$file_name);
         echo '<script language="javascript">';
		 echo 'alert("Upload successful!")';
		 echo '</script>';  
      }
      else
      {
         print_r($errors);
         echo '<script language="javascript">';
   		 echo 'alert("not admin ! visit the global directry and send merge request!")';
   		 echo '</script>';    
      }
}
header($link);
?>