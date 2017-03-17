<?php 
session_start();
?>
<html>
<head>
  <meta charset="UTF-8">
  <title>Directory Contents</title>
  <link rel="stylesheet" href=".style.css">
  <script src=".sorttable.js"></script>
</head>
<style type="text/css">
    * {
    padding:0;
    margin:0;
    box-sizing: border-box;
}

body {
    color: #333;
    font: 14px Sans-Serif;
    padding: 50px;
    background: #eee;
}

h1 {
    text-align: center;
    padding: 20px 0 12px 0;
    margin: 0;
}
h2 {
    font-size: 16px;
    text-align: center;
    padding: 0 0 12px 0; 
}

#container {
    box-shadow: 0 5px 10px -5px rgba(0,0,0,0.5);
    position: relative;
    background: white; 
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
<body>
    
    <table class="sortable">
      <thead>
        <tr>
          <th>Filename</th>
          <th>Type</th>
          <th>Size <small>(bytes)</small></th>
          <th>Date Modified</th>
        </tr>
      </thead>
      <tbody>
      
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ugitbase";
$name = $_SESSION["name"];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM admin";
$result = mysqli_query($conn, $sql);
$temp_array = array();

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      if($row["name"]==$name)
          array_push($temp_array, $row["project"]);
      }
} else {
    echo "0 results";
}

mysqli_close($conn);

      $temp_count = count($temp_array);
        // Opens directory
        $myDirectory=opendir(".");
        $dirArray = array();
        $dirArray = $temp_array;
        
        // Finds extensions of files
        function findexts ($filename) {
          $filename=strtolower($filename);
          $exts=split("[/\\.]", $filename);
          $n=count($exts)-1;
          $exts=$exts[$n];
          return $exts;
        }
        
        // Closes directory
        closedir($myDirectory);
        
        // Counts elements in array
        $indexCount=count($dirArray);
        
        // Sorts files
        sort($dirArray);
        
        // Loops through the array of files
        for($index=0; $index < $indexCount; $index++) {
        
          // Allows ./?hidden to show hidden files
          if($_SERVER['QUERY_STRING']=="hidden")
          {$hide="";
          $ahref="./";
          $atext="Hide";}
          else
          {$hide=".";
          $ahref="./?hidden";
          $atext="Show";}
          if(substr("$dirArray[$index]", 0, 1) != $hide) {
          
          // Gets File Names
          $name=$dirArray[$index];
          $namehref=$dirArray[$index];
          
          // Gets Extensions 
          $extn=findexts($dirArray[$index]); 
          
          // Gets file size 
          $size=number_format(filesize($dirArray[$index]));
          
          // Gets Date Modified Data
          $modtime=date("M j Y g:i A", filemtime($dirArray[$index]));
          $timekey=date("YmdHis", filemtime($dirArray[$index]));
          
          // Prettifies File Types, add more to suit your needs.
          switch ($extn){
            case "png": $extn="PNG Image"; break;
            case "jpg": $extn="JPEG Image"; break;
            case "svg": $extn="SVG Image"; break;
            case "gif": $extn="GIF Image"; break;
            case "ico": $extn="Windows Icon"; break;
            
            case "txt": $extn="Text File"; break;
            case "log": $extn="Log File"; break;
            case "htm": $extn="HTML File"; break;
            case "php": $extn="PHP Script"; break;
            case "js": $extn="Javascript"; break;
            case "css": $extn="Stylesheet"; break;
            case "pdf": $extn="PDF Document"; break;
            
            case "zip": $extn="ZIP Archive"; break;
            case "bak": $extn="Backup File"; break;
            
            default: $extn=strtoupper($extn)." File"; break;
          }
          
          // Separates directories
          if(is_dir($dirArray[$index])) {
            $extn="&lt;Directory&gt;"; 
            $size="&lt;Directory&gt;"; 
            $class="dir";
          } else {
            $class="file";
          }
          
          // Cleans up . and .. directories 
          if($name=="."){$name=". (Current Directory)"; $extn="&lt;System Dir&gt;";}
          if($name==".."){$name=".. (Parent Directory)"; $extn="&lt;System Dir&gt;";}
          
          // Print 'em
          print("
          <tr class='$class'>
            <td><a href='./$namehref'>$name</a></td>
            <td><a href='./$namehref' download>$extn</a></td>
            <td><a href='./$namehref' download>$size</a></td>
            <td sorttable_customkey='$timekey' download><a href='./$namehref'>$modtime</a></td>
          </tr>");
          }
        }
      ?>
      </tbody>
    </table>
  
    <h2><?php print("<a href='$ahref'>$atext hidden files</a>");?></h2>
    
  </div>
  
</body>
</html>