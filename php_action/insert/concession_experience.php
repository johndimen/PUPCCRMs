<?php 

$userid = $_SESSION['id'];

	function getPosts1()
	{
		$posts = array();
		$posts1[0]= $_POST['profile'];
		$posts1[1]= $_POST['place'];
		$posts1[2]= $_POST['date_start'];
		$posts1[3]= $_POST['date_end'];
		
		
		return $posts1;
	}


    

	// insert
	if (isset($_POST['submit']))
	{
		
		$data1 = getPosts1();
		            
		$sql1 = "SELECT distinct * FROM concession where serial = '$data1[0]'";
		$query1 = mysqli_query($conn, $sql1);
		$row1 = mysqli_fetch_array($query1);
		$cdid = $row1['id'];

	


		$insert_Query = "INSERT INTO `concession_experience`(place, date_start, date_end, serial, cdid)
				VALUES ('$data1[1]','$data1[2]','$data1[3]','$data1[0]', '$cdid')";	

		

		try {
            //FIRST
            


                $insert_Result = mysqli_query($conn, $insert_Query);
					
			if(mysqli_affected_rows($conn) > 0)
			{

					echo "<script>alert('Successfully Saved!')</script>";
					//echo "<script>location.href='concession.php'</script>";
			}
				else {
				echo "<script>alert('Unable to saved!')</script>";
				echo "<script>location.href='concession-experience-add.php'</script>";
			}
		} catch (Exception $ex) {
		echo "<script>alert('Error Insert'. $ex->getMessage())</script>";
		}
	}
	

?>