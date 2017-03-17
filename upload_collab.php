<?php
ob_start();
   if(isset($_FILES['myfile'])){
      $errors= array();
      $dir = $_POST['pname'];
      $file_name = $_FILES['myfile']['name'];
      $file_tmp = $_FILES['myfile']['tmp_name'];
      $dir = $dir."/";     
            
      if(empty($errors)==true) {
         $file_name1 = "temp_".$file_name;
         move_uploaded_file($file_tmp,$dir.$file_name1);
         echo '<script language="javascript">';
		echo 'alert("Upload successful!")';
		echo '</script>';  
      }else{
         print_r($errors);
      }
   }

session_start();
$name = $_SESSION["name"];
$host = 'localhost';  
$user = "root";   
$database= "ugitbase";
$link = "Refresh:0.15;url=usrhome.php";
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
   $i=0;
  
   if(mysqli_num_rows($retval) > 0)
   {
      while($row = mysqli_fetch_assoc($retval))
      { 
         if($row['project']==$pname)
         {
            $i=2;  
            $padmin = $row['name'];    
            break;
         }  
      }
   } 
    
   if($i==2)
   {
      $status = "pending";
      mysqli_autocommit($conn, FALSE);
      $sql = "INSERT INTO requests VALUES ('$padmin','$name','$pname','$file_name','$status')";  
      mysqli_query($conn,$sql);
      mysqli_commit($conn);
      if( mysqli_commit($conn))
      {  
         echo '<script language="javascript">';
         echo 'alert("request sent successfully")';
         echo '</script>';
      }
   }
   else
   {  
      echo '<script language="javascript">';
      echo 'alert("Could not find project : Server error")';
      echo '</script>'; 
   } 
} 
  
mysqli_close($conn); 
header($link);
?>