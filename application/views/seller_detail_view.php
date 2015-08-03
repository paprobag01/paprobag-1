<div id="content">
        <div class="container">
            
            <div class="cart_c">
                
                <div class="cart_bot">
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
                            <div clas
                            s="sidebar">
                                <div class="side_box side_box_1 red5">
                                    <h5>helpful information</h5>
                                    <ul>
                                        <li><a href="#">Personal Details</a></li>
                                        <li><a href="#">Email ID </a></li>
                                        <li><a href="#">Contact Number</a></li>
                                        <li><a href="#">Address</a></li>
                                        <li><a href="#">Product Upload</a></li>
                                        <li><a href="#">Verfication</a></li>
                                        <li><a href="#">Ready To Sell</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                            <div class="ship_frm_c">
                            <?php 
                            if($errormsg['error']){
                            ?>
                                <div><h3>Your Email address is not verified</h3></div>
                            <?php
                            } else {
                            ?>
                                <form method="post" id="register_seller_info" action="<?php echo base_url()?>login/register_seller_info">
                                    <div class="frm ship_frm">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                <div class="lbltxt">Email ID :<span class="req">*</span></div>
                                                <input type="text" name="email_id" id="email_id" class="txtbox" value="<?php 
                                                if(isset($email_id)){
                                                    echo $email_id;
                                                }
                                                ?>">
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                <div class="lbltxt">Enter OTP :<span class="req">*</span></div>
                                                <input type="text" class="txtbox" id="otp" name="otp" placeholder="Put last four digits of miss call" value="<?php echo $otp_start; ?>">
                                            </div>
                                            <span style="float:left">
                                           <div class="cart_btn clearfix" style="padding-top: 40px;padding-bottom: 10px;">
                                       
                                                <a href="javascript:void(0);" class="next_btn" id="verify_number">Verify Number</a>
                                         </div>  </span>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                <div class="lbltxt">Organization Name :<span class="req">*</span></div>
                                                <input type="text" class="txtbox" name="orgname" value="<?php 
                                                if(isset($orgname)){
                                                    echo $orgname;
                                                }
                                                ?>">
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                <div class="lbltxt">Address Line 1:  <span class="req">*</span></div>
                                                <input type="text" id="address_1" name="address1" class="txtbox">
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                <div class="lbltxt">Address Line 2: <span class="req">*</span></div>
                                                <input type="text" id="address_2" name="address2" class="txtbox">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                <div class="lbltxt">Zip/Postal Code:<span class="req">*</span></div>
                                                <input type="text" id="zipcode" name="zipcode" class="txtbox">
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                <div class="lbltxt">City:<span class="req">*</span></div>
                                                <input type="text" id="city" name="city" class="txtbox">
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                <div class="lbltxt">State: <span class="req">*</span></div>
                                                <input type="text" id="state" name="state" class="txtbox">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                <div class="reqired" style="float:left">* Required Fields</div>
                                                <div id="otp_check" style="float: right;padding: 24px 0 13px 0;line-height: 16px;display:none"><b>otp is not verified</b></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cart_btn clearfix">
                                        <input type="hidden" id="keymatch" name="keymatch" value="<?php echo $keymatch; ?>">
                                        <input type="hidden" id="otp_set" value="0">
                                        <a href="#" class="back_btn"><span class="fa fa-chevron-left"></span>Back</a>
                                        <a href="javascript:void(0);" id="seller_info" class="next_btn">Next step<span class="fa fa-chevron-right"></span></a>
                                    </div>
                                </form> 
                            <?php       
                            }
                            ?>
                            </div>
                        </div>
                    </div>
               </div>     
            </div>
        </div>
    </div>
    <script src="http://jqueryvalidation.org/files/dist/jquery.validate.min.js"></script>
    <script src="http://jqueryvalidation.org/files/dist/additional-methods.min.js"></script>
    <script type="text/javascript">
    /////////////////////////////////////
    // Register Seller info
    /////////////////////////////////////
    $('body').on('click', '#seller_info', function() {
        if($('#otp_set').val() == '1'){
            if ($('#register_seller_info').valid())
                $('#register_seller_info').submit();           
        }
        else {
            $('#otp_check').show();
        }
    });
    $(document).ready(function () {           
       //validate seller registration
       $("#register_seller_info").validate({
            rules: {
               "orgname": {
                   required: true,
                   maxlength: 25,
                   alphanumeric: true,
                   minlength: 3
               },
               "email_id": {
                  required: true,
                  email: true,
                  maxlength: 55
               },
               "otp":{
                    required: true,
                    minlength: 12,
                    maxlength: 12
               },
               "address1": {
                  required: true,
                  maxlength: 55,
                  alphanumeric: true
               },
               "address2": {
                  required: true,
                  maxlength: 55,
                  alphanumeric: true
               },
               "city": {
                  required: true,
                  maxlength: 55,
                  alphanumeric: true
               },
               "state": {
                  required: true,
                  maxlength: 55,
                  alphanumeric: true
               },
               "zipcode": {
                    required: true,
                    maxlength: 8,
                    number: true
               }
           }
        });
    });
    </script>