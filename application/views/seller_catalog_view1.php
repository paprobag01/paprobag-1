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
                            
                           <form method="post" id="product_upload" action="<?php echo base_url();?>upload_product_info" enctype="multipart/form-data">

                              <div class="tab-content">
                                 <div class="tab-pane active" id="custp">
                                    <div class="row">
                                       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="section_list">
                                        <table class="table table-condensed borderless">
                                          <thead>  
                                            <tr><th>Section</th></tr>
                                            <tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
                                              <?php
                                                for ($i = 0; $i < count($section); $i++) {
                                                  if ($i%3 == 0) {
                                                    echo '</tr><tr><td style="border:none">'
                                                          .'<input type="radio" name="section" value="'.$section[$i]['section_id'].'">'
                                                          .'<label style="padding-left:10px">'.$section[$i]['section_name'] 
                                                          .'</label></td>';
                                                  } else {
                                                    echo '<td style="border:none">'
                                                          .'<input type="radio" name="section" value="'.$section[$i]['section_id'].'">'
                                                          .'<label style="padding-left:10px">'.$section[$i]['section_name'] 
                                                          .'</label></td>';
                                                  }
                                                }
                                                echo '</tr></tbody></table>';
                                              ?>
                                              
                                            </tr>
                                          </thead>
                                        </table>
                                       </div>
                                       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="category_list">
                                        <table class="table table-condensed borderless">
                                          <thead>  
                                            <tr><th>Category</th></tr>
                                            <tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
                                              <?php
                                                for ($i = 0; $i < count($category); $i++) {
                                                  if ($i%3 == 0) {
                                                    echo '</tr><tr><td style="border:none">'
                                                          .'<input type="radio" name="category" value="'.$category[$i]['cat_id'].'" disabled>'
                                                          .'<label style="padding-left:10px">'.$category[$i]['cat_name'] 
                                                          .'</label></td>';
                                                  } else {
                                                    echo '<td style="border:none">'
                                                          .'<input type="radio" name="category" value="'.$category[$i]['cat_id'].'" disabled>'
                                                          .'<label style="padding-left:10px">'.$category[$i]['cat_name'] 
                                                          .'</label></td>';
                                                  }
                                                }
                                                echo '</tr></tbody></table>';
                                              ?>
                                              
                                            </tr>
                                          </thead>
                                        </table>
                                       </div>
                                       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="sub_category_list">
                                        <table class="table table-condensed borderless">
                                          <thead>  
                                            <tr><th>Subcategory</th></tr>
                                            <tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
                                              <?php
                                                for ($i = 0; $i < count($subcategory); $i++) {
                                                  if ($i%3 == 0) {
                                                    echo '</tr><tr><td style="border:none">'
                                                          .'<input type="radio" name="subcategory" value="'.$subcategory[$i]['sub_cat_id'].'" disabled>'
                                                          .'<label style="padding-left:10px">'.$subcategory[$i]['sub_cat_name'] 
                                                          .'</label></td>';
                                                  } else {
                                                    echo '<td style="border:none">'
                                                          .'<input type="radio" name="subcategory" value="'.$subcategory[$i]['sub_cat_id'].'" disabled>'
                                                          .'<label style="padding-left:10px">'.$subcategory[$i]['sub_cat_name'] 
                                                          .'</label></td>';
                                                  }
                                                }
                                                echo '</tr></tbody></table>';
                                              ?>
                                              
                                            </tr>
                                          </thead>
                                        </table>
                                       </div>
                                       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="material_list">
                                        <table class="table table-condensed borderless">
                                          <thead>  
                                            <tr><th>Material</th></tr>
                                            <tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
                                              <?php
                                                for ($i = 0; $i < count($material); $i++) {
                                                  if ($i%3 == 0) {
                                                    echo '</tr><tr><td style="border:none">'
                                                          .'<input type="radio" name="material" value="'.$material[$i]['material_id'].'" disabled>'
                                                          .'<label style="padding-left:10px">'.$material[$i]['material'] 
                                                          .'</label></td>';
                                                  } else {
                                                    echo '<td style="border:none">'
                                                          .'<input type="radio" name="material" value="'.$material[$i]['material_id'].'" disabled>'
                                                          .'<label style="padding-left:10px">'.$material[$i]['material'] 
                                                          .'</label></td>';
                                                  }
                                                }
                                                echo '</tr></tbody></table>';
                                              ?>
                                              
                                            </tr>
                                          </thead>
                                        </table>
                                       </div>
                                       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="gsm_list">
                                        <table class="table table-condensed borderless">
                                          <thead>  
                                            <tr><th>GSM</th></tr>
                                            <tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
                                              <?php
                                                $a = array();
                                                for ($i = 0; $i < count($GSM); $i++) {
                                                  $GSM_data = explode(',', $GSM[$i]['GSM_name']);
                                                  
                                                  foreach ($GSM_data as $key => $value) {
                                                    if(!in_array($value, $a)){
                                                      $a[]=$value;
                                                    }
                                                  }
                                                }
                                                for ($j=0; $j < count($a); $j++) { 
                                                  if ($j%3 == 0) {
                                                    echo '</tr><tr><td style="border:none">'
                                                          .'<input type="radio" name="gsm" value="'.$a[$j].'" disabled>'
                                                          .'<label style="padding-left:10px">'.$a[$j] 
                                                          .'</label></td>';
                                                  } else {
                                                    echo '<td style="border:none">'
                                                          .'<input type="radio" name="gsm" value="'.$a[$j].'" disabled>'
                                                          .'<label style="padding-left:10px">'.$a[$j]
                                                          .'</label></td>';
                                                  }

                                                }
                                                
                                                echo '</tr></tbody></table>';
                                              ?>
                                              
                                            </tr>
                                          </thead>
                                        </table>
                                       </div>
                                       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="style_list">
                                        <table class="table table-condensed borderless">
                                          <thead>  
                                            <tr><th>Style</th></tr>
                                            <tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
                                              <?php
                                                for ($i = 0; $i < count($style); $i++) {
                                                  if ($i%3 == 0) {
                                                    echo '</tr><tr><td style="border:none">'
                                                          .'<input type="radio" name="style" value="'.$style[$i]['style'].'" disabled>'
                                                          .'<label style="padding-left:10px">'.$style[$i]['style'] 
                                                          .'</label></td>';
                                                  } else {
                                                    echo '<td style="border:none">'
                                                          .'<input type="radio" name="style" value="'.$style[$i]['style'].'" disabled>'
                                                          .'<label style="padding-left:10px">'.$style[$i]['style'] 
                                                          .'</label></td>';
                                                  }
                                                }
                                                echo '</tr></tbody></table>';
                                              ?>
                                              
                                            </tr>
                                          </thead>
                                        </table>
                                       </div>
                                       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="size_list">
                                        <table class="table table-condensed borderless">
                                          <thead>  
                                            <tr><th>Size</th></tr>
                                            <tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
                                              <?php
                                                for ($i = 0; $i < count($size); $i++) {
                                                  if ($i%3 == 0) {
                                                    echo '</tr><tr><td style="border:none">'
                                                          .'<input type="radio" name="size" value="'.$size[$i]['size'].'" disabled>'
                                                          .'<label style="padding-left:10px">'.$size[$i]['size'] 
                                                          .'</label></td>';
                                                  } else {
                                                    echo '<td style="border:none">'
                                                          .'<input type="radio" name="size" value="'.$size[$i]['size'].'" disabled>'
                                                          .'<label style="padding-left:10px">'.$size[$i]['size'] 
                                                          .'</label></td>';
                                                  }
                                                }
                                                echo '</tr></tbody></table>';
                                              ?>
                                              
                                            </tr>
                                          </thead>
                                        </table>
                                       </div>
                                       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="handle_list">
                                        <table class="table table-condensed borderless">
                                          <thead>  
                                            <tr><th>Handle</th></tr>
                                            <tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
                                              <?php
                                                for ($i = 0; $i < count($handle); $i++) {
                                                  if ($i%3 == 0) {
                                                    echo '</tr><tr><td style="border:none">'
                                                          .'<input type="radio" name="handle" value="'.$handle[$i]['handle'].'" disabled>'
                                                          .'<label style="padding-left:10px">'.$handle[$i]['handle'] 
                                                          .'</label></td>';
                                                  } else {
                                                    echo '<td style="border:none">'
                                                          .'<input type="radio" name="handle" value="'.$handle[$i]['handle'].'" disabled>'
                                                          .'<label style="padding-left:10px">'.$handle[$i]['handle'] 
                                                          .'</label></td>';
                                                  }
                                                }
                                                echo '</tr></tbody></table>';
                                              ?>
                                              
                                            </tr>
                                          </thead>
                                        </table>
                                       </div>
                                       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="print_list">
                                        <table class="table table-condensed borderless">
                                          <thead>  
                                            <tr><th>Print</th></tr>
                                            <tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
                                              <?php
                                                for ($i = 0; $i < count($print); $i++) {
                                                  if ($i%3 == 0) {
                                                    echo '</tr><tr><td style="border:none">'
                                                          .'<input type="radio" name="print" value="'.$print[$i]['print'].'" disabled>'
                                                          .'<label style="padding-left:10px">'.$print[$i]['print'] 
                                                          .'</label></td>';
                                                  } else {
                                                    echo '<td style="border:none">'
                                                          .'<input type="radio" name="print" value="'.$print[$i]['print'].'" disabled>'
                                                          .'<label style="padding-left:10px">'.$print[$i]['print'] 
                                                          .'</label></td>';
                                                  }
                                                }
                                                echo '</tr></tbody></table>';
                                              ?>
                                              
                                            </tr>
                                          </thead>
                                        </table>
                                       </div>
                                       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="print_color_list">
                                        <table class="table table-condensed borderless">
                                          <thead>  
                                            <tr><th>Number Of Colours</th></tr>
                                            <tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
                                              <?php
                                                for ($i = 0; $i < count($print_color); $i++) {
                                                  if ($i%3 == 0) {
                                                    echo '</tr><tr><td style="border:none">'
                                                          .'<input type="radio" name="no_of_colors" value="'.$print_color[$i]['print_color'].'" disabled>'
                                                          .'<label style="padding-left:10px">'.$print_color[$i]['print_color'] 
                                                          .'</label></td>';
                                                  } else {
                                                    echo '<td style="border:none">'
                                                          .'<input type="radio" name="no_of_colors" value="'.$print_color[$i]['print_color'].'" disabled>'
                                                          .'<label style="padding-left:10px">'.$print_color[$i]['print_color'] 
                                                          .'</label></td>';
                                                  }
                                                }
                                                echo '</tr></tbody></table>';
                                              ?>
                                              
                                            </tr>
                                          </thead>
                                        </table>
                                       </div>
                                       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="lamination_list">
                                        <table class="table table-condensed borderless">
                                          <thead>  
                                            <tr><th>Lamination</th></tr>
                                            <tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
                                              <?php
                                                for ($i = 0; $i < count($lamination); $i++) {
                                                  if ($i%3 == 0) {
                                                    echo '</tr><tr><td style="border:none">'
                                                          .'<input type="radio" name="lamination" value="'.$lamination[$i]['lamination'].'" disabled>'
                                                          .'<label style="padding-left:10px">'.$lamination[$i]['lamination'] 
                                                          .'</label></td>';
                                                  } else {
                                                    echo '<td style="border:none">'
                                                          .'<input type="radio" name="lamination" value="'.$lamination[$i]['lamination'].'" disabled>'
                                                          .'<label style="padding-left:10px">'.$lamination[$i]['lamination'] 
                                                          .'</label></td>';
                                                  }
                                                }
                                                echo '</tr></tbody></table>';
                                              ?>
                                              
                                            </tr>
                                          </thead>
                                        </table>
                                       </div>
                                       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="special_work_list">
                                        <table class="table table-condensed borderless">
                                          <thead>  
                                            <tr><th>Special Work</th></tr>
                                            <tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
                                              <?php
                                                for ($i = 0; $i < count($special_wrk); $i++) {
                                                  if ($i%3 == 0) {
                                                    echo '</tr><tr><td style="border:none">'
                                                          .'<input type="radio" name="special_work" value="'.$special_wrk[$i]['special_wrk'].'" disabled>'
                                                          .'<label style="padding-left:10px">'.$special_wrk[$i]['special_wrk'] 
                                                          .'</label></td>';
                                                  } else {
                                                    echo '<td style="border:none">'
                                                          .'<input type="radio" name="special_work" value="'.$special_wrk[$i]['special_wrk'].'" disabled>'
                                                          .'<label style="padding-left:10px">'.$special_wrk[$i]['special_wrk'] 
                                                          .'</label></td>';
                                                  }
                                                }
                                                echo '</tr></tbody></table>';
                                              ?>
                                              
                                            </tr>
                                          </thead>
                                        </table>
                                       </div>
                                       
                                       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                          <div class="lbltxt" style="float:left;">Require Shipping:
                                             <span class="req" required data-validation-required-message="Please Select Subject">*</span>
                                          </div>
                                          <div class="select_box sub_box" style="float: left;  padding: 24px 0 13px 39px;">
                                             <input type="radio" name="shipping" value="yes">Yes  
                                          </div>
                                          <div class="select_box sub_box" style="float: left;  padding: 24px 0 13px 39px;">     
                                             <input type="radio" name="shipping" value="no">No  
                                          </div>
                                       </div>
                                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="table_for_cust_and_deliver">
                                        <table class="table">
                                          <thead>
                                            <tr>
                                              <th>Qty</th>
                                              <th>MRP</th>
                                              <th>Sell Price</th>
                                              <th>Discount</th>
                                            </tr>
                                          </thead>
                                          <tbody>
                                            <tr>
                                              <td>500</td>
                                              <td><input type="text" name="md500"></td>
                                              <td><input type="text" name="sd500"></td>
                                              <td><input type="text" name="dd500"></td>
                                            </tr>
                                            <tr>
                                              <td>1000</td>
                                              <td><input type="text" name="md1000"></td>
                                              <td><input type="text" name="sd1000"></td>
                                              <td><input type="text" name="dd1000"></td>
                                            </tr>
                                            <tr>
                                              <td>1500</td>
                                              <td><input type="text" name="md1500"></td>
                                              <td><input type="text" name="sd1500"></td>
                                              <td><input type="text" name="dd1500"></td>
                                            </tr>
                                            <tr>
                                              <td>2000</td>
                                              <td><input type="text" name="md2000"></td>
                                              <td><input type="text" name="sd2000"></td>
                                              <td><input type="text" name="dd2000"></td>
                                            </tr>
                                            <tr>
                                              <td>3000</td>
                                              <td><input type="text" name="md3000"></td>
                                              <td><input type="text" name="sd3000"></td>
                                              <td><input type="text" name="dd3000"></td>
                                            </tr>
                                            <tr>
                                              <td>5000</td>
                                              <td><input type="text" name="md5000"></td>
                                              <td><input type="text" name="sd5000"></td>
                                              <td><input type="text" name="dd5000"></td>
                                            </tr>
                                          </tbody>
                                        </table>
                                      </div>
                                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="table_for_print" style="display:none;">
                                        <table class="table">
                                          <thead>
                                            <tr>
                                              <th>Qty</th>
                                              <th>MRP</th>
                                              <th>Sell Price</th>
                                              <th>Discount</th>
                                            </tr>
                                          </thead>
                                          <tbody>
                                            <tr>
                                              <td>100</td>
                                              <td><input type="text" name="m100"></td>
                                              <td><input type="text" name="s100"></td>
                                              <td><input type="text" name="d100"></td>
                                            </tr>
                                            <tr>
                                              <td>200</td>
                                             <td><input type="text" name="m200"></td>
                                              <td><input type="text" name="s200"></td>
                                              <td><input type="text" name="d200"></td>
                                            </tr>
                                            <tr>
                                              <td>300</td>
                                              <td><input type="text" name="m300"></td>
                                              <td><input type="text" name="s300"></td>
                                              <td><input type="text" name="d300"></td>
                                            </tr>
                                            <tr>
                                              <td>500</td>
                                              <td><input type="text" name="m500"></td>
                                              <td><input type="text" name="s500"></td>
                                              <td><input type="text" name="d500"></td>
                                            </tr>
                                            <tr>
                                              <td>1000</td>
                                              <td><input type="text" name="m1000"></td>
                                              <td><input type="text" name="s1000"></td>
                                              <td><input type="text" name="d1000"></td>
                                            </tr>
                                            <tr>
                                              <td>1500</td>
                                              <td><input type="text" name="m1500"></td>
                                              <td><input type="text" name="s1500"></td>
                                              <td><input type="text" name="d1500"></td>
                                            </tr>
                                            <tr>
                                              <td>2000</td>
                                              <td><input type="text" name="m2000"></td>
                                              <td><input type="text" name="s2000"></td>
                                              <td><input type="text" name="d2000"></td>
                                            </tr>
                                            <tr>
                                              <td>3000</td>
                                              <td><input type="text" name="m3000"></td>
                                              <td><input type="text" name="s3000"></td>
                                              <td><input type="text" name="d3000"></td>
                                            </tr>
                                            <tr>
                                              <td>5000</td>
                                              <td><input type="text" name="m5000"></td>
                                              <td><input type="text" name="s5000"></td>
                                              <td><input type="text" name="d5000"></td>
                                            </tr>
                                          </tbody>
                                        </table>
                                      </div>
                                       
                                       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                          <div class="lbltxt" style="float:left;">Upload Image 1:
                                             <span class="req" required data-validation-required-message="Please Select Subject">*</span>
                                          </div>
                                          <div class="lbltxt" style="float:right;margin-right:45%;">
                                            <input type="file" name="pic1" accept="image/*">
                                          </div>
                                       </div>

                                       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                          <div class="lbltxt" style="float:left;">Upload Image 2:
                                             <span class="req" required data-validation-required-message="Please Select Subject">*</span>
                                          </div>
                                          <div class="lbltxt" style="float:right;margin-right:45%;">
                                            <input type="file" name="pic2" accept="image/*">
                                          </div>
                                       </div>

                                       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                          <div class="lbltxt" style="float:left;">Upload Image 3:
                                             <span class="req" required data-validation-required-message="Please Select Subject">*</span>
                                          </div>
                                          <div class="lbltxt" style="float:right;margin-right:45%;">
                                            <input type="file" name="pic3" accept="image/*">
                                          </div>
                                       </div>

                                       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                          <div class="lbltxt" style="float:left;">Upload Image 4:
                                             <span class="req" required data-validation-required-message="Please Select Subject">*</span>
                                          </div>
                                          <div class="lbltxt" style="float:right;margin-right:45%;">
                                            <input type="file" name="pic4" accept="image/*">
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
                        <a href="javascript:void(0);" id="submit_product" class="next_btn">Next step<span class="fa fa-chevron-right"></span></a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>