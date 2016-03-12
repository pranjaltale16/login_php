<?php
session_start();
?>
<!DOCTYPE html>
<?php
$erremail =  " ";  $err = " " ;
$servername ="172.25.55.156";
$username = "test";
$password = "test";
$database = "test";

if ($_SERVER["REQUEST_METHOD"] == "POST"){ 
  if (!empty($_POST["username"])){
    $name=test_input($_POST['name']);
    $mno = test_input($_POST['mobileno']);
    $email =test_input($_POST['email']);
    $uname =test_input($_POST['username']);
    $pone = test_input($_POST['passwrd1']);
    $ptwo = test_input($_POST['passwrd2']);
    $gen = test_input($_POST['gender']);
    $dob = test_input($_POST['dob']);
  }

  else {echo "INPUT USERNAME";}
}


$pone = sha1($pone);
$ptwo = sha1($ptwo);

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
 
$check =1;
if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {

}
else {
  $erremail = "is not a valid email address" ;
  $GLOBALS['check']= 0;
}

$conn = mysqli_connect($servername,$username,$password,$database);
$sql = "INSERT INTO pranjal_signup(name,mobile,email,username,passwrd1,passwrd2,gender,DOB) VALUES ('$name','$mno','$email','$uname','$pone','$ptwo','$gen','$dob-12-12')";
if($pone == $ptwo and $check == 1)  
 {
   if (mysqli_query($conn, $sql)  ) {
   echo "DONE"; 
   }
   else
   {echo "user name already in use "; } 

 } 
else {
       $err = "Error try again";
      echo $erremail;
}

      mysqli_close($conn);
?>

<html>
	<head>

		<link rel="stylesheet" type="text/css" href="css/sign.css">
		<link rel="icon" href="images/favicon.ico" type="image/gif" sizes="16x16">
	

<!--<script type="text/javascript">
  function checkusername(){
        var name = document.getElementById("username").value;
        console.log(name);
        if(name !== "") {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
          if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            if(xmlhttp.responseText !== "ok"){ document.getElementById("errorfield").innerHTML = "username already exists!!" ;}
            else{ document.getElementById("errorfield").innerHTML = "";}
          }
        };
        xmlhttp.open("GET", "checkdata.php?name=" +name, true);
        xmlhttp.send();
        }
  }
  </script>
	-->
<script>
function showHint(str) {
  var xhttp;
  if (str.length == 0) { 
    document.getElementById("errorfield").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
      document.getElementById("errorfield").innerHTML = xhttp.responseText;
    }
  };
  xhttp.open("GET", "gethint.php?q="+str, true);
  xhttp.send();   
}
</script>


  <title>SIGN-UP</title>
  </head>
  <body  >
  <div class="all"   >
  <fieldset><legend>Hello</legend>
  <span class="top"><h2></h2></span>
  <div class="input">
        <form action = "<?php echo $_SERVER['PHP_SELF'];?>" method = "post">
			  Name:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 
  			<input type="text" name="name" placeholder = "Pranjal" required><br><br>
        Mobile no:&nbsp&nbsp&nbsp&nbsp
        <input type="integer" name="mobileno" placeholder = "9584752163" required ><br><br>
        E-mail&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 
        <input type= "text" name ="email" placeholder = "ptale16mail.com" required ><br><br>
		 	  User name:&nbsp&nbsp &nbsp
  			<input type="text" onkeyup="showHint(this.value)" name="username" placeholder = "Pranjaltale16" required><span id = "errorfield" ></span><br><br>
  			Password:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 
  			<input type="password" name="passwrd1" placeholder = "**********" required><br><br>
        Re-Password:
        <input type="password" name="passwrd2" placeholder = "**********" required>
	</div>
  <div class="rdo">
  			<input type="radio" name="gender" value="male"  selected> Male
  			<input type="radio" name="gender" value="female"> Female
  </div>
  <div class="ddown"  name="dob">
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
		</div>
    </form>
    </fieldset>
	</div>
	</body>
</html>
