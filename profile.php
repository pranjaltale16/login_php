<?php
session_start();
?>
<!DOCTYPE html>
<?php

#require 'login.php';

$conn=new mysqli("172.25.55.156", "test", "test","test");
if($conn->connect_error){die("Connection failed: " .$conn->connect_error);}
$name = $_SESSION["uname"];
echo $name;
$sql = "SELECT * from pranjal_signup where username = '$name'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
$_SESSION["mobile"] = $row["mobile"];
$_SESSION["name"] = $row["name"]; 
$_SESSION["email"] = $row["email"];
$_SESSION["password"] = $row["passwrd1"];
?>



<html>
	<head>
		<link rel="stylesheet" type="text/css" href="CSS/sign.css">
		<link rel="icon" href="images/favicon.ico" type="image/gif" sizes="16x16">
	<title>Profile</title>
	</head>

	<body  >
	<div class="all"   >
	<fieldset><legend>Profile</legend>

		<div class="input">

			Name:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<br>
      <?php echo $row["name"] ?><br>
			User name:&nbsp&nbsp<br> 
      <?php echo $row["username"] ?><br>
  		Mobile No:&nbsp&nbsp<br> 
      <?php echo $row["mobile"]; ?><br>
  		E-mail:&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp<br> 
      <?php echo $row["email"]; ?><br>





      <div class="rdo" align="center">	<!-- profile pic area and all to be updated here only  -->
		Profile pic:&nbsp&nbsp<br>
		<img src="" height="150" width="150" alt="Please update pics first"><br>
		Cover pic:&nbsp&nbsp<br>
		<img src="" height="150" width="300" alt="Please update pics first">  
		</div >


		<form method = "post" action="profile_update.php" target="_blank">
			<input type="submit" value="Update_profile" >
			<br><br	>
		</form>
		<form method = "post" action="password_update.php" target="_blank" >
			<input type="submit" value="Update_password" >


		</form>
		</div>
	</fieldset>
	</div>
	</body>
</html>
