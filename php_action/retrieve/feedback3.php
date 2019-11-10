<?php


$id = $_GET['id'];






$sql29 = "SELECT f.serial, c.stall, c.area, fd.evaluation, fd.feedback_type, fd.message, s.name, s.id_info, s.email, s.contact, fd.hygiene, fd.hospitable, fd.conditions, fd.environment, fd.price, fd.service, f.id FROM ((feedback f JOIN sender s ON f.sender_id = s.id) JOIN feedback_details fd ON f.feedback_info_id = fd.id) JOIN concession c ON f.store_id = c.id where f.id = '$id'";
$query29 = mysqli_query($conn, $sql29);


$row29 = mysqli_fetch_array($query29);

if($row29[3] >= 1 && $row29[3] <= 1.4)
		{
			$row29[3] = 'Extremely Poor';
		} else 
		
		if($row29[3] >= 1.5 && $row29[3] <= 1.9)
		{
			$row29[3] = 'Very Poor';
		}else

		if($row29[3] >= 2 && $row29[3] <= 2.4)
		{
			$row29[3] = 'Poor';
		}else

		if($row29[3] >= 2.5 && $row29[3] <= 2.9)
		{
			$row29[3] = 'Below Average';
		}else
		
		if($row29[3] >= 3 && $row29[3] <= 3.4)
		{
			$row29[3] = 'Average';
		}else

		if($row29[3] >= 3.5 && $row29[3] <= 3.9)
		{
			$row29[3] = 'Above Average';
		}else
		
		if($row29[3] >= 4 && $row29[3] <= 4.4)
		{
			$row29[3] = 'Good';
		}else

		if($row29[3] >= 4.5 && $row29[3] <= 4.9)
		{
			$row29[3] = 'Very Good';
		}else
				
		if($row29[3] == 5)
		{
			$row29[3] = 'Excellent';
        }

        //----------------------
        
        if($row29[10] >= 1 && $row29[10] <= 1.4)
		{
			$row29[10] = 'Extremely Poor';
		} else 
		
		if($row29[10] >= 1.5 && $row29[10] <= 1.9)
		{
			$row29[10] = 'Very Poor';
		}else

		if($row29[10] >= 2 && $row29[10] <= 2.4)
		{
			$row29[10] = 'Poor';
		}else

		if($row29[10] >= 2.5 && $row29[10] <= 2.9)
		{
			$row29[10] = 'Below Average';
		}else
		
		if($row29[10] >= 3 && $row29[10] <= 3.4)
		{
			$row29[10] = 'Average';
		}else

		if($row29[10] >= 3.5 && $row29[10] <= 3.9)
		{
			$row29[10] = 'Above Average';
		}else
		
		if($row29[10] >= 4 && $row29[10] <= 4.4)
		{
			$row29[10] = 'Good';
		}else

		if($row29[10] >= 4.5 && $row29[10] <= 4.9)
		{
			$row29[10] = 'Very Good';
		}else
				
		if($row29[10] == 5)
		{
			$row29[10] = 'Excellent';
        }
        
        //------------------

        if($row29[13] >= 1 && $row29[13] <= 1.4)
		{
			$row29[13] = 'Extremely Poor';
		} else 
		
		if($row29[13] >= 1.5 && $row29[13] <= 1.9)
		{
			$row29[13] = 'Very Poor';
		}else

		if($row29[13] >= 2 && $row29[13] <= 2.4)
		{
			$row29[13] = 'Poor';
		}else

		if($row29[13] >= 2.5 && $row29[13] <= 2.9)
		{
			$row29[13] = 'Below Average';
		}else
		
		if($row29[13] >= 3 && $row29[13] <= 3.4)
		{
			$row29[13] = 'Average';
		}else

		if($row29[13] >= 3.5 && $row29[13] <= 3.9)
		{
			$row29[13] = 'Above Average';
		}else
		
		if($row29[13] >= 4 && $row29[13] <= 4.4)
		{
			$row29[13] = 'Good';
		}else

		if($row29[13] >= 4.5 && $row29[13] <= 4.9)
		{
			$row29[13] = 'Very Good';
		}else
				
		if($row29[13] == 5)
		{
			$row29[13] = 'Excellent';
        }
        
        //-------------------

        if($row29[14] >= 1 && $row29[14] <= 1.4)
		{
			$row29[14] = 'Extremely Poor';
		} else 
		
		if($row29[14] >= 1.5 && $row29[14] <= 1.9)
		{
			$row29[14] = 'Very Poor';
		}else

		if($row29[14] >= 2 && $row29[14] <= 2.4)
		{
			$row29[14] = 'Poor';
		}else

		if($row29[14] >= 2.5 && $row29[14] <= 2.9)
		{
			$row29[14] = 'Below Average';
		}else
		
		if($row29[14] >= 3 && $row29[14] <= 3.4)
		{
			$row29[14] = 'Average';
		}else

		if($row29[14] >= 3.5 && $row29[14] <= 3.9)
		{
			$row29[14] = 'Above Average';
		}else
		
		if($row29[14] >= 4 && $row29[14] <= 4.4)
		{
			$row29[14] = 'Good';
		}else

		if($row29[14] >= 4.5 && $row29[14] <= 4.9)
		{
			$row29[14] = 'Very Good';
		}else
				
		if($row29[14] == 5)
		{
			$row29[14] = 'Excellent';
        }
        
        //------------------

        if($row29[12] >= 1 && $row29[12] <= 1.4)
		{
			$row29[12] = 'Extremely Poor';
		} else 
		
		if($row29[12] >= 1.5 && $row29[12] <= 1.9)
		{
			$row29[12] = 'Very Poor';
		}else

		if($row29[12] >= 2 && $row29[12] <= 2.4)
		{
			$row29[12] = 'Poor';
		}else

		if($row29[12] >= 2.5 && $row29[12] <= 2.9)
		{
			$row29[12] = 'Below Average';
		}else
		
		if($row29[12] >= 3 && $row29[12] <= 3.4)
		{
			$row29[12] = 'Average';
		}else

		if($row29[12] >= 3.5 && $row29[12] <= 3.9)
		{
			$row29[12] = 'Above Average';
		}else
		
		if($row29[12] >= 4 && $row29[12] <= 4.4)
		{
			$row29[12] = 'Good';
		}else

		if($row29[12] >= 4.5 && $row29[12] <= 4.9)
		{
			$row29[12] = 'Very Good';
		}else
				
		if($row29[12] == 5)
		{
			$row29[12] = 'Excellent';
        }
        
        //---------------------------

        if($row29[15] >= 1 && $row29[15] <= 1.4)
		{
			$row29[15] = 'Extremely Poor';
		} else 
		
		if($row29[15] >= 1.5 && $row29[15] <= 1.9)
		{
			$row29[15] = 'Very Poor';
		}else

		if($row29[15] >= 2 && $row29[15] <= 2.4)
		{
			$row29[15] = 'Poor';
		}else

		if($row29[15] >= 2.5 && $row29[15] <= 2.9)
		{
			$row29[15] = 'Below Average';
		}else
		
		if($row29[15] >= 3 && $row29[15] <= 3.4)
		{
			$row29[15] = 'Average';
		}else

		if($row29[15] >= 3.5 && $row29[15] <= 3.9)
		{
			$row29[15] = 'Above Average';
		}else
		
		if($row29[15] >= 4 && $row29[15] <= 4.4)
		{
			$row29[15] = 'Good';
		}else

		if($row29[15] >= 4.5 && $row29[15] <= 4.9)
		{
			$row29[15] = 'Very Good';
		}else
				
		if($row29[15] == 5)
		{
			$row29[15] = 'Excellent';
		}

$id = $_GET['id'];



$sql90 = "SELECT c.serial, c.message, cs.stall, cs.area, s.name, s.id_info, s.email, s.contact, c.id FROM (complaint c join sender s on c.sender = s.id) join concession cs on c.store = cs.id where c.id = '$id'";
$query90 = mysqli_query($conn, $sql90);


$row90 = mysqli_fetch_array($query90);



?>