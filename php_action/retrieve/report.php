<?php 
$sql89 = "SELECT f.serial, c.stall, avg(fd.evaluation), fd.feedback_type, s.type, c.area from ((feedback f JOIN feedback_details fd ON f.feedback_info_id = fd.id) JOIN sender s on f.sender_id = s.id) join concession c on f.store_id = c.id WHERE f.deletion = '1'
group by c.stall
";
$query89 = mysqli_query($conn, $sql89);

$sql90 = "SELECT * FROM cases wHERE deletion = '1'";
$query90 = mysqli_query($conn, $sql90);

$sql91 = "SELECT t.id, t.task_name, t.case_id, t.date_start, t.date_due, u.fname, u.lname FROM (task t join cases c ON t.case_id = c.id) JOIN user_details u on t.assigned_admin = u.id wHERE t.deletion = '1'";
$query91 = mysqli_query($conn, $sql91);

$sql92 = "SELECT * FROM concession order by area";
$query92 = mysqli_query($conn, $sql92);

$sql93 = "SELECT c.serial, c.name, c.function, avg(fd.evaluation) from ((feedback f JOIN feedback_details fd ON f.feedback_info_id = fd.id) JOIN sender s on f.sender_id = s.id) join concession c on f.store_id = c.id WHERE f.deletion = '1' 
group by f.store_id order by 4 desc";
$query93 = mysqli_query($conn, $sql93);

$sql94 = "SELECT c.serial, c.name, c.function, sum(fd.evaluation)/count(f.id) from ((feedback f JOIN feedback_details fd ON f.feedback_info_id = fd.id) JOIN sender s on f.sender_id = s.id) join concession c on f.store_id = c.id WHERE f.deletion = '1' 
group by f.store_id order by 4 asc";
$query94 = mysqli_query($conn, $sql94);


?>