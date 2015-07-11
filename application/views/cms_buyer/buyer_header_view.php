<?php
$profile_pic="";
$profile_pic=$this->session->userdata("profile_pic"); 
//print'<pre>';print_r($this->session->all_userdata());exit;
//print($profile_pic);exit;
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
   <meta charset="utf-8" />
   <title></title>
   <link href="<?php echo base_url()?>admin/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
   <link href="<?php echo base_url()?>admin/css/metro.css" rel="stylesheet" />
   <link href="<?php echo base_url()?>admin/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
   <link href="<?php echo base_url()?>admin/bootstrap-fileupload/bootstrap-fileupload.css" rel="stylesheet" />
   <link href="<?php echo base_url()?>admin/font-awesome/css/font-awesome.css" rel="stylesheet" />
   <link href="<?php echo base_url()?>admin/css/style.css" rel="stylesheet" />
   <link href="<?php echo base_url()?>admin/css/style_responsive.css" rel="stylesheet" />
   <link href="<?php echo base_url()?>admin/css/style_default.css" rel="stylesheet" id="style_color" />
   <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>admin/gritter/css/jquery.gritter.css" />
   <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>admin/chosen-bootstrap/chosen/chosen.css" />
   <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>admin/jquery-tags-input/jquery.tagsinput.css" />
   <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>admin/clockface/css/clockface.css" />
   <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>admin/bootstrap-wysihtml5/bootstrap-wysihtml5.css" />
   <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>admin/bootstrap-datepicker/css/datepicker.css" />
   <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>admin/bootstrap-timepicker/compiled/timepicker.css" />
   <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>admin/bootstrap-colorpicker/css/colorpicker.css" />
   <link rel="stylesheet" href="<?php echo base_url()?>admin/bootstrap-toggle-buttons/static/stylesheets/bootstrap-toggle-buttons.css" />
   <link rel="stylesheet" href="<?php echo base_url()?>admin/data-tables/DT_bootstrap.css" />
   <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>admin/bootstrap-daterangepicker/daterangepicker.css" />
   <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>admin/uniform/css/uniform.default.css" />
   <link rel="shortcut icon" href="favicon.ico" />
   <script src="<?php echo base_url()?>admin/js/jquery-1.8.3.min.js"></script>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="fixed-top">
	<!-- BEGIN HEADER -->
	<div class="header navbar navbar-inverse navbar-fixed-top">
		<!-- BEGIN TOP NAVIGATION BAR -->
		<div class="navbar-inner">
			<div class="container-fluid">
				<!-- BEGIN LOGO -->
				<a class="brand" href="<?php echo base_url()?>index.php/cms/dashboard">
				<!-- <img src="<?php echo base_url()?>images/logo.png" style="height: 70px;margin-top: -32px;" alt="logo" /> -->
				</a>
				<!-- END LOGO -->
				<!-- BEGIN RESPONSIVE MENU TOGGLER -->
				<a href="javascript:;" class="btn-navbar collapsed" data-toggle="collapse" data-target=".nav-collapse">
				<img src="<?php echo base_url()?>admin/img/menu-toggler.png" alt="" />
				</a>          
				<!-- END RESPONSIVE MENU TOGGLER -->				
				<!-- BEGIN TOP NAVIGATION MENU -->					
				<ul class="nav pull-right">					
					<!-- BEGIN USER LOGIN DROPDOWN -->
					<li class="dropdown user">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<!-- <img alt="" src="<?php echo base_url()?>admin/img/avatar1_small.jpg" /> -->
						<span class="username"><?php echo $this->session->userdata('first_name');?></span>
						<i class="icon-angle-down"></i>
						</a>
						<ul class="dropdown-menu">							
							<li><a href="<?php echo base_url()?>index.php/cms/login/logout"><i class="icon-key"></i> Log Out</a></li>
						</ul>
					</li>
					<!-- END USER LOGIN DROPDOWN -->
				</ul>
				<!-- END TOP NAVIGATION MENU -->	
			</div>
		</div>
		<!-- END TOP NAVIGATION BAR -->
	</div>
	<!-- END HEADER -->
	<!-- BEGIN CONTAINER -->
	<div class="page-container row-fluid">
		<!-- BEGIN SIDEBAR -->
		<div class="page-sidebar nav-collapse collapse">
			<!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
			<div class="slide hide">
				<i class="icon-angle-left"></i>
			</div>
			<!-- <form class="sidebar-search" />
				<div class="input-box">
					<input type="text" class="" placeholder="Search" />
					<input type="button" class="submit" value=" " />
				</div>
			</form> -->
			<div class="clearfix"></div>
			<!-- END RESPONSIVE QUICK SEARCH FORM -->
			<!-- BEGIN SIDEBAR MENU -->
			<ul>
<!-- <li <?php if(isset($page) && $page=="dashboard"){?> class="active"<?php }?>>
					<a href="<?php echo base_url()?>index.php/cms/dashboard">
					<i class="icon-home"></i>Dashboard
					<span class="selected"></span>
					</a>					
				</li> -->
				<li <?php if(isset($page) && $page=="home"){?> class="active"<?php }?>>
				    <a href="<?php echo base_url()?>index.php/cms_seller/Admin_home">
					<i class="icon-home"></i>Home
					<span class="selected"></span>
					</a>					
			    </li>
				<li <?php if(isset($page) && $page=="slider"){?> class="active"<?php }?>>
				    <a href="<?php echo base_url()?>index.php/cms_seller/myaccount">
					<i class="icon-home"></i>My Account
					<span class="selected"></span>
					</a>					
			    </li>			   
			    
				<li <?php if(isset($page) && $page=="producttrade"){?> class="active"<?php }?>>
				    <a href="<?php echo base_url()?>index.php/cms_seller/ProductTrade">
					<i class="icon-home"></i>Product Trade
					<span class="selected"></span>
					</a>					
			    </li>
				<li <?php if(isset($page) && $page=="sections"){?> class="active"<?php }?>>
				    <a href="<?php echo base_url()?>index.php/cms_seller/sections">
					<i class="icon-home"></i>Refer & Earn
					<span class="selected"></span>
					</a>					
			    </li>
				
			</ul>
			<!-- END SIDEBAR MENU -->
		</div>
		<!-- END SIDEBAR -->