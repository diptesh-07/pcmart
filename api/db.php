<?php
// $conn = new mysqli('localhost','root','','pcmart');
// if($conn->connect_error){
//     die('connection lost'.$conn->connect_error);
// }
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "pcmart";
$conn = new mysqli($servername, $username, $password, $db_name, 3306);

if ($conn->connect_error) {
    die("connection failed" . $conn->connect_error);
}
echo "";
?>