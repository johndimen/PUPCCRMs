<?php

// Initialize the session
session_start();



// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: index.php");
    exit;
}
 
// Include config file
require_once "./page/dbconfig.php";
 
// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = "";
 
// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    
    // Check if username is empty
    if (empty(trim($_POST["username"]))){
        $username_err = "Please enter your Username.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if (empty(trim($_POST["password"]))){
        $password_err = "Please enter your Password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT crm_user_login_serialno,crm_login_username,crm_login_password,crm_first_name from crm_admin_user_login as login JOIN crm_admin_user_details as details WHERE login.CRM_User_Login_SerialNo = details.CRM_User_Login_SerialNo_FK AND crm_login_username = ?";
        
        if($stmt = mysqli_prepare($conn, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = $username;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $crm_user_login_serialno,$crm_login_username, $crm_login_password,$crm_first_name);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $crm_login_password)){
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["serialNo"] = $crm_user_login_serialno;
                            $_SESSION["username"] = $crm_login_username;                            
                            $_SESSION["name"] = $crm_first_name;
                            // Redirect user to index page
                            header("location: index.php");
                        } else{
                            // Display an error message if password is not valid
                            $password_err = "The password you entered was not valid.";
                        }
                    }
                } else{
                    // Display an error message if username doesn't exist
                    $username_err = "No account found with that username.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html>
<head>  
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>PUP CCRMs | Admin Log in</title>
  <link rel="shortcut icon" href="../img/icon.png">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="./bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="./bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="./bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="./dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="./plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="../index.html"><b>PUP</b>CCRMs</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Log in to start your session <br>Unauthorized Access <b>Is Prohibited</b>.<br>Click '<b>PUP</b>CCRMs' to Go Back.</p>
    <form action="login.php" method="POST">
      <div class="form-group has-feedback <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
        <input type="username" class="form-control" placeholder="Username" name = "username" >
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        <span class="help-block"><?php echo $username_err; ?></span>
      </div>
      <div class="form-group has-feedback <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
        <input type="password" class="form-control" placeholder="Password" name = "password" >
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        <span class="help-block"><?php echo $password_err; ?></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> Remember Me
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Log In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="./bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="./bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="./plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
</body>
</html>
