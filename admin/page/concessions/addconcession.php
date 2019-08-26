<?php

require('../dbconfig.php');


$inputAddress = $inputConcessionName = $inputDateApplied = $inputEmail ="";
$inputFunction = $inputNumber = $inputOwnerName = $inputRemarks = $inputStallArea ="";
$inputConcessionNumber = '';

if (isset($_POST['inputSubmit'])){
  $inputConcessionNumber = $_POST['inputConcessionNumber'];
  $inputNumber = $_POST['inputNumber'];
  $inputStallArea = $_POST['inputStallArea'];
  $inputConcessionName = $_POST['inputConcessionName'];
  $inputOwnerName = $_POST['inputOwnerName'];
  $inputEmail = $_POST['inputEmail'];
  $inputFunction = $_POST['inputFunction'];
  $inputAddress = $_POST['inputAddress'];
  $inputDateApplied = $_POST['inputDateApplied'];
  $inputRemarks = $_POST['inputRemarks'];


  $sql = "INSERT INTO `crm_concession_profile` (`CRM_Concession_Profile_SerialNo`,`CRM_Concession_Stall_Number`, `CRM_Concession_Area`, `CRM_Concession_Name`, `CRM_Concession_Owner_Name`, `CRM_Concession_Function`, `CRM_Concession_Status`, `CRM_Concession_Address`, `CRM_Concession_Email`, `CRM_Concession_Date_Applied`, `CRM_Concession_Remarks`, `CRM_Concession_IsActive`) VALUES ('$inputConcessionNumber','$inputNumber','$inputStallArea','$inputConcessionName','$inputFunction','$inputOwnerName','$inputAddress','$inputEmail','$inputDateApplied','$inputRemarks')";

  
  if(mysqli_query($conn,$sql)){
    $sucess ="Record Successfully.";
    header('location: concession-profile.php');
  }else{
    $error = "Error: Could not Execute. " .mysqli_error($conn);
    header('location: concession-add.php');
  }

}
  $rand = rand(0,99999999999);
  $inputError = '';

  if(empty($_POST['inputNumber'])){
    $inputError = "is required";
  }else{
    $inputNumber = trim($_POST['inputNumber']);
  }

  $conn -> close(); 