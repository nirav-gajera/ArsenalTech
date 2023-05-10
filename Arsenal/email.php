<html>
	<head>
		<style>
			.error{color: red;}
		</style>
	</head>
<body>

<?php
$nameErr = $emailErr = "";
$name = $email = "";

if($_SERVER["REQUEST_METHOD"] == "POST")
{
	if(empty($_POST["name"]))
	{
			$nameErr = "Name is required";
	}else{
			$name = test_input($_POST["name"]);
			if(!preg_match ("/^[a-zA-Z-' ]*$/",$name))
			{
				$nameErr = "only letters & whitespace allowed";
			}
	     }
	if(empty($_POST["email"]))
	{
		$emailErr = "Email is required";
	}else{
			$email = test_input($_POST["email"]);
			if(!filter_var($email,FILTER_VALIDATE_EMAIL))
			{
				$emailErr = "Invalid email format";
			}
	}
}

  function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>

<h1>Validation</h1>
	<p><span class="error">* required field</span></p>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<b>Enter Name:</b><input type="text" name="name">
			<span class="error">* <?php echo $nameErr;?></span><br>
		<b>Enter Email:</b><input type="text" name="email">
			<span class="error">* <?php echo $emailErr;?></span><br>
		<input type="submit" name="submit">
	</form>

<?php
	echo "<h2>Your Input:</h2>";
	echo $name;
	echo "<br>";
	echo $email;
?>
</body>
</html>
