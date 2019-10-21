<?php


$id = $_GET['id'];


$sql29 = "SELECT f.id, c.stall, c.area, fd.evaluation, fd.feedback_type, fd.message, s.name, s.id_info, s.email, s.contact FROM ((feedback f JOIN sender s ON f.sender_id = s.id) JOIN feedback_details fd ON f.feedback_info_id = fd.id) JOIN concession c ON f.store_id = c.id where f.id = '$id'";
$query29 = mysqli_query($conn, $sql29);


$row29 = mysqli_fetch_array($query29);
   

?>