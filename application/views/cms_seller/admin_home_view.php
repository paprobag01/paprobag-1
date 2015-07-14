
<div class="page-content">
<div class="container-fluid">
   <div class="row-fluid">
      <div class="span12">
         <!-- BEGIN STYLE CUSTOMIZER--> 
         <h3 class="page-title">
            Home<small></small>
         </h3>
      </div>
   </div>
   <hr>
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
                     <div class="portlet box blue" style="border: 1px solid #FFFFFF;background-color: #FFFFFF">
                        
                       <img src="<?php echo base_url();?>images/seller.jpg" width="200px" height="200px" style="padding-left: 119px;">Pending catlog : <?php echo count($pending);?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                       <img src="<?php echo base_url();?>images/seller.jpg" width="200px" height="200px" style="padding-left: 67px;">Approved Catlog : <?php echo count($approve);?>
                       <img src="<?php echo base_url();?>images/seller.jpg" width="200px" height="200px" style="padding-left: 67px;">Live Products : <?php echo count($live);?>
                     </div>
                     
                     <div class="portlet box blue" style="border: 1px solid #FFFFFF;background-color: #FFFFFF">
                        
                       <img src="<?php echo base_url();?>images/seller.jpg" width="200px" height="200px" style="padding-left: 119px;">Number of sellers : <?php echo count($seller);?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                       <img src="<?php echo base_url();?>images/seller.jpg" width="200px" height="200px" style="padding-left: 67px;">Sold Products
                       <img src="<?php echo base_url();?>images/seller.jpg" width="200px" height="200px" style="padding-left: 114px;">Feedbacks
                     </div>
                  </div>
                 
            </form>
            </div>
         </div>
      </div>
   </div>
</div>