<?php 



	function getPosts1()
	{
		$posts = array();
		$posts1[0]= $_POST['message'];
		$posts1[1]= $_POST['store'];
		
		
		
		
		
		return $posts1;
	}

	
	function getPosts2()
	{
		$posts2 = array();
		$posts2[0]= $_POST['name'];
		$posts2[1]= $_POST['type'];
		$posts2[2]= $_POST['id_no'];
		$posts2[3]= $_POST['email'];
		$posts2[4]= $_POST['contact'];
		
		return $posts2;
	}

	// insert
	if (isset($_POST['submit']))
	{
		$store = $_POST['store'];
		
		$rand = mt_rand(0, 999999);
		$year = date('Y');
		$month = date('m');
		$day = date('d');
		$serial = "CP-MN-$rand-$day$month-$year";
	
        

        
				$data2 = getPosts2();
		

				$insert_Query = "INSERT INTO `sender`(id_info, name, contact, email, type, serial) 
								VALUES ('$data2[2]','$data2[0]','$data2[4]','$data2[3]','$data2[1]','$serial')";	
			    //first
				$insert_Result = mysqli_query($conn, $insert_Query);
				
				mysqli_affected_rows($conn);			
				


                $data1 = getPosts1();
    
                
				$sql1 = "SELECT * FROM sender where serial = '$serial'";
				$query1 = mysqli_query($conn, $sql1);
				$row1 = mysqli_fetch_array($query1);
				$sdid = $row1['id'];



		$insert_Query = "INSERT INTO `complaint`(store ,message, serial, sender) 
						VALUES ('$data1[1]','$data1[0]', '$serial', '$sdid')";	
		



        
	
			//second
			$insert_Result = mysqli_query($conn, $insert_Query);
			
			mysqli_affected_rows($conn);
		


					
			if(mysqli_affected_rows($conn) > 0)
			{

					echo "<script>alert('Successfully Saved!')</script>";
					echo "<script>location.href='index.html'</script>";
			}
			else 
			{
				
				echo "<script>alert('Unsuccessfully Saved!')</script>";
				//echo "<script>location.href='concession.php'</script>";
			}
				
			

		
	}
	
	?>
