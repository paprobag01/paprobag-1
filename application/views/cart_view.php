<?php 
// print_r('<pre>');
// var_dump($this->_ci_cached_vars);
// die();
?>
    <div id="content">
    	<div class="container">
        <?php 
        if(isset($empty) && !empty($empty)) {
        ?>
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">&nbsp;</div>
                <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                    <h2>Sorry There is no product in the Cart</h2>
                </div>
            </div>
        <?php
        } else {
        ?>
            <div class="cart_c">
            	<div class="cart_top">
                    <div class="title clearfix">
                        <h2>Your cart - Checkout</h2>
                        <div class="title_right cart_list">
                            <ul>
                                <li class="active"><span>1</span></li>
                                <li><span>2</span></li>
                                <li><span>3</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                            <div class="sidebar">
                                <div class="side_box side_box_1 red5">
                                    <h5>helpful information</h5>
                                    <ul>
                                        <li><a href="#">Deliver</a></li>
                                        <li><a href="#">Payment </a></li>
                                        <li><a href="#">Warranty</a></li>
                                        <li><a href="#">Services</a></li>
                                        <li><a href="#">Discounts</a></li>
                                        <li><a href="#">Loyalty Program</a></li>
                                        <li><a href="#">Contacts</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                            <div class="cart_tbl">
                                <div class="clearfix title_row">
                                    <ul>
                                        <li>Photo</li>
                                        <li>Name</li>
                                        <li>Quantity</li>
                                        <li>Price</li>
                                    </ul>
                                </div>
                                <div class="clearfix con_row">
                                <?php
                                foreach ($product_id as $key => $value) {
                                ?>
                                    <ul>
                                        <li><div class="thumb"><span> <img alt="alt"  src="<?php echo $product_image[$key]; ?>" class="" draggable="false"> </span></div></li>
                                        <li>
                                            <h5><a href="#"><?php echo $product_name[$key]; ?></a></h5>
                                            <p><?php echo $product_short_desc[$key]; ?></p>
                                        </li>
                                        <li>
                                            <a  class="minus_btn"></a>
                                            <input type="text" class="txtbox" placeholder="1" id="product_quantity" value="<?php echo $quantity[$key]; ?>"> 
                                            <a  class="plus_btn"></a>
                                        </li>
                                        <li>
                                            <div class="price prod_price" id="product_wise_total"><?php echo $product_wise_total[$key]; ?></div>
                                            <a href="javascript:void(0);" id="<?php echo $value; ?>" class="del_btn"></a>
                                        </li>
                                    </ul>                                    
                                <?php
                                }
                                ?>
                                </div>
                                <div class="clearfix total_row">
                                    <ul>
                                        <li>
                                            <p><span class="fa fa-clock-o"></span>Praesent egestas est vitae interdum amet erat varius elementum.</p>
                                        </li>
                                        <li>
                                            <div class="total_val">Total value:</div>
                                        </li>
                                        <li>
                                            <div class="price"><?php echo $cart_total; ?></div>
                                            <a href="#" class="refresh_btn"></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="cart_btn clearfix">
                                    <a href="#" class="back_btn"><span class="fa fa-chevron-left"></span>Back</a>
                                    <a href="javascript:void(0);" class="next_btn" id="next_billing">Next step<span class="fa fa-chevron-right"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
            	</div>
				<div class="cart_bot" style="display:none;">
                    <div class="title clearfix">
                        <h2>Your cart - Shipping Information</h2>
                        <div class="title_right cart_list">
                            <ul>
                                <li class="complete"><span></span></li>
                                <li><span>2</span></li>
                                <li><span>3</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                    	<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                            <div class="sidebar">
                                <div class="side_box side_box_1 red5">
                                    <h5>helpful information</h5>
                                    <ul>
                                        <li><a href="#">Deliver</a></li>
                                        <li><a href="#">Payment </a></li>
                                        <li><a href="#">Warranty</a></li>
                                        <li><a href="#">Services</a></li>
                                        <li><a href="#">Discounts</a></li>
                                        <li><a href="#">Loyalty Program</a></li>
                                        <li><a href="#">Contacts</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                        	<div class="ship_frm_c">
                                <div class="frm bill_frm">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                            <div class="lbltxt">Billing Name:<span class="req">*</span></div>
                                            <input type="text" class="txtbox">
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                            <div class="lbltxt">E-mail: <span class="req">*</span></div>
                                            <input type="text" class="txtbox">
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                            <div class="lbltxt">Phone: <span class="req">*</span></div>
                                            <input type="text" class="txtbox">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                            <div class="lbltxt">Address Line 1<span class="req">*</span></div>
                                            <input type="text" class="txtbox">
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                            <div class="lbltxt">Address Line 2<span class="req">*</span></div>
                                            <input type="text" class="txtbox">
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                            <div class="lbltxt">Zip/Postal Code<span class="req">*</span></div>
                                            <input type="text" class="txtbox">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                            <div class="lbltxt">City: <span class="req">*</span></div>
                                            <input type="text" class="txtbox">
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                            <div class="lbltxt">State/Province:  <span class="req">*</span></div>
                                            <input type="text" class="txtbox">
                                        </div>
                                        
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                            <div class="lbltxt">
                                                <input type="radio" class="ship_same_address" name="ship_address">Ship to this address
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                            <div class="lbltxt">
                                                <input type="radio" class="ship_different_address iradio_minimal" name="address">Ship to different address
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                            <div class="reqired">* Required Fields</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="frm ship_frm" style="display:none;">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                            <div class="lbltxt">Billing Name:<span class="req">*</span></div>
                                            <input type="text" class="txtbox">
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                            <div class="lbltxt">E-mail: <span class="req">*</span></div>
                                            <input type="text" class="txtbox">
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                            <div class="lbltxt">Phone: <span class="req">*</span></div>
                                            <input type="text" class="txtbox">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                            <div class="lbltxt">Address Line 1<span class="req">*</span></div>
                                            <input type="text" class="txtbox">
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                            <div class="lbltxt">Address Line 2<span class="req">*</span></div>
                                            <input type="text" class="txtbox">
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                            <div class="lbltxt">Zip/Postal Code<span class="req">*</span></div>
                                            <input type="text" class="txtbox">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                            <div class="lbltxt">City: <span class="req">*</span></div>
                                            <input type="text" class="txtbox">
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                            <div class="lbltxt">State/Province:  <span class="req">*</span></div>
                                            <input type="text" class="txtbox">
                                        </div>
                                        
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                            <div class="reqired">* Required Fields</div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="cart_btn clearfix">
                                    <a href="#" class="back_btn" id="back_shipping"><span class="fa fa-chevron-left"></span>Back</a>
                                    <a href="#" class="next_btn">Next step<span class="fa fa-chevron-right"></span></a>
                                </div>        
                        	</div>
                        </div>
                    </div>
               </div>     
            </div>
        <?php
        }
        ?>
    	</div>
    </div>