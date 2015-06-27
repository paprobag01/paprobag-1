<!DOCTYPE HTML>
<html class="noIE">

<!-- Mirrored from templines.com/demo/html/shoptime-html/cooncook/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Apr 2015 06:10:27 GMT -->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>CoonCook</title>

<!--Master css-->
<link rel="stylesheet" href="<?php echo base_url('css/master.css')?>">
<script type="text/javascript" src="<?php echo base_url('js/jquery.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('js/bootstrap.min.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('js/jquery.icheck.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('js/package.min.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('js/jquery.flexslider.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('js/bxslider/jquery.bxslider.min.js')?>"></script> 
<script type="text/javascript" src="<?php echo base_url('js/scripts.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('js/path.js')?>"></script>

<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('js/j360.js')?>" ></script>
</head>
<body>
<div id="header">
  <div class="header_top">
    <div class="container">
      <div class="top_menu">
        <ul>
          <li><a href="#">Sale With GreenHandle</a></li>         
        </ul>
      </div>
	  <div class="top_menu">
        <ul>
          <li align="center"><a href="#">Free Shipping across India</a></li>         
        </ul>
      </div>
      <div class="hed_right">
        <ul>
          <li><span class="fa fa-phone"></span>8 800 909 50 60 </li>
          <li><a href="#"><span class="fa fa-envelope"></span>Bulk Order</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="header_bot">
    <div class="container">
      <div class="logo"> <a href="index-2.html"><img alt="alt" src="<?php echo base_url('images/logo.png')?>" ></a> </div>
      <div id="nav" class="yamm">
        <button type="button" data-toggle="collapse" data-target="#navbar-collapse-1" class="navbar-toggle"> 
          <span class="icon-bar"></span> 
          <span class="icon-bar"></span> 
          <span class="icon-bar"></span> 
        </button>
		    <nav id="navbar-collapse-1" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
          <?php 
          // Loop for section
          foreach($section_data as $row)
          {          
          ?>
            <li class="dropdown">
              <a href="catalog.html" data-toggle="dropdown" class="dropdown-toggle">
                <?php echo $row['section_name']?>
                <b class="caret"></b>
              </a>
              <ul role="menu" class="dropdown-menu">
                <li>
                  <div class="yamm-content">
                    <div class="container">
                      <div class="row">
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                          <h5>Kitchen</h5>
                          <ul>
                            <li><a href="catalog.html">Kitchen cabinets</a></li>
                            <li><a href="catalog.html">Interior organizers</a></li>
                            <li><a href="catalog.html">Appliances</a></li>
                            <li><a href="catalog.html">Free-standing kitchens</a></li>
                            <li><a href="catalog.html">Countertops</a></li>
                            <li><a href="catalog.html">Kitchen faucets</a></li>
                            <li><a href="catalog.html">Wall panels</a></li>
                            <li><a href="catalog.html">Kitchen islands &amp; carts</a></li>
                            <li><a href="catalog.html">Step stools &amp; step ladders</a></li>
                          </ul>
                          <h5>Children's</h5>
                          <ul>
                            <li><a href="catalog.html">Baby</a></li>
                            <li><a href="catalog.html">Children 3-7</a></li>
                            <li><a href="catalog.html">Children 8-12</a></li>
                          </ul>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                          <h5>Livingroom</h5>
                          <ul>
                            <li><a href="catalog.html">Sofas &amp; armchairs</a></li>
                            <li><a href="catalog.html">TV &amp; media furniture </a></li>
                            <li><a href="catalog.html">Living room storage</a></li>
                            <li><a href="catalog.html">Coffee &amp; side tables</a></li>
                            <li><a href="catalog.html">Living room lighting</a></li>
                            <li><a href="catalog.html">Living room textiles</a></li>
                          </ul>
                          <h5>Bedroom</h5>
                          <ul>
                            <li><a href="catalog.html">Mattresses</a></li>
                            <li><a href="catalog.html">Beds</a></li>
                            <li><a href="catalog.html">Bedroom storage</a></li>
                            <li><a href="catalog.html">Lighting</a></li>
                            <li><a href="catalog.html">Textiles &amp; rugs</a></li>
                            <li><a href="catalog.html">Mirrors</a></li>
                          </ul>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                          <h5>Textiles &amp; Rugs</h5>
                          <ul>
                            <li><a href="catalog.html">Rugs</a></li>
                            <li><a href="catalog.html">Bedroom textiles</a></li>
                            <li><a href="catalog.html">Curtains &amp; blinds</a></li>
                            <li><a href="catalog.html">Curtain rods &amp; rails</a></li>
                            <li><a href="catalog.html">Fabrics &amp; sewing</a></li>
                            <li><a href="catalog.html">Cushions covers</a></li>
                            <li><a href="catalog.html">Blankets &amp; throws </a></li>
                            <li><a href="catalog.html">Kitchen textiles </a></li>
                            <li><a href="catalog.html">Place mats</a></li>
                            <li><a href="catalog.html">Bathroom textiles</a></li>
                            <li><a href="catalog.html">Children's textiles</a></li>
                            <li><a href="catalog.html">Baby textiles</a></li>
                            <li><a href="catalog.html">Mattress</a></li>
                          </ul>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                          <h5>For Business</h5>
                          <ul>
                            <li><a href="catalog.html">School</a></li>
                            <li><a href="catalog.html">Office</a></li>
                            <li><a href="catalog.html">Retail</a></li>
                            <li><a href="catalog.html">Hospitality</a></li>
                          </ul>
                          <h5>Workshop</h5>
                          <ul>
                            <li><a href="catalog.html">Tools</a></li>
                            <li><a href="catalog.html">Brushes</a></li>
                            <li><a href="catalog.html">Paints</a></li>
                            <li><a href="catalog.html">Wallpaper</a> </li>
                            <li><a href="catalog.html">Equipment</a> </li>
                            <li><a href="catalog.html">Glue</a> </li>
                            <li><a href="catalog.html">Nails</a> </li>
                            <li><a href="catalog.html">Panel</a></li>
                          </ul>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                          <div class="new_item">
                            <div class="clearfix item_title">
                              <h5>New items and sales</h5>
                              <div class="item_nav">
                                <ul>
                                  <li class="active"><a href="catalog.html"></a></li>
                                  <li><a href="catalog.html"></a></li>
                                  <li><a href="catalog.html"></a></li>
                                </ul>
                              </div>
                            </div>
                            <div class="item_thumb"></div>
                            <div class="item_desc">
                              <div class="pull-left">
                                <h5>Mugs with yellow stripes</h5>
                                <p>Kitchen utensils</p>
                              </div>
                              <div class="price">$15.50</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
  			    <?php    
            if(isset($catIdArr[$row['section_id']])) { 
            ?>
  			      <ul role="menu" class="dropdown-menu">
                <li>
  			 	      <?php
               // $counter_for_vertical_display = 0;
                // Category loop
                for($i=0; $i<count($catIdArr[$row['section_id']]); $i++) { 
                ?>
                    <h5><?php echo $catNameArr[$row['section_id']][$i]; ?></h5>
                    <ul>
  					        <?php
                    if(isset($subCatNameArr[$row['section_id']][$catIdArr[$row['section_id']][$i]]))
  			       		  {
                      //echo count($subCatNameArr[$row['section_id']][$catIdArr[$row['section_id']][$i]]);
                      // Sub Category Loop
  				            for($j=0; $j<count($subCatNameArr[$row['section_id']][$catIdArr[$row['section_id']][$i]]); $j++){ 
  				          ?>
                      <li>
                        <?php
                        if(strtoupper($catNameArr[$row['section_id']][$i]) == 'WHOLESALE')
                        {
                          $wholesale_flag = 1;
                        } else {
                          $wholesale_flag = 0;
                        }
                        ?>
                        <a href="<?php echo base_url()?>catalog/getProducts/<?php 
                          echo $wholesale_flag; ?>/<?php
                          echo $row['section_id']; ?>/<?php 
                          echo $catIdArr[$row['section_id']][$i] ;?>/<?php
                          echo $subCatIdArr[$row['section_id']][$catIdArr[$row['section_id']][$i]][$j]; ?>">
                          <!-- Print sub category name -->
                          <?php 
                          echo $subCatNameArr[$row['section_id']][$catIdArr[$row['section_id']][$i]][$j]; ?>
                        </a>                        
                      </li>
  				          <?php 
                    } 
                  }
                    ?>                   
                    </ul>
  				  <?php }  ?>
                </li>
              </ul>
  			    <?php 
            } 
            ?>
            </li>
		  <?php } ?>
		      </ul>
		    </nav>
      </div>
      <div class="right_menu">
        <ul>
          <li class="menubtn"><a href="#"><span class="fa fa-shopping-cart"></span></a>
            <div class="menu_c cart_menu">
              <div class="menu_title clearfix">
                <h4>Your Cart</h4>
              </div>
              <div class="cart_row">
                <ul>
                  <li>
                    <div class="pro_img"><span></span></div>
                  </li>
                  <li>
                    <h5><a href="http://templines.com/demo/html/cooncook/catalog.html">POÄNG - Chair, Blomstermåla</a></h5>
                    <p>Living room furniture</p>
                  </li>
                  <li>
                    <div class="price">$360.00</div>
                    <a href="#" class="del_btn"></a>
					        </li>
                </ul>               
              </div>
              <div class="cheout_row clearfix">
                <p><span class="fa fa-clock-o"></span>Praesent egestas est vitae interdum amet erat varius elementum.</p>
                <a href="#" class="checkout_btn">Checkout</a> </div>
            </div>
          </li>
          <li class="menubtn"><a href="#"><span class="fa fa-user"></span></a>
            <div class="menu_c acc_menu">
              <?php 
              if($this->session->userdata('logged_in')) {
              ?>
              <div class="menu_title clearfix">
                <h4>Account</h4> 
              </div>
              <div class="login_frm">
                <div>
                  <p>Dear, <?php echo $this->session->userdata('logged_in')['username']; ?></p>
                </div>
                <a href="<?php echo base_url(); ?>login/logout" class="signin_btn btn_c">Sign out</a> 
              </div>
              <?php
              } else {
              ?>
              <div class="menu_title clearfix">
                <h4>Account</h4>
                <a href="<?php echo base_url() ?>login/registration_form" class="sign_up">Sign up</a> 
              </div>
              <form method="post" action="<?php echo base_url()?>login">
                <div class="login_frm">
                  <input type="text" name="username" class="txtbox" placeholder="Username">
                  <input type="text" name="password" class="txtbox" placeholder="Password">
                  <div class="remember">
                    <input type="checkbox" class="chkbox icheckbox_minimal"/>
                    Remember Me</div>
                  <input type="submit" class="signin_btn btn_c" name="submit" value="Sign in">
                </div>
              </form>
              <div class="forgot clearfix"> <span>Forgot: </span> <a href="#"> Password</a> <a href="#" class="name">Username</a> </div>
              <?php } ?>
            </div>
          </li>
          <li class="menubtn"><a href="#"><span class="fa fa-search"></span></a>
            <div class="menu_c search_menu">
              <div class="search_box">
                <input type="search" class="txtbox" placeholder="Search">
                <a href="#"><span class="fa fa-level-down fa-rotate-90"></span></a> </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>