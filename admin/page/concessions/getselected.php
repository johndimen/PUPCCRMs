<?php

require_once '../dbconfig.php';


//get selected
$ConcessionId = $_POST['inputConcessionNumber'];

$sql = "SELECT * FROM crm_concession_profile WHERE id = $ConcessionId";
$query = $conn->query($sql);
$result1 = $query->fetch_assoc();

$connect->close();
echo json_encode($result1);
