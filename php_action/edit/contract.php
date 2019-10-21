
<?php 


$userid = $_SESSION['id'];

	function getPosts1()
	{
		$posts = array();
		$posts1[0]= $_POST['serial'];
		$posts1[1]= $_POST['name'];
		$posts1[2]= $_POST['store'];
		$posts1[3]= $_POST['function'];
		$posts1[4]= $_POST['fname'];
		$posts1[5]= $_POST['mname'];
		$posts1[6]= $_POST['lname'];
		$posts1[7]= $_POST['oic_f'];
		$posts1[8]= $_POST['oic_m'];
		$posts1[9]= $_POST['oic_l'];
		$posts1[10]= $_POST['date'];
		$posts1[11]= $_POST['duration'];
		$posts1[12]= $_POST['scan'];
		
		
		
		return $posts1;
	}

	if(isset($_POST['submit']))
	{
		
		$data1 = getPosts1();
		            

        $insert_Query = "UPDATE contract SET 
       `name`='$data1[1]',
       `store`='$data1[2]',
       `function`='$data1[3]',
       `fname`='$data1[4]',
       `mname`='$data1[5]',
       `lname`='$data1[6]',
       `oic_f`='$data1[7]',
       `oic_m`='$data1[8]',
       `oic_l`='$data1[9]',
       `date`='$data1[10]',
       `duration`='$data1[11]',
       `scan`='$data1[12]' 
        where serial = '$data1[0]'
";	


$insert_Result = mysqli_query($conn, $insert_Query);
					
			mysqli_affected_rows($conn);
			

		echo "<script>alert('Successfully Updated!')</script>";
        echo "<script>location: location.href='concession-contract.php'</script>";
					
			
		
    }
    
    ?>