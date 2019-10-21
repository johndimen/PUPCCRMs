<?php 

$userid = $_SESSION['id'];

	function getPosts1()
	{
		$posts = array();
		$posts1[0]= $_POST['id'];//concession serial
		$posts1[1]= $_POST['name'];
		$posts1[2]= $_POST['store'];
		$posts1[3]= $_POST['function'];
        $posts1[4]= $_POST['fname'];
        $posts1[5]= $_POST['mname'];
		$posts1[6]= $_POST['lname'];
		$posts1[7]= $_POST['description'];
		$posts1[8]= $_POST['oic_f'];
		$posts1[9]= $_POST['oic_m'];
		$posts1[10]= $_POST['oic_l'];
		$posts1[11]= $_POST['date'];
		$posts1[12]= $_POST['duration'];
		$posts1[13]= $_POST['file'];
		
		
		return $posts1;
	}
    

	// insert
	if (isset($_POST['submit']))
	{
        $rand = mt_rand(0, 999999);
		$year = date('Y');
		$month = date('m');
		$day = date('d');
		$serial = "CON-MN-$rand-$day$month-$year";
		
		$data1 = getPosts1();
		            
		$sql1 = "SELECT distinct * FROM concession where serial = '$data1[0]'";
		$query1 = mysqli_query($conn, $sql1);
		$row1 = mysqli_fetch_array($query1);
		$cdid = $row1['id'];

		$insert_Query = "INSERT INTO `contract`(serial, cdid, name, store, function, fname, mname, lname, description, oic_f, oic_m, oic_l, date, duration, scan)
				VALUES ('$serial','$cdid','$data1[1]','$data1[2]','$data1[3]','$data1[4]','$data1[5]','$data1[6]','$data1[7]','$data1[8]','$data1[9]','$data1[10]','$data1[11]','$data1[12]','$data1[13]')";

		

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
				echo "<script>location.href='contract.php'</script>";
			}
		} catch (Exception $ex) {
		echo "<script>alert('Error Insert'. $ex->getMessage())</script>";
		}
	}
	

?>