
<?php 

include("../db_connect.php");

$id = $_GET['id'];
	
		
		            

        $insert_Query = "UPDATE concession_details SET deletion = 0 where id = '$id'";	


$insert_Result = mysqli_query($conn, $insert_Query);
					
			mysqli_affected_rows($conn);
			

		echo "<script>alert('Successfully Updated!')</script>";
        echo "<script>location: location.href='../../admin/page/concessions/concession.php'</script>";
					
			
		
    
    
    ?>