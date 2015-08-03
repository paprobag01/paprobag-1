'<!DOCTYPE HTML>
<html class="noIE">

<!-- Mirrored from templines.com/demo/html/shoptime-html/cooncook/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Apr 2015 06:10:27 GMT -->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>CoonCook</title>

<!--Master css-->
<link rel="stylesheet" href="<?php echo base_url('css/master.css')?>">
 <link rel="stylesheet" href="<?php echo base_url('css/colorpicker.css')?>" type="text/css" />
<link rel="stylesheet" media="screen" type="text/css" href="<?php echo base_url('css/layout.css')?>" /> 
<script type="text/javascript" src="<?php echo base_url('js/jquery.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('js/bootstrap.min.js')?>"></script>
<!--<script type="text/javascript" src="<?php //echo base_url('js/jquery.icheck.js')?>"></script>-->
<script type="text/javascript" src="<?php echo base_url('js/package.min.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('js/jquery.flexslider.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('js/bxslider/jquery.bxslider.min.js')?>"></script> 
<script type="text/javascript" src="<?php echo base_url('js/scripts.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('js/path.js')?>"></script>

<!--<script type="text/javascript" src="<?php echo base_url('js/colorpicker.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('js/eye.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('js/js/jquery.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('js/layout.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('js/utils.js')?>"></script>-->

<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<!--<link href="<?php echo base_url('css/colorpicker.css')?>" rel="stylesheet" type="text/css">
<link href="<?php echo base_url('css/layout.css')?>" rel="stylesheet" type="text/css">-->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('js/j360.js')?>" ></script>
</head>
<body>
<div id="header">
  <div class="header_top">
    <div class="container">
      <div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
       
      <div class="modal fade" id="modal-container-70333" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="padding-left: 97px;padding-right: 187px;padding-bottom: 30px;">
          <div class="modal-content">
            <div class="modal-header">
               
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                ×
              </button>
              <h4 class="modal-title" id="myModalLabel">
                Modal title
              </h4>
            </div>
            <div class="modal-body" style="padding-bottom: 0px;">
              
        <div class="form-group">
           <form method="post" action="<?php echo base_url();?>Track_order_detail">
          <label for="exampleInputEmail1">
            Enter Email address :
          </label>
          <input type="email" class="form-control" id="exampleInputEmail1" />
        </div>
        <div class="form-group">
           
          <label for="exampleInputPassword1">
            Enter Order ID :
          </label>
          <input type="text" class="form-control" id="exampleInputPassword1"/>
        </div>        
        <div class="checkbox">           
          <label>
            <input type="checkbox" style="width: 213px;"/> Check me out
          </label>
        </div>
            </div>
            <div class="modal-footer" style="padding-bottom: 6px;">
               
              <button type="button" class="btn btn-default" data-dismiss="modal">
                Close
              </button> 
              <input type="submit" value="Track" class="btn btn-primary">              
              </form>
            </div>
          </div>
          
        </div>
        
      </div>
      
    </div>
  </div>
