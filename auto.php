<?php 
session_start();


    $user = $pass ="";
      if ($_SERVER["REQUEST_METHOD"] == "POST"){
         if(empty($_POST['username']))
            {
                     echo "UserName/Password is empty!";
                                return false;
                                }
          else{  $user= test_input($_POST["username"]);}
           if(empty($_POST['passwrd']))
              {
                       echo "Password is left blank";
                                  return false;
                                   }
            else{ $pass= test_input($_POST["passwrd"]);
                  $pass = sha1($pass);    
            }
              } 
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
$sql="SELECT * FROM pranjal_signup  WHERE username='$user' and passwrd1='$pass'";
$result=mysqli_query($conn, $sql);

$count=mysqli_num_rows($result);

if ($count==1) {


$_SESSION["uname"] = $user;
$cookie_name = "user";
$cookie_value = $user;
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
echo "<script> window.location.assign('profile.php') </script>";
            
} else {
        echo "Invalid Match";
}

$conn->close()


 ?>

