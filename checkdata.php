<?php
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
       
$sql = "SELECT username FROM pranjal_signup";
    
    $result = $conn->query($sql);
    $rows = array();
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $rows[] = $row['username'];
            echo $row['username'];
        }
    }
/* else { $rows=== "zero"; }
    if ($rows === "zero") {
    echo "ok";
    die();
  }
$input = $_GET["username"];
$x = 1;
foreach ($rows as $row) {
    if ($row["username"] === $input) {
        $x = 0;
        break;
    }
} 
    if ($x==1) { $x = "ok";} 
    else { $x = "not ok";}

echo $x;
 exit();

?> */
$rows[] = "pranjal ";
// get the q parameter from URL

$hint = "";

// lookup all hints from array if $q is different from "" 
if ($q !== "") {
      $q = strtolower($q);
          $len=strlen($q);
              foreach($rows as $name) {
                        if (stristr($q, substr($name, 0, $len))) {
                                      if ($hint === "") {
                                                        $hint = $name;
                                                                    } else {
                                                                                      $hint .= ", $name";
                                                                                                  }
                                              }
                            }
}

// Output "no suggestion" if no hint was found or output correct values 
echo $hint === "" ? "no suggestion" : $hint;
?>
