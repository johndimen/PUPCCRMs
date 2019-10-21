<?php


$id = $_GET['id'];


$sql30 = "SELECT t.task_name, t.priority, t.date_start, t.date_due, t.task_desc, u.fname, u.lname, c.case_number, c.case_name, c.type, c.priority, c.case_desc, t.id FROM (task t JOIN cases c ON t.case_id = c.id) JOIN user_details u ON t.assigned_admin = u.id WHERE t.id = '$id'";
$query30 = mysqli_query($conn, $sql30);
$row30 = mysqli_fetch_array($query30);

?>