<?php

if(isset($_POST['next']))

{

    if(empty($_POST['category']) || empty('location'))
    {
        header("location: feedback.php");
    }
    else
    {
        
        $function = $_POST['category'];
        $area = $_POST['area'];
        header("location: feedback2.php");

    }

}

?>