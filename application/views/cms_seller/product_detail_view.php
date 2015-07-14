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
<script> 
                function showProdList_pending(str) {
                  var xmlhttp;
                  if (str.length==0) { 
                    document.getElementById("status_id").innerHTML="";
                    document.getElementById("status_id").style.border="0px";
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
                      document.getElementById("status_id").innerHTML=xmlhttp.responseText;
                      document.getElementById("status_id").style.border="0px solid #A5ACB2";
                    }
                  }
                  xmlhttp.open("GET","<?php echo base_url();?>Search_result/get_pending_prodlist/?get_pending_prodlist="+str,true);
                  xmlhttp.send();
                }
                  
</script>
<script> 
                function showProdList_approved(str) {
                  var xmlhttp;
                  if (str.length==0) { 
                    document.getElementById("status_id").innerHTML="";
                    document.getElementById("status_id").style.border="0px";
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
                      document.getElementById("status_id").innerHTML=xmlhttp.responseText;
                      document.getElementById("status_id").style.border="0px solid #A5ACB2";
                    }
                  }
                  xmlhttp.open("GET","<?php echo base_url();?>Search_result/get_approved_prodlist/?get_approved_prodlist="+str,true);
                  xmlhttp.send();
                }
                  
</script>
<script> 
                function showProdList_live(str) {
                  var xmlhttp;
                  if (str.length==0) { 
                    document.getElementById("status_id").innerHTML="";
                    document.getElementById("status_id").style.border="0px";
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
                      document.getElementById("status_id").innerHTML=xmlhttp.responseText;
                      document.getElementById("status_id").style.border="0px solid #A5ACB2";
                    }
                  }
                  xmlhttp.open("GET","<?php echo base_url();?>Search_result/get_live_prodlist/?get_live_prodlist="+str,true);
                  xmlhttp.send();
                }
                  
</script>

<div class="page-content">
<div class="container-fluid">
   <div class="row-fluid">
      <div class="span12">
         <!-- BEGIN STYLE CUSTOMIZER--> 
         <h3 class="page-title">
            Product Details<small></small>
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
            <div class="portlet box blue" style="border: 1px solid #FFFFFF;background-color: #FFFFFF">
                        
                       <img src="<?php echo base_url();?>images/seller.jpg" id="1" width="200px" height="200px" style="padding-left: 16px;" onclick="showProdList_pending(this.id);">Pending :<?php echo count($pending);?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                       <img src="<?php echo base_url();?>images/seller.jpg" id="2" width="200px" height="200px" style="padding-left: 67px;" onclick="showProdList_approved(this.id);">Approved :<?php echo count($approve);?>
                       <img src="<?php echo base_url();?>images/seller.jpg" id="3" width="200px" height="200px" style="padding-left: 67px;" onclick="showProdList_live(this.id);">Live : <?php echo count($live);?>
                       <img src="<?php echo base_url();?>images/seller.jpg" id="0" width="200px" height="200px" style="padding-left: 67px;" onclick="showProdList_live(this.id);">OutOfStock :<?php echo count($out_of_stock);?>
                    
            <ul class="nav nav-tabs">
               <li class="active">
                  <a href="#tab_0" data-toggle="tab">
                  Customizable Products
                  </a>
               </li>
               <li>
                  <a href="#tab_1" data-toggle="tab">
                  Ready To Print
                  </a>
               </li>
               <li>
                  <a href="#tab_2" data-toggle="tab">
                  Ready To Deliver
                  </a>
               </li>
            </ul>
            <form action="<?php echo base_url()?>cms_seller/productList/save_products" class="" method="post" enctype="multipart/form-data" />

               <div class="tab-content" id="status_id">                  
                
               </div>
               
            </form>
         </div>
      </div>
   </div>
</div>