<?php 



	function getPosts1()
	{
		$posts = array();
		$posts1[0]= $_POST['hygiene'];
		$posts1[1]= $_POST['hospitable'];
		$posts1[2]= $_POST['price'];
		$posts1[3]= $_POST['condition'];
		$posts1[4]= $_POST['environment'];
		$posts1[5]= $_POST['rating'];
		$posts1[6]= $_POST['feedbacktype'];
		$posts1[7]= $_POST['message'];
		$posts1[8]= $_POST['store'];
		
		
		
		
		
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
		$serial = "FB-MN-$rand-$day$month-$year";
		$data1 = getPosts1();
		
		
		$insert_Query = "INSERT INTO `feedback_details`(evaluation, hygiene, hospitable, conditions, environment, price, message, feedback_type, serial) 
						VALUES ('$data1[5]','$data1[0]','$data1[1]','$data1[3]','$data1[4]','$data1[2]','$data1[7]','$data1[6]', '$serial')";	
		

	
			//FIRST
			$insert_Result = mysqli_query($conn, $insert_Query);
			
			mysqli_affected_rows($conn);
		

				$data2 = getPosts2();
		

				$insert_Query = "INSERT INTO `sender`(id_info, name, contact, email, type, serial) 
								VALUES ('$data2[2]','$data2[0]','$data2[4]','$data2[3]','$data2[1]','$serial')";	
			    //SECOND
				$insert_Result = mysqli_query($conn, $insert_Query);
				
				mysqli_affected_rows($conn);			
				

				
		
				$sql1 = "SELECT * FROM feedback_details where serial = '$serial'";
				$query1 = mysqli_query($conn, $sql1);
				$row1 = mysqli_fetch_array($query1);
				$fdid = $row1['id'];

				

				
				$sql2 = "SELECT * FROM sender where serial = '$serial'";
				$query2 = mysqli_query($conn, $sql2);
				$row2 = mysqli_fetch_array($query2);
				$sid = $row2['id'];


				
				$sql3 = "SELECT * FROM concession where id = '$data1[8]'";
				$query3 = mysqli_query($conn, $sql3);
				$row3 = mysqli_fetch_array($query3);
				$stid = $row3['id'];


				
			
				
				$insert_Query = "INSERT INTO `feedback`(serial, feedback_info_id, sender_id, store_id, viewed_by) 
				VALUES ('$serial', '$fdid', '$sid', '$stid', '1')";	
				
				//THIRD
                $insert_Result = mysqli_query($conn, $insert_Query);
					
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
