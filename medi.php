<?php
$server = "localhost";
$medname = "";
$dosage = "";
$medfun = "";
$database = "user01";

$conn = mysqli_connect($server, $medname, $dosage, $medfun, $database);
if (!$conn){
//     echo "success";
// }
// else{
    die("Error". mysqli_connect_error());
}

?>
