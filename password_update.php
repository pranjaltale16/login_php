<?php
session_start();
?>
<!DOCTYPE html>
 <?php

  $user= $_SESSION["uname"];
  $pass= test_input($_POST["passwrd"]);
  $passa= test_input($_POST["passwrd1"]);
  $passb= test_input($_POST["passwrd2"]);



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
$pass = sha1($pass);
//echo $user;   
echo $e;
//echo $passa;
//echo $passb;
$passa = sha1($passa);
$passb = sha1($passb);
if($passa == $passb and $e == $pass )
{
 $sql = "UPDATE pranjal_signup set passwrd1 = '$passa' where username = '$user' ";
 $result = mysqli_query($conn,$sql);
 echo "<script> window.location.assign('profile.php') </script>";
}
else
 { echo "try again";  }
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
  			<input type="text"  required  value = <?php echo $user; ?>><br><br>
  			Enter old password:&nbsp&nbsp<br> 
  			<input type="password" name="passwrd" required ><br><br>
  			New Password:&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp<br> 
  			<input type="password" name="passwrd1" required ><br><br>
  			Confirm New Password:&nbsp&nbsp<br>
  			<input type="password" name="passwrd2" size="40" required ><br><br>
			<input type="submit" value="Update" >
		</form>
		</div>
	</fieldset>
	</div>
	</body>
</html>
