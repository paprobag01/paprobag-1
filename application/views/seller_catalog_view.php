<script type="text/javascript">
   $(document).ready(function() {
       $('#sec_id').on('click', function() {                  
         var categories = $('#sec_id').val();
         console.log(categories);
         $.ajax({   
            url: "<?php echo base_url()?>cms/getSubCategories/dropdown",
             async: false,
             type: "POST", 
             data: "categories="+categories,
             dataType: "html",             
             success: function(data) {
                 var dt=data.split("|");
                 //$('#subcategories').html(dt[0]);
                 if(dt[0]!='<label class="control-label">Category</label><div class="controls" id="prod_sub_categories"><select name="prod_sub_categories" onchange="getFilterVals()" id="prod_sub_categories"></select></div>')
                 {
                     $('#subcategories').fadeIn();
                     $('#subcategories').html(dt[0]);
                 }
                 else{
                     $('#subcategories').fadeIn();
                     $('#subcategories').html('<div class="controls">Category is not found under this Section</div>');
                 }
             }
         });
       });
     //  $('#filterDropdwn').on('click', function() {
         
               $('#subcategories').on('click', function() {
                    var filters = $('#prod_sub_categories').val();
                   var filters1 = $('#sec_id').val();
                   console.log(filters);
                   $.ajax({   
                    url: "<?php echo base_url()?>cms/getSubCategories/filterdropdown",
                     async: false,
                     type: "POST", 
                     data: {'filters':filters,'filters1':filters1},
                     dataType: "html",
             
                     success: function(data) 
                     {
                         var dt=data.split("|");
                         
                                     if(dt[0]!='<label class="control-label">Subcategory</label><div class="controls" id="sub_categories"><select name="sub_categories"  id="sub_categories"></select></div>')
                                     {
                                         $('#filters').fadeIn();
                                         $('#filters').html(dt[0]);
                                         
                                         
                                     
                                     }
                                     else{
                                         $('#filters').fadeIn();
                                         $('#filters').html('<div class="controls">Subcategory is not found under this Category</div>');
                                     }
                         
                     }
             });
          });
           $('#filters').on('click', function() {
              
                   var filters = $('#prod_sub_categories').val();
                   var filters1 = $('#sec_id').val();
                   var filters2 = $('#sub_categories').val();
                   
         //console.log(sub_categories);
         $.ajax({   
                    url: "<?php echo base_url()?>cms/getSubCategories/material_name",
                     async: false,
                     type: "POST", 
                     data: {'filters':filters,'filters1':filters1,'filters2':filters2},
                     dataType: "html",
             
                     success: function(data) 
                     {
                         var dt=data.split("|");
                         
                                         //$('#material_drop').fadeIn();
                                         //$('#material_drop').html(dt[0]);
                                         
                                         if(dt[0]!='<label class="control-label">Select Material</label><div class="controls" id="material_value"><select name="material_value" onchange="getmaterial()"  id="material_value"></select></div>')
                                     {
                                         $('#material_drop').fadeIn();
                                         $('#material_drop').html(dt[0]);
                                         
                                         
                                     
                                     }
                                     else{
                                         $('#material_drop').fadeIn();
                                         $('#material_drop').html('<div class="controls">Material is not found under this Category</div>');
                                     }
                                     
                         
                     }
             });
          });
       function getFilterVals()
             {                                       
                   var filters = $('#prod_sub_categories').val();
                   
         console.log(filters);
         $.ajax({   
            url: "<?php echo base_url()?>cms/getSubCategories/filterdropdown",
             async: false,
             type: "POST", 
             data: "filters="+filters,
             dataType: "html",
             
             success: function(data) {
                 var dt=data.split("|");
                 
                 $("#filters").fadeIn();
                 $('#filters').html(dt[0]);
                 
             }
         })
       
          
       }
          
       });
                   
