<script> 
                function getstatus(str) {
                  var xmlhttp;
                  if (str.length==0) { 
                    document.getElementById("prod_status").innerHTML="";
                    document.getElementById("prod_status").style.border="0px";
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
                      document.getElementById("prod_status").innerHTML=xmlhttp.responseText;
                      document.getElementById("prod_status").style.border="0px solid #A5ACB2";
                    }
                  }
                  xmlhttp.open("GET","<?php echo base_url();?>Search_result/get_status/?get_status="+str,true);
                  xmlhttp.send();
                }
                  
                 </script>
<div class="page-content">
<div class="container-fluid">
   <div class="row-fluid">
      <div class="span12">
         <!-- BEGIN STYLE CUSTOMIZER--> 
         <h3 class="page-title">
            Product Trade Details<small></small>
         </h3>
      </div>
   </div>
   <div class="row-fluid">
      <div class="col-md-12">
         <!-- BEGIN PAGE TITLE & BREADCRUMB-->
         <!-- END PAGE TITLE & BREADCRUMB-->
      </div>
   </div>
   <!-- END PAGE HEADER-->
   <!-- BEGIN PAGE CONTENT-->
   <div class="row-fluid">
      <div class="span12">
         <div class="tabbable tabbable-custom boxless tabbable-reversed">
            <ul class="nav nav-tabs">
               <li class="active">
                  <a href="#tab_0" data-toggle="tab">
                  Current Order
                  </a>
               </li>
               <li>
                  <a href="#tab_1" data-toggle="tab">
                  Order In Process
                  </a>
               </li>
               <li>
                  <a href="#tab_2" data-toggle="tab">
                  Past Order
                  </a>
               </li>
            </ul>
            <form action="<?php echo base_url()?>cms_seller/productList/save_products" class="" method="post" enctype="multipart/form-data" />
               <div class="tab-content">
                  <div class="tab-pane active" id="tab_0">
                     <div class="portlet box blue">
                        <div class="portlet-title">
                           <div class="caption">
                              <i class="fa fa-reorder"></i>Current Order
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
                           <input type="hidden"  name="prod_id"/>
                           <input type="hidden" value="<?php echo $created_on;?>" name="created_on" value="<?php echo date("Y-m-d");?>"/>
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
                                          	$cnt++;
                                          ?>
                                       <tr id="" class="odd gradeX">
                                          <td><?php echo $cnt;?></td>
                                          <td class="hidden-phone"><?php echo $row['prod_name']?></td>
                                          <td class="hidden-phone"><?php echo $row['prod_name']?></td>
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
                                          <td>abcd@gmail.com</td>
                                          
                                          <td class="hidden-phone">
                                             <a href="<?php echo base_url()?>cms_seller/productList/viewcustomerdetail/<?php echo $row['prod_id']?>/view" class="btn mini purple"><i class="icon-edit"></i> View</a>&nbsp;&nbsp;&nbsp;
                                             <!--<a href="<?php echo base_url()?>cms_seller/productList/viewEditProducts/<?php echo $row['prod_id']?>/edit" class="btn mini blue"><i class="icon-edit"></i> Edit</a>&nbsp;&nbsp;&nbsp;
                                                <a href="<?php echo base_url()?>cms_seller/productList/deleteProducts/<?php echo $row['prod_id']?>" class="btn mini red delete_rec" id="" class="config btn mini red"><i class="icon-trash"></i> Delete</a>-->
                                          </td>
                                       </tr>
                                       <?php 
                                          }
                                           }
                                          else
                                          {
                                          ?>
                                       <tr class="odd gradeX">
                                          <td colspan="10">No records found</td>
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
                              <i class="fa fa-reorder"></i>Order In Process
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
                              <div class="portlet-body" id="tab_1">
                                 <table class="table table-striped table-bordered table-hover" id="sample_1">
                                    <thead>
                                       <tr>
                                          <th class="hidden-phone">Srno</th>
                                          <!-- <th class="hidden-phone">Image</th> -->
                                          <th class="hidden-phone">Products</th>
                                          <!-- <th class="hidden-phone">Section</th> -->
                                          <th class="hidden-phone">category</th>
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
                                          	$cnt++;
                                          ?>
                                       <tr id="" class="odd gradeX">
                                          <td><?php echo $cnt;?></td>
                                          <td class="hidden-phone"><?php echo $row['prod_name']?></td>
                                          
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
                                          <td class="hidden-phone">
                                             <?php if($row['prod_image']!=""){?>
                                             <img src="<?php echo base_url().$row['prod_image']?>" style="height:50px;width:50px;"/>
                                             <?php } else {?>
                                             <img src="<?php echo base_url()?>images/noimage.gif" style="width:50px; height:50px;" alt="" />
                                             <?php }?>
                                          </td>                                          
                                          <td class="hidden-phone">
                                             <a href="<?php echo base_url()?>cms_seller/productList/viewcustomerdetail/<?php echo $row['prod_id']?>/view" class="btn mini purple"><i class="icon-edit"></i> View</a>&nbsp;&nbsp;&nbsp;
                                             <!--<a href="<?php echo base_url()?>cms_seller/productList/viewEditProducts/<?php echo $row['prod_id']?>/edit" class="btn mini blue"><i class="icon-edit"></i> Edit</a>&nbsp;&nbsp;&nbsp;
                                                <a href="<?php echo base_url()?>cms_seller/productList/deleteProducts/<?php echo $row['prod_id']?>" class="btn mini red delete_rec" id="" class="config btn mini red"><i class="icon-trash"></i> Delete</a>-->
                                          </td>
                                       </tr>
                                       <?php 
                                          }
                                           }
                                          else
                                          {
                                          ?>
                                       <tr class="odd gradeX">
                                          <td colspan="10">No records found</td>
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
                              <i class="fa fa-reorder"></i>Past Oreder
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

                              <div class="portlet-body" id="tab_2">
                                 <table class="table table-striped table-bordered table-hover" id="sample_1">
                                    <thead>
                                       <tr>
                                          <th class="hidden-phone">Srno</th>
                                          <!-- <th class="hidden-phone">Image</th> -->
                                          <th class="hidden-phone">Products</th>
                                          <!-- <th class="hidden-phone">Section</th> -->
                                          <th class="hidden-phone">category</th>
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
                                          	$cnt++;
                                          ?>
                                       <tr id="" class="odd gradeX">
                                          <td><?php echo $cnt;?></td>
                                          <td class="hidden-phone"><?php echo $row['prod_name']?></td>
                                          <td class="hidden-phone"><?php echo $row['prod_name']?></td>
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
                                          <td>abcd@gmail.com</td>
                                          
                                          <td class="hidden-phone" id="prod_status">
                                          	<?php 
                                          		if($row['status']==1)
                                          		{
                                          	?>
                                             <a href="<?php echo base_url()?>cms_seller/productDetailList"><img src="<?php echo base_url();?>images/enable.png" id="<?php echo $row['section_id']?>/<?php echo $row['cat_id']?>/<?php echo $row['sub_cat_id']?>/<?php echo $row['prod_id']?>/<?php echo $row['status']?>" onclick="getstatus(this.id);" width="25px" height="25px"></a>&nbsp;&nbsp;&nbsp;
                                             <?php }else {?>
                                             <a href="<?php echo base_url()?>cms_seller/productDetailList"><img src="<?php echo base_url();?>images/disable.jpeg" id="<?php echo $row['section_id']?>/<?php echo $row['cat_id']?>/<?php echo $row['sub_cat_id']?>/<?php echo $row['prod_id']?>/<?php echo $row['status']?>" onclick="getstatus(this.id);" width="25px" height="25px"></a>&nbsp;&nbsp;&nbsp;
                                             <?php } ?>
                                          </td>
                                          <td class="hidden-phone">
                                             <a href="<?php echo base_url()?>cms_seller/productList/viewcustomerdetail/<?php echo $row['prod_id']?>/view" class="btn mini purple"><i class="icon-edit"></i> View</a>&nbsp;&nbsp;&nbsp;
                                             <!--<a href="<?php echo base_url()?>cms_seller/productList/viewEditProducts/<?php echo $row['prod_id']?>/edit" class="btn mini blue"><i class="icon-edit"></i> Edit</a>&nbsp;&nbsp;&nbsp;
                                                <a href="<?php echo base_url()?>cms_seller/productList/deleteProducts/<?php echo $row['prod_id']?>" class="btn mini red delete_rec" id="" class="config btn mini red"><i class="icon-trash"></i> Delete</a>-->
                                          </td>
                                       </tr>
                                       <?php 
                                          }
                                           }
                                          else
                                          {
                                          ?>
                                       <tr class="odd gradeX">
                                          <td colspan="10">No records found</td>
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
            </div>
         </div>
      </div>
   </div>
</div>