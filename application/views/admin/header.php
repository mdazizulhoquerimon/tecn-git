<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url();?>assets-admin/img/favicon.png">
    <title>Admin</title>
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets-admin/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets-admin/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets-admin/css/fullcalendar.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets-admin/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets-admin/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets-admin/css/jquery-ui.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets-admin/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets-admin/css/style.css">
    <!--[if lt IE 9]>
		<script src="<?php echo base_url();?>assets-admin/js/html5shiv.min.js"></script>
		<script src="<?php echo base_url();?>assets-admin/js/respond.min.js"></script>
	<![endif]-->
</head>
<script>
  var base_url = '<?php echo base_url(); ?>';  
</script>
<body>
    <div class="main-wrapper">
        <div class="header">
            <div class="header-left">
                <a href="<?php echo base_url();?>admin" class="logo">
                    <img src="<?php echo base_url();?>assets-admin/img/logo.png" width="40" height="40" alt="">
                </a>
            </div>
            <div class="page-title-box pull-left">
                <h3>Admin</h3>
            </div>
            <a id="mobile_btn" class="mobile_btn pull-left" href="#sidebar"><i class="fa fa-bars" aria-hidden="true"></i></a>
            <ul class="nav navbar-nav navbar-right user-menu pull-right">
                <li class="dropdown">
                    <a href="<?php echo base_url();?>admin/profile" class="dropdown-toggle user-link" data-toggle="dropdown" title="Admin">
                        <span class="user-img"><img class="img-circle" src="<?php echo base_url();?>assets-admin/img/user.jpg" width="40" alt="Admin">
							<span class="status online"></span></span>
                        <span><?php echo $this->common->getSpecificField('password','id',$this->common->user_session_data(1),'username');?></span>
                        <i class="caret"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo base_url();?>login/logout">Logout</a></li>
                    </ul>
                </li>
            </ul>
            <div class="dropdown mobile-user-menu pull-right">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                <ul class="dropdown-menu pull-right">
                    <li><a href="<?php echo base_url();?>admin/login">Logout</a></li>
                </ul>
            </div>
        </div>
        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li>
                            <a href="<?php echo base_url();?>admin"><i class="fa fa-dashboard"></i> Dashboard</a>
                        </li>
                        <!-- <li>
                            <a href="<?php echo base_url();?>admin/notice"><i class="fa fa-list" aria-hidden="true"></i> <span> Notice</span></a>
                        </li> -->
                        <li class="submenu">
                            <a href="<?php echo base_url();?>admin/notice"><i class="fa fa-list" aria-hidden="true"></i> <span> Notice</span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled" style="display: none;">
                                <li><a href="<?php echo base_url();?>admin/notice">All Notice</a></li>
                                <li><a href="<?php echo base_url();?>admin/new_notice">Notice Add</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="<?php echo base_url();?>admin/teacher"><i class="fa fa-user" aria-hidden="true"></i> <span> Teacher</span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled" style="display: none;">
                                <li><a href="<?php echo base_url();?>admin/teacher">All Teacher</a></li>
                                <li><a href="<?php echo base_url();?>admin/add_teacher">New Teacher Add</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fa fa-users" aria-hidden="true"></i> <span> Students</span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled" style="display: none;">
                                <li><a href="<?php echo base_url();?>admin/student">Current Students</a></li>
                                <li><a href="<?php echo base_url();?>admin/add_student">Add New Student</a></li>
                                <li><a href="<?php echo base_url();?>admin/student_join_request">Student Join Request</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fa fa-user-o" aria-hidden="true"></i> <span> Alumni</span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled" style="display: none;">
                                <li><a href="<?php echo base_url();?>admin/alumni">All Alumni</a></li>
                                <li><a href="<?php echo base_url();?>admin/add_alumni">Add New Alumni</a></li>
                                <li><a href="<?php echo base_url();?>admin/add_alumni">Alumni Join Request</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fa fa-user-circle-o" aria-hidden="true"></i> <span> Staffs</span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled" style="display: none;">
                                <li><a href="<?php echo base_url();?>admin/staff">All Staffs</a></li>
                                <li><a href="<?php echo base_url();?>admin/add_staff">Add New Staff</a></li>
                            </ul>
                        </li>
                        <!-- <li class="submenu">
                            <a href="#"><i class="fa fa-columns" aria-hidden="true"></i> <span>Pages</span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled" style="display: none;">
                                <li><a href="<?php echo base_url();?>admin/demo/login.php"> Login </a></li>
                                <li><a href="<?php echo base_url();?>admin/demo/forgot-password.php"> Forgot Password </a></li>
                                <li><a href="<?php echo base_url();?>admin/demo/blank-page.php"> Blank Page </a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><i class="fa fa-share-alt" aria-hidden="true"></i> <span>Multi Level</span> <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li class="submenu">
                                    <a href="javascript:void(0);"><span>Level 1</span> <span class="menu-arrow"></span></a>
                                    <ul style="display: none;">
                                        <li><a href="javascript:void(0);"><span>Level 2</span></a></li>
                                        <li class="submenu">
                                            <a href="javascript:void(0);"> <span> Level 2</span> <span class="menu-arrow"></span></a>
                                            <ul class="list-unstyled" style="display: none;">
                                                <li><a href="javascript:void(0);">Level 3</a></li>
                                                <li><a href="javascript:void(0);">Level 3</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="javascript:void(0);"><span>Level 2</span></a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:void(0);"><span>Level 1</span></a>
                                </li>
                            </ul>
                        </li> -->
                    </ul>
                </div>
            </div>
        </div>