<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image 
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "<h3>File is an image - " . $check["mime"] . ".","</h3>";
    $uploadOk = 1;
  } else {
    echo "<h3>File is not an image.</h3>";
    $uploadOk = 0;
  }
}
?>

<html>
  
<body>
    
    <h3> This is the content of datetime.php file </h3>
    <?php 
        include("datetime.php");
    ?>      
    <h3> This is content after including another file content </h3>
</body>
</html>