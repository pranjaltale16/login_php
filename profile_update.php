<?php
session_start();
?>
<!DOCTYPE html>
<?php
$flag = 1;
$errformat = "";
$name = $_SESSION["uname"];
function test_input($data) {
       $data = trim($data);
       $data = stripslashes($data); 
       $data = htmlspecialchars($data);
       return $data;
}
if (empty($_POST["email"])) {

} else {
  $email = test_input($_POST["email"]);
  // check if e-mail address is well-formed
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errformat =  "Invalid email format"; 
    $flag = 0;
  }
}



$mobile = $_POST["mobileno"];
$conn=new mysqli("172.25.55.156", "test", "test","test");
if($conn->connect_error){die("Connection failed: " .$conn->connect_error);}

$target_dir = "uploads/";
$target_file = $target_dir.basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

$target_dira = "uploads/";
$target_filea = $target_dira.basename($_FILES["fileToUploa"]["name"]);
$uploadOka = 1;
$imageFileTypea = pathinfo($target_filea,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
        $checka = getimagesize($_FILES["fileToUploa"]["name"]);
        $uploadOka = 1;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0 and $uploadOka == 0 or $flag == 0) {
      echo "Sorry, your file was not uploaded.";
      // if everything is ok, try to upload file
} else {
      if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file) or move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_filea)) {

   if($uploadOk == 1) {             echo "The file ". basename( $_FILES["fileToUploa"]["name"]). " has been uploaded.";
                echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
                $sql = "update pranjal_signup set passwrd2 = '$target_file' where username = '$name'";
                $result = mysqli_query($conn,$sql);
   }
   if($uploadOka == 1) {             $sqla = "update pranjal_signup set cover = '$target_filea' where username = '$name'";
                                $result = mysqli_query($conn,$sqla);
   }         



    echo "<script> window.location.assign('profile.php') </script>";
      }
      else {
                              echo "Sorry, there was an error uploading your file.";
                                  }
}
 $sqla = "UPDATE pranjal_signup set mobile = '$mobile' where username = '$name' ";
 $result = mysqli_query($conn,$sqla);
 $sqlb = "UPDATE pranjal_signup set email = '$email' where username = '$name' ";
 $result = mysqli_query($conn,$sqlb);



?>



<html>
	<head>
		<link rel="stylesheet" type="text/css" href="CSS/sign.css">
		<link rel="icon" href="images/favicon.ico" type="image/gif" sizes="16x16">
	<title>Edit-page</title>
	</head>

	<body  >
	<div class="all"   >
	<fieldset><legend>Profile edit</legend>
		
		<div class="input">
		<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" enctype="multipart/form-data">
			  Name:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<br> 
  			<input type="text" name="name" value ="<?php echo $name ?>"   > <br><br>
  			Mobile No:&nbsp&nbsp<br>
  			<input type="integer" name="mobileno"required ><br><br>
  			E-mail:&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp <?php  echo $errformat;  ?>   <br>
  			<input type="email" name="email" required  ><br><br>
  			Profile pic:&nbsp&nbsp<br>
  			<input type="file" name="fileToUpload" size="40" required ><br><br>
	    	Cover pic:&nbsp&nbsp<br>
	    	<input type="file" name="fileToUploa" size="40" required ><br><br><br>
		<div class="rdo" align="center">	<!-- profile pic area and all to be updated here only  -->
		</div >
			<input type="submit" value="Update" >
		</form>
		</div>
	</fieldset>
	</div>
	</body>
</html>
