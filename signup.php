<!DOCTYPE html>
<?php
$servername ="172.25.55.156";
$username = "test";
$password = "test";
$conn = mysqli_connect($servername,$username,$password);
$sql = mysqli_select_db($conn,"test");


$name = " ";

$name = htmlspecialchars($_POST['name']);
$mno = htmlspecialchars($_POST['mobileno']);
$email =$_POST['email'];
$uname =$_POST['username'];
$pone = $_POST['password1'];
$ptwo = $_POST['password2'];
$gen = $_POST['gender'];
$dob = $_POST['dob'];

$sql = "INSERT INTO pranjal_signup(name,mobile,email,username,passwrd1,passwrd2,gender,DOB) VALUES ('$name','$mno','$email','$uname','$pone','$ptwo','$gen','$dob')";

if (mysqli_query($conn, $sql)) {
      echo " ";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
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
  				<option value="first">1993</option>
    			<option value="second">1994</option>
          <option value="third">1995</option>
    			<option value="fourth">1996</option>
    			<option value="fifth">1997</option>
    			<option value="sixth">1998</option>
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
