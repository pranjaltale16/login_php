<?php
setcookie("user", " ", time() - 3600, "/");
if(count($_COOKIE)){
echo "<scipt>alert('Cookies not deleted!')</script>";
}
session_unset();
session_destroy();
echo "<script> window.location.assign('login.php') </script>";
?>

