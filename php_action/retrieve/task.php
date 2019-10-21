<?php

$sql27 = "SELECT * FROM cases WHERE deletion = '1'";
$query27 = mysqli_query($conn, $sql27);

$sql28 = "SELECT * FROM user_details where deletion = '1' AND active = 1";
$query28 = mysqli_query($conn, $sql28);


$sql30 = "SELECT t.task_name, t.priority, t.date_start, t.date_due, c.case_name, u.fname, u.lname, t.id FROM (task t JOIN user_details u ON t.assigned_admin = u.id) JOIN cases c ON t.case_id = c.id where t.deletion = '1'";
$query30 = mysqli_query($conn, $sql30);

?>