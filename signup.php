<?php
session_start();
?>

<!DOCTYPE html>

<?php
$servername ="172.25.55.156";
$username = "test";
$password = "test";
$database = "test";
$conn = mysqli_connect($servername,$username,$password,$database);


if ($_SERVER["REQUEST_METHOD"] == "POST"){ 
$name=test_input($_POST['name']);
$mno = test_input($_POST['mobileno']);
$email =test_input($_POST['email']);
$uname =test_input($_POST['username']);
$pone = test_input($_POST['passwrd1']);
$ptwo = test_input($_POST['passwrd2']);
$gen = test_input($_POST['gender']);
$dob = test_input($_POST['dob']);
}

function test_input($data) {
        $data = trim($data);
           $data = stripslashes($data);
              $data = htmlspecialchars($data);
                 return $data;
                    }
 


$sql = "INSERT INTO pranjal_signup(name,mobile,email,username,passwrd1,passwrd2,gender,DOB) VALUES ('$name','$mno','$email','$uname','$pone','$ptwo','$gen','$dob-12-12')";
if($pone == $ptwo)  
 {
if (mysqli_query($conn, $sql)  ) {
   echo "DONE"; 
}
 } 
else {
       echo "Error try again";
}

      mysqli_close($conn);
?>

<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/sign.css">
		<link rel="icon" href="images/favicon.ico" type="image/gif" sizes="16x16">
	<title>SIGN-UP</title>
	</head>

	<body  >
	<div class="all"   >
  <fieldset><legend>Hello</legend>
		<span class="top"><h2></h2></span>
		<div class="input">
<form action = "<?php echo $_SERVER['PHP_SELF'];?>" method = "post">
		
			  Name:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 
  			<input type="text" name="name" placeholder = "Pranjal"><br><br>
        Mobile no:&nbsp&nbsp&nbsp&nbsp
        <input type="integer" name="mobileno" placeholder = "9584752163"><br><br>
        E-mail&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 
        <input type= "text" name ="email" placeholder = "ptale16mail.com"><br><br>
		 	  User name:&nbsp&nbsp &nbsp
  			<input type="text" name="username" placeholder = "Pranjaltale16"><br><br>
  			Password:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 
  			<input type="password" name="passwrd1" placeholder = "**********" ><br><br>
        Re-Password:
                <input type="password" name="passwrd2" placeholder = "**********" >
		</div>
		<div class="rdo">
  			<input type="radio" name="gender" value="male"  selected> Male
  			<input type="radio" name="gender" value="female"> Female
		</div>
		<div class="ddown"
		  name="dob">
			Year of birth:
  			<select>
  				<option>Select Year</option>
  				<option value="1993">1993</option>
    			<option value="1994">1994</option>
          <option value="1995">1995</option>
    			<option value="1996">1996</option>
    			<option value="1997">1997</option>
    			<option value="1998">1998</option>
  			</select>
    </div>
		<div class="foot">
			<button type="button"><a href="login.php" target = "_blank">LOGIN</a></button>
			<input type="submit" value = "SIGN-UP">
    </form>
		</div>
    </fieldset>
	</div>

	</body>

</html>
