<?php 

$id = $_GET["id"];

$sql5 = "SELECT * FROM `concession_items` WHERE id = '$id'";
$query5 = mysqli_query($conn, $sql5);


$sql5 = "SELECT ci.item, ci.type, ci.price, ci.description, ci.serial, c.name, ci.id FROM concession_items ci JOIN concession c ON ci.cdid = c.id WHERE ci.id = '$id'";
$query6 = mysqli_query($conn, $sql5);

?>