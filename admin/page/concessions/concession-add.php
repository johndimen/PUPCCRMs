<?php
include('../dbconfig.php');
$inputConcessionNumber = $inputAddress = $inputConcessionName = $inputDateApplied = $inputEmail ="";
$inputFunction = $inputNumber = $inputOwnerName = $inputRemarks = $inputStallArea ="";

$sql = "INSERT INTO `crm_concession_profile` (`CRM_Concession_Profile_SerialNo`,`CRM_Concession_Stall_Number`, `CRM_Concession_Area`, `CRM_Concession_Name`, `CRM_Concession_Owner_Name`, `CRM_Concession_Function`, `CRM_Concession_Status`, `CRM_Concession_Address`, `CRM_Concession_Email`, `CRM_Concession_Date_Applied`, `CRM_Concession_Remarks`, `CRM_Concession_IsActive`) VALUES ('$inputConcessionNumber','$inputNumber','$inputStallArea','$inputConcessionName','$inputFunction','$inputOwnerName','Active','$inputAddress','$inputEmail','$inputDateApplied','$inputRemarks','1')";

if(mysqli_query($conn,$sql)){
  echo $sucess ="Record Successfully.";
}else{
  echo $error = "Error: Could not Execute." .mysqli_error($conn);
}




if($_SERVER["REQUEST_METHOD"] == "post"){
  if(empty($_POST["inputNumber"])){
    $inputNumberError = "Is Required";
  }else{

  }
};




mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>PUPCCRMs | Concession Contract</title>
  <link rel="shortcut icon" href="../../../img/icon.png">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="../../bower_components/select2/dist/css/select2.min.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="../../bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../../bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="../../index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>C</b>RM</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>PUP</b>CCRMs</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">4</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 4 messages</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Support Team
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <!-- end message -->
                </ul>
              </li>
              <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <!-- Tasks: style can be found in dropdown.less -->
          <li class="dropdown tasks-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">9</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 9 tasks</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Design some buttons
                        <small class="pull-right">20%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">20% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                </ul>
              </li>
              <li class="footer">
                <a href="#">View all tasks</a>
              </li>
            </ul>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="../../dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">Alexander Pierce</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  Alexander Pierce - Web Developer
                  <small>Member since Nov. 2012</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <!-- =============================================== -->

  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
          <div class="pull-left image">
            <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p>Alexander Pierce</p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
          </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
          <div class="input-group">
            <input type="text" name="q" class="form-control" placeholder="Search...">
            <span class="input-group-btn">
                  <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                  </button>
                </span>
          </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
          <li class="header">MAIN NAVIGATION</li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-dashboard"></i> <span>Dashboard</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li ><a href="../../index.html"><i class="fa fa-circle-o"></i>General Dashboard</a></li>
              <li><a href="../../index2.html"><i class="fa fa-circle-o"></i>Report Dashboard</a></li>
            </ul>
          </li>
          <li class="treeview">
              <a href="#">
                <i class="fa fa-comments"></i>
                <span>Feedback</span>
                <span class="pull-right-container">
                  <small class="label label-primary pull-right">12</small>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="../feedback/feedback.html"><i class="fa fa-circle-o"></i> All Feedback <span class="label label-info pull-right">4</span></a></li>
                <li><a href="../feedback/unread-feedback.html"><i class="fa fa-circle-o"></i> Unread Feedback <span class= "label bg-green pull-right">4</span></a></li>
                <li><a href="../feedback/read-feedback.html"><i class="fa fa-circle-o"></i> Read Feedback <span class="label label-default pull-right">4</span></a></li>
              </ul>
            </li>
          <li class=" treeview">
            <a href="#">
              <i class="fa fa-suitcase"></i>
              <span>Cases</span>
              <span class="pull-right-container">
                <small class="label label-primary pull-right">12</small>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="../cases/cases.html"><i class="fa fa-circle-o"></i> All Cases <span class="label label-info pull-right">4</span></a></li>
              <li><a href="../cases/new-cases.html"><i class="fa fa-circle-o"></i> New Cases <span class= "label bg-green pull-right">4</span></a></li>
              <li><a href="../cases/pending-cases.html"><i class="fa fa-circle-o"></i> Pending Cases <span class="label label-warning pull-right">4</span></a></li>
            </ul>
          </li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-tasks"></i> <span>Task</span>
              <span class="pull-right-container">
                <small class="label pull-right bg-green">12</small>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="../task/task.html"><i class="fa fa-circle-o"></i>All Task <span class="label label-info pull-right">4</span></a></li>
              <li><a href="../task/new-task.html"><i class="fa fa-circle-o"></i>New Task <span class="label bg-green pull-right">4</span></a></li>
              <li><a href="../task/pending-task.html"><i class="fa fa-circle-o"></i>Pending Task <span class="label label-warning pull-right">4</span></a></li>
            </ul>
          </li>
          <li class="treeview active">
            <a href="#">
              <i class="fa fa-address-card"></i>
              <span>Concessions</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li class="treeview active"><a href="#"><i class="fa fa-circle-o"></i> Detail <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
                  <ul class="treeview-menu">
                    <li class="active"><a href="./concession-profile.html"><i class="fa fa-circle-o"></i> Profile</a></li>
                    <li><a href="./concession-map-images.html"><i class="fa fa-circle-o"></i> Map/Images</a></li>
                    <li><a href="./concession-contact.html"><i class="fa fa-circle-o"></i> Contact</a></li>
                    <li><a href="./concession-item-product.html"><i class="fa fa-circle-o"></i> Items/Products</a></li>
                    <li><a href="./concession-services.html"><i class="fa fa-circle-o"></i> Services</a></li>
                    <li><a href="./concession-equipment.html"><i class="fa fa-circle-o"></i> Equipments</a></li>
                    <li><a href="./concession-experience.html"><i class="fa fa-circle-o"></i> Experience</a></li>
                  </ul>
              </li>
              <li><a href="./concession-contract.html"><i class="fa fa-circle-o"></i> Contracts </a></li>
            </ul>
          </li>
          <li class="treeview">
            <a href="../calendar/calendar.html">
              <i class="fa fa-calendar"></i> <span>Calendar</span>
              <span class="pull-right-container">
                <small class="label pull-right label-info">17</small>
              </span>
            </a>
            <ul class="treeview-menu">
                <li>
                  <a href="../calendar/activity.html"><i class="fa fa-circle-o"></i> Activity 
                    <span class="pull-right-container">
                      <small class="label pull-right label-warning"> 3</small> 
                      <small class="label pull-right bg-blue"> 14</small> 
                    </span>
                  </a>
                </li>
            </ul>
          </li>
          <li class="treeview">
            <a href="../mail/mailbox.html">
              <i class="fa fa-envelope"></i> <span>Mailbox</span>
              <span class="pull-right-container">
                <small class="label pull-right bg-yellow">12</small>
                <small class="label pull-right bg-green">16</small>
                <small class="label pull-right bg-red">5</small>
              </span>
            </a>
            <ul class="treeview-menu">
              <li class="">
                <a href="../mail/mailbox.html"><i class="fa fa-circle-o"></i>Inbox
                  <span class="pull-right-container">
                    <span class="label label-primary pull-right">13</span>
                  </span>
                </a>
              </li>
              <li><a href="../mail/compose.html"><i class="fa fa-circle-o"></i>Compose</a></li>
              <li><a href="../mail/read-mail.html"><i class="fa fa-circle-o"></i>Read</a></li>
            </ul>
          </li>
          <li class="treeview">
              <a href="../reports/report.html">
                <i class="fa fa-file-archive-o"></i> <span>Reports</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li class=""><a href="../reports/report-concession.html"><i class="fa fa-circle-o"></i>Concession Reports</a></li>
                <li><a href="../reports/report-feedback.html"><i class="fa fa-circle-o"></i>Feedback Reports</a></li>
                <li><a href="../reports/report-cases.html"><i class="fa fa-circle-o"></i>Case Reports</a></li>
                <li><a href="../reports/report-system-trail.html"><i class="fa fa-circle-o"></i>System Trail Reports</a></li>
              </ul>
            </li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-cog"></i> <span>Options</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li class="treeview"><a href="#"><i class="fa fa-circle-o"></i> Admins <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
                <ul class="treeview-menu">
                    <li><a href="../options/admin-profile.html"><i class="fa fa-circle-o"></i> Admin Detail </a></li>
                    <li><a href="../options/admin-login-detail.html"><i class="fa fa-circle-o"></i> Admin Login </a></li>
                </ul>
              </li>
              <li class="treeview"><a href="../options/permission.html"><i class="fa fa-circle-o"></i> Permissions <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
                <ul class="treeview-menu">
                    <li><a href="../options/permission-module.html"><i class="fa fa-circle-o"></i> Module Permission</a></li>
                    <li><a href="../options/permission-admin.html"><i class="fa fa-circle-o"></i> Admin Permission</a></li>
                </ul>
              </li>
              <li><a href="../options/audit-trail.html"><i class="fa fa-circle-o"></i> Audit Trail</a></li>
            </ul>
          </li>
          <li class="treeview"><a href="#"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
          <li class="header">LABELS</li>
          <li class="treeview"><a class=""><i class="fa fa-circle-o text-white"></i><span>Notification</span> <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
            <ul class="treeview-menu">
              <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Danger</span></a></li>
              <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
              <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Normal</span></a></li>
              <li><a href="#"><i class="fa fa-circle-o text-light-blue"></i> <span>Information</span></a></li>
              <li><a href="#"><i class="fa fa-circle-o text-green"></i> <span>Success</span></a></li>
            </ul>   
          </li>
          <li class="treeview"><a class=""><i class="fa fa-circle-o text-white"></i> <span>Mail</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
            <ul class="treeview-menu">
              <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Spam</span></a></li>
              <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Junk</span></a></li>
              <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Unread</span></a></li>
              <li><a href="#"><i class="fa fa-circle-o text-light-blue"></i> <span>Read</span></a></li>
              <li><a href="#"><i class="fa fa-circle-o text-green"></i> <span>Sent</span></a></li>
            </ul>   
          </li>
          <li class="treeview"><a class=""><i class="fa fa-circle-o text-white"></i> <span>Feedback/Task/Cases</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
            <ul class="treeview-menu">
              <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
              <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Urgent</span></a></li>
              <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>New</span></a></li>
              <li><a href="#"><i class="fa fa-circle-o text-orange"></i> <span>Due</span></a></li>
            </ul>   
          </li>
          <li class="treeview"><a class=""><i class="fa fa-circle-o text-white"></i><span>Calendar/Concession</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
            <ul class="treeview-menu">
              <li><a href="#"><i class="fa fa-circle-o text-orange"></i> <span>Due</span></a></li>
            </ul>   
          </li>
        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
          Concession Profile
          <small><Address></Address> Concession </small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="../../index.html"><i class="fa fa-dashboard"></i> Home</a></li>
          <li><a href="./concession.html">Concession</a></li>
          <li class="active"><a href="#">Add Concession</a></li>
        </ol>
      </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
            <div class="col-md-3">
              <a href="../../index.html" class="btn btn-primary btn-block">Back to Dashboard</a>
              <a href="./concession.html" class="btn btn-primary btn-block ">Go to Concession List</a>
              
              <a href="./concession-profile.html" class="btn btn-primary btn-block margin-bottom">Go to Concession Profile</a>

                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title"><strong>Concession Area</strong></h3>
                    </div>
                    <div class="box-body no-padding">
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <th>Profile No.</th>
                                    <th style="width: 90px">Stall No.</th>
                                    <th style="width: 130px">Area</th>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- /.col -->

            <div class="col-md-9">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title"><strong>Add Concession</strong></h3>
                    </div>
                    <div class="box-body no-padding">
                                <form class="form-horizontal" style="padding: 30px" method="post">
                                    <div class="form-group">
                                      <label for="inputConcessionNumber" class="col-sm-2 control-label">Concession Number</label>
                                      <div class="col-sm-10">
                                      <input type="text" class="form-control" placeholder="Concession Number" id="inputConcessionNumber" value="<?php echo $inputConcessionNumber; ?>">
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label for="inputNumber" class="col-sm-2 control-label">Stall Number</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" placeholder="Stall Number" id="inputNumber" value="<?php echo $inputNumber; ?>">
                                      </div>
                                    </div>
                                      <div class="form-group">
                                        <label for="inputArea" class="col-sm-2 control-label">Stall Area</label>
                                        <div class="col-sm-10">
                                          <select class="form-control select2" style="width: 100%;" value = "<?php echo $inputStallArea;?>">
                                            <option value="" selected>Select Area</option>
                                            <option value="north">North</option>
                                            <option value="west">West</option>
                                            <option value="south">South</option>
                                            <option value="east">East</option>
                                            <option value="sampaguita">sampaguita</option>
                                            <option value="lagoon">Lagoon</option>
                                            <option value="other">Other</option>
                                          </select>
                                        </div>
                                      </div>
                                      <!-- /.form-group -->
                                    <div class="form-group">
                                      <label for="inputConcessionName" class="col-sm-2 control-label">Concession Name</label>
                  
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputConcessionName" placeholder="Concession Name" value="<?php echo $inputConcessionName;?>">
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label for="inputOwnerName" class="col-sm-2 control-label">Owner's Name</label>
                  
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputOwnerName" placeholder="Owner's Name" value="<?php echo $inputOwnerName;?>">
                                      </div>
                                    </div>
                                      <div class="form-group">
                                        <label for="inputEmail" class="col-sm-2 control-label">Email</label>
                    
                                        <div class="col-sm-10">
                                          <input type="email" class="form-control" id="inputEmail" placeholder="Email" value="<?php echo $inputEmail;?>">
                                        </div>
                                      </div>
                                      <div class="form-group">
                                          <label for="inputFunction" class="col-sm-2 control-label">Function</label>
                                        <div class="col-sm-10">
                                          <select class="form-control select2" style="width: 100%;" id="inputFunction">
                                            <option value = ""selected="">Select Function</option>
                                            <option value="food">Food</option>
                                            <option value="nonfood">Non-Food</option>
                                          </select>
                                        </div>
                                      </div>
                                    <div class="form-group">
                                      <label for="inputAddress" class="col-sm-2 control-label">Address</label>
                  
                                      <div class="col-sm-10">
                                        <textarea class="form-control" id="inputAddress" placeholder="Address" value = "<?php echo $inputAddress;?>"></textarea>
                                      </div>
                                    </div>
                                      <div class="form-group">
                                        <label for="inputDateApplied" class="col-sm-2 control-label">Date Applied</label>
                                          <div class="col-sm-10 input-group date" style="width: 81.8%;padding-left: 15px;">
                                            <div class="input-group-addon">
                                              <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="text" class="form-control pull-right" id="inputDateApplied" placeholder="mm/dd/yyyy" value="<?php echo $inputDateApplied;?>">
                                          </div>
                                      </div>
                                      <div class="form-group">
                                        <label for="inputRemarks" class="col-sm-2 control-label">Remarks</label>
                    
                                        <div class="col-sm-10">
                                          <textarea class="form-control" id="inputRemarks" placeholder="Remarks" value="<?php echo $inputRemarks;?>"></textarea>
                                        </div>
                                      </div> 
                                    <div class="form-group">
                                      <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="btn btn-danger">Submit</button>
                                      </div>
                                    </div>
                                  </form>
                    </div>
                </div>
            </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> beta 1.0
        </div>
        <strong>Copyright &copy;<script>document.write(new Date().getFullYear());</script> <a href="#">GotConcept MultiTech Firm</a> & Copyright &copy;2014-2019 <a href="https://adminlte.io">AdminLTE</a>.</strong> All rights
        reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>

      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="../../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="../../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- bootstrap datepicker -->
<script src="../../bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Select2 -->
<script src="../../bower_components/select2/dist/js/select2.full.min.js"></script>
<!-- FastClick -->
<script src="../../bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- Page Script -->
<script src="../../dist/js/pages/concession-contract.js"></script>
<script>
  $(document).ready(function () {
    $('.sidebar-menu').tree()
    //initialize select2 elements
    $('.select2').select2()
    //Date picker
    $('#inputDateApplied').datepicker({
      autoclose: true
    })
  })
</script>


</body>
</html>
