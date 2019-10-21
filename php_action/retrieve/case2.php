<?php


$id = $_GET['id'];

$sql11 = "SELECT * FROM cases WHERE id = '$id'";
$query11 = mysqli_query($conn, $sql11);

$row11 = mysqli_fetch_array($query11);

?>