<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>IIR Report</title>

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
    <center><article><b>INDIVIDUAL INVENTORY RECORD FORM <br> Number of respondents</b></article>
	<br>
	<table width="91%" height="357" border="2" cellpadding="2">
  <tr>
    <td width="24%">I. PERSONAL INFORMATION</td>
    <td width="13%">
		
					</td>
    <td width="12%">&nbsp;</td>
    <td width="11%">&nbsp;</td>
    <td width="10%">&nbsp;</td>
    <td width="10%">&nbsp;</td>
    <td width="11%">&nbsp;</td>
    <td width="9%">&nbsp;</td>
  </tr>
  <tr>
    <td>Male</td>
    <td>			<center><?php
$conn = mysqli_connect("localhost","root", "", "project");

if(! $conn)
{
die('Could not connect:'.mysqli_connect_error());
}

$sql = "SELECT count(gender) as 'male' FROM personal_info_tbl WHERE gender= 'male'";
$query = mysqli_query($conn, $sql);

if(! $query){
	die ('SQL Error:'.mysqli_error($conn));
}

while($row = mysqli_fetch_assoc($query))
						
						{ $male  = $row['male'];
						
						echo $male;
						}?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><p>Female</p></td>
    <td><center><?php
$conn = mysqli_connect("localhost","root", "", "project");

if(! $conn)
{
die('Could not connect:'.mysqli_connect_error());
}

$sql = "SELECT count(gender) as 'male' FROM personal_info_tbl WHERE gender= 'female'";
$query = mysqli_query($conn, $sql);

if(! $query){
	die ('SQL Error:'.mysqli_error($conn));
}

while($row = mysqli_fetch_assoc($query))
						
						{ $male  = $row['male'];
						
						echo $male;
						}?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Intersex</td>
    <td><center><?php
$conn = mysqli_connect("localhost","root", "", "project");

if(! $conn)
{
die('Could not connect:'.mysqli_connect_error());
}

$sql = "SELECT count(gender) as 'male' FROM personal_info_tbl WHERE gender != 'male' AND gender != 'female'";
$query = mysqli_query($conn, $sql);

if(! $query){
	die ('SQL Error:'.mysqli_error($conn));
}

while($row = mysqli_fetch_assoc($query))
						
						{ $male  = $row['male'];
						
						echo $male;
						}?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td style="font-weight: bold; text-align: center;">Civil Status</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Single</td>
    <td><center><?php
$conn = mysqli_connect("localhost","root", "", "project");

if(! $conn)
{
die('Could not connect:'.mysqli_connect_error());
}

$sql = "SELECT count(civilstatus) as 'male' FROM personal_info_tbl WHERE civilstatus = 'single'";
$query = mysqli_query($conn, $sql);

if(! $query){
	die ('SQL Error:'.mysqli_error($conn));
}

while($row = mysqli_fetch_assoc($query))
						
						{ $male  = $row['male'];
						
						echo $male;
						}?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Married</td>
    <td><center><?php
$conn = mysqli_connect("localhost","root", "", "project");

if(! $conn)
{
die('Could not connect:'.mysqli_connect_error());
}

$sql = "SELECT count(civilstatus) as 'male' FROM personal_info_tbl WHERE civilstatus= 'married'";
$query = mysqli_query($conn, $sql);

if(! $query){
	die ('SQL Error:'.mysqli_error($conn));
}

while($row = mysqli_fetch_assoc($query))
						
						{ $male  = $row['male'];
						
						echo $male;
						}?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td style="font-weight: bold; text-align: center;">Religion</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Aglipayan</td>
    <td><center><?php
$conn = mysqli_connect("localhost","root", "", "project");

if(! $conn)
{
die('Could not connect:'.mysqli_connect_error());
}

$sql = "SELECT count(religion) as 'male' FROM personal_info_tbl WHERE religion= 'aglipayan'";
$query = mysqli_query($conn, $sql);

if(! $query){
	die ('SQL Error:'.mysqli_error($conn));
}

while($row = mysqli_fetch_assoc($query))
						
						{ $male  = $row['male'];
						
						echo $male;
						}?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Buddhism</td>
    <td><center><?php
$conn = mysqli_connect("localhost","root", "", "project");

if(! $conn)
{
die('Could not connect:'.mysqli_connect_error());
}

