<?php
/*
$a[] = "Anna";
$a[] = "Brittany";
$a[] = "Cinderella";
$a[] = "Diana";
$a[] = "Eva";
$a[] = "Fiona";
$a[] = "Gunda";
$a[] = "Hege";
$a[] = "Inga";
$a[] = "Johanna";
$a[] = "Kitty";
$a[] = "Linda";
$a[] = "Nina";
$a[] = "Ophelia";
$a[] = "Petunia";
$a[] = "Amanda";
$a[] = "Raquel";
$a[] = "Cindy";
$a[] = "Doris";
$a[] = "Eve";
$a[] = "Evita";
$a[] = "Sunniva";
$a[] = "Tove";
$a[] = "Unni";
$a[] = "Violet";
$a[] = "Liza";
$a[] = "Elizabeth";
$a[] = "Ellen";
$a[] = "Wenche";
$a[] = "Vicky";
*/
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
            $a[] = $row['username'];
        }
    }

// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from "" 
if ($q !== "") {
      $q = strtolower($q);
          $len=strlen($q);
              foreach($a as $name) {
                        if (stristr($q, substr($name, 0, $len))) {
                                      if ($hint === "") {
                                                        $hint = $name." already exist ";
                                                                    } else {
                                                                                      $hint .= ", $name"." already exist";
                                                                                                  }
                                              }
                            }
}

// Output "no suggestion" if no hint was found or output correct values 
echo $hint === "" ? "no suggestion" : $hint;
?>
