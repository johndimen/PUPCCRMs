<?php

$sql10 = "SELECT * FROM cases WHERE deletion = '1' AND assigned_admin = '$userid'";
$query10 = mysqli_query($conn, $sql10);

?>