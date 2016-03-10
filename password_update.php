<?php
session_start();
?>
<!DOCTYPE html>
 <?php

  $user= test_input($_POST["username"]);    
  $pass= test_input($_POST["passwrd"]);
  $pass1= test_input($_POST["passwrd1"]);
  $pass2= test_input($_POST["passwrd2"]);



function test_input($data) {
        $data = trim($data);
           $data = stripslashes($data);
              $data = htmlspecialchars($data);
                 return $data;
                    }
  $servername = "172.25.55.156";
    $username = "test";
      $password = "test";
        $dbname = "test";

          // Create connection
          $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
            }
$e = $_SESSION["password"];
echo $user;   
echo $e;
if($pass1 == $pass2 and $e == $pass )
{
 $sql = "UPDATE pranjal_signup set passwrd1 = '$pass1' where username = '$user' ";
 $result = mysqli_query($conn,$sql);
}

$conn->close();



?>

<html>
	<head>
		<link rel="stylesheet" type="text/css" href="CSS/sign.css">
		<link rel="icon" href="images/favicon.ico" type="image/gif" sizes="16x16">
	<title>Password_update</title>
	</head>

	<body  >
	<div class="all"   >
	<fieldset><legend>Password edit</legend>
		
		<div class="input">
		<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
   			User name:&nbsp&nbsp<br> 
  			<input type="text" name="username"><br><br>
  			Enter old password:&nbsp&nbsp<br> 
  			<input type="integer" name="passwrd"><br><br>
  			New Password:&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp<br> 
  			<input type="text" name="passwrd1"><br><br>
  			Confirm New Password:&nbsp&nbsp<br>
  			<input type="text" name="passwrd2" size="40"><br><br>
			<input type="submit" value="Update" >
		</form>
		</div>
	</fieldset>
	</div>
	</body>
</html>
