<?php



$sql31 = "SELECT count(id) FROM cases WHERE deletion = '1'";
$query31 = mysqli_query($conn, $sql31);
$case = mysqli_fetch_array($query31);

$sql32 = "SELECT count(id) FROM task WHERE deletion = '1' AND status = 'pending'";
$query32 = mysqli_query($conn, $sql32);
$task = mysqli_fetch_array($query32);


$sql33 = "SELECT count(id) FROM feedback WHERE deletion = '1' AND ifview = '1'";
$query33 = mysqli_query($conn, $sql33);
$feedback = mysqli_fetch_array($query33);




//feedback details

$sql34 = "select f.serial, fd.feedback_type, c.stall, f.date, fd.evaluation FROM (feedback f JOIN feedback_details fd ON f.feedback_info_id = fd.id) JOIN concession c ON f.store_id = c.id where f.deletion = '1'";
$query34 = mysqli_query($conn, $sql34);


?>