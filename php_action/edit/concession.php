<?php 



$userid = $_SESSION['id'];

	function getPosts1()
	{
		$posts = array();
		$posts1[0]= $_POST['serial'];
		$posts1[1]= $_POST['stall'];
		$posts1[2]= $_POST['area'];
		$posts1[3]= $_POST['function'];
		$posts1[4]= $_POST['measurement'];
		$posts1[5]= $_POST['rental'];
		$posts1[6]= $_POST['remarks'];
		$posts1[7]= $_POST['dateapproved'];
		$posts1[8]= $_POST['name'];
		
		
		
		return $posts1;
	}

	
	function getPosts2()
	{
		$posts2 = array();
		$posts2[0]= $_POST['serial'];
		$posts2[1]= $_POST['fname'];
		$posts2[2]= $_POST['mname'];
		$posts2[3]= $_POST['lname'];
		$posts2[4]= $_POST['email'];
		$posts2[5]= $_POST['address'];
		$posts2[6]= $_POST['contact'];
		
		return $posts2;
	}


	$id = $_GET['id'];

	$sql1 = "SELECT * FROM concession_details where id = '$id'";
	$query = mysqli_query($conn, $sql1);
	
	$row = mysqli_fetch_array($query);

	$odid = $row['odid'];
	$cdid = $row['cdid'];

	// insert
	if (isset($_POST['submit']))
	{
	try{
		//first

		$data1 = getPosts1();
		

		
$insert_Query = "UPDATE concession SET stall = '$data1[1]', 
area = '$data1[2]', 
function = '$data1[3]', 
measurement = '$data1[4]', 
rental = '$data1[5]', 
remarks = '$data1[6]', 
date_approved = '$data1[7]', 
name = '$data1[8]' 
WHERE id = $cdid";



			
			$insert_Result = mysqli_query($conn, $insert_Query);
			
			mysqli_affected_rows($conn);
			//end of first

			//second
				$data2 = getPosts2();
		
 $insert_Query = "UPDATE `owner` SET 			fname = '$data2[1]', 
 mname = '$data2[2]', 
 lname = '$data2[3]', 
 email = '$data2[4]', 
 address = '$data2[5]', 
 contact = '$data2[6]' 
 WHERE id = '$odid'";

				$insert_Result = mysqli_query($conn, $insert_Query);
				
				mysqli_affected_rows($conn);
				//end of second
				
				
//third
$id = $_GET['id'];
$userid = $_SESSION['id'];
				
				

$insert_Query = "UPDATE concession_details SET updated_by = '$userid' WHERE id = '$id'";	

				
                $insert_Result = mysqli_query($conn, $insert_Query);
					
			mysqli_affected_rows($conn);
		//end of third	
	}catch(Exception $ex)
	{
		echo "<script>alert('Error Insert'. $ex->getMessage())</script>";
	}
			
	echo "<script>alert('Successfully Updated')</script>";
	echo "<script>location: location.href='concession.php'</script>";
			

	}
	
	?>
