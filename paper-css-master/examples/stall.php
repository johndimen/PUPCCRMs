<?php 
include("../../php_action/db_connect.php");

include("../../php_action/retrieve/report.php");


$year = date('Y');
$month = date('m');
$day = date('d');
$count = 0;


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>A4 landscape</title>

  <!-- Normalize or reset CSS with your favorite library -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css">

  <!-- Load paper.css for happy printing -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/paper-css/0.4.1/paper.css">

  <!-- Set page size here: A5, A4 or A3 -->
  <!-- Set also "landscape" if you need -->
  <style>@page { size: A4 landscape }</style>
</head>

<!-- Set "A5", "A4" or "A3" for class name -->
<!-- Set also "landscape" if you need -->
<body class="A4 landscape">

  <!-- Each sheet element should have the class "sheet" -->
  <!-- "padding-**mm" is optional: you can set 10, 15, 20 or 25 -->
  <section class="sheet padding-10mm">

    <!-- Write HTML just like a web page -->
    <h6 align = "right"><?php echo $month?> <?php echo $day?>, <?php echo $year?></h6>
    <center><article><font size = "6"><b>PUP CCRM</b></font></article></center>

    
  <p>
      <h3>Stall Reports</h3>
      INSTRUCTIONS:  This Stall Report Form is used to collect and report distribution of concessionaire stall around PUP. Completely print this report and Do 
      NOT make copies of this report. Fax the completed report to
      <br><br>
      <center><h2>Summary</h2></center>
<table border = "3" width= "100%">
<thead>
                                                    <tr>
                                                        <th>Serial Number</th>
                                                        <th>Business Name</th>
                                                        <th>Stall Category</th>
                                                        <th>Stall Area</th>
                                                        <th>Stall Measurement</th>
                                                        <th>Monthly Rental</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                </tbody>
                                                <tfoot>
                                                <?php while($row92 = mysqli_fetch_array($query92)){
                                                    $count++?>
                                                    <tr>
                                                        <td><?php echo $row92['serial']?></td>
                                                        <td><?php echo $row92['name']?></td>
                                                        <td><?php echo $row92['function']?></td>
                                                        <td><?php echo $row92['area']?></td>
                                                        <td><?php echo $row92['measurement']?></td>
                                                        
                                                        <td><?php echo $row92['rental']?></td>
                                                        
                                                        
                                                    </tr>
                                                <?php }?>
                                                </tfoot>
  
  </table>
  <h3 align = "right"><br>Total of : <?php echo $count?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h3>

  </p>

  <center>
  <p>*********************** End of Document ***********************</p>
  </center>
  </section>

</body>

</html>