</div>
      <div class="top_menu">
        <ul>
          <li><a href="<?php echo base_url()?>seller_page">Sale With GreenHandle</a></li>         
        </ul>
      </div>
    <div class="top_menu">
        <ul>
          <li align="center"><a id="modal-70333" href="#modal-container-70333" role="button" class="btn" data-toggle="modal">Free Shipping Across India / Track Order</a></li>         
        </ul>
      </div>
      <div class="hed_right">
        <ul>
          <li><span class="fa fa-phone"></span>022 6127 5286</li>
          <li><a href="<?php echo base_url()?>Bulk_order"><span class="fa fa-envelope"></span>Bulk Order</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="header_bot">
    <div class="container">
      <div class="logo"> <a href="index-2.html"><img alt="alt" src="<?php echo base_url('images/1.jpg')?>" ></a> </div>
      <div id="nav" class="yamm">
        <button type="button" data-toggle="collapse" data-target="#navbar-collapse-1" class="navbar-toggle"> 
          <span class="icon-bar"></span> 
          <span class="icon-bar"></span> 
          <span class="icon-bar"></span> 
        </button>
         <nav id="navbar-collapse-1" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            
            <li class="dropdown yamm-fw"><a href="catalog.html" data-toggle="dropdown" class="dropdown-toggle">Customizable<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li>
                  <div class="yamm-content">
                    <div class="container">
                      <div class="row">
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                          <h5>Paper Bags</h5>
                          <ul>
                            <?php if(isset($paper_prod_head)){foreach($paper_prod_head as $row){?>
                            <li><a href="<?php echo base_url() ?>catalog/getProducts/<?php echo $row['moq']; ?>/<?php echo $row['section_id']; ?>/<?php echo $row['cat_id']; ?>/<?php echo $row['sub_cat_id']; ?>"><?php echo $row['sub_cat_name'];?></a></li>                           
                            <?php } }?>
                            <li><a href="catalog.html">+ More</a></li>                           
                          </ul>
                         
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                           <h5>Ecobags</h5>
                          <ul>
                            <?php if(isset($eco_prod_head)){foreach($eco_prod_head as $row){?>
                            <li><a href="<?php echo base_url() ?>catalog/getProducts/<?php echo $row['moq']; ?>/<?php echo $row['section_id']; ?>/<?php echo $row['cat_id']; ?>/<?php echo $row['sub_cat_id']; ?>"><?php echo $row['sub_cat_name'];?></a></li>                           
                            <?php } }?>
                          </ul>
                          <h5>Boxes</h5>
                          <ul>
                           <?php if(isset($box_prod_head)){foreach($box_prod_head as $row){?>
                            <li><a href="<?php echo base_url() ?>catalog/getProducts/<?php echo $row['moq']; ?>/<?php echo $row['section_id']; ?>/<?php echo $row['cat_id']; ?>/<?php echo $row['sub_cat_id']; ?>"><?php echo $row['sub_cat_name'];?></a></li>                           
                            <?php } }?>                           
                         </u>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                          <h5>Pouches</h5>
                          <ul>
                            <?php if(isset($pouch_prod_head)){foreach($pouch_prod_head as $row){?>
                            <li><a href="<?php echo base_url() ?>catalog/getProducts/<?php echo $row['moq']; ?>/<?php echo $row['section_id']; ?>/<?php echo $row['cat_id']; ?>/<?php echo $row['sub_cat_id']; ?>"><?php echo $row['sub_cat_name'];?></a></li>                           
                            <?php } }?>                           
                          </ul>
                          <h5>Office Products</h5>
                          <ul>
                            <?php if(isset($office_prod_head)){foreach($office_prod_head as $row){?>
                            <li><a href="<?php echo base_url() ?>catalog/getProducts/<?php echo $row['moq']; ?>/<?php echo $row['section_id']; ?>/<?php echo $row['cat_id']; ?>/<?php echo $row['sub_cat_id']; ?>"><?php echo $row['sub_cat_name'];?></a></li>                           
                            <?php } }?>                   
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
                            <div class="item_thumb">
                              <img alt="alt" src="images/costomize_products.jpg" height="255" width="100%">
                            </div>
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
            </li>
             <li class="dropdown yamm-fw"><a href="catalog.html" data-toggle="dropdown" class="dropdown-toggle">Ready To Print<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li>
                  <div class="yamm-content">
                    <div class="container">
                      <div class="row">
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                          <h5>Paper Bags</h5>
                          <ul>
                            <?php if(isset($paper_prod_ready)){foreach($paper_prod_ready as $row){?>
                            <li><a href="<?php echo base_url() ?>catalog/getProducts/<?php echo $row['moq']; ?>/<?php echo $row['section_id']; ?>/<?php echo $row['cat_id']; ?>/<?php echo $row['sub_cat_id']; ?>"><?php echo $row['sub_cat_name'];?></a></li>                           
                            <?php } }?>                            
                          </ul>
                         
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                           <h5>Ecobags</h5>
                          <ul>
                            <?php if(isset($eco_prod_ready)){foreach($eco_prod_ready as $row){?>
                            <li><a href="<?php echo base_url() ?>catalog/getProducts/<?php echo $row['moq']; ?>/<?php echo $row['section_id']; ?>/<?php echo $row['cat_id']; ?>/<?php echo $row['sub_cat_id']; ?>"><?php echo $row['sub_cat_name'];?></a></li>                           
                            <?php } }?>  
                          </ul>
                          <h5>Boxes</h5>
                          <ul>
                             <?php if(isset($box_prod_ready)){foreach($box_prod_ready as $row){?>
                            <li><a href="<?php echo base_url() ?>catalog/getProducts/<?php echo $row['moq']; ?>/<?php echo $row['section_id']; ?>/<?php echo $row['cat_id']; ?>/<?php echo $row['sub_cat_id']; ?>"><?php echo $row['sub_cat_name'];?></a></li>                           
                            <?php } }?>
                          </ul> 
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                          <h5>Pouches</h5>
                          <ul>
                            <?php if(isset($pouch_prod_ready)){foreach($pouch_prod_ready as $row){?>
                            <li><a href="<?php echo base_url() ?>catalog/getProducts/<?php echo $row['moq']; ?>/<?php echo $row['section_id']; ?>/<?php echo $row['cat_id']; ?>/<?php echo $row['sub_cat_id']; ?>"><?php echo $row['sub_cat_name'];?></a></li>                           
                            <?php } }?>                          
                          </ul>
                          <h5>Office Products</h5>
                          <ul>
                             <?php if(isset($office_prod_ready)){foreach($office_prod_ready as $row){?>
                            <li><a href="<?php echo base_url() ?>catalog/getProducts/<?php echo $row['moq']; ?>/<?php echo $row['section_id']; ?>/<?php echo $row['cat_id']; ?>/<?php echo $row['sub_cat_id']; ?>"><?php echo $row['sub_cat_name'];?></a></li>                           
                            <?php } }?>                      
                          </ul>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                         
                          <h5>Accessories</h5>
                          <ul>
                            <?php if(isset($accessory_ready)){foreach($accessory_ready as $row){?>
                            <li><a href="<?php echo base_url() ?>catalog/getProducts/<?php echo $row['moq']; ?>/<?php echo $row['section_id']; ?>/<?php echo $row['cat_id']; ?>/<?php echo $row['sub_cat_id']; ?>"><?php echo $row['sub_cat_name'];?></a></li>                           
                            <?php } }?> 
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
                            <div class="item_thumb">
                              <img alt="alt" src="images/readytoprint.jpg" height="255" width="100%">
                            </div>
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
            </li>
            <li class="dropdown yamm-fw"><a href="catalog.html" data-toggle="dropdown" class="dropdown-toggle">Ready To Deliver<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li>
                  <div class="yamm-content">
                    <div class="container">
                      <div class="row">
                         <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                          <div class="new_item">
                            <div class="clearfix item_title">
                              <h5>Retail Products</h5>                              
                            </div>
                            <div class="item_thumb">
                              <img alt="alt" src="media/product/Retail box.jpg" height="255" width="100%">
                            </div>
                            <div class="item_desc">
                              <div class="pull-left">
                                <h5>Mugs with yellow stripes</h5>
                                <p>Kitchen utensils</p>
                              </div>
                              <div class="price">$15.50</div>
                            </div>
                          </div>
                        </div>                        
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                          <div class="new_item">
                            <div class="clearfix item_title">
                              <h5>Offers</h5>                              
                            </div>
                            <div class="item_thumb">
                              <img alt="alt" src="media/product/F OFFER.jpg" height="255" width="100%">
                            </div>
                            <div class="item_desc">
                              <div class="pull-left">
                                <h5>Mugs with yellow stripes</h5>
                                <p>Kitchen utensils</p>
                              </div>
                              <div class="price">$15.50</div>
                            </div>
                          </div>
                        </div>
                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                          <div class="new_item">
                            <div class="clearfix item_title">
                              <h5>Wholesale Products</h5>                              
                            </div>
                            <div class="item_thumb">
                              <img alt="alt" src="media/product/wholesale pouch.jpg" height="255" width="100%">
                            </div>
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
            </li>
             <li class="dropdown yamm-fw"><a href="catalog.html" data-toggle="dropdown" class="dropdown-toggle">Ecological Ad Bags<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li>
                  <div class="yamm-content">
                    <div class="container">
                      <div class="row">
                         <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                          <div class="new_item">
                            <div class="clearfix item_title">
                              <h5>Printed Newspaper Bags</h5>                              
                            </div>
                            <div class="item_thumb">
                              <img alt="alt" src="images/bags1.jpg" height="255" width="100%">
                            </div>
                            <div class="item_desc">
                              <div class="pull-left">
                                <h5>Mugs with yellow stripes</h5>
                                <p>Kitchen utensils</p>
                              </div>
                              <div class="price">$15.50</div>
                            </div>
                          </div>
                        </div>                        
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                          <div class="new_item">
                            <div class="clearfix item_title">
                              <h5>Ad-Newspaper Bags</h5>                              
                            </div>
                            <div class="item_thumb">
                              <img alt="alt" src="images/bags1.jpg" height="255" width="100%">
                            </div>
                            <div class="item_desc">
                              <div class="pull-left">
                                <h5>Mugs with yellow stripes</h5>
                                <p>Kitchen utensils</p>
                              </div>
                              <div class="price">$15.50</div>
                            </div>
                          </div>
                        </div>
                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                          <div class="new_item">
                            <div class="clearfix item_title">
                              <h5>Rejected Paper Bags</h5>                              
                            </div>
                            <div class="item_thumb">
                              <img alt="alt" src="images/bags1.jpg" height="255" width="100%">
                            </div>
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
            </li>
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
             <?php
                                if(isset($product_id)){foreach ($product_id as $key => $value) {
                                ?>
                <ul>
                  <li><div class="thumb"><span> <img alt="alt" width="80px" height="80px"  src="<?php echo base_url().$product_image[$key]?>" class="" draggable="false"> </span></div></li>
                  <li>
                    <h5><a href="#"><?php echo $product_name[$key]; ?></a></h5>
                    <p><?php echo $product_short_desc[$key]; ?></p>
                  </li>
                  <li>
                    <div class="price"><?php echo $product_wise_total[$key]; ?></div>
                    <a href="javascript:void(0);" id="<?php echo $value; ?>"  class="del_btn"></a> </li>
                </ul>    
                <?php
                               } }
                                ?>            
              </div>

              <div class="cheout_row clearfix">
                <p><span class="fa fa-clock-o"></span>Praesent egestas est vitae interdum amet erat varius elementum.</p>
                <a href="<?php echo base_url(); ?>checkout" class="checkout_btn">Checkout</a> </div>
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
                <form method="post" autocomplete="off">
                <input type="search" id="search_value" name="search_value"  class="txtbox" placeholder="Search" onkeyup="showResult(this.value)">
                <a href="#"><span class="fa fa-level-down fa-rotate-90"></span></a></div>
                <div id="livesearch"></div>
                </form>
                <script>
                function showResult(str) {
                  if (str.length==0) { 
                    document.getElementById("livesearch").innerHTML="";
                    document.getElementById("livesearch").style.border="0px";
                    return;
                  }
                  if (window.XMLHttpRequest) {
                    // code for IE7+, Firefox, Chrome, Opera, Safari
                    xmlhttp=new XMLHttpRequest();
                  } else {  // code for IE6, IE5
                    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                  }
                  xmlhttp.onreadystatechange=function() {
                    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
                      document.getElementById("livesearch").innerHTML=xmlhttp.responseText;
                      document.getElementById("livesearch").style.border="0px solid #A5ACB2";
                    }
                  }
                  xmlhttp.open("GET","<?php echo base_url();?>Search_result/search_data/?search_value="+str,true);
                  xmlhttp.send();
                }
                </script>
            </div>
            
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
