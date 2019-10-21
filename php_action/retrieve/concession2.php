<?php


$id = $_GET['id'];


$sql1 = "SELECT c.serial, c.remarks, c.date_approved, c.stall, c.name, c.area, c.function, c.measurement, c.rental, o.fname,o.mname, o.lname, o.contact, o.email, o.address, cd.id FROM concession c JOIN concession_details cd ON c.id = cd.cdid JOIN owner o ON cd.odid = o.id WHERE cd.id = '$id'";
$query1 = mysqli_query($conn, $sql1);



$sql39 = "SELECT c.name, cs.name, cs.lower, cs.higher, cs.description, cs.id, cs.serial from concession_services cs JOIN concession c ON cs.cdid = c.id where cs.id = '$id'";
$query39 = mysqli_query($conn, $sql39);
$row39 = mysqli_fetch_array($query39);



$sql40 = "SELECT c.name, cs.place, cs.date_start, cs.date_end, cs.id, cs.serial from concession_experience cs JOIN concession c ON cs.cdid = c.id where cs.id = '$id'";
$query40 = mysqli_query($conn, $sql40);
$row40 = mysqli_fetch_array($query40);


$sql98 = "SELECT c.name, cs.name, cs.brand, cs.type, cs.description, cs.id, cs.serial from concession_equipment cs JOIN concession c ON cs.cdid = c.id where cs.id = '$id'";
$query98 = mysqli_query($conn, $sql98);
$row98 = mysqli_fetch_array($query98);


$sql67 = "SELECT * FROM contract where id = '$id'";
$query67 = mysqli_query($conn, $sql67);

$row67 = mysqli_fetch_array($query67);


?>