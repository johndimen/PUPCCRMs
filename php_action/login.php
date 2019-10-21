<?php 
 
    include("db_connect.php");
	

		$username = $password = "";
		$usernameErr = $passwordErr = "";

		
	if(isset($_POST['login'])){

		if(empty($_POST['username']))
		$usernameErr = '<p class = "error" style = "color: red;">NOTE : Username cannot be empty</p>';
		else
			$username = mysqli_real_escape_string($conn, $_POST['username']);
	
		if(empty($_POST['password']))
		$passwordErr = '<p class = "error" style = "color: red;">NOTE : Password cannot be empty</p>';
		else
			$password = mysqli_real_escape_string($conn, $_POST['password']);

		if($username && $password)
		{
			$sql = mysqli_query($conn, "SELECT * FROM user_details WHERE username = '$username'");
			$num = mysqli_num_rows($sql);
			
			if($num > 0){
				while($row = mysqli_fetch_assoc($sql))
				{
					$dbpassword = $row["password"];
					
					
						if($password == $dbpassword){
							$_SESSION["id"] = $row['id'];

							//online registry
							
						$sql = "Update user_details set online = 1 where id = $userid";
						$query = mysqli_query($conn, $sql);


							header("Location: ../admin/index.php");
						}else{
							//echo "<script>alert('Wrong Password')</script>";
							$passwordErr = '<p class = "error" style = "color: red;">NOTE : Wrong password</p>';
						}
					
				
					   
				        }
			}else{
				$usernameErr = '<p class = "error" style = "color: red;">NOTE : No username existing</p>';
			}
		}
	}
?>