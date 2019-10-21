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
		            

	


		$insert_Query = "UPDATE cases SET case_name = '$data1[1]', 
                                            type = '$data1[2]', 
                                            priority= '$data1[3]', 
                                            case_desc = '$data1[4]' 
                                            WHERE case_number = '$data1[0]'";	

		

                $insert_Result = mysqli_query($conn, $insert_Query);
                mysqli_affected_rows($conn);
					
			

					echo "<script>alert('Successfully Saved!')</script>";
					echo "<script>location.href='cases.php'</script>";
		
	}
	

	?>