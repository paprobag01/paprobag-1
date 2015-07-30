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
                     Create Subcategory
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
                        <h4><i class="icon-reorder"></i>Assign Subcategory</h4>
                        <div class="tools">
                           <a href="javascript:;" class="collapse"></a> 
                           <a href="javascript:;" class="remove"></a>
                        </div>
                     </div>
                     <div class="portlet-body form">
                        <!-- BEGIN FORM-->
                        <form action="<?php echo base_url()?>cms/subcategories/save_subcategories" class="form-horizontal" method="post" enctype="multipart/form-data" />
							<div class="control-group"><span style="color:#FE544D;font-size: 15px;"><?php  echo validation_errors();?></span>
                     		</div>
							<input type="hidden" name="cat_id" <?php if(!(isset($error))){?>value="<?php echo $cat_id;?>"<?php }?>/>
							<input type="hidden" name="created_on" value="<?php echo date('d-m-Y')?>"/>
							 
						    
						  <div class="control-group">
                              <label class="control-label">Sections</label>
                              <div class="controls">
                                <!-- <textarea  name="details"  id="ai" class="span12 ckeditor m-wrap" cols="30" rows="10">  </textarea> -->
									<select name="sec_id" id="sec_id" required data-validation-required-message="Please Fill Data" onchange="getFilters(this.value)" <?php if($type=='view'){?>disabled<?php }?>>
										<option value="">Select</option>
										<?php foreach($sec_data as $row){ ?>
										<option value="<?php echo $row['section_id']; ?>"><?php echo $row['section_name']; ?></option>
										<?php }?>
									</select>
								  
                              </div>
                           </div>
				
						  <script type="text/javascript">
							  $(document).ready(function() {
								  
									
								  $('#sec_id').on('click', function() {
									
											 
											  var categories = $('#sec_id').val();
									console.log(categories);
									$.ajax({   
									   url: "<?php echo base_url()?>cms/getSubCategories/dropdown",
										async: false,
										type: "POST", 
										data: "categories="+categories,
										dataType: "html",
										
										success: function(data) {
											var dt=data.split("|");
											//$('#subcategories').html(dt[0]);
											if(dt[0]!='<label class="control-label">Category</label><div class="controls" id="prod_sub_categories"><select name="prod_sub_categories" id="prod_sub_categories"></select></div>')
											{
												$('#subcategories').fadeIn();
												$('#subcategories').html(dt[0]);
												
												
											
											}
											else{
												$('#subcategories').fadeIn();
												$('#subcategories').html('<div class="controls">Category is not found under this Section</div>');
											}
											
											
										}
									});
								  
									 
								  });
								//  $('#filterDropdwn').on('click', function() {								
																	
																			 
								  									 
								  });
											  </script>
						   
						   <div class="control-group" id="subcategories" style="display:none;">
											  
											</div>
										<div class="control-group">
													<label class="control-label">Subcategory</label>
													    <div class="controls">
															<input type="text" name="sub_cat" id="sub_cat" <?php if($type=='view'){?>disabled<?php }?> required data-validation-required-message="Please Fill Data" <?php if(!(isset($error))){?>value="<?php echo $sub_cat_name;?>"<?php } ?> class="span4 m-wrap"> 
													    </div>
												</div>
												<div class="control-group">
													<label class="control-label">MOQ</label>
													    <div class="controls">
															<input type="text" name="moq" id="moq" <?php if($type=='view'){?>disabled<?php }?> required data-validation-required-message="Please Fill Data" <?php if(!(isset($error))){?>value="<?php echo $moq;?>"<?php } ?> class="span4 m-wrap"> 
													    </div>
												</div>
												<div class="control-group">
													<label class="control-label">Subcategory ID</label>
													    <div class="controls">
															<input type="text" name="sub_cat_id" id="sub_cat_id" <?php if($type=='view'){?>disabled value="<?php echo $sub_cat_id;?>"<?php }?> <?php if($type=='view'||$type=='edit'){?>value="<?php echo $sub_cat_id;?>"<?php }else{?><?php if(!(isset($error))){ ?>value="<?php echo $sub_category_id;?>"<?php } }?> class="span4 m-wrap"> 
													    </div>
												</div>
                          
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