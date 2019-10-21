<?php 



$userid = $_SESSION['id'];

	function getPosts1()
	{
		$posts = array();
		$posts1[0]= $_POST['id'];
		$posts1[1]= $_POST['name'];
		$posts1[2]= $_POST['lower'];
		$posts1[3]= $_POST['higher'];
		$posts1[4]= $_POST['description'];
		
		
		return $posts1;
	}



	// insert
	if (isset($_POST['submit']))
	{
		
		$data1 = getPosts1();
		            

	


		$insert_Query = "UPDATE concession_services SET name = '$data1[1]', 
                                            lower = '$data1[2]', 
                                            higher= '$data1[3]', 
                                            description = '$data1[4]' 
                                            WHERE id = '$data1[0]'";	

		

                $insert_Result = mysqli_query($conn, $insert_Query);
                mysqli_affected_rows($conn);
					
			

					echo "<script>alert('Successfully Saved!')</script>";
					echo "<script>location.href='concession-services.php'</script>";
		
	}
	

	?>