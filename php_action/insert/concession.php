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

	// insert
	if (isset($_POST['submit']))
	{
		
		$data1 = getPosts1();
		

		$insert_Query = "INSERT INTO `concession`(serial, stall, area, function, measurement, rental, remarks, date_approved, name) 
						VALUES ('$data1[0]','$data1[1]','$data1[2]','$data1[3]','$data1[4]','$data1[5]','$data1[6]','$data1[7]','$data1[8]')";	
		

		try {
			//FIRST
			$insert_Result = mysqli_query($conn, $insert_Query);
			
			if(mysqli_affected_rows($conn) > 0)
			{

				$data2 = getPosts2();
		

				$insert_Query = "INSERT INTO `owner`(serial, fname, mname, lname, email, address, contact) 
								VALUES ('$data2[0]','$data2[1]','$data2[2]','$data2[3]','$data2[4]','$data2[5]','$data2[6]')";	
			    //SECOND
				$insert_Result = mysqli_query($conn, $insert_Query);
				
				if(mysqli_affected_rows($conn) > 0)
				{
				
				
				$data1 = getPosts1();
		
				$sql1 = "SELECT * FROM concession where serial = '$data1[0]'";
				$query1 = mysqli_query($conn, $sql1);
				$row1 = mysqli_fetch_array($query1);
				$cdid = $row1['id'];

				
				$sql2 = "SELECT * FROM owner where serial = '$data1[0]'";
				$query2 = mysqli_query($conn, $sql2);
				$row2 = mysqli_fetch_array($query2);
				$ocid = $row2['id'];


				
				
				$insert_Query = "INSERT INTO `concession_details`(cdid, odid, created_by, updated_by) 
				VALUES ('$cdid', '$ocid', '$userid', '$userid')";	
				
				//THIRD
                $insert_Result = mysqli_query($conn, $insert_Query);
					
			if(mysqli_affected_rows($conn) > 0)
			{

					echo "<script>alert('Successfully Saved!')</script>";
					//echo "<script>location.href='concession.php'</script>";
			}
				}
			

			}else {
				echo "<script>alert('Unable to saved!')</script>";
				echo "<script>location.href='concession-add.php'</script>";
			}
		} catch (Exception $ex) {
		echo "<script>alert('Error Insert'. $ex->getMessage())</script>";
		}
	}
	
	?>
