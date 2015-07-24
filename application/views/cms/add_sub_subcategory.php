<?php 
if(!isset($error) && isset($page_data)) 
{
	extract($page_data);

}
?>
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
											if(dt[0]!='<label class="control-label">Product</label><div class="controls" id="prod_sub_categories"><select name="prod_sub_categories" onchange="getFilterVals()" id="prod_sub_categories"></select></div>')
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
									
										
								
									
										  $('#subcategories').on('click', function() {
										 
											  var filters = $('#prod_sub_categories').val();
											  var filters1 = $('#sec_id').val();
											  
									console.log(filters);
									$.ajax({   
											   url: "<?php echo base_url()?>cms/getSubCategories/filterdropdown",
												async: false,
												type: "POST", 
												data: {'filters':filters,'filters1':filters1},
												dataType: "html",
										
												success: function(data) 
												{
													var dt=data.split("|");
													
																if(dt[0]!='<label class="control-label">Category</label><div class="controls" id="sub_categories"><select name="sub_categories"   id="sub_categories"></select></div>')
																{
																	$('#filters').fadeIn();
																	$('#filters').html(dt[0]);
																	
																	
																
																}
																else{
																	$('#filters').fadeIn();
																	$('#filters').html('<div class="controls">Subcategory is not found under this Category</div>');
																}
													
												}
										});
									 });
								
									 
								  function getFilterVals()
										{										
											  var filters = $('#prod_sub_categories').val();
											  
									console.log(filters);
									$.ajax({   
									   url: "<?php echo base_url()?>cms/getSubCategories/filterdropdown",
										async: false,
										type: "POST", 
										data: "filters="+filters,
										dataType: "html",
										
										success: function(data) {
											var dt=data.split("|");
											
											$("#filters").fadeIn();
											$('#filters').html(dt[0]);
											
										}
									})
								  
									 
								  }
									 
								  });
								  
											  </script> 


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
                        <form action="<?php echo base_url()?>cms/Sub_Subcategories/save_sub_subcategories" class="form-horizontal" method="post" enctype="multipart/form-data" />
							<div class="control-group"><span style="color:#FE544D;font-size: 15px;"><?php  echo validation_errors();?></span>
                     		</div>
							<!-- <input type="hidden" name="cat_id" <?php if(!(isset($error))){?>value="<?php echo $cat_id;?>"<?php }?>/> -->
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
				
						 
						    
						 
						  <div class="control-group" id="subcategories" style="display:none;">
											  
											</div>
											
											<div class="control-group" id="filters" style="display:none;">
											  
											</div>
											<?php if(isset($page_data)){foreach($page_data as $row){ ?>
												<div class="control-group">
													<label class="control-label">Sub_Subcategory ID</label>
													    <div class="controls">
															<input type="text" name="sub_subcat_id" id="sub_subcat_id" <?php if($type=='view' && !(isset($error))){?>disabled value="<?php echo $row['sub_subcat_id'];?>"<?php }?> <?php if($type=='view'||$type=='edit' && !(isset($error))){?>value="<?php echo $row['sub_subcat_id'];?>"<?php }else{?><?php if(!(isset($error))){ ?>value="<?php echo $sub_subcategory_id;?>"<?php } }?> class="span4 m-wrap"> 
													    </div>
												</div>
												<div class="control-group">
													<label class="control-label">Sub_Subcategory Name</label>
													    <div class="controls">
															<input type="text" name="sub_subcat_name" id="sub_subcat_name" <?php if($type=='view'){?>disabled<?php }?> required data-validation-required-message="Please Fill Data" <?php if(!(isset($error))){?>value="<?php echo $row['sub_subcat_name'];?>"<?php } ?> class="span4 m-wrap"> 
													    </div>
												</div>
                          					<?php }}else {?>
                          					<div class="control-group">
													<label class="control-label">Sub_Subcategory ID</label>
													    <div class="controls">
															<input type="text" name="sub_subcat_id" id="sub_subcat_id" <?php if(!(isset($error))){ ?>value="<?php echo $sub_subcategory_id;?>"<?php }?> class="span4 m-wrap"> 
													    </div>
												</div>
												<div class="control-group">
													<label class="control-label">Sub_Subcategory Name</label>
													    <div class="controls">
															<input type="text" name="sub_subcat_name" id="sub_subcat_name" <?php if($type=='view'){?>disabled<?php }?> required data-validation-required-message="Please Fill Data" class="span4 m-wrap"> 
													    </div>
												</div>
												<?php } ?>
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