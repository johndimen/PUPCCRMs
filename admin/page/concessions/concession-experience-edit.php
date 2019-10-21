<?php
session_start();


if(empty($_SESSION["id"])){
  header("location: ../../login.php");
  exit;
}

$userid = $_SESSION["id"];


include("../../../php_action/db_connect.php");
include("../../../php_action/userdata.php");
include("../../../php_action/retrieve/concession2.php");



?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>PUPCCRMs | Concession Contract</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="../../bower_components/select2/dist/css/select2.min.css">
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
    <a href="../../index2.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>C</b>RM</span>
      <!-- logo for regular state and mobile devices -->
      <?php echo $webtitle?>
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
              <span class="hidden-xs"><?php echo $row['lname']?></span>
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
            <p><?php echo $row['lname']?></p>
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
              <li ><a href="../../index.php"><i class="fa fa-circle-o"></i>General Dashboard</a></li>
              <li><a href="../../index2.php"><i class="fa fa-circle-o"></i>Report Dashboard</a></li>
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
                <li><a href="../feedback/feedback.php"><i class="fa fa-circle-o"></i> All Feedback <span class="label label-info pull-right">4</span></a></li>
                <li><a href="../feedback/unread-feedback.php"><i class="fa fa-circle-o"></i> Unread Feedback <span class= "label bg-green pull-right">4</span></a></li>
                <li><a href="../feedback/read-feedback.php"><i class="fa fa-circle-o"></i> Read Feedback <span class="label label-default pull-right">4</span></a></li>
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
              <li><a href="../cases/cases.php"><i class="fa fa-circle-o"></i> All Cases <span class="label label-info pull-right">4</span></a></li>
              <li><a href="../cases/trash-cases.php"><i class="fa fa-circle-o"></i> Trash<span class= "label bg-green pull-right">4</span></a></li>
              <li><a href="../cases/archive-cases.php"><i class="fa fa-circle-o"></i> Archive <span class="label label-warning pull-right">4</span></a></li>
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
              <li><a href="../task/task.php"><i class="fa fa-circle-o"></i>All Task <span class="label label-info pull-right">4</span></a></li>
              <li><a href="../task/trash-task.php"><i class="fa fa-circle-o"></i>Trash<span class="label bg-green pull-right">4</span></a></li>
              <li><a href="../task/archive-task.php"><i class="fa fa-circle-o"></i>Archive<span class="label label-warning pull-right">4</span></a></li>
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
                    <li><a href="./concession.php"><i class="fa fa-circle-o"></i> Concession List</a></li>
                    <li><a href="./concession-item-product.php"><i class="fa fa-circle-o"></i> Items/Products</a></li>
                    <li><a href="./concession-services.php"><i class="fa fa-circle-o"></i> Services</a></li>
                    <li><a href="./concession-equipment.php"><i class="fa fa-circle-o"></i> Equipments</a></li>
                    <li class="active"><a href="./concession-experience.php"><i class="fa fa-circle-o"></i> Experience</a></li>
                  </ul>
              </li>
              <li><a href="./concession-contract.php"><i class="fa fa-circle-o"></i> Contracts </a></li>
            </ul>
          </li>
          <li><a href="../categories/categories.php"><i class="fa fa-tags"></i> <span>Categories</span></a></li>
          <li class="treeview">
            <a href="../calendar/calendar.php">
              <i class="fa fa-calendar"></i> <span>Calendar</span>
              <span class="pull-right-container">
                <small class="label pull-right label-info">17</small>
              </span>
            </a>
            <ul class="treeview-menu">
                <li>
                  <a href="../calendar/activity.php"><i class="fa fa-circle-o"></i> Activity 
                    <span class="pull-right-container">
                      <small class="label pull-right label-warning"> 3</small> 
                      <small class="label pull-right bg-blue"> 14</small> 
                    </span>
                  </a>
                </li>
            </ul>
          </li>
          <li class="treeview">
            <a href="../mail/mailbox.php">
              <i class="fa fa-envelope"></i> <span>Mailbox</span>
              <span class="pull-right-container">
                <small class="label pull-right bg-yellow">12</small>
                <small class="label pull-right bg-green">16</small>
                <small class="label pull-right bg-red">5</small>
              </span>
            </a>
            <ul class="treeview-menu">
              <li class="">
                <a href="../mail/mailbox.php"><i class="fa fa-circle-o"></i>Inbox
                  <span class="pull-right-container">
                    <span class="label label-primary pull-right">13</span>
                  </span>
                </a>
              </li>
              <li><a href="../mail/mail-unread.php"><i class="fa fa-circle-o"></i>Unread</a></li>
              <li><a href="../mail/read-mail.php"><i class="fa fa-circle-o"></i>Read</a></li>
            </ul>
          </li>
          <li class="treeview">
          <a>
            <i class="fa fa-file-archive-o"></i> <span>Reports</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class=""><a href="../reports/reports-all.php"><i class="fa fa-circle-o"></i>All Reports</a></li>
            <li class=""><a  href="../reports/reportbyquery.php"><i class="fa fa-circle-o"></i>Reports By Query</a></li>
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
                    <li><a href="../options/admin-profile.php"><i class="fa fa-circle-o"></i> Admin Detail </a></li>
                    <li><a href="../options/admin-login-detail.php"><i class="fa fa-circle-o"></i> Admin Login </a></li>
                </ul>
              </li>
              <li class="treeview"><a href="../options/permission.php"><i class="fa fa-circle-o"></i> Permissions <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
                <ul class="treeview-menu">
                    <li><a href="../options/permission-admin.php"><i class="fa fa-circle-o"></i> Admin Permission</a></li>
                </ul>
              </li>
              <li><a href="../options/role.php"><i class="fa fa-circle-o"></i>Admin Roles</a></li>
              <li><a href="../options/audit-trail.php"><i class="fa fa-circle-o"></i> Audit Trail</a></li>
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
          Experience
          <small>All Concession Experience</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="../../index.php"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active"><a href="#">Experience</a></li>
        </ol>
      </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
          <div class="col-md-3">
              <a href="../../index.php" class="btn btn-primary btn-block">Back to Dashboard</a>
              <a href="./concession.php" class="btn btn-primary btn-block margin-bottom">Go to Concession List</a>
              
              <div class="box box-solid">
                <div class="box-header with-border">
                  <h3 class="box-title">Folders</h3>
    
                  <div class="box-tools">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                  </div>
                </div>
                <div class="box-body no-padding">
                  <ul class="nav nav-pills nav-stacked">
                    <li class="active"><a href="./concession-experience.php"><i class="fa fa-th-large"></i> Experiencebox</a></li>
                    <li><a href="./concession-experience-archive.php"><i class="fa fa-archive"></i> Archive <span class="label label-warning pull-right">65</span></a></li>
                    <li><a href="./concession-experience-trash.php"><i class="fa fa-trash"></i> Trash</a></li>
                  </ul>
                </div>
                <!-- /.box-body -->
              </div>
              <!-- /. box -->
              <div class="box box-solid">
                <div class="box-header with-border">
                  <h3 class="box-title">Labels</h3>
    
                  <div class="box-tools">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                  </div>
                </div>
                <div class="box-body no-padding">
                  <ul class="nav nav-pills nav-stacked">
                    <li><a href="#"><i class="fa fa-circle-o text-red"></i> Urgent</a></li>
                    <li><a href="#"><i class="fa fa-circle-o text-green"></i> New</a></li>
                    <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> Due</a></li>
                  </ul>
                </div>
                <!-- /.box-body -->
              </div>
              <!-- /.box -->
            </div>
            <!-- /.col -->
              <div class="col-md-9">
                <div class="box box-primary">
                  <div class="box-header with-border">
                    <h3 class="box-title"><strong>Edit Experience</strong></h3>
                  </div>

                  <form class="form-horizontal" action="" method="post">
          <div class="box-body">
            <center><h4>Concession Experience Details</h4></center>
            <br>
            <div class="form-group">
              <label class="col-sm-3 control-label" for="xpnumber">Experience Number</label>
              <div class="col-sm-7">
                <input type="text" class="form-control" value = "<?php echo $row40[4]?>" names="xpnumber" id="xpnumber" placeholder="Experience Number" disabled>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-3 control-label" for="xpcons">Profile</label>
              <div class="col-sm-7">
                  <select  class="form-control select2" names="xpcons" id="xpcons">
                      <option value="<?php echo $row40[5]?>" selected><?php echo $row40[5]?> ~ <?php echo $row40[0]?></option>
                  </select>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-3 control-label" for="xpplace">Place</label>
              <div class="col-sm-7">
                <input type="text" class="form-control" value = "<?php echo $row40[1]?>" names="xpplace" id="xpplace" placeholder="Place">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-3 control-label" for="xpdatestart">Date Start</label>
              <div class="col-sm-7">
                <input type="date" class="form-control" value = "<?php echo $row40[3]?>" names="xpdatestart" id="xpdatestart" placeholder="Date Started">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-3 control-label" for="xpdateend">Date Ended</label>
              <div class="col-sm-7">
                <input type="date" class="form-control" value = "<?php echo $row40[4]?>" names="xpdateend" id="xpdateend" placeholder="Date Ended">
              </div>
            </div>
          </div>
        <div class="box-footer">
          <button type="reset" name="inputClose"class="btn btn-default pull-left">Reset Fields</button>
          <button type="submit" name="inputSubmit" class="btn btn-success pull-right">Submit</button>
        </div>
        </form>
                </div>
              </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <div class="modal modal-default fade" id="trashModal">
    <div class="modal-dialog">
      <div class="modal-content" style="border-radius:10px">
        <div class="modal-header">
          <h3 class="modal-title">Trash</h3>
        </div>
        <div class="modal-body">
          <P>Are you sure?</P>
          <p>you can restore this at trash folder.  </p>
        </div>
        <div class="modal-footer">
          <button type="button" name="close" class="btn btn-default pull-left" data-dismiss="modal">No</button>
          <button type="button" name="submit" class="btn btn-primary">Yes</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal modal-default fade" id="archiveModal">
    <div class="modal-dialog">
      <div class="modal-content" style="border-radius:10px">
        <div class="modal-header">
          <h3 class="modal-title">Archive</h3>
        </div>
        <div class="modal-body">
          <P>Are you sure?</P>
          <p>you can see this at archive folder.  </p>
        </div>
        <div class="modal-footer">
          <button type="button" name="close" class="btn btn-default pull-left" data-dismiss="modal">No</button>
          <button type="button" name="submit" class="btn btn-primary">Yes</button>
        </div>
      </div>
    </div>
  </div>



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
<!-- FastClick -->
<script src="../../bower_components/fastclick/lib/fastclick.js"></script>
<!-- Select2 -->
<script src="../../bower_components/select2/dist/js/select2.full.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- Page Script -->
<script src="../../dist/js/pages/concession-contract.js"></script>
<script>
  $(document).ready(function () {
    $('.sidebar-menu').tree()
    $('.select2').select2()
  })
</script>


</body>
</html>
