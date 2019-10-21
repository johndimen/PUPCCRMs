<?php 



$webtitle = '<span class="logo-lg"><b>PUP</b>CCRMs</span>';


              
$sql1 = "SELECT * FROM user_details where id = $userid";
$query = mysqli_query($conn, $sql1);




$row = mysqli_fetch_array($query);
$name  =   $row['lname'];



?>