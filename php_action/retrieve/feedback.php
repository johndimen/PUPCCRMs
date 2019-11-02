<?php
//user/feedback
        
$sql1 = "SELECT distinct function FROM concession";
$query1 = mysqli_query($conn, $sql1);

             
$sql2 = "SELECT distinct area FROM concession";
$query2 = mysqli_query($conn, $sql2);


if(isset($_POST['next']))
{
    $area = $_POST['location'];
    $function = $_POST['category'];
    $sql3 = "SELECT * FROM concession where area = '$area' AND function = '$function'";
    $query3 = mysqli_query($conn, $sql3);
    
}




 //admin/feedback       
$sql9 = "SELECT s.name, fd.message,c.area, f.date, f.id, f.ifview FROM ((feedback f JOIN sender s ON f.sender_id = s.id) JOIN feedback_details fd ON f.feedback_info_id = fd.id) JOIN concession c ON f.store_id = c.id WHERE f.deletion = '1'";
$query9 = mysqli_query($conn, $sql9);


$sql77 = "SELECT f.id, f.serial, c.name FROM ((feedback f JOIN sender s ON f.sender_id = s.id) JOIN feedback_details fd ON f.feedback_info_id = fd.id) JOIN concession c ON f.store_id = c.id WHERE f.deletion = '1'";
$query77 = mysqli_query($conn, $sql77);

$sql78 = "SELECT c.id, c.message, c.date FROM (complaint c join sender s on c.sender = s.id) join concession cs on c.store = cs.id order by c.date desc";
$query78 = mysqli_query($conn, $sql78);


$sql90 = "SELECT f.id, f.serial, c.name FROM ((feedback f JOIN sender s ON f.sender_id = s.id) JOIN feedback_details fd ON f.feedback_info_id = fd.id) JOIN concession c ON f.store_id = c.id WHERE f.deletion = '0'";
$query90 = mysqli_query($conn, $sql90);

 
?>