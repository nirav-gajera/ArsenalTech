<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname= "arsenal";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if(!$conn)
{
	die("connection failed:" .mysqli_connect_error());
}
// echo "connected successfully"

// Create database
/*
$sql = "CREATE DATABASE arsenal";
if (mysqli_query($conn, $sql)) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . mysqli_error($conn);
} 
 $sql = "CREATE TABLE employee(
  id INT(8) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  firstname VARCHAR(30) NOT NULL,
  lastname VARCHAR(30) NOT NULL,
  email VARCHAR(50),
  reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if(mysqli_query($conn,$sql)){
	echo "Table employee created successfully";
}else{
	echo "Error creating table :" .mysqli_error($conn); 
}

$sql = "INSERT INTO employee (firstname,lastname,email) VALUES('nirav','gajera','niravg.arsenal@gmail.com')";

if(mysqli_query($conn,$sql)){
	echo "New record created successfully";
}else{
	echo "Error:" .$sql. "<br>".mysqli_error($conn);
}

mysqli_close($conn);
?>*/

