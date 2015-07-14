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
            Account Details<small></small>
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
                  Seller Account
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
                           
                           <div class="form-body">
                              <div class="portlet-body" id="tab_0">
                                 <table class="table table-striped table-bordered table-hover" id="sample_1">
                                    <thead>
                                       <tr>
                                         
                                          <th class="hidden-phone">Sr.No</th>
                                          <th class="hidden-phone">Seller Organization Name</th>
                                          <th class="hidden-phone">Owner Name</th>
                                          <th class="hidden-phone">Seller Id</th>
                                          <th class="hidden-phone">Mobile Number</th>
                                          <th class="hidden-phone">Email Id</th>
                                          <th class="hidden-phone">View</th>                                          
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <?php $cnt=0; if(count($customize_prod_list)>0){
                                          foreach($customize_prod_list as $row){
                                            $cnt++;
                                          ?>
                                       <tr id="" class="odd gradeX">
                                          <td><?php echo $cnt;?></td>
                                          <td class="hidden-phone">Paprobag.com</td>
                                          <td class="hidden-phone">Ashish Singh</td>                                          
                                          <td class="hidden-phone">12345</td>
                                          <td class="hidden-phone">9637280316</td>
                                          <td class="hidden-phone" id="prod_status">paprobag01@gmail.com</td>
                                          <td class="hidden-phone">
                                             <a href="<?php echo base_url()?>cms_seller/seller_view" class="btn mini purple"><i class="icon-edit"></i> View</a>&nbsp;&nbsp;&nbsp;
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
                                          <td colspan="6">No records found</td>
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