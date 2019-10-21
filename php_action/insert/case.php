<?php 



$userid = $_SESSION['id'];

	function getPosts1()
	{
		$posts = array();
		$posts1[0]= $_POST['number'];
		$posts1[1]= $_POST['name'];
		$posts1[2]= $_POST['type'];
		$posts1[3]= $_POST['priority'];
		$posts1[4]= $_POST['description'];
		
		
		return $posts1;
	}



	// insert
	if (isset($_POST['submit']))
	{
		
		$data1 = getPosts1();
		            
	


		$insert_Query = "INSERT INTO `cases`(case_number, case_name, type, priority, case_desc, assigned_admin)
				VALUES ('$data1[0]','$data1[1]','$data1[2]','$data1[3]','$data1[4]', '$userid')";	

		

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
				echo "<script>location.href='cases-add.php'</script>";
			}
		} catch (Exception $ex) {
		echo "<script>alert('Error Insert'. $ex->getMessage())</script>";
		}
	}
	

	?>