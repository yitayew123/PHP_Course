<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student";

$conn = mysqli_connect($servername,$username,$password,$dbname);

// checking for connection
if(!$conn){
    die("connection Failed".mysqli_connect_error());
}
echo "connected Seccessfully";

// close connection
mysqli_close($conn);

?>