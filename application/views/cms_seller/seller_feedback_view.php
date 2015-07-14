
<div class="page-content">
<div class="container-fluid">
   <div class="row-fluid">
      <div class="span12">
         <!-- BEGIN STYLE CUSTOMIZER--> 
         <h3 class="page-title">
            Feedback Details<small></small>
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
                  Seller Feedback
                  </a>
               </li>
               
            </ul>
            <form action="<?php echo base_url()?>cms_seller/productList/save_products" class="" method="post" enctype="multipart/form-data" />
               <div class="tab-content">
                  <div class="tab-pane active" id="tab_0">
                     <div class="portlet box blue">
                        <div class="portlet-title">
                           <div class="caption">
                              <i class="fa fa-reorder"></i>Feedback
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
                                <div class="form-body">
												<div class="control-group">
													<label class="control-label">Seller Name</label>
													    <div class="controls">
															<input type="text" name="prod_name" id="prod_name" value="" class="span4 m-wrap"> 
													    </div>
												</div>
												<div class="control-group">
													<label class="control-label">Rate</label>
													    <div class="controls">
															*****
													    </div>
												</div>
												<div class="control-group">
												  <label class="control-label">Date</label>
													   <div class="controls">
															<input type="date" name="prod_name" id="prod_name" value="" class="span4 m-wrap"> 
													    </div>
												</div>
												<div class="control-group">
												  <label class="control-label">GH In One Word</label>
													  <div class="controls">
															<input type="text" name="prod_name" id="prod_name" value="" class="span4 m-wrap"> 
													    </div>
												</div>
												
											    <div class="control-group">
												  <label class="control-label">Message</label>
												  <div class="controls">
													 <textarea  name="prod_description" id="prod_description" <?php if($type=='view'){?>disabled<?php }?>  class="span12 ckeditor  m-wrap" cols="30" rows="10"><?php echo $prod_description;?> </textarea> 
													 
												  </div>
											</div>
											<div class="control-group">
													<label class="control-label">Feedback Status</label>
													    <div class="controls">
															<select name="status" id="prod_status">
																<option value="0">Live</option>
																<option value="1">Off</option>
															</select>
													    </div>
												</div>
											<div class="control-group">
											<div class="controls">
												<?php if($type!='view'){?>
												<button type="submit" class="btn blue">Save</button>
												<button type="button" class="btn default">Cancel</button>
												<?php }?>
											</div>
											</div>
														 
												
<!-- 												url_for_product_details -->
												
											   
											</div>
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