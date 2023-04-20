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
	$snameErr = $mnameErr = $lnameErr = $bdateErr = $genderErr = $hobbiesErr 
	= $addressErr = $pincodeErr = $cityErr = $cnoErr = "";
	$sname = $mname = $lname = $bdate = $gender = $hobbies = $address = 
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
  
    if (empty($_POST["bdate"])) {
    $bdateErr = "Birth date is requierd";
  } else {
    $bdate = test_input($_POST["bdate"]);
  }
  
  if (empty($_POST["gender"])) {
    $genderErr = "Gender is requierd";
  } else {
    $gender = test_input($_POST["gender"]);
  }
  
  if (empty($_POST["hobbies"])) {
    $hobbiesErr = "Hobbies is requierd";
  } else {
    $hobbies = test_input($_POST["hobbies"]);
  }

  
  if (empty($_POST["addressErr"])) {
    $addressErr = "Address is requierd";
  } else {
    $address = test_input($_POST["address"]);
  }
  
  if (empty($_POST["pincodeErr"])) {
    $pincodeErr = "Pincode is requierd";
  } else {
    $pincode = test_input($_POST["pincode"]);
  }

  if (empty($_POST["city"])) {
    $cityErr = "City is requierd";
  } else {
    $city = test_input($_POST["city"]);
  }
 
 if (empty($_POST["cno"])) {
    $cnoErr = "Contact is requierd";
  } else {
    $cno = test_input($_POST["cno"]);
  }
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

	
	?>
	
    <center>
	<p><span class="error">* required field</span></p>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <table>
        <h1><b>Student Details</b></h1>
        <hr color="green" width="60%">
        <td>Student name:</td><td><input type="text" name="sname" value="<?php echo $sname;?>"> <span class="error">* <?php echo $snameErr;?></span></td></tr>
        <td>Middle name:</td><td><input type="text" name="mname" value="<?php echo $mname;?>"><span class="error">* <?php echo $mnameErr;?></span></td></tr>
        <td>last name:</td><td><input type="text" name="lname" value="<?php echo $lname;?>"><span class="error">* <?php echo $lnameErr;?></span></td></tr>
        <td>Birth date:</td><td><input type="date" name="bdate" value="<?php echo $bdate;?>"><span class="error">* <?php echo $bdateErr;?></span></td></tr>
        <td> Gender:</td><td><input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="female">male
        <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
        <tr>
            <td rowspan="4" name="hobbies"> Hobbies:</td>
            <td><input type="checkbox" name="hobbies" <?php if (isset($hobbies) && $hobbies=="singing") echo "checked";?> value="singing">Singing</td><tr>
            <td><input type="checkbox" name="hobbies"<?php if (isset($hobbies) && $hobbies=="writing") echo "checked";?> value="writing">Writing</td><tr>
            <td><input type="checkbox" name="hobbies" <?php if (isset($hobbies) && $hobbies=="reading") echo "checked";?> value="reading">Reading</td><tr>
            <td><input type="checkbox" name="hobbies" <?php if (isset($hobbies) && $hobbies=="cricket") echo "checked";?> value="cricket">Cricket</td><tr>
            <tr>
			
			
        <td>Address:</td><td><textarea rows="3" cols="25" name="address" value="<?php echo $address;?>"> <span class="error">* <?php echo $addressErr;?></span></textarea></td></tr> 
        <td>Pincode:</td><td><input type="text" name="pincode" value="<?php echo $pincode;?>"></td></tr>
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
	echo $bdate;
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