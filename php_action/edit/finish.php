
<?php 

include("../db_connect.php");

$id = $_GET['id'];
	
		
		            

        $insert_Query = "UPDATE task SET finish = 0 where id = '$id'";	


$insert_Result = mysqli_query($conn, $insert_Query);
					
			mysqli_affected_rows($conn);
			

		echo "<script>alert('Successfully Updated!')</script>";
        echo "<script>location: location.href='../../admin/page/task/task.php'</script>";
					
			
		
    
    
    ?>