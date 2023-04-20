<!DOCTYPE html>
<html>
    <head> 
        <style>
			
			
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
	$sname = $mname = $lname = $bdate = $gender = $hobbies = $address = $pincode = $city = $cno = "";
	
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$sname = test_input($_POST["sname"]);
		$mname = test_input($_POST["mname"]);
		$lname = test_input($_POST["lname"]);
		$bdate = test_input($_POST["bdate"]);
		$gender = test_input($_POST["gender"]);
		$hobbies = test_input($_POST["hobbies"]);
		$address = test_input($_POST["address"]);
		$pincode = test_input($_POST["pincode"]);
		$city = test_input($_POST["city"]);
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
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <table>
        <h1><b>Student Details</b></h1>
        <hr color="green" width="60%">
        <td>Student name:</td><td><input type="text" name="sname" value="sname"></td></tr>
        <td>Middle name:</td><td><input type="text" name="mname" value="mname"></td></tr>
        <td>last name:</td><td><input type="text" name="lname" value="lname"></td></tr>
        <td>Birth date:</td><td><input type="date" name="bdate" value="bdate"></td></tr>
        <td> Gender:</td><td><input type="radio" name="gender" value="male">male
        <input type="radio" name="gender" value="female">female
        <tr>
            <td rowspan="4" name="hobbies"> Hobbies:</td>
            <td><input type="checkbox" value="cricket" name="hobbies">Cricket</td><tr>
            <td><input type="checkbox" value="writing" name="hobbies">writing</td><tr>
            <td><input type="checkbox" value="reading" name="hobbies">Reading</td><tr>
            <td><input type="checkbox" value="singing" name="hobbies">singing</td><tr>
            <tr>
        <td>Address:</td><td><textarea rows="3" cols="25" name="address" value="address"></textarea></td></tr> 
        <td>Pincode:</td><td><input type="text" name="pincode" value="pincode"></td></tr>
        <td>City:</td><td><select name="city" value="city">
          <option>--Select City--</option>
		  <option>Ahmedabad</option>
		  <option>Surat</option>
		  <option>Rajkot</option>
		  <option>Surendranagar</option>
		   <option>Vadodara</option>
		  <option>Junagadh</option>
         </select>  
         <tr>    
         <td>Contact No.:</td><td><input type="text" name="t6" size="25" name="cno" value="cno"></td></tr>
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