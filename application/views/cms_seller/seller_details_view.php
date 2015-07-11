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
                                         
                                          <th class="hidden-phone">Personal Details</th>
                                          <th class="hidden-phone">Shipping Details</th>                                          
                                          <th class="hidden-phone">Product Catalog</th>                                                                                   
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <?php $cnt=0; if(count($customize_prod_list)>0){
                                          foreach($customize_prod_list as $row){
                                            $cnt++;
                                          ?>
                                       <tr id="" class="odd gradeX">
                                          
                                          <td class="hidden-phone">Paprobag.com</td>
                                          <td class="hidden-phone">Ashish Singh</td>                                          
                                          <td class="hidden-phone">12345</td>
                                          
                                       </tr>
                                       <?php 
                                          }
                                           }
                                          else
                                          {
                                          ?>
                                       <tr class="odd gradeX">
                                          <td colspan="3">No records found</td>
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
         <div class="row-fluid">
      <div class="span12">
         <div class="tabbable tabbable-custom boxless tabbable-reversed">
           
            <form action="http://localhost/paprobag/cms_seller/productList/save_products" class="" method="post" enctype="multipart/form-data">
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
                                 <div id="sample_1_wrapper" class="dataTables_wrapper form-inline" role="grid"><div class="row-fluid"><div class="span6"><div id="sample_1_length" class="dataTables_length"><label><select size="1" name="sample_1_length" aria-controls="sample_1" class="m-wrap xsmall"><option value="10">5</option><option value="25">15</option><option value="50">20</option><option value="-1">All</option></select> records per page</label></div></div><div class="span6"><div class="dataTables_filter" id="sample_1_filter"><label>Search: <input type="text" aria-controls="sample_1" class="m-wrap medium"></label></div></div></div><table class="table table-striped table-bordered table-hover dataTable" id="sample_1" aria-describedby="sample_1_info">
                                    <thead>
                                       <tr role="row"><th class="hidden-phone sorting_disabled" role="columnheader" rowspan="1" colspan="1" aria-label="Personal Details" style="width: 379.888888835907px;">Personal Details</th><th class="hidden-phone sorting" role="columnheader" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" aria-label="Shipping Details: activate to sort column ascending" style="width: 382.888888835907px;">Shipping Details</th><th class="hidden-phone sorting" role="columnheader" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" aria-label="Product Catalog: activate to sort column ascending" style="width: 375.888888835907px;">Product Catalog</th></tr>
                                    </thead>
                                    
                                 <tbody role="alert" aria-live="polite" aria-relevant="all"><tr id="" class="gradeX odd">
                                          
                                          <td class="hidden-phone  sorting_1">Paprobag.com</td>
                                          <td class="hidden-phone ">Ashish Singh</td>                                          
                                          <td class="hidden-phone ">12345</td>
                                          
                                       </tr><tr id="" class="gradeX even">
                                          
                                          <td class="hidden-phone  sorting_1">Paprobag.com</td>
                                          <td class="hidden-phone ">Ashish Singh</td>                                          
                                          <td class="hidden-phone ">12345</td>
                                          
                                       </tr><tr id="" class="odd gradeX">
                                          
                                          <td class="hidden-phone  sorting_1">Paprobag.com</td>
                                          <td class="hidden-phone ">Ashish Singh</td>                                          
                                          <td class="hidden-phone ">12345</td>
                                          
                                       </tr></tbody></table><div class="row-fluid"><div class="span6"><div class="dataTables_info" id="sample_1_info">Showing 1 to 3 of 3 entries</div></div><div class="span6"><div class="dataTables_paginate paging_bootstrap pagination"><ul><li class="prev disabled"><a href="#">← Prev</a></li><li class="active"><a href="#">1</a></li><li class="next disabled"><a href="#">Next → </a></li></ul></div></div></div></div>
                              </div>
                              
                           </div>
                        </div>
                     </div>
                  </div>
                  
            
            </div></form>
         </div>
      </div>
   </div>
      </div>
   </div>
</div>