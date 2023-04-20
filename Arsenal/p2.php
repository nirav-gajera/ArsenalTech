<!DOCTYPE html>
<html>
    <head> 
        <style>
			.error {
				color: #FF0000;
				}
			
            form
            {
                border-radius: 25px;
                outline-style: dashed;
                outline-color: blue;
                font-family: "Lucida Console", "Courier New", monospace;

                padding-top: 50px;
                padding-right: 10px;
                padding-bottom: 50px;
                padding-left: 10px;

                background-image: url("abc.jpg");
                background-repeat: no-repeat;
                background-size: cover;
                opacity: 0.8;
            }
            h1
            {
                text-transform: uppercase;
                font-family: "Times New Roman", Times, serif;
            }

            .t1
            {
                    background-color: #4CAF50;
                    border: 2px solid black;
                    border-radius: 12px;
                    color: rgb(255, 255, 255);
                    padding: 10px 30px;
                    text-align: center;
                    display: inline-block;
                    font-size: 16px;
                    opacity: 0.9;
                    
            }   
   



        </style>
    <title></title>
        </head>
    <body bgcolor="whitesmoke">
	<?php
	$snameErr = $mnameErr = $lnameErr = $dateErr = $genderErr = $hobbiesErr 
	= $addressErr = $pincodeErr = $cityErr = $cnoErr = "";
	$sname = $mname = $lname $date = $gender = $hobbies = $address = 
	$pincode = $city = $cno = "";
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["sname"])) {
    $snameErr = "Name is required";
  } else {
    $sname = test_input($_POST["sname"]);
    
    if (!preg_match("/^[a-zA-Z-' ]*$/",$sname)) {
      $snameErr = "Only letters and white space allowed";
    }
  }
   if (empty($_POST["mname"])) {
    $mnameErr = "Name is required";
  } else {
    $mname = test_input($_POST["mname"]);
    
    if (!preg_match("/^[a-zA-Z-' ]*$/",$mname)) {
      $mnameErr = "Only letters and white space allowed";
    }
  }
   if (empty($_POST["lname"])) {
    $lnameErr = "Name is required";
  } else {
    $lname = test_input($_POST["lname"]);
    
    if (!preg_match("/^[a-zA-Z-' ]*$/",$lname)) {
      $lnameErr = "Only letters and white space allowed";
    }
  }
  
    if (empty($_POST["date"])) {
    $dateErr = "Birth date is requierd";
  } else {
    $date = test_input($_POST["date"]);
  }
  
  if (empty($_POST["gender"])) {
    $genderErr = "Gender is requierd";
  } else {
    $gender = test_input($_POST["gender"]);
  }

	
	?>
	
    <center>
        <form>
        <table>
        <h1><b>Student Details</b></h1>
        <hr color="green" width="60%">
        <td>Student name:</td><td><input type="text" name="sname"></td></tr>
        <td>Middle name:</td><td><input type="text" name="mname"></td></tr>
        <td>last name:</td><td><input type="text" name="lname"></td></tr>
        <td>Birth date:</td><td><input type="date" name="date"></td></tr>
        <td> Gender:</td><td><input type="radio" name="gender" value="male">male
        <input type="radio" name="gender" value="female">female
        <tr>
            <td rowspan="4" name="hobbies"> Hobbies:</td>
            <td><input type="checkbox" value="cricket" name="h1">Cricket</td><tr>
            <td><input type="checkbox" value="writing" name="h2">writing</td><tr>
            <td><input type="checkbox" value="reading" name="h3">Reading</td><tr>
            <td><input type="checkbox" value="singing" name="h4">singing</td><tr>
            <tr>
        <td>Address:</td><td><textarea rows="3" cols="25" name="address"></textarea></td></tr> 
        <td>Pincode:</td><td><input type="text" name="pincode"></td></tr>
        <td>City:</td><td><select name="city">
          <option>--Select City--</option>
		  <option>Ahmedabad</option>
		  <option>Surat</option>
		  <option>Rajkot</option>
		  <option>Surendranagar</option>
		   <option>Vadodara</option>
		  <option>Junagadh</option>
         </select>  
         <tr>    
         <td>Contact No.:</td><td><input type="text" name="t6" size="25" name="cno"></td></tr>
         <tr>
           <td class="t1" align="center"><input type="submit" value="submit" name="submit"></td>
            
                   

            </table>
    </form>
	<?php
	echo "<h2>Your Input:</h2>";
	echo $sname;
	echo "<br>";
	echo $mname;
	echo "<br>";
	echo $lname;
	echo "<br>";
	echo $date;
	echo "<br>";
	echo $gender;
	echo "<br>";
	echo $hobbies;
	echo "<br>";
	echo $address;
	echo "<br>";
	echo $pincode;
	echo "<br>";
	echo $city;
	echo "<br>";
	echo $cno;
	echo "<br>";
	
	?>
	
    </center>
    </body>
</html>