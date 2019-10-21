<?php 

$sql1 = "SELECT distinct c.id, c.name, c.serial FROM concession c JOIN concession_details cd WHERE cd.active = 1 AND cd.deletion = 1";
$query = mysqli_query($conn, $sql1);



$sql2 = "SELECT * FROM `concession_items` WHERE type = 'food' and (deletion = 1 and active = 1)";
$query2 = mysqli_query($conn, $sql2);



$sql3 = "SELECT * FROM `concession_items` WHERE type = 'non-food' and (deletion = 1 and active = 1)";
$query3 = mysqli_query($conn, $sql3);


$sql4 = "SELECT * FROM `concession_items` WHERE type = 'other' and (deletion = 1 and active = 1)";
$query4 = mysqli_query($conn, $sql4);


?>