</script>
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
                     <li><span>4</span></li>
                  </ul>
               </div>
            </div>
            <div class="row">
               <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                  <div class="sidebar">
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
                     <div class="frm ship_frm">
                        <div class="tabing animated  animation-done bounceInUp" data-animation="bounceInUp">
                           <ul class="nav nav-tabs">
                              <li class="active"><a href="#custp" data-toggle="tab">General</a></li>
                              <li class=""><a href="#rtd" data-toggle="tab">Price</a></li>
                              <li class=""><a href="#rtp" data-toggle="tab">Images</a></li>
                              <li class=""><a href="#help" data-toggle="tab">Product Details</a></li>
                           </ul>
                           <!-- Tab panes -->
                           <div class="tab-content">
                              <div class="tab-pane active" id="custp">
                                 <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                       <div class="frm rew_frm">
                                          <form method="post" action="<?php echo base_url(); ?>New_seller">
                                             <span class="reqired">* Required Fields</span>
                                             <div class="row first_row">
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                   <div class="lbltxt">Product Name: <span class="req">*</span></div>
                                                   <input type="text" name ="seller_product_name" class="txtbox">
                                                </div>
                                             </div>
                                             <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                   <div class="lbltxt">Section:<span class="req">*</span></div>
                                                   <select name="sec_id" id="sec_id" onchange="getFilters(this.value)">
                                                      <?php foreach($section as $row){?>
                                                      <option value="<?php echo $row['section_id']; ?>"><?php echo $row['section_name']?></option>
                                                      <?php } ?>
                                                   </select>
                                                </div>
                                             </div>
                                             <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                   <div class="lbltxt" id="subcategories">Category:<span class="req">*</span></div>
                                                </div>
                                             </div>
                                             <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                   <div class="lbltxt" id="filters">Subcategory:<span class="req">*</span></div>
                                                </div>
                                             </div>
                                             <div class="row">
                                                <div class="lbltxt">Product Description: <span class="req">*</span></div>
                                                <textarea name="product_description"></textarea>
                                             </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="tab-pane" id="rtd">
                              <div class="row first_row">
                              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <div class="lbltxt">MRP: <span class="req">*</span></div>
                              <input type="text" name="mrp" class="txtbox">
                              </div>   
                              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <div class="lbltxt">Sell Price:<span class="req">*</span></div>
                              <input type="text" name="sell_price" class="txtbox">
                              </div>                   
                              </div>
                              <div class="row">
                              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <div class="lbltxt">Discount:<span class="req">*</span></div>
                              <input type="text" name="discount" class="txtbox">
                              </div>
                              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <div class="lbltxt">Quantity:<span class="req">*</span></div>
                              <input type="text" name="quantity" class="txtbox">
                              </div>
                              </div>
                              <div class="row">
                              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <div class="lbltxt">Sold By:<span class="req">*</span></div>
                              <input type="text" name="sold_by" class="txtbox">
                              </div>
                              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <div class="lbltxt">Shipping Price (Optional):<span class="req">*</span></div>
                              <input type="text" name="shipping_price" class="txtbox">
                              </div> 
                              </div>
                              <div class="row">  
                              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <div class="lbltxt">Stock: <span class="req">*</span></div>
                              <select name="stock">
                              <option value="1">In Stock</option>
                              <option value="0">Out Of Stock</option>
                              </select>
                              </div>  
                              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <div class="lbltxt">Require Shipping: <span class="req">*</span></div>
                              <select name="require_shipping">
                              <option value="1">Yes</option>
                              <option value="0">No</option>
                              </select>
                              </div>                  
                              </div>
                              </div>
                              <div class="tab-pane" id="rtp">
                              <div class="row">
                              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <div class="lbltxt">Image 1: <span class="req">*</span></div>
                              <input type="file" name="image1">
                              </div>
                              </div> 
                              <div class="row">
                              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <div class="lbltxt">Image 2: <span class="req">*</span></div>
                              <input type="file" name="image2">
                              </div>
                              </div> 
                              <div class="row">
                              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <div class="lbltxt">Image 3: <span class="req">*</span></div>
                              <input type="file" name="image3">
                              </div>
                              </div> 
                              <div class="row">
                              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <div class="lbltxt">Image 4: <span class="req">*</span></div>
                              <input type="file" name="image4">
                              </div>
                              </div>
                              </div>
                              <div class="tab-pane" id="help">           
                              <div class="row first_row">
                              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <div class="lbltxt">Material Type: <span class="req">*</span></div>
                              <input type="text" name="material_name" class="txtbox">                        
                              </div>    
                              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <div class="lbltxt">GSM Details:<span class="req">*</span></div>
                              <input type="text" name="GSM_name" class="txtbox">
                              </div>                  
                              </div>
                              <div class="row">
                              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <div class="lbltxt">Style:<span class="req">*</span></div>
                              <input type="text" name="style" class="txtbox">
                              </div>
                              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <div class="lbltxt">Size Details: <span class="req">*</span></div>
                              <input type="text" name="size" class="txtbox">
                              </div>
                              </div>
                              <div class="row">
                              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <div class="lbltxt">Handle Details: <span class="req">*</span></div>
                              <input type="text" name="handle" class="txtbox">
                              </div>
                              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <div class="lbltxt">Print Details: <span class="req">*</span></div>
                              <input type="text" name="print" class="txtbox">
                              </div>                     
                              </div>
                              <div class="row">
                              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <div class="lbltxt">Print Color Details: <span class="req">*</span></div>
                              <input type="text" name="print_color" class="txtbox">
                              </div>
                              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <div class="lbltxt">Lamination Details: <span class="req">*</span></div>
                              <input type="text" name="lamination" class="txtbox">
                              </div>
                              </div>
                              <div class="row">
                              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <div class="lbltxt">Special Work Details: <span class="req">*</span></div>
                              <input type="text" name="special_work" class="txtbox">
                              </div>
                              </div>
                              <div class="row">
                              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <div class="cart_btn clearfix">
                              <a href="#" class="back_btn"><span class="fa fa-chevron-left"></span>Back</a>
                              <a href="javascript:void(0);" class="next_btn">Submit</a>
                              </div>  
                              </div>
                              </div>
                              </div>
                           </div>
                           </form>  
                        </div>
                     </div>
                     <div class="cart_btn clearfix">
                        <a href="#" class="back_btn"><span class="fa fa-chevron-left"></span>Back</a>
                        <a href="<?php echo base_url()?>verification" class="next_btn">Next step<span class="fa fa-chevron-right"></span></a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!--<div class="clearfix frm_bot">
   <input type="submit" class="btn_c" value="Submit">
   <input type="reset" class="clear_btn" value="Clear">
    </div>-->
