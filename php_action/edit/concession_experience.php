
<?php 


$userid = $_SESSION['id'];

	function getPosts1()
	{
		$posts = array();
		$posts1[0]= $_POST['id'];
		$posts1[1]= $_POST['place'];
		$posts1[2]= $_POST['date_start'];
		$posts1[3]= $_POST['date_end'];
		
		
		return $posts1;
	}

	if(isset($_POST['submit']))
	{
		
		$data1 = getPosts1();
		            

        $insert_Query = "UPDATE concession_experience SET 
        place = '$data1[1]',
        date_start = '$data1[2]',
        date_end = '$data1[3]'
        where id = '$data1[0]'

        
		";	
		  $insert_Result = mysqli_query($conn, $insert_Query);

					
			mysqli_affected_rows($conn);
			

		echo "<script>alert('Successfully Updated!')</script>";
        //echo "<script>location: location.href='concession-experience.php'</script>";
					
			
		
    }
    
    ?>