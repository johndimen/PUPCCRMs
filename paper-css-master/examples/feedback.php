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
      <h3>Feedback Reports</h2>
      INSTRUCTIONS:  This Case Report Form is used to collect and report adverse cases that occurs to PUP Concessionaires in regards to the feedback of their customers. Completely print this report and Do 
      NOT make copies of this report. Fax the completed report to
      <br><br>
      <center><h2>Summary</h2></center>
<table border = "3" width= "100%">
<tr>
                                                        <th>Serial Number</th>
                                                        <th>Stall No</th>
                                                        <th>Area</th>
                                                        
                                                        <th>Evaluation</th>
                                                        
                                                        <th>Sender Type</th>
                                                    </tr>
  <?php while ($row89 = mysqli_fetch_array($query89)){
      $count++;
      ?>
    
                                                    <tr>
                                                    <?php
                                                    
if($row89[2] >= 1 && $row89[2] <= 1.4)
{
  $row89[2] = 'Extremely Poor';
} else 

if($row89[2] >= 1.5 && $row89[2] <= 1.9)
{
  $row89[2] = 'Very Poor';
}else

if($row89[2] >= 2 && $row89[2] <= 2.4)
{
  $row89[2] = 'Poor';
}else

if($row89[2] >= 2.5 && $row89[2] <= 2.9)
{
  $row89[2] = 'Below Average';
}else

if($row89[2] >= 3 && $row89[2] <= 3.4)
{
  $row89[2] = 'Average';
}else

if($row89[2] >= 3.5 && $row89[2] <= 3.9)
{
  $row89[2] = 'Above Average';
}else

if($row89[2] >= 4 && $row89[2] <= 4.4)
{
  $row89[2] = 'Good';
}else

if($row89[2] >= 4.5 && $row89[2] <= 4.9)
{
  $row89[2] = 'Very Good';
}else
    
if($row89[2] == 5)
{
  $row89[2] = 'Excellent';
    }

    //----------------------

                                                    ?>
                                                        <td><?php echo $row89[0]?></td>
                                                        <td><?php echo $row89[1]?></td>
                                                        <td><?php echo $row89[5]?></td>
                                                        
                                                        <td><?php echo $row89[2]?> Customer Evaluation</td>
                                                        
                                                        <td><?php echo $row89[4]?></td>
                                                    </tr>
                                                <?php }?>
  
  </table>
  <h3 align = "right"><br>Total of : <?php echo $count?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h3>

  </p>
  <center>
  <p>*********************** End of Document ***********************</p>
  </center>
  </section>

  <div class="pull-left">
  <h4>Prepared By:</h4><br><br>
  <p>__________________________</p>
    <p>Signature over printed name</p>
  </div>

</body>

</html>
