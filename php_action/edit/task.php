<?php 



$userid = $_SESSION['id'];

	function getPosts1()
	{
		$posts = array();
		$posts1[0]= $_POST['name'];
		$posts1[1]= $_POST['priority'];
		$posts1[2]= $_POST['start'];
		$posts1[3]= $_POST['due'];
		$posts1[4]= $_POST['description'];
        $posts1[5]= $_POST['case'];
        $posts1[6]= $_POST['id'];
        
		
		
		
		return $posts1;
	}



	// insert
	if (isset($_POST['submit']))
	{
		
		$data1 = getPosts1();
		            

	


		$insert_Query = "UPDATE task SET task_name = '$data1[0]', 
                                            priority = '$data1[1]', 
                                            date_start= '$data1[2]', 
                                            date_due = '$data1[3]',
                                            task_desc = '$data1[4]'
                                            
                                            WHERE id = '$data1[6]'";	

		

                $insert_Result = mysqli_query($conn, $insert_Query);
                mysqli_affected_rows($conn);
					
			

					echo "<script>alert('Successfully Saved!')</script>";
					echo "<script>location.href='task.php'</script>";
		
	}
	

	?>