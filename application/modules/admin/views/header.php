<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Chawri online Admin</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo  asset_url();?>admin/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo  asset_url();?>admin/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="<?php echo  asset_url();?>admin/dist/css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo  asset_url();?>admin/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?php echo  asset_url();?>admin/bower_components/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo  asset_url();?>admin/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


<link rel="stylesheet" href="https://cdn.datatables.net/1.10.9/css/jquery.dataTables.min.css"></link>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<!-- <script src="//code.jquery.com/jquery-1.11.3.min.js"></script> -->
<script src="https://cdn.datatables.net/1.10.9/js/jquery.dataTables.min.js"></script>



</head>

<body>

<script>
  $(document).ready(function() {
    $('#example').DataTable();
} );
  </script>



    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- <a class="navbar-brand" href="index.html">SB Admin v2.0</a> -->
            </div>
            <!-- /.navbar-header -->
           <ul class="nav navbar-top-links navbar-left">
               <li><a href="<?php echo base_url('users/home');?>"><h4>ChawriOnline.com - Admin Dashboard</h4></a></li>
           </ul>

            <ul class="nav navbar-top-links navbar-right">
                 <li><?php if($this->session->userdata('user_data')!=''){ echo $this->session->userdata['user_data'][0]['users_name'];}?></li>
                <li class="divider"></li>
                        <li><a href="<?php echo base_url().'users/logout' ;?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
               <!--  <!/.dropdown
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-/.dropdown-user                 </li> -->
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="<?php echo base_url().'admin/home';?>"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url().'admin/sellers';?>"><i class="fa fa-table fa-fw"></i> Sellers</a>

                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="<?php echo base_url().'admin/buyers';?>"><i class="fa fa-table fa-fw"></i> Buyers</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url().'admin/showProducts';?>"><i class="fa fa-edit fa-fw"></i> Order Management</a>
                        </li>
                          <li>
                            <a href="<?php echo base_url().'categories';?>"><i class="fa fa-edit fa-fw"></i>Add Categories</a>
                        </li>




                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
<div id="page-wrapper">
