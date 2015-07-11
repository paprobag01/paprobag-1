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
                                         
                                          <th class="hidden-phone">Personal Details</th>
                                          <th class="hidden-phone">Picking Address</th>
                                          
                                       </tr>
                                    </thead>
                                    <tbody>
                                       
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