    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>
        window.jQuery || document.write('<script src="<?php echo base_url();?>js/vendor/jquery-1.9.1.min.js"><\/script>')
        </script>
        <script src="<?php echo base_url();?>js/jQuery.print.js"></script>
        <script type='text/javascript'>
            $(function() {
            $("#printable").find('.print').on('click', function() {
            $.print("#printable");
            });
            });
        </script> 
         <script type="text/javascript">                           
                                jQuery(function () {
                                    jQuery(".email_order").click(function () {
                                        var email = $(this).attr('id');                                       
                                        var data = {
                                            'email': email
                                        };
                                        console.log(data);
                                        $.ajax({
                                            type: 'POST',
                                            dataType: 'json',
                                            ContentType: "application/json",
                                            url:"<?php echo base_url();?>login/sendoredrEmail",
                                            data: data,
                                            success: function(data) { 
                                                
                                               // $('#size_details').html(data);
                                                $("#email_success").fadeIn();
                                                $('#email_success').html(data);
                                            },
                                        });
                                    });
                                });

                            jQuery(function () {
                                    jQuery(".email_order").click(function () {
                                        $("#loading2").show();
                                    });
                                });
        </script>
    <div id="content">
        <div class="container">
            <div class="title clearfix">
               
                <div class="title_right">
                    <a href="#" class="rss"><span class="fa fa-rss"></span>Rss</a>
                </div>
            </div>
            
            <div class="blog_c ideas-hover" id="printable">
                <div class="row">
                    <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12" style="width: 93%;padding-left: 107px;">
                        <div class="blog_blk red5 clearfix animated" data-animation="rollIn">
                        
                        
                        <a href="blog_single_post.html"> 
                        
                            <div class="box ">
                            
                            <div class="rounded_box"><img alt="alt"  src="media/blog/user1.png" /></div></div> </a>                            
                            
                            <div class="blog_desc">                               
                          
                                <h2>Order Details</h2><br>
                            <div class="container-fluid">
                            <div class="row">                                
                                 <div class="col-md-12" id="email_success">
                                    
                                    <div id="loading2" style="display:none;"><div class="alert alert-success" role="alert"><img src="media/loading.gif" alt="" />Sending...</div>
                                </div>
                                 </div>
                             </div>

       
     <div class="row">
        <div class="col-md-12">
             <table class="table table-hover table-bordered">
                <thead style="background-color: #EBEBEB;">
                    <tr>
                        <th>Order (Order ID: 23459804) - In Progress</th>
                        <th>Order (Order ID: 23459804) - In Progress</th>                       
                    </tr>
                </thead>
                <tbody>
                    <tr>
                         <td>
                          <address>
                             <strong>Twitter, Inc.</strong><br /> 795 Folsom Ave, Suite 600<br /> San Francisco, CA 94107<br /> <abbr title="Phone">P:</abbr> (123) 456-7890
                        </address>                            
                         </td>
                         <td>
                           <address>
                                 <strong>Twitter, Inc.</strong><br /> 795 Folsom Ave, Suite 600<br /> San Francisco, CA 94107<br /> <abbr title="Phone">P:</abbr> (123) 456-7890
                            </address>
                         </td>
                        
                    </tr>
                   
                </tbody>
            </table>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-12">
             <table class="table table-hover table-bordered">
                <thead style="background-color: #EBEBEB;">
                    <tr>
                        <th>Print Order</th>
                        <th>Email Oreder</th>
                        <th>Contact Us</th>                       
                    </tr>
                </thead>
                <tbody>
                    <tr>
                         <td>
                         <div class="col-md-4" style="padding-left: 89px;">
                            <img alt="Bootstrap Image Preview" src="media/blog/print.jpg" class="print"/>
                        </div>                            
                         </td>
                         <td>
                           <div class="col-md-4">
                                <img alt="Bootstrap Image Preview" src="media/blog/email.png" id="<?php echo "help@greenhandle.in";?>" class="email_order" value="<?php echo "GOOD Work";?>" style="height: 115px;padding-left: 44px;"/>
                            </div>
                         </td> 
                         <td>
                           <div class="col-md-4">
                                <img alt="Bootstrap Image Preview" src="media/blog/contact_us.jpg" width="100px" height="100px"/>
                            </div>
                         </td>                        
                    </tr>
                   
                </tbody>
            </table>
        </div>
    </div>
    <hr>
   <br>
    <br>
    <div class="row">
        <!-- <h5 style="padding-left: 19px;">Product Details</h5><br> -->
        <div class="col-md-12">
             <table class="table table-hover table-bordered">
                <thead style="background-color: #EBEBEB;">
                    <tr>
                        <th style="width: 440px;">Product</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Shipping Charges</th>
                        <th>Final Price</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                         <td>
                            <div class="media well">
                             <a href="#" class="pull-left"><img alt="Bootstrap Media Preview" src="http://lorempixel.com/64/64/" class="media-object" /></a>
                            <div class="media-body">
                                <h4 class="media-heading">
                                    Nested media heading
                                </h4> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.                 
                            </div>
                        </div>
                         </td>
                         <td></td>
                         <td></td>
                         <td></td>
                         <td></td>
                    </tr>
                   
                </tbody>
            </table>
         
        </div>              
    </div>
     <div class="row">
        <div class="col-md-12">
             <table class="table table-hover table-bordered">
                <thead style="background-color: #EBEBEB;">
                    <tr>
                        <th>APPROVAL</th>
                        <th>PROCESSING</th>
                        <th>SHIPPING</th>
                        <th>DELIVERY</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                         <td colspan="4">
                           <div class="progress">
                            <div class="progress-bar" style="width: 60%;">
                                60%
                            </div>
                        </div>
                         </td>
                    </tr>
                   
                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
             <table class="table table-hover table-bordered">
                <thead style="background-color: #EBEBEB;">
                    <tr>
                        <th colspan="3">Order (Order ID: 23459804) - In Progress<span style="padding-left: 467px;">Total Price :</span></th>                       
                    </tr>
                </thead>
                <tbody>
                    <tr>
                         <td>
                           <p align="left">Material Name :</p>
                           <p align="left">GSM/ Weight Carring Capacity :</p>
                           <p align="left">Style :</p>
                           <p align="left">Size :</p>
                           <p align="left">Handle :</p>
                           <p align="left">Handle Colour :</p>                            
                         </td>
                         <td>
                            <p align="left">Print :</p>
                            <p align="left">Material Colour :</p>
                             <p align="left">Number Of Prints :</p>
                              <p align="left">Lamination :</p>
                               <p align="left">Special Work :</p>
                               <p align="left">Print Size :</p>
                         </td>
                        
                    </tr>
                   
                </tbody>
            </table>
        </div>
    </div>
</div>
                          
                            </div>
                            
                        </div>
                       
                    </div>
                   
                </div>
            </div>
        </div>
    </div>