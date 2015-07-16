
            <form action="<?php echo base_url()?>cms_seller/productList/save_products" class="" method="post" enctype="multipart/form-data" />
               <div class="tab-content">
                            
                  <div class="tab-pane active" id="tab_0">
                     <div class="portlet box blue">
                        <div class="portlet-title">
                           <div class="caption">
                              <i class="fa fa-reorder"></i>Customizable
                              <div class="tools">
                                 <a href="javascript:;" class="collapse">
                                 </a>
                                 <a href="#portlet-config" data-toggle="modal" class="config">
                                 </a>
                                 <a href="javascript:;" class="reload">
                                 </a>
                                 <a href="javascript:;" class="remove">
                                 </a>
                              </div>
                           </div>
                        </div>
                        <div class="portlet-body form form-horizontal">
                           <!-- BEGIN FORM-->
                        <div class="span6"><div id="sample_1_length" class="dataTables_length"><label><select size="1" name="sample_1_length" aria-controls="sample_1" class="m-wrap xsmall"><option value="10">5</option><option value="25">15</option><option value="50">20</option><option value="-1">All</option></select> records per page</label></div></div>
                        <div class="span6"><div class="dataTables_filter" id="sample_1_filter"><label>Search: <input type="text" aria-controls="sample_1" id="search_value" autocomplete="off" onkeyup="showResult(this.value)" class="m-wrap medium"></label></div></div>
                   <div id="output"></div>
                           <input type="hidden"  name="prod_id"/>
                          
                           <div class="form-body">
                              <div class="portlet-body" id="tab_0">
                                 <table class="table table-striped table-bordered table-hover" id="sample_1">
                                    <thead>
                                       <tr>
                                          <th class="hidden-phone">Srno</th>
                                          <!-- <th class="hidden-phone">Image</th> -->
                                          <th class="hidden-phone">Products</th>
                                          <!-- <th class="hidden-phone">Section</th> -->
                                          <th class="hidden-phone">category</th>
                                          <th class="hidden-phone">Subcategory</th>
                                          <th class="hidden-phone">Product ID</th>
                                          <th class="hidden-phone">Price</th>
                                          <th class="hidden-phone">Image</th>
                                          <th class="hidden-phone">Quantity</th>
                                          <th class="hidden-phone">Mobile Number</th>
                                          <th class="hidden-phone">Email ID</th>                                          
                                          <th class="hidden-phone">Options</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <?php $cnt=0; if(count($customize_prod_list)>0){
                                          foreach($customize_prod_list as $row){
                                             $section_id = $row['section_id'];
                                             $sql1 = $this->db->query("select section_name from sections where section_id=$section_id");
                                             $result = $sql1->result_array();
                                             foreach($result as $row1){
                                            
                                             $cnt++;
                                          ?>
                                       <tr id="" class="odd gradeX">
                                          <td><?php echo $cnt;?></td>
                                          <td class="hidden-phone"><?php echo $row['prod_name']?></td>
                                          <td class="hidden-phone"><?php echo $row['prod_name']?></td>
                                          <td class="hidden-phone"><?php echo $row1['section_name']?>
                                          <td class="hidden-phone">
                                             <!-- <span  class="label label-success"  class="label label-important" > -->
                                             <?php echo $row['prod_description']?>
                                             <!-- </span> -->
                                          </td>
                                          <td class="hidden-phone"><?php echo $row['prod_price']?></td>
                                          <td class="hidden-phone">
                                             <?php if($row['prod_image']!=""){?>
                                             <img src="<?php echo base_url().$row['prod_image']?>" style="height:50px;width:50px;"/>
                                             <?php } else {?>
                                             <img src="<?php echo base_url()?>images/noimage.gif" style="width:50px; height:50px;" alt="" />
                                             <?php }?>
                                          </td>
                                          <td>200</td>
                                          <td>9865847593</td>
                                           <td class="hidden-phone" id="prod_status">
                                            <?php 
                                              if($row['product_status']==0)
                                              {
                                            ?>
                                            <a href="<?php echo base_url()?>cms_seller/productDetailList"><img src="<?php echo base_url();?>images/disable.jpeg" id="<?php echo $row['section_id']?>/<?php echo $row['cat_id']?>/<?php echo $row['sub_cat_id']?>/<?php echo $row['prod_id']?>/<?php echo $row['seller_request_status']?>" onclick="getstatus(this.id);" width="25px" height="25px"></a>&nbsp;&nbsp;&nbsp;
                                             
                                             <?php }else {?>
                                            <a href="<?php echo base_url()?>cms_seller/productDetailList"><img src="<?php echo base_url();?>images/enable.png" id="<?php echo $row['section_id']?>/<?php echo $row['cat_id']?>/<?php echo $row['sub_cat_id']?>/<?php echo $row['prod_id']?>/<?php echo $row['seller_request_status']?>" onclick="getstatus(this.id);" width="25px" height="25px"></a>&nbsp;&nbsp;&nbsp;
                                             <?php } ?>
                                          </td>
                                          <td class="hidden-phone">
                                             <a href="<?php echo base_url()?>cms_seller/productList/viewEditProducts/<?php echo $row['prod_id']?>/edit" class="btn mini purple"><i class="icon-edit"></i> View</a>&nbsp;&nbsp;&nbsp;
                                             <!--<a href="<?php echo base_url()?>cms_seller/productList/viewEditProducts/<?php echo $row['prod_id']?>/edit" class="btn mini blue"><i class="icon-edit"></i> Edit</a>&nbsp;&nbsp;&nbsp;
                                                <a href="<?php echo base_url()?>cms_seller/productList/deleteProducts/<?php echo $row['prod_id']?>" class="btn mini red delete_rec" id="" class="config btn mini red"><i class="icon-trash"></i> Delete</a>-->
                                          </td>
                                       </tr>
                                       <?php 
                                          }
                                          }
                                           }
                                          else
                                          {
                                          ?>
                                       <tr class="odd gradeX">
                                          <td colspan="11">No records found</td>
                                       </tr>
                                       </tr>
                                       <?php 
                                          }
                                          ?>
                                    </tbody>
                                 </table>
                              </div>
                              
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="tab-pane" id="tab_1">
                     <div class="portlet box blue">
                        <div class="portlet-title">
                           <div class="caption">
                              <i class="fa fa-reorder"></i>Ready To Print
                              <div class="tools">
                                 <a href="javascript:;" class="collapse">
                                 </a>
                                 <a href="#portlet-config" data-toggle="modal" class="config">
                                 </a>
                                 <a href="javascript:;" class="reload">
                                 </a>
                                 <a href="javascript:;" class="remove">
                                 </a>
                              </div>
                           </div>
                        </div>
                        <div class="portlet-body form form-horizontal">
                           <!-- BEGIN FORM-->
                           <div class="span6"><div id="sample_1_length" class="dataTables_length"><label><select size="1" name="sample_1_length" aria-controls="sample_1" class="m-wrap xsmall"><option value="10">5</option><option value="25">15</option><option value="50">20</option><option value="-1">All</option></select> records per page</label></div></div>
                           <div class="span6"><div class="dataTables_filter" id="sample_1_filter"><label>Search: <input type="text" aria-controls="sample_1" id="search_value" autocomplete="off" onkeyup="showResult(this.value)" class="m-wrap medium"></label></div></div>
                              <div id="livesearch"></div>

                           <div class="form-body">
                              <div class="portlet-body" id="tab_1">
                                 <table class="table table-striped table-bordered table-hover" id="sample_1">
                                    <thead>
                                       <tr>
                                          <th class="hidden-phone">Srno</th>
                                          <!-- <th class="hidden-phone">Image</th> -->
                                          <th class="hidden-phone">Products</th>
                                          <!-- <th class="hidden-phone">Section</th> -->
                                          <th class="hidden-phone">category</th>
                                          <th class="hidden-phone">Subcategory</th>
                                          <th class="hidden-phone">Product ID</th>
                                          <th class="hidden-phone">Price</th>
                                          <th class="hidden-phone">Image</th>
                                          <th class="hidden-phone">Quantity</th>
                                          <th class="hidden-phone">Mobile Number</th>
                                          <th class="hidden-phone">Email ID</th>                                          
                                          <th class="hidden-phone">Options</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <?php $cnt=0; if(count($ready_to_print_prod_list)>0){
                                          foreach($ready_to_print_prod_list as $row){
                                             $section_id = $row['section_id'];
                                             $sql1 = $this->db->query("select section_name from sections where section_id=$section_id");
                                             $result = $sql1->result_array();
                                             foreach($result as $row1){
                                             $cnt++;
                                          ?>
                                       <tr id="" class="odd gradeX">
                                          <td><?php echo $cnt;?></td>
                                          <td class="hidden-phone"><?php echo $row['prod_name']?></td>
                                          <td class="hidden-phone"><?php echo $row1['section_name']; ?>
                                          <td class="hidden-phone">
                                             <!-- <span  class="label label-success"  class="label label-important" > -->
                                             <?php echo $row['prod_description']?>
                                             <!-- </span> -->
                                          </td>
                                          <td class="hidden-phone"><?php echo $row['prod_price']?></td>
                                          <td class="hidden-phone">
                                             <?php if($row['prod_image']!=""){?>
                                             <img src="<?php echo base_url().$row['prod_image']?>" style="height:50px;width:50px;"/>
                                             <?php } else {?>
                                             <img src="<?php echo base_url()?>images/noimage.gif" style="width:50px; height:50px;" alt="" />
                                             <?php }?>
                                          </td>
                                          <td class="hidden-phone">
                                             <?php if($row['prod_image']!=""){?>
                                             <img src="<?php echo base_url().$row['prod_image']?>" style="height:50px;width:50px;"/>
                                             <?php } else {?>
                                             <img src="<?php echo base_url()?>images/noimage.gif" style="width:50px; height:50px;" alt="" />
                                             <?php }?>
                                          </td>
                                          <td>9865847593</td>
                                          <td>abcd@gmail.com</td>
                                          <td>300</td>
                                           <td class="hidden-phone" id="prod_status">
                                            <?php 
                                              if($row['product_status']==2)
                                              {
                                            ?>
                                            <a href="<?php echo base_url()?>cms_seller/productDetailList"><img src="<?php echo base_url();?>images/enable.png" id="<?php echo $row['section_id']?>/<?php echo $row['cat_id']?>/<?php echo $row['sub_cat_id']?>/<?php echo $row['prod_id']?>/<?php echo $row['seller_request_status']?>" onclick="getstatus(this.id);" width="25px" height="25px"></a>&nbsp;&nbsp;&nbsp;
                                            
                                             <?php }else {?>                                            
                                            <a href="<?php echo base_url()?>cms_seller/productDetailList"><img src="<?php echo base_url();?>images/disable.jpeg" id="<?php echo $row['section_id']?>/<?php echo $row['cat_id']?>/<?php echo $row['sub_cat_id']?>/<?php echo $row['prod_id']?>/<?php echo $row['seller_request_status']?>" onclick="getstatus(this.id);" width="25px" height="25px"></a>&nbsp;&nbsp;&nbsp;
                                             <?php } ?>
                                          </td>
                                          <td class="hidden-phone">
                                             <a href="<?php echo base_url()?>cms_seller/productList/viewEditProducts/<?php echo $row['prod_id']?>/edit" class="btn mini purple"><i class="icon-edit"></i> View</a>&nbsp;&nbsp;&nbsp;
                                             <!--<a href="<?php echo base_url()?>cms_seller/productList/viewEditProducts/<?php echo $row['prod_id']?>/edit" class="btn mini blue"><i class="icon-edit"></i> Edit</a>&nbsp;&nbsp;&nbsp;
                                                <a href="<?php echo base_url()?>cms_seller/productList/deleteProducts/<?php echo $row['prod_id']?>" class="btn mini red delete_rec" id="" class="config btn mini red"><i class="icon-trash"></i> Delete</a>-->
                                          </td>
                                       </tr>
                                       <?php 
                                          }
                                          }
                                           }
                                          else
                                          {
                                          ?>
                                       <tr class="odd gradeX">
                                          <td colspan="11">No records found</td>
                                       </tr>
                                       </tr>
                                       <?php 
                                          }
                                          ?>
                                    </tbody>
                                 </table>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="tab-pane" id="tab_2">
                     <div class="portlet box blue">
                        <div class="portlet-title">
                           <div class="caption">
                              <i class="fa fa-reorder"></i>Ready To Deliver
                              <div class="tools">
                                 <a href="javascript:;" class="collapse">
                                 </a>
                                 <a href="#portlet-config" data-toggle="modal" class="config">
                                 </a>
                                 <a href="javascript:;" class="reload">
                                 </a>
                                 <a href="javascript:;" class="remove">
                                 </a>
                              </div>
                           </div>
                        </div>
                        <div class="portlet-body form form-horizontal">
                           <!-- BEGIN FORM-->
                           <div class="form-body">
                              <div class="span6"><div id="sample_1_length" class="dataTables_length"><label><select size="1" name="sample_1_length" aria-controls="sample_1" class="m-wrap xsmall"><option value="10">5</option><option value="25">15</option><option value="50">20</option><option value="-1">All</option></select> records per page</label></div></div>
                              <div class="span6"><div class="dataTables_filter" id="sample_1_filter"><label>Search: <input type="text" aria-controls="sample_1" id="search_value" autocomplete="off" onkeyup="showResult(this.value)" class="m-wrap medium"></label></div></div>
                              <div id="output"></div>
                              <div class="portlet-body" id="tab_2">
                                 <table class="table table-striped table-bordered table-hover" id="sample_1">
                                    <thead>
                                       <tr>
                                          <th class="hidden-phone">Srno</th>
                                          <!-- <th class="hidden-phone">Image</th> -->
                                          <th class="hidden-phone">Products</th>
                                          <!-- <th class="hidden-phone">Section</th> -->
                                          <th class="hidden-phone">category</th>
                                          <th class="hidden-phone">Subcategory</th>
                                          <th class="hidden-phone">Product ID</th>
                                          <th class="hidden-phone">Price</th>
                                          <th class="hidden-phone">Image</th>
                                          <th class="hidden-phone">Quantity</th>
                                          <th class="hidden-phone">Mobile Number</th>
                                          <th class="hidden-phone">Email ID</th>                                          
                                          <th class="hidden-phone">Options</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <?php $cnt=0; if(count($ready_to_deliver_prod_list)>0){

                                          foreach($ready_to_deliver_prod_list as $row){
                                             $cat_id = $row['cat_id'];
                                             $sql1 = $this->db->query("select cat_name from category where cat_id=$cat_id");
                                             $result = $sql1->result_array();
                                             foreach($result as $row1){
                                             $cnt++;
                                          ?>
                                       <tr id="" class="odd gradeX">
                                          <td><?php echo $cnt;?></td>
                                          <td class="hidden-phone"><?php echo $row['prod_name']?></td>

                                          <td class="hidden-phone"><?php echo $row1['cat_name']?></td>
                                          <td class="hidden-phone">
                                             <!-- <span  class="label label-success"  class="label label-important" > -->
                                             <?php echo $row['prod_description']?>
                                             <!-- </span> -->
                                          </td>
                                          <td class="hidden-phone"><?php echo $row['prod_price']?></td>
                                          <td class="hidden-phone"><?php echo $row['prod_price']?></td>
                                          <td class="hidden-phone"><?php echo $row['prod_price']?></td>
                                          <td class="hidden-phone">
                                             <?php if($row['prod_image']!=""){?>
                                             <img src="<?php echo base_url().$row['prod_image']?>" style="height:50px;width:50px;"/>
                                             <?php } else {?>
                                             <img src="<?php echo base_url()?>images/noimage.gif" style="width:50px; height:50px;" alt="" />
                                             <?php }?>
                                          </td>
                                          <td>100</td>
                                          <td>9865847593</td>
                                          <td class="hidden-phone" id="prod_status">
                                            <?php 
                                              if($row['product_status']==3)
                                              {
                                            ?>
                                            <a href="<?php echo base_url()?>cms_seller/productDetailList"><img src="<?php echo base_url();?>images/enable.png" id="<?php echo $row['section_id']?>/<?php echo $row['cat_id']?>/<?php echo $row['sub_cat_id']?>/<?php echo $row['prod_id']?>/<?php echo $row['seller_request_status']?>" onclick="getstatus(this.id);" width="25px" height="25px"></a>&nbsp;&nbsp;&nbsp;
                                             
                                             <?php }else {?>
                                            <a href="<?php echo base_url()?>cms_seller/productDetailList"><img src="<?php echo base_url();?>images/disable.jpeg" id="<?php echo $row['section_id']?>/<?php echo $row['cat_id']?>/<?php echo $row['sub_cat_id']?>/<?php echo $row['prod_id']?>/<?php echo $row['seller_request_status']?>" onclick="getstatus(this.id);" width="25px" height="25px"></a>&nbsp;&nbsp;&nbsp;
                                             <?php } ?>
                                          </td>
                                          <td class="hidden-phone">
                                             <a href="<?php echo base_url()?>cms_seller/productList/viewEditProducts/<?php echo $row['prod_id']?>/edit" class="btn mini purple"><i class="icon-edit"></i> View</a>&nbsp;&nbsp;&nbsp;
                                             <!--<a href="<?php echo base_url()?>cms_seller/productList/viewEditProducts/<?php echo $row['prod_id']?>/edit" class="btn mini blue"><i class="icon-edit"></i> Edit</a>&nbsp;&nbsp;&nbsp;
                                                <a href="<?php echo base_url()?>cms_seller/productList/deleteProducts/<?php echo $row['prod_id']?>" class="btn mini red delete_rec" id="" class="config btn mini red"><i class="icon-trash"></i> Delete</a>-->
                                          </td>
                                       </tr>
                                       <?php 
                                          }
                                          }
                                           }
                                          else
                                          {
                                          ?>
                                       <tr class="odd gradeX">
                                          <td colspan="11">No records found</td>
                                       </tr>
                                       </tr>
                                       <?php 
                                          }
                                          ?>
                                    </tbody>
                                 </table>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
            </form>

            
            