<?php 
extract($page_data);
?>
<!-- BEGIN PAGE -->  
      <div class="page-content"> 
         <!-- BEGIN PAGE CONTAINER-->
         <div class="container-fluid">
            <!-- BEGIN PAGE HEADER-->   
            <div class="row-fluid">
               <div class="span12"> 
                  <h3 class="page-title">
                     Create Categories
                  </h3> 
				   <p style="text-align:right"><button type="button" id="add_new" class="btn blue">View Subcategory Details</button></p>			
               </div>
            </div>
            <!-- END PAGE HEADER-->
            <!-- BEGIN PAGE CONTENT-->
            <div class="row-fluid">
               <div class="span12">
                  <!-- BEGIN SAMPLE FORM PORTLET-->   
				 
                  <div class="portlet box blue">
                     <div class="portlet-title">
                        <h4><i class="icon-reorder"></i>Add Category details</h4>
                        <div class="tools">
                           <a href="javascript:;" class="collapse"></a> 
                           <a href="javascript:;" class="remove"></a>
                        </div>
                     </div>
                     <div class="portlet-body form">
                        <!-- BEGIN FORM-->
                        <form action="<?php echo base_url()?>cms/categories/save_categories" class="form-horizontal" method="post" enctype="multipart/form-data" />
							<input type="hidden" name="cat_id" value="<?php echo $cat_id;?>"/>
							<input type="hidden" name="created_on" value="<?php echo date('d-m-Y')?>"/>
							 
						    
						   <div class="control-group">
                              <label class="control-label">Category Name</label>
                              <div class="controls">
                                <!-- <textarea  name="details"  id="ai" class="span12 ckeditor m-wrap" cols="30" rows="10">  </textarea> -->
									
								  <input type="text" <?php if($type=='view'){?>disabled<?php }?> name="cat_name" id="cat_name" value="<?php echo $cat_name?>" class="span4  m-wrap" /> 
                              </div>
                           </div>
						    
						   <div class="control-group">
                              <label class="control-label">Make Parent Category</label>
                              <div class="controls">
                                <!-- <textarea  name="details"  id="ai" class="span12 ckeditor m-wrap" cols="30" rows="10">  </textarea> -->
									
								  <input type="checkbox" <?php if($type=='view'){?>disabled<?php }?> name="parent" id="parent" value="1" class="span4  m-wrap" <?php if($parent==1){ echo "checked";} ?>/> 
                              </div>
                           </div>
						   
						   <div class="control-group">
                              <label class="control-label">Meta Title</label>
                              <div class="controls">
                                <!-- <textarea  name="details"  id="ai" class="span12 ckeditor m-wrap" cols="30" rows="10">  </textarea> -->
									
								  <input type="text" <?php if($type=='view'){?>disabled<?php }?> name="cat_meta_title" id="cat_meta_title" value="<?php echo $cat_meta_title; ?>" class="span4  m-wrap" /> 
                              </div>
                           </div>
						   <div class="control-group">
                              <label class="control-label">Meta Keywords</label>
                              <div class="controls">
                                 <textarea  name="cat_meta_keywords"  id="ai" class="span12 m-wrap" <?php if($type=='view'){?>disabled<?php }?> cols="30" rows="2"><?php echo $cat_meta_keywords;?></textarea>
									
								 
                              </div>
                           </div>
						    <div class="control-group">
                              <label class="control-label">Meta Description</label>
                              <div class="controls">
                                 <textarea  name="cat_meta_description"  id="ai" class="span12 m-wrap" <?php if($type=='view'){?>disabled<?php }?> cols="30" rows="2"><?php echo $cat_meta_description ?></textarea>
									
								 
                              </div>
                           </div>
                           <!-- <div class="control-group">
													<label class="control-label">Gift Card</label>
													    <div class="controls">
															<select name="gift_card" id="gift_card">
																<option value="0">No</option>
																<option value="1">Yes</option>
															</select>
													    </div>
							</div> -->
                           
						  <?php if($type!='view'){ ?>
                           <div class="form-actions">
                           <button type="submit" class="btn blue">Save</button>
                              <button type="button" class="cancel btn">Cancel</button>
                           </div>
						   <?php }?>
                        </form>
                        <!-- END FORM-->           
                     </div>
                  </div>
                  <!-- END SAMPLE FORM PORTLET-->
               </div>
            </div>
			<script type="text/javascript">
			 $(document).ready(function(){
				 $("#add_new").click(function(){

				document.location="<?php echo base_url()?>cms/subcategories";
			});
				$(".cancel").click(function()
					{

					document.location="<?php echo base_url()?>cms/home_page/home_page_view";
				});             

				
		  });	
		  </script>	
			</div>
            </div>
			</div>