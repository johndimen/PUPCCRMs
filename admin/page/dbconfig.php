<?php
//$ipaddress = md5($_SERVER['REMOTE_ADDR']); // here I am taking IP as UniqueID but you can have user_id from Database or SESSION

$servername = "localhost"; // Server details
$username = "root";
$password = "";
$dbname = "pupccrm_db";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("ERROR: Unable to connect to Server: " . $conn->connect_error);
}else {

}
?>