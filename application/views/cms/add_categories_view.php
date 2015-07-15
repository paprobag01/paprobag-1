<?php
if(!isset($error)) 
{
   extract($page_data);
}

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
                        <form action="<?php echo base_url()?>cms/categories/verify_category" class="form-horizontal" method="post" enctype="multipart/form-data" />
							 <div class="control-group"><span style="color:#FE544D;font-size: 15px;"><?php  echo validation_errors();?></span>
                      </div>
                     <input type="hidden" name="cat_id" <?php if(!(isset($error))){?>value="<?php echo $cat_id;?>"<?php }?>/>
							<input type="hidden" name="created_on" value="<?php echo date('d-m-Y')?>"/>
							 <div class="control-group">
                              <label class="control-label">Select Section</label>
                              <div class="controls">
                                 <select name="section_id" <?php if($type=='view'){?>disabled<?php }?> required data-validation-required-message="Please Enter Section name">
										<option value="">Select</option>
										<?php foreach($section_data as $row){ ?>
										<option value="<?php echo $row['section_id']; ?>"><?php echo $row['section_name']; ?></option>
										<?php }?>
								</select>
									
								 
                              </div>
                           </div>
						    
						   <div class="control-group">
                              <label class="control-label">Category Name</label>
                              <div class="controls">
                                <!-- <textarea  name="details"  id="ai" class="span12 ckeditor m-wrap" cols="30" rows="10">  </textarea> -->
									
								  <input type="text" <?php if($type=='view'){?>disabled<?php }?> required data-validation-required-message="Please Fill Data" name="cat_name" id="cat_name" <?php if(!(isset($error))){?>value="<?php echo $cat_name?>"<?php }?> class="span4  m-wrap" /> 
                              </div>
                           </div>
						    <div class="control-group">
                              <label class="control-label">Category Type</label>
                              <div class="controls">
                                <!-- <textarea  name="details"  id="ai" class="span12 ckeditor m-wrap" cols="30" rows="10">  </textarea> -->
									
								<div class="span2">Parent Category:</div>  <input type="radio" <?php if($type=='view'){?>disabled<?php }?> name="cat_type" id="cat_type" value="1" class="span2  m-wrap" <?php if(!(isset($error))){if($cat_type==1){ echo "checked";} }?>/> 
								
                              </div>
							  
                           </div>
						   <div class="control-group">
                              <label class="control-label">&nbsp;</label>
                              <div class="controls">                                	
								<div class="span2">Child Category:</div>  <input type="radio" <?php if($type=='view'){?>disabled<?php }?> name="cat_type" id="cat_type" value="2" class="span2  m-wrap" <?php if(!(isset($error))){if($cat_type==2){ echo "checked";} }?>/>
                              </div>
                           </div>
						   <div class="control-group">
                              <label class="control-label">&nbsp;</label>
                              <div class="controls">                                	
								<div class="span2">Sub Category:</div>  <input type="radio" <?php if($type=='view'){?>disabled<?php }?> name="cat_type" id="cat_type" value="3" class="span2  m-wrap" <?php if(!(isset($error))){if($cat_type==3){ echo "checked";} }?>/>
                              </div>
                           </div>
						   
						  
						   <div class="control-group">
                              <label class="control-label">Meta Title</label>
                              <div class="controls">
                                <!-- <textarea  name="details"  id="ai" class="span12 ckeditor m-wrap" cols="30" rows="10">  </textarea> -->
									
								  <input type="text" <?php if($type=='view'){?>disabled<?php }?> name="cat_meta_title" required data-validation-required-message="Please Fill Data" id="cat_meta_title" <?php if(!(isset($error))){?>value="<?php echo $cat_meta_title; ?>"<?php }?> class="span4  m-wrap" /> 
                              </div>
                           </div>
						   <div class="control-group">
                              <label class="control-label">Meta Keywords</label>
                              <div class="controls">
                                 <textarea  name="cat_meta_keywords"  id="ai" class="span12 m-wrap" required data-validation-required-message="Please Fill Data" <?php if($type=='view'){?>disabled<?php }?> cols="30" rows="2"><?php if(!(isset($error))){ echo $cat_meta_keywords; }?></textarea>
									
								 
                              </div>
                           </div>
						    <div class="control-group">
                              <label class="control-label">Meta Description</label>
                              <div class="controls">
                                 <textarea  name="cat_meta_description"  id="ai" class="span12 m-wrap" required data-validation-required-message="Please Fill Data" <?php if($type=='view'){?>disabled<?php }?> cols="30" rows="2"><?php if(!(isset($error))){echo $cat_meta_description; }?></textarea>
									
								 
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