
<?php 


$userid = $_SESSION['id'];

	function getPosts1()
	{
		$posts = array();
		$posts1[0]= $_POST['id'];
		$posts1[1]= $_POST['item'];
		$posts1[2]= $_POST['type'];
		$posts1[3]= $_POST['price'];
		$posts1[4]= $_POST['description'];
		$posts1[5]= $_POST['serial'];
		
		
		
		return $posts1;
	}

	if(isset($_POST['update']))
	{
		
		$data1 = getPosts1();
		            

        $insert_Query = "UPDATE concession_items SET 
        item = '$data1[1]',
        type = '$data1[2]',
        price = '$data1[3]',
        description = '$data1[4]'
        where id = '$data1[0]'

        
        ";	

					
			mysqli_affected_rows($conn);
			

		echo "<script>alert('Successfully Updated!')</script>";
        echo "<script>location: location.href='concession-item-product.php'</script>";
					
			
		
    }
    
    ?>