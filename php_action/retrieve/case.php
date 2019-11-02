<?php

$sql10 = "SELECT * FROM cases WHERE deletion = '1' AND status = 'pending'";
$query10 = mysqli_query($conn, $sql10);


$sql12 = "SELECT * FROM cases WHERE deletion = '0' || status = 'tasked'";
$query12 = mysqli_query($conn, $sql12);

?>