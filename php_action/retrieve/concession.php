<?php


$sql1 = "SELECT c.serial, c.stall, c.name, o.fname, o.lname, c.function, cd.id FROM concession c JOIN concession_details cd ON c.id = cd.cdid JOIN owner o ON cd.odid = o.id WHERE cd.active = 1 AND cd.deletion = 1";
$query1 = mysqli_query($conn, $sql1);


$sql5 = "SELECT c.serial, c.name, c.id from concession_details cd JOIN concession c ON cd.cdid = c.id where cd.deletion";
$query5 = mysqli_query($conn, $sql5);

$sql39 = "SELECT c.name, cs.name, cs.lower, cs.higher, cs.description, cs.id from concession_services cs JOIN concession c ON cs.cdid = c.id where deletion = '1'";
$query39 = mysqli_query($conn, $sql39);


$sql40 = "SELECT c.name, cs.place, cs.date_start, cs.date_end, cs.id from concession_experience cs JOIN concession c ON cs.cdid = c.id where deletion = '1'";
$query40 = mysqli_query($conn, $sql40);


$sql98 = "SELECT c.name, cs.name, cs.brand, cs.type, cs.description, cs.id from concession_equipment cs JOIN concession c ON cs.cdid = c.id where deletion = '1'";
$query98 = mysqli_query($conn, $sql98);

$sql67 = "SELECT * FROM contract";
$query67 = mysqli_query($conn, $sql67);

?>