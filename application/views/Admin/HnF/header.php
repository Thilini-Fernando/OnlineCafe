<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="<?php echo base_url("assets/Admin_assets/img/favicon.ico"); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Admin profile</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="<?php echo base_url("assets/Admin_assets/css/bootstrap.min.css"); ?>" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="<?php echo base_url("assets/Admin_assets/css/animate.min.css"); ?>" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="<?php echo base_url("assets/Admin_assets/css/light-bootstrap-dashboard.css?v=1.4.0"); ?>" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="<?php echo base_url("assets/Admin_assets/css/demo.css"); ?>" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="<?php echo base_url("assets/Admin_assets/css/pe-icon-7-stroke.css"); ?>" rel="stylesheet" />

</head>
<body>   

<div class="wrapper">
    <div class="sidebar" data-color="lightgrey" data-image="<?php echo base_url("assets/Admin_assets/img/sidebar-5.jpg"); ?>">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="#" class="simple-text">
                    ServeMe
                </a>
            </div>

            <ul class="nav">
                <!--li>
                    <a href="<//?php echo base_url("index.php/AdminCont/viewProfile"); ?>">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li-->
                <li>
                    <a href="<?php echo base_url("index.php/AdminCont/viewUserDet"); ?>">
                        <i class="pe-7s-user"></i>
                        <p>User Profile</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url("index.php/AdminCont/addAdmin"); ?>">
                        <i class="pe-7s-add-user"></i>
                        <p>Add Admin</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url("index.php/AdminCont/manageEmp"); ?>">
                        <i class="pe-7s-users"></i>
                        <p>Manage Employees</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url("index.php/AdminCont/viewCustDet"); ?>">
                        <i class="pe-7s-note2"></i>
                        <p>Customer Details</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url("index.php/AdminCont/mngFood"); ?>">
                        <i class="pe-7s-coffee"></i>                       
                        <p>Manage Food</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="pe-7s-cart"></i>
                        <p>Order details</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="pe-7s-bell"></i>
                        <p>Notifications</p>
                    </a>
                </li>
				
            </ul>
    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Dashboard</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-dashboard"></i>
								<p class="hidden-lg hidden-md">Dashboard</p>
                            </a>
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-globe"></i>
                                    <b class="caret hidden-lg hidden-md"></b>
									<p class="hidden-lg hidden-md">
										5 Notifications
										<b class="caret"></b>
									</p>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Notification 1</a></li>
                                <li><a href="#">Notification 2</a></li>
                                <li><a href="#">Notification 3</a></li>
                                <li><a href="#">Notification 4</a></li>
                                <li><a href="#">Another notification</a></li>
                              </ul>
                        </li>
                        <li>
                           <a href="">
                                <i class="fa fa-search"></i>
								<p class="hidden-lg hidden-md">Search</p>
                            </a>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                           <a href="">
                               <p>Account</p>
                            </a>
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <p>
										Dropdown
										<b class="caret"></b>
									</p>

                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                              </ul>
                        </li>
                        <li>
                            <a href="<?php echo base_url('index.php/AdminCont/logoutUser'); ?>">
                                <p>Log out</p>
                            </a>
                        </li>
						<li class="separator hidden-lg"></li>
                    </ul>
                </div>
            </div>
        </nav>