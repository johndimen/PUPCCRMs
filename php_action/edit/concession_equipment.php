
<?php 


$userid = $_SESSION['id'];

	function getPosts1()
	{
		$posts = array();
		$posts1[0]= $_POST['id'];
		$posts1[1]= $_POST['name'];
		$posts1[2]= $_POST['brand'];
		$posts1[3]= $_POST['type'];
		$posts1[4]= $_POST['description'];
		
		
		
		return $posts1;
	}

	if(isset($_POST['submit']))
	{
		
		$data1 = getPosts1();
		            

        $insert_Query = "UPDATE concession_equipment SET 
        name = '$data1[1]',
        brand = '$data1[2]',
        type = '$data1[3]',
        description = '$data1[4]'
        where id = '$data1[0]'
";	


$insert_Result = mysqli_query($conn, $insert_Query);
					
			mysqli_affected_rows($conn);
			

		echo "<script>alert('Successfully Updated!')</script>";
        echo "<script>location: location.href='concession-equipment.php'</script>";
					
			
		
    }
    
    ?>