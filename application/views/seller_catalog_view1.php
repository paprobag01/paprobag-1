<script type="text/javascript" src="<?php echo base_url('js/seller_catelog_upload.js')?>"></script>
<div id="content">
   <div class="container">
      <div class="cart_c">
         <div class="cart_bot">
            <div class="title clearfix">
               <h2>Your cart - Shipping Information</h2>
               <div class="title_right cart_list">
                  <ul>
                     <li class="complete"><span></span></li>
                     <li class="complete"><span></span></li>
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
                        <div class="tabing animated  animation-done bounceInUp" data-animation="bounceInUp" style="margin:0px;">
                           <ul class="nav nav-tabs">
                              <li class="active"><a href="#custp" data-toggle="tab">Upload Product</a></li>
                              <li><a href="#rtd" data-toggle="tab">Your Catalog</a></li>
                              <li><a href="#rtd" data-toggle="tab">Live products</a></li>
                           </ul>
                           <!-- Tab panes -->
                            
                           <form method="post">

                              <div class="tab-content">
                                 <div class="tab-pane active" id="custp">
                                    <div class="row">
                                       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                          <div class="lbltxt" style="float:left;">Sections:
                                            <span class="req" required data-validation-required-message="Please Select Subject">*</span>
                                          </div>
                                          <div class="lbltxt" style="float:right;margin-right:45%;">
                                            <select id="section_list">
                                              <option>Select section</option>
                                            </select>
                                          </div>
                                       </div>
                                  
                                       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="cat_result">
                                          <div class="lbltxt" style="float:left;">Category:
                                            <span class="req" required data-validation-required-message="Please Select Subject">*</span>
                                          </div>
                                          <div class="lbltxt" style="float:right;margin-right:45%;">
                                            <select id="category_list">
                                              <option>Select Category</option>                                              
                                            </select>
                                          </div>
                                       </div>
                                       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                          <div class="lbltxt" style="float:left;">Subcategory:
                                             <span class="req" required data-validation-required-message="Please Select Subject">*</span>
                                          </div>
                                          <div class="lbltxt" style="float:right;margin-right:45%;">
                                            <select id="sub_category_list">
                                              <option>Select sub category</option>
                                            </select>
                                          </div>
                                       </div>
                                       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                          <div class="lbltxt" style="float:left;">Material:
                                             <span class="req" required data-validation-required-message="Please Select Subject">*</span>
                                          </div>
                                          <div class="lbltxt" style="float:right;margin-right:45%;">
                                            <select id="material_list">
                                              <option>Select Material</option>
                                            </select>
                                          </div>
                                       </div>
                                       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                          <div class="lbltxt" style="float:left;">GSM:
                                             <span class="req" required data-validation-required-message="Please Select Subject">*</span>
                                          </div>
                                          <div class="lbltxt" style="float:right;margin-right:45%;">
                                            <select>
                                              <option value="volvo">Volvo</option>
                                              <option value="saab">Saab</option>
                                              <option value="mercedes">Mercedes</option>
                                              <option value="audi">Audi</option>
                                            </select>
                                          </div>
                                       </div>
                                       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                          <div class="lbltxt" style="float:left;">Style:
                                             <span class="req" required data-validation-required-message="Please Select Subject">*</span>
                                          </div>
                                          <div class="lbltxt" style="float:right;margin-right:45%;">
                                            <select>
                                              <option value="volvo">Volvo</option>
                                              <option value="saab">Saab</option>
                                              <option value="mercedes">Mercedes</option>
                                              <option value="audi">Audi</option>
                                            </select>
                                          </div>
                                       </div>
                                       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                          <div class="lbltxt" style="float:left;">Size:
                                             <span class="req" required data-validation-required-message="Please Select Subject">*</span>
                                          </div>
                                          <div class="lbltxt" style="float:right;margin-right:45%;">
                                            <select>
                                              <option value="volvo">Volvo</option>
                                              <option value="saab">Saab</option>
                                              <option value="mercedes">Mercedes</option>
                                              <option value="audi">Audi</option>
                                            </select>
                                          </div>
                                       </div>
                                       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                          <div class="lbltxt" style="float:left;">Handle:
                                             <span class="req" required data-validation-required-message="Please Select Subject">*</span>
                                          </div>
                                          <div class="lbltxt" style="float:right;margin-right:45%;">
                                            <select>
                                              <option value="volvo">Volvo</option>
                                              <option value="saab">Saab</option>
                                              <option value="mercedes">Mercedes</option>
                                              <option value="audi">Audi</option>
                                            </select>
                                          </div>
                                       </div>
                                       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                          <div class="lbltxt" style="float:left;">Print:
                                             <span class="req" required data-validation-required-message="Please Select Subject">*</span>
                                          </div>
                                          <div class="lbltxt" style="float:right;margin-right:45%;">
                                            <select>
                                              <option value="volvo">Volvo</option>
                                              <option value="saab">Saab</option>
                                              <option value="mercedes">Mercedes</option>
                                              <option value="audi">Audi</option>
                                            </select>
                                          </div>
                                       </div>
                                       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                          <div class="lbltxt" style="float:left;">No of Color:
                                             <span class="req" required data-validation-required-message="Please Select Subject">*</span>
                                          </div>
                                          <div class="lbltxt" style="float:right;margin-right:45%;">
                                            <select>
                                              <option value="volvo">Volvo</option>
                                              <option value="saab">Saab</option>
                                              <option value="mercedes">Mercedes</option>
                                              <option value="audi">Audi</option>
                                            </select>
                                          </div>
                                       </div>
                                       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                          <div class="lbltxt" style="float:left;">Lamination:
                                             <span class="req" required data-validation-required-message="Please Select Subject">*</span>
                                          </div>
                                          <div class="lbltxt" style="float:right;margin-right:45%;">
                                            <select>
                                              <option value="volvo">Volvo</option>
                                              <option value="saab">Saab</option>
                                              <option value="mercedes">Mercedes</option>
                                              <option value="audi">Audi</option>
                                            </select>
                                          </div>
                                       </div>
                                       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                          <div class="lbltxt" style="float:left;">Special Work:
                                             <span class="req" required data-validation-required-message="Please Select Subject">*</span>
                                          </div>
                                          <div class="lbltxt" style="float:right;margin-right:45%;">
                                            <select>
                                              <option value="volvo">Volvo</option>
                                              <option value="saab">Saab</option>
                                              <option value="mercedes">Mercedes</option>
                                              <option value="audi">Audi</option>
                                            </select>
                                          </div>
                                       </div>
                                       
                                       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                          <div class="lbltxt" style="float:left;">MRP:
                                             <span class="req" required data-validation-required-message="Please Select Subject">*</span>
                                          </div>
                                          <div class="lbltxt" style="float:right;margin-right:45%;">
                                            <input type="text" name="sellername" id="sellername" class="txtbox">
                                          </div>
                                       </div>

                                       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                          <div class="lbltxt" style="float:left;">Sell Price:
                                             <span class="req" required data-validation-required-message="Please Select Subject">*</span>
                                          </div>
                                          <div class="lbltxt" style="float:right;margin-right:45%;">
                                            <input type="text" name="sellername" id="sellername" class="txtbox">
                                          </div>
                                       </div>

                                       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                          <div class="lbltxt" style="float:left;">Discount:
                                             <span class="req" required data-validation-required-message="Please Select Subject">*</span>
                                          </div>
                                          <div class="lbltxt" style="float:right;margin-right:45%;">
                                            <input type="text" name="sellername" id="sellername" class="txtbox">
                                          </div>
                                       </div>

                                       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                          <div class="lbltxt" style="float:left;">Quantity in Stock:
                                             <span class="req" required data-validation-required-message="Please Select Subject">*</span>
                                          </div>
                                          <div class="lbltxt" style="float:right;margin-right:45%;">
                                            <input type="text" name="sellername" id="sellername" class="txtbox">
                                          </div>
                                       </div>

                                       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                          <div class="lbltxt" style="float:left;">Require Shipping:
                                             <span class="req" required data-validation-required-message="Please Select Subject">*</span>
                                          </div>
                                          <div class="select_box sub_box" style="float: left;  padding: 24px 0 13px 39px;">
                                             <input type="radio" name="section"class="txtbox">Yes  
                                          </div>
                                          <div class="select_box sub_box" style="float: left;  padding: 24px 0 13px 39px;">     
                                             <input type="radio" name="section"class="txtbox">No  
                                          </div>
                                       </div>

                                       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                          <div class="lbltxt" style="float:left;">Shipping Price:
                                             <span class="req" required data-validation-required-message="Please Select Subject">*</span>
                                          </div>
                                          <div class="lbltxt" style="float:right;margin-right:45%;">
                                            <input type="text" name="sellername" id="sellername" class="txtbox">
                                          </div>
                                       </div>

                                       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                          <div class="lbltxt" style="float:left;">Upload Image 1:
                                             <span class="req" required data-validation-required-message="Please Select Subject">*</span>
                                          </div>
                                          <div class="lbltxt" style="float:right;margin-right:45%;">
                                            <input type="file" name="pic" accept="image/*">
                                          </div>
                                       </div>

                                       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                          <div class="lbltxt" style="float:left;">Upload Image 2:
                                             <span class="req" required data-validation-required-message="Please Select Subject">*</span>
                                          </div>
                                          <div class="lbltxt" style="float:right;margin-right:45%;">
                                            <input type="file" name="pic" accept="image/*">
                                          </div>
                                       </div>

                                       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                          <div class="lbltxt" style="float:left;">Upload Image 3:
                                             <span class="req" required data-validation-required-message="Please Select Subject">*</span>
                                          </div>
                                          <div class="lbltxt" style="float:right;margin-right:45%;">
                                            <input type="file" name="pic" accept="image/*">
                                          </div>
                                       </div>

                                       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                          <div class="lbltxt" style="float:left;">Upload Image 4:
                                             <span class="req" required data-validation-required-message="Please Select Subject">*</span>
                                          </div>
                                          <div class="lbltxt" style="float:right;margin-right:45%;">
                                            <input type="file" name="pic" accept="image/*">
                                          </div>
                                       </div>

                                    </div>
                                 </div>
                                 <div class="tab-pane" id="rtd">
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
                                          <ul>
                                             <li>
                                                <div class="thumb"><span> <img alt="alt" src="media/product/big.jpg" class="" draggable="false"> </span></div>
                                             </li>
                                             <li>
                                                <h5><a href="#">POÄNG - Chair, Blomstermåla</a></h5>
                                                <p>Living room furniture</p>
                                             </li>
                                             <li>
                                                <a class="minus_btn"></a>
                                                <input type="text" class="txtbox" placeholder="3"> 
                                                <a class="plus_btn"></a>
                                             </li>
                                             <li>
                                                <div class="price">$360.00</div>
                                                <a href="#" class="del_btn"></a>
                                             </li>
                                          </ul>
                                          <ul>
                                             <li>
                                                <div class="thumb"><span><img alt="alt" src="media/product/big.jpg" class="" draggable="false"></span></div>
                                             </li>
                                             <li>
                                                <h5><a href="#">Mugs with yellow stripes</a></h5>
                                                <p>Kitchen utensils</p>
                                             </li>
                                             <li>
                                                <a class="minus_btn"></a>
                                                <input type="text" class="txtbox" placeholder="1"> 
                                                <a class="plus_btn"></a>
                                             </li>
                                             <li>
                                                <div class="price">$15.50</div>
                                                <a href="#" class="del_btn"></a>
                                             </li>
                                          </ul>
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
                                                <div class="price">$375.50</div>
                                                <a href="#" class="refresh_btn"></a>
                                             </li>
                                          </ul>
                                       </div>
                                       <div class="cart_btn clearfix">
                                          <a href="#" class="back_btn"><span class="fa fa-chevron-left"></span>Back</a>
                                          <a href="#" class="next_btn">Next step<span class="fa fa-chevron-right"></span></a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                        </div>
                        </form>          
                     </div>
                     <div class="cart_btn clearfix">
                        <a href="#" class="back_btn"><span class="fa fa-chevron-left"></span>Back</a>
                        <a href="<?php echo base_url()?>seller_catalog" class="next_btn">Next step<span class="fa fa-chevron-right"></span></a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>