$sql = "SELECT count(religion) as 'male' FROM personal_info_tbl WHERE religion= 'Buddhism'";
$query = mysqli_query($conn, $sql);

if(! $query){
	die ('SQL Error:'.mysqli_error($conn));
}

while($row = mysqli_fetch_assoc($query))
						
						{ $male  = $row['male'];
						
						echo $male;
						}?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Born Again Christian</td>
    <td><center><?php
$conn = mysqli_connect("localhost","root", "", "project");

if(! $conn)
{
die('Could not connect:'.mysqli_connect_error());
}

$sql = "SELECT count(religion) as 'male' FROM personal_info_tbl WHERE religion= 'Born Again Christian'";
$query = mysqli_query($conn, $sql);

if(! $query){
	die ('SQL Error:'.mysqli_error($conn));
}

while($row = mysqli_fetch_assoc($query))
						
						{ $male  = $row['male'];
						
						echo $male;
						}?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Baptist</td>
    <td><center><?php
$conn = mysqli_connect("localhost","root", "", "project");

if(! $conn)
{
die('Could not connect:'.mysqli_connect_error());
}

$sql = "SELECT count(religion) as 'male' FROM personal_info_tbl WHERE religion= 'baptist'";
$query = mysqli_query($conn, $sql);

if(! $query){
	die ('SQL Error:'.mysqli_error($conn));
}

while($row = mysqli_fetch_assoc($query))
						
						{ $male  = $row['male'];
						
						echo $male;
						}?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Roman Catholic</td>
    <td><center><?php
$conn = mysqli_connect("localhost","root", "", "project");

if(! $conn)
{
die('Could not connect:'.mysqli_connect_error());
}

$sql = "SELECT count(religion) as 'male' FROM personal_info_tbl WHERE religion = 'Roman Catholic'";
$query = mysqli_query($conn, $sql);

if(! $query){
	die ('SQL Error:'.mysqli_error($conn));
}

while($row = mysqli_fetch_assoc($query))
						
						{ $male  = $row['male'];
						
						echo $male;
						}?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Jehovas Witnesses</td>
    <td><center><?php
$conn = mysqli_connect("localhost","root", "", "project");

if(! $conn)
{
die('Could not connect:'.mysqli_connect_error());
}

$sql = "SELECT count(religion) as 'male' FROM personal_info_tbl WHERE religion= 'Jehovas Witnesses'";
$query = mysqli_query($conn, $sql);

if(! $query){
	die ('SQL Error:'.mysqli_error($conn));
}

while($row = mysqli_fetch_assoc($query))
						
						{ $male  = $row['male'];
						
						echo $male;
						}?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Iglesia ni Cristo</td>
    <td><center><?php
$conn = mysqli_connect("localhost","root", "", "project");

if(! $conn)
{
die('Could not connect:'.mysqli_connect_error());
}

$sql = "SELECT count(religion) as 'male' FROM personal_info_tbl WHERE religion= 'Iglesia ni Cristo'";
$query = mysqli_query($conn, $sql);

if(! $query){
	die ('SQL Error:'.mysqli_error($conn));
}

while($row = mysqli_fetch_assoc($query))
						
						{ $male  = $row['male'];
						
						echo $male;
						}?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Muslim/ Islam</td>
    <td><center><?php
$conn = mysqli_connect("localhost","root", "", "project");

if(! $conn)
{
die('Could not connect:'.mysqli_connect_error());
}

$sql = "SELECT count(religion) as 'male' FROM personal_info_tbl WHERE religion= 'Muslim/Islam'";
$query = mysqli_query($conn, $sql);

if(! $query){
	die ('SQL Error:'.mysqli_error($conn));
}

while($row = mysqli_fetch_assoc($query))
						
						{ $male  = $row['male'];
						
						echo $male;
						}?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Protestant</td>
    <td><center><?php
$conn = mysqli_connect("localhost","root", "", "project");

if(! $conn)
{
die('Could not connect:'.mysqli_connect_error());
}

$sql = "SELECT count(religion) as 'male' FROM personal_info_tbl WHERE religion= 'Protestant'";
$query = mysqli_query($conn, $sql);

if(! $query){
	die ('SQL Error:'.mysqli_error($conn));
}

while($row = mysqli_fetch_assoc($query))
						
						{ $male  = $row['male'];
						
						echo $male;
						}?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
	</center>

  </section>

</body>

</html>
