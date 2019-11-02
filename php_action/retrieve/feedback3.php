<?php


$id = $_GET['id'];






$sql29 = "SELECT f.serial, c.stall, c.area, fd.evaluation, fd.feedback_type, fd.message, s.name, s.id_info, s.email, s.contact, fd.hygiene, fd.hospitable, fd.conditions, fd.environment, fd.price, fd.service, f.id FROM ((feedback f JOIN sender s ON f.sender_id = s.id) JOIN feedback_details fd ON f.feedback_info_id = fd.id) JOIN concession c ON f.store_id = c.id where f.id = '$id'";
$query29 = mysqli_query($conn, $sql29);


$row29 = mysqli_fetch_array($query29);
   

$id = $_GET['id'];



$sql90 = "SELECT c.serial, c.message, cs.stall, cs.area, s.name, s.id_info, s.email, s.contact, c.id FROM (complaint c join sender s on c.sender = s.id) join concession cs on c.store = cs.id where c.id = '$id'";
$query90 = mysqli_query($conn, $sql90);


$row90 = mysqli_fetch_array($query90);


?>