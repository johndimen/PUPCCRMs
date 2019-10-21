<?php
    session_start();
    unset($_SESSION['id']);
    session_unset();
    session_destroy();
    echo "<script>window.location.href='../admin/Login.php'</script>";
    exit();
?>