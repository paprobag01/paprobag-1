
<!-- BEGIN PAGE --> 
 <script type="text/javascript" src="http://code.jquery.com/jquery.js"></script>
											<script type="text/javascript">
											 function getmaterial()
										{										
											  var filters = $('#material_value').val();
											  
												console.log(filters);
												$.ajax({   
												   url: "<?php echo base_url()?>cms/getSubCategories/material_dropdown",
													async: false,
													type: "POST", 
													data: "filters="+filters,
													dataType: "html",
													
													success: function(data) {
														var dt=data.split("|");
														
														$("#output").fadeIn();
														$('#output').html(data);
														
														
													}
												})
								  
									 
								  }
												
											</script>
											
											</script>
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
									 $('#filters').on('click', function() {
										 
											  var filters = $('#prod_sub_categories').val();
											  var filters1 = $('#sec_id').val();
											  var filters2 = $('#sub_categories').val();
									
									$.ajax({   
											   url: "<?php echo base_url()?>cms/getSubCategories/material_name",
												async: false,
												type: "POST", 
												data: {'filters':filters,'filters1':filters1,'filters2':filters2},
												dataType: "html",
										
												success: function(data) 
												{
													var dt=data.split("|");
													
																	
																	if(dt[0]!='<label class="control-label">Select Material</label><div class="controls" id="material_id"><select name="material_value" onchange="getmaterial()"  id="material_value"></select></div>')
																{
																	$('#material_drop').fadeIn();
																	$('#material_drop').html(dt[0]);
																	
																	
																
																}
																else{
																	$('#material_drop').fadeIn();
																	$('#material_drop').html('<div class="controls">Material is not found under this Category</div>');
																}
																
													
												}
										});
									 });
									 $('#filters').on('click', function() {
										 
											  var filters = $('#prod_sub_categories').val();
											  var filters1 = $('#sec_id').val();
											  var filters2 = $('#sub_categories').val();
									
									$.ajax({   
											   url: "<?php echo base_url()?>cms/getSubCategories/style_name",
												async: false,
												type: "POST", 
												data: {'filters':filters,'filters1':filters1,'filters2':filters2},
												dataType: "html",
										
												success: function(data) 
												{
													var dt=data.split("|");
													
																	
																	if(dt[0]!='<label class="control-label">Select Style</label><div class="controls" id="style_id"><select name="style_id" onchange="getmaterial()"  id="style_id"></select></div>')
																{
																	$('#style_drop').fadeIn();
																	$('#style_drop').html(dt[0]);
																	
																	
																
																}
																else{
																	$('#style_drop').fadeIn();
																	$('#style_drop').html('<div class="controls">Material is not found under this Category</div>');
																}
																
													
												}
										});
									 });
									$('#filters').on('click', function() {
										 
											  var filters = $('#prod_sub_categories').val();
											  var filters1 = $('#sec_id').val();
											  var filters2 = $('#sub_categories').val();
									
									$.ajax({   
											   url: "<?php echo base_url()?>cms/getSubCategories/subtype_subcategory",
												async: false,
												type: "POST", 
												data: {'filters':filters,'filters1':filters1,'filters2':filters2},
												dataType: "html",
										
												success: function(data) 
												{
													var dt=data.split("|");
													
																	
																	if(dt[0]!='<label class="control-label">Select Sub_Subcat Type</label><div class="controls" id="material_id"><select name="sub_subcat_id"  id="sub_subcat_id"></select></div>')
																{
																	$('#subcat_type').fadeIn();
																	$('#subcat_type').html(dt[0]);
																	
																	
																
																}
																else{
																	$('#subcat_type').fadeIn();
																	$('#subcat_type').html('<div class="controls">Sub_Subcategory Type is not found under this Subcategory</div>');
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
									
											  
											  <script type="text/javascript">
		$(document).ready(function(){

			$("#add_material_filter").click(function(){

				document.location="<?php echo base_url()?>cms/filters/add_filter";
			});
			
			$("#add_GSM_filter").click(function(){

				document.location="<?php echo base_url()?>cms/filters/add_filter";
			});
			
			$("#add_size_filter").click(function(){

				document.location="<?php echo base_url()?>cms/filters/add_filter";
			});
			
			$("#add_style_filter").click(function(){

				document.location="<?php echo base_url()?>cms/filters/add_filter";
			});
			
			$("#add_handle_filter").click(function(){

				document.location="<?php echo base_url()?>cms/filters/add_filter";
			});
			
			$("#add_print_filter").click(function(){

				document.location="<?php echo base_url()?>cms/filters/add_filter";
			});
			
			$("#add_printclr_filter").click(function(){

				document.location="<?php echo base_url()?>cms/filters/add_filter";
			});
			
			$("#add_lam_filter").click(function(){

				document.location="<?php echo base_url()?>cms/filters/add_filter";
			});
			
			$("#add_splwrk_filter").click(function(){

				document.location="<?php echo base_url()?>cms/filters/add_filter";
			});
			
			
		});
	</script>
      <div class="page-content"> 
         <!-- BEGIN PAGE CONTAINER-->
         <div class="container-fluid">
            <!-- BEGIN PAGE HEADER-->   
            <div class="row-fluid">
               <div class="span12"> 
                  <h3 class="page-title">
                     Create Filters
                  </h3> 
				  <!-- <p style="text-align:right"><button type="button" id="add_new" class="btn blue">View Subcategory Details</button></p> -->	
               </div>
            </div>
            <!-- END PAGE HEADER-->
            <!-- BEGIN PAGE CONTENT-->
            <div class="row-fluid">
               <div class="span12">
                  <!-- BEGIN SAMPLE FORM PORTLET-->   
				<p style="text-align:right"><form  class="form-horizontal" method="post" enctype="multipart/form-data" /><input value="Add Material Details" name="add_material_filter" type="submit" id="add_material_filter" class="btn blue">&nbsp;&nbsp;&nbsp;<input value="Add GSM Details" name="add_GSM_filter" type="submit" id="add_GSM_filter" class="btn blue">&nbsp;&nbsp;&nbsp;<input type="submit" name="add_size_filter" value="Add Size Details" id="add_size_filter" class="btn blue">&nbsp;&nbsp;&nbsp;<input type="submit" name="add_style_filter" value="Add Style Details" id="add_style_filter" class="btn blue">&nbsp;&nbsp;&nbsp;<input type="submit" name="add_handle_filter" id="add_handle_filter" value="Add Handle Details" class="btn blue">&nbsp;&nbsp;&nbsp;<input type="submit" name="add_print_filter" id="add_print_filter" value="Add Print Details" class="btn blue">&nbsp;&nbsp;&nbsp;<input name="add_printclr_filter" type="submit" id="add_printclr_filter" value="Add PrintColor Details" class="btn blue">&nbsp;&nbsp;&nbsp;</p><p><input type="submit" name="add_lam_filter" id="add_lam_filter" value="Add Lamination Details" class="btn blue">&nbsp;&nbsp;&nbsp;<input type="submit" name="add_splwrk_filter" id="add_splwrk_filter" value="Add SpecialWork Details" class="btn blue"></form></p>	
                  <div class="portlet box blue">
                     <div class="portlet-title">
                        <h4><i class="icon-reorder"></i>Add Filter details</h4>
                        <div class="tools">
                           <a href="javascript:;" class="collapse"></a> 
                           <a href="javascript:;" class="remove"></a>
                        </div>
                     </div>
                     <div class="portlet-body form">
                        <!-- BEGIN FORM-->
						
                     
						<?php if(isset($_POST['add_style_filter'])){?>
							<form action="<?php echo base_url()?>cms/Filters/save_style" class="form-horizontal" method="post" enctype="multipart/form-data" />
							
							<input type="hidden" name="filter_id" value="<?php echo $filter_id;?>"/>
						
							<input type="hidden" name="created_on" value="<?php echo date('d-m-Y')?>"/>
						   <!-- <div class="control-group">
                              <label class="control-label">Image :</label>
                              <div class="controls">
                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                    <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                       <?php if($air_image!=""){?>
										<img src="<?php echo base_url().$air_image;?>" /> 
										<?php } else {?>
									   <img src="<?php echo base_url()?>assets/img/noimage.gif" alt="" />
									   <?php }?>
									   <input type="hidden" value="<?php echo $air_image; ?>" name="img_url">	
                                    </div>
                                    <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                    <div>
                                       <span class="btn btn-file"><span class="fileupload-new">Select image</span>
                                       <span class="fileupload-exists">Change</span>
                                       <input type="file" name="fileinput" <?php if($type=='view'){?>disabled<?php }?> class="default" /></span>
                                       <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
                                    </div>
									
                                 </div> 
                              </div>
                           </div> 
						    <!-- <div class="control-group">
                              <label class="control-label">Date</label>
                              <div class="controls">
                                 <input type="text" <?php if($type=='view'){?>disabled<?php }?>  name="paper_date" id="paper_date" class="span4  m-wrap" value="<?php 
								 if($paper_date!='')
								 {
									echo date("d/m/Y",strtotime($paper_date)); 
								}?>" /> 
                              </div>
                           </div>-->	 
						    <div class="control-group">
                              <label class="control-label">Sections</label>
                              <div class="controls">
                                <!-- <textarea  name="details"  id="ai" class="span12 ckeditor m-wrap" cols="30" rows="10">  </textarea> -->
									<select name="sec_id" id="sec_id" onchange="getFilters(this.value)" <?php if($type=='view'){?>disabled<?php }?>>
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
											
											
											<div class="control-group" name="filter_id" id="output" style="display:none;">
											
											</div>
											
						   <div class="control-group">
                              <label class="control-label">Add Style Details</label>
                              <div class="controls">
                                <!-- <textarea  name="details"  id="ai" class="span12 ckeditor m-wrap" cols="30" rows="10">  </textarea> -->
									<input type="hidden" name="filter_id" value="<?php echo $filter_id;?>"/>
								  <input type="text" <?php if($type=='view'){?>disabled<?php }?> name="style" id="style" value="<?php echo $style?>" class="span4  m-wrap" /> 
                              </div>
                           </div>
						   
						   
						   
						   
						  <?php if($type!='view'){ ?>
                           <div class="form-actions">
                           <button type="submit" class="btn blue">Save</button>
                              <button type="button" class="cancel btn">Cancel</button>
                           </div>
						   <?php }?>
                        </form>
						<?php }else if(isset($_POST['add_GSM_filter'])){?>
						<form action="<?php echo base_url()?>cms/Filters/save_GSM" class="form-horizontal" method="post" enctype="multipart/form-data" />
							<input type="hidden" name="filter_id" value="<?php echo $filter_id;?>"/>
							<input type="hidden" name="created_on" value="<?php echo date('d-m-Y')?>"/>
						   <!-- <div class="control-group">
                              <label class="control-label">Image :</label>
                              <div class="controls">
                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                    <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                       <?php if($air_image!=""){?>
										<img src="<?php echo base_url().$air_image;?>" /> 
										<?php } else {?>
									   <img src="<?php echo base_url()?>assets/img/noimage.gif" alt="" />
									   <?php }?>
									   <input type="hidden" value="<?php echo $air_image; ?>" name="img_url">	
                                    </div>
                                    <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                    <div>
                                       <span class="btn btn-file"><span class="fileupload-new">Select image</span>
                                       <span class="fileupload-exists">Change</span>
                                       <input type="file" name="fileinput" <?php if($type=='view'){?>disabled<?php }?> class="default" /></span>
                                       <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
                                    </div>
									
                                 </div> 
                              </div>
                           </div> 
						    <!-- <div class="control-group">
                              <label class="control-label">Date</label>
                              <div class="controls">
                                 <input type="text" <?php if($type=='view'){?>disabled<?php }?>  name="paper_date" id="paper_date" class="span4  m-wrap" value="<?php 
								 if($paper_date!='')
								 {
									echo date("d/m/Y",strtotime($paper_date)); 
								}?>" /> 
                              </div>
                           </div>-->	 
						    <div class="control-group">
                              <label class="control-label">Sections</label>
                              <div class="controls">
                                <!-- <textarea  name="details"  id="ai" class="span12 ckeditor m-wrap" cols="30" rows="10">  </textarea> -->
									<select name="sec_id" id="sec_id" onchange="getFilters(this.value)" <?php if($type=='view'){?>disabled<?php }?>>
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
											<div class="control-group" name="filter_id" id="output" style="display:none;">
											
											</div>
												<div class="control-group" name="material_drop" id="material_drop" style="display:none;">
											
											</div>
										
						   <div class="control-group">
                              <label class="control-label">Add GSM Details</label>
                              <div class="controls">
                                <!-- <textarea  name="details"  id="ai" class="span12 ckeditor m-wrap" cols="30" rows="10">  </textarea> -->
									<input type="hidden" name="filter_id" value="<?php echo $filter_id;?>"/>
								  <input type="text" <?php if($type=='view'){?>disabled<?php }?> name="GSM_data" id="GSM_data" value="<?php echo $GSM_name?>" class="span4  m-wrap" /> 
                              </div>
                           </div>
                           
						   
						  <?php if($type!='view'){ ?>
                           <div class="form-actions">
                           <button type="submit" class="btn blue">Save</button>
                              <button type="button" class="cancel btn">Cancel</button>
                           </div>
						   <?php }?>
                        </form>
						<?php }else if(isset($_POST['add_size_filter'])){?>
							<form action="<?php echo base_url()?>cms/Filters/save_size/" class="form-horizontal" method="post" enctype="multipart/form-data" />
							<input type="hidden" name="filter_id" value="<?php echo $filter_id;?>"/>
							<input type="hidden" name="created_on" value="<?php echo date('d-m-Y')?>"/>
						   <!-- <div class="control-group">
                              <label class="control-label">Image :</label>
                              <div class="controls">
                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                    <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                       <?php if($air_image!=""){?>
										<img src="<?php echo base_url().$air_image;?>" /> 
										<?php } else {?>
									   <img src="<?php echo base_url()?>assets/img/noimage.gif" alt="" />
									   <?php }?>
									   <input type="hidden" value="<?php echo $air_image; ?>" name="img_url">	
                                    </div>
                                    <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                    <div>
                                       <span class="btn btn-file"><span class="fileupload-new">Select image</span>
                                       <span class="fileupload-exists">Change</span>
                                       <input type="file" name="fileinput" <?php if($type=='view'){?>disabled<?php }?> class="default" /></span>
                                       <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
                                    </div>
									
                                 </div> 
                              </div>
                           </div> 
						    <!-- <div class="control-group">
                              <label class="control-label">Date</label>
                              <div class="controls">
                                 <input type="text" <?php if($type=='view'){?>disabled<?php }?>  name="paper_date" id="paper_date" class="span4  m-wrap" value="<?php 
								 if($paper_date!='')
								 {
									echo date("d/m/Y",strtotime($paper_date)); 
								}?>" /> 
                              </div>
                           </div>-->	 
						    <div class="control-group">
                              <label class="control-label">Sections</label>
                              <div class="controls">
                                <!-- <textarea  name="details"  id="ai" class="span12 ckeditor m-wrap" cols="30" rows="10">  </textarea> -->
									<select name="sec_id" id="sec_id" onchange="getFilters(this.value)" <?php if($type=='view'){?>disabled<?php }?>>
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
											<div class="control-group" name="filter_id" id="output" style="display:none;">
											
											</div>
											<div class="control-group" name="style_drop" id="style_drop" style="display:none;">
											
											</div>
											
											
						   <div class="control-group">
                              <label class="control-label">Add Size Details</label>
                              <div class="controls">
                                <!-- <textarea  name="details"  id="ai" class="span12 ckeditor m-wrap" cols="30" rows="10">  </textarea> -->
									<input type="hidden" name="filter_id" value="<?php echo $filter_id;?>"/>
								  <input type="text" <?php if($type=='view'){?>disabled<?php }?> name="size" id="size" value="<?php echo $size?>" class="span4  m-wrap" /> 
                              </div>
                           </div>
						  <?php if($type!='view'){ ?>
                           <div class="form-actions">
                           <button type="submit" class="btn blue">Save</button>
                              <button type="button" class="cancel btn">Cancel</button>
                           </div>
						   <?php }?>
                        </form>
						<?php }else if(isset($_POST['add_handle_filter'])){?>
						<form action="<?php echo base_url()?>cms/Filters/save_handle" class="form-horizontal" method="post" enctype="multipart/form-data" />
							<input type="hidden" name="filter_id" value="<?php echo $filter_id;?>"/>
							<input type="hidden" name="created_on" value="<?php echo date('d-m-Y')?>"/>
						  
						    <div class="control-group">
                              <label class="control-label">Sections</label>
                              <div class="controls">
                                <!-- <textarea  name="details"  id="ai" class="span12 ckeditor m-wrap" cols="30" rows="10">  </textarea> -->
									<select name="sec_id" id="sec_id" onchange="getFilters(this.value)" <?php if($type=='view'){?>disabled<?php }?>>
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
											<div class="control-group" name="filter_id" id="output" style="display:none;">
											
											</div>
											<div class="control-group" name="material_drop" id="material_drop" style="display:none;">
											
											</div>
											
						   <div class="control-group">
                              <label class="control-label">Add Handle Details</label>
                              <div class="controls">
                                <!-- <textarea  name="details"  id="ai" class="span12 ckeditor m-wrap" cols="30" rows="10">  </textarea> -->
									<input type="hidden" name="filter_id" value="<?php echo $filter_id;?>"/>
								  <input type="text" <?php if($type=='view'){?>disabled<?php }?> name="handle" id="handle" value="<?php echo $handle?>" class="span4  m-wrap" /> 
                              </div>
                           </div>
						   
						   
						   
						   
						  <?php if($type!='view'){ ?>
                           <div class="form-actions">
                           <button type="submit" class="btn blue">Save</button>
                              <button type="button" class="cancel btn">Cancel</button>
                           </div>
						   <?php }?>
                        </form>
						<?php }else if(isset($_POST['add_print_filter'])){?>
						<form action="<?php echo base_url()?>cms/Filters/save_print" class="form-horizontal" method="post" enctype="multipart/form-data" />
							<input type="hidden" name="filter_id" value="<?php echo $filter_id;?>"/>
							<input type="hidden" name="created_on" value="<?php echo date('d-m-Y')?>"/>						   
						    <div class="control-group">
                              <label class="control-label">Sections</label>
                              <div class="controls">
                                <!-- <textarea  name="details"  id="ai" class="span12 ckeditor m-wrap" cols="30" rows="10">  </textarea> -->
									<select name="sec_id" id="sec_id" onchange="getFilters(this.value)" <?php if($type=='view'){?>disabled<?php }?>>
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
											<div class="control-group" name="filter_id" id="output" style="display:none;">
											
											</div>
											<div class="control-group" name="material_drop" id="material_drop" style="display:none;">
											
											</div>
											
						   <div class="control-group">
                              <label class="control-label">Add Print Details</label>
                              <div class="controls">
                                <!-- <textarea  name="details"  id="ai" class="span12 ckeditor m-wrap" cols="30" rows="10">  </textarea> -->
									<input type="hidden" name="filter_id" value="<?php echo $filter_id;?>"/>
								  <input type="text" <?php if($type=='view'){?>disabled<?php }?> name="print" id="print" value="<?php echo $print?>" class="span4  m-wrap" /> 
                              </div>
                           </div>
						   
						   
						   
						   
						  <?php if($type!='view'){ ?>
                           <div class="form-actions">
                           <button type="submit" class="btn blue">Save</button>
                              <button type="button" class="cancel btn">Cancel</button>
                           </div>
						   <?php }?>
                        </form>
						<?php }else if(isset($_POST['add_printclr_filter'])){?>
							<form action="<?php echo base_url()?>cms/Filters/save_printclr" class="form-horizontal" method="post" enctype="multipart/form-data" />
							<input type="hidden" name="filter_id" value="<?php echo $filter_id;?>"/>
							<input type="hidden" name="created_on" value="<?php echo date('d-m-Y')?>"/>
						   <!-- <div class="control-group">
                              <label class="control-label">Image :</label>
                              <div class="controls">
                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                    <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                       <?php if($air_image!=""){?>
										<img src="<?php echo base_url().$air_image;?>" /> 
										<?php } else {?>
									   <img src="<?php echo base_url()?>assets/img/noimage.gif" alt="" />
									   <?php }?>
									   <input type="hidden" value="<?php echo $air_image; ?>" name="img_url">	
                                    </div>
                                    <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                    <div>
                                       <span class="btn btn-file"><span class="fileupload-new">Select image</span>
                                       <span class="fileupload-exists">Change</span>
                                       <input type="file" name="fileinput" <?php if($type=='view'){?>disabled<?php }?> class="default" /></span>
                                       <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
                                    </div>
									
                                 </div> 
                              </div>
                           </div> 
						    <!-- <div class="control-group">
                              <label class="control-label">Date</label>
                              <div class="controls">
                                 <input type="text" <?php if($type=='view'){?>disabled<?php }?>  name="paper_date" id="paper_date" class="span4  m-wrap" value="<?php 
								 if($paper_date!='')
								 {
									echo date("d/m/Y",strtotime($paper_date)); 
								}?>" /> 
                              </div>
                           </div>-->	 
						    <div class="control-group">
                              <label class="control-label">Sections</label>
                              <div class="controls">
                                <!-- <textarea  name="details"  id="ai" class="span12 ckeditor m-wrap" cols="30" rows="10">  </textarea> -->
									<select name="sec_id" id="sec_id" onchange="getFilters(this.value)" <?php if($type=='view'){?>disabled<?php }?>>
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
											<div class="control-group" name="filter_id" id="output" style="display:none;">
											
											</div>
											<div class="control-group" name="material_drop" id="material_drop" style="display:none;">
											
											</div>
									
						   <div class="control-group">
                              <label class="control-label">Add Print Color</label>
                              <div class="controls">
                                <!-- <textarea  name="details"  id="ai" class="span12 ckeditor m-wrap" cols="30" rows="10">  </textarea> -->
									<input type="hidden" name="filter_id" value="<?php echo $filter_id;?>"/>
								  <input type="text" <?php if($type=='view'){?>disabled<?php }?> name="print_color" id="print_color" value="<?php echo $print_color?>" class="span4  m-wrap" /> 
                              </div>
                           </div>
						   
						   
						   
						   
						  <?php if($type!='view'){ ?>
                           <div class="form-actions">
                           <button type="submit" class="btn blue">Save</button>
                              <button type="button" class="cancel btn">Cancel</button>
                           </div>
						   <?php }?>
                        </form>
						<?php }else if(isset($_POST['add_lam_filter'])){?>
							 <form action="<?php echo base_url()?>cms/Filters/save_laminatn" class="form-horizontal" method="post" enctype="multipart/form-data" />
							<input type="hidden" name="filter_id" value="<?php echo $filter_id;?>"/>
							<input type="hidden" name="created_on" value="<?php echo date('d-m-Y')?>"/>
						   <!-- <div class="control-group">
                              <label class="control-label">Image :</label>
                              <div class="controls">
                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                    <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                       <?php if($air_image!=""){?>
										<img src="<?php echo base_url().$air_image;?>" /> 
										<?php } else {?>
									   <img src="<?php echo base_url()?>assets/img/noimage.gif" alt="" />
									   <?php }?>
									   <input type="hidden" value="<?php echo $air_image; ?>" name="img_url">	
                                    </div>
                                    <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                    <div>
                                       <span class="btn btn-file"><span class="fileupload-new">Select image</span>
                                       <span class="fileupload-exists">Change</span>
                                       <input type="file" name="fileinput" <?php if($type=='view'){?>disabled<?php }?> class="default" /></span>
                                       <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
                                    </div>
									
                                 </div> 
                              </div>
                           </div> 
						    <!-- <div class="control-group">
                              <label class="control-label">Date</label>
                              <div class="controls">
                                 <input type="text" <?php if($type=='view'){?>disabled<?php }?>  name="paper_date" id="paper_date" class="span4  m-wrap" value="<?php 
								 if($paper_date!='')
								 {
									echo date("d/m/Y",strtotime($paper_date)); 
								}?>" /> 
                              </div>
                           </div>-->	 
						    <div class="control-group">
                              <label class="control-label">Sections</label>
                              <div class="controls">
                                <!-- <textarea  name="details"  id="ai" class="span12 ckeditor m-wrap" cols="30" rows="10">  </textarea> -->
									<select name="sec_id" id="sec_id" onchange="getFilters(this.value)" <?php if($type=='view'){?>disabled<?php }?>>
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
											<div class="control-group" name="filter_id" id="output" style="display:none;">
											
											</div>
											<div class="control-group" name="material_drop" id="material_drop" style="display:none;">
											
											</div>
										
						   <div class="control-group">
                              <label class="control-label">Add Lamination Details</label>
                              <div class="controls">
                                <!-- <textarea  name="details"  id="ai" class="span12 ckeditor m-wrap" cols="30" rows="10">  </textarea> -->
									<input type="hidden" name="filter_id" value="<?php echo $filter_id;?>"/>
								  <input type="text" <?php if($type=='view'){?>disabled<?php }?> name="lamination" id="lamination" value="<?php echo $lamination?>" class="span4  m-wrap" /> 
                              </div>
                           </div>
						   
						   
						   
						   
						  <?php if($type!='view'){ ?>
                           <div class="form-actions">
                           <button type="submit" class="btn blue">Save</button>
                              <button type="button" class="cancel btn">Cancel</button>
                           </div>
						   <?php }?>
                        </form>
						<?php }else if(isset($_POST['add_splwrk_filter'])){?>
							<form action="<?php echo base_url()?>cms/Filters/save_splwrk" class="form-horizontal" method="post" enctype="multipart/form-data" />
							<input type="hidden" name="filter_id" value="<?php echo $filter_id;?>"/>
							<input type="hidden" name="created_on" value="<?php echo date('d-m-Y')?>"/>
						   <!-- <div class="control-group">
                              <label class="control-label">Image :</label>
                              <div class="controls">
                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                    <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                       <?php if($air_image!=""){?>
										<img src="<?php echo base_url().$air_image;?>" /> 
										<?php } else {?>
									   <img src="<?php echo base_url()?>assets/img/noimage.gif" alt="" />
									   <?php }?>
									   <input type="hidden" value="<?php echo $air_image; ?>" name="img_url">	
                                    </div>
                                    <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                    <div>
                                       <span class="btn btn-file"><span class="fileupload-new">Select image</span>
                                       <span class="fileupload-exists">Change</span>
                                       <input type="file" name="fileinput" <?php if($type=='view'){?>disabled<?php }?> class="default" /></span>
                                       <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
                                    </div>
									
                                 </div> 
                              </div>
                           </div> 
						    <!-- <div class="control-group">
                              <label class="control-label">Date</label>
                              <div class="controls">
                                 <input type="text" <?php if($type=='view'){?>disabled<?php }?>  name="paper_date" id="paper_date" class="span4  m-wrap" value="<?php 
								 if($paper_date!='')
								 {
									echo date("d/m/Y",strtotime($paper_date)); 
								}?>" /> 
                              </div>
                           </div>-->	 
						    <div class="control-group">
                              <label class="control-label">Sections</label>
                              <div class="controls">
                                <!-- <textarea  name="details"  id="ai" class="span12 ckeditor m-wrap" cols="30" rows="10">  </textarea> -->
									<select name="sec_id" id="sec_id" onchange="getFilters(this.value)" <?php if($type=='view'){?>disabled<?php }?>>
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
											<div class="control-group" name="filter_id" id="output" style="display:none;">
											
											</div>
											<div class="control-group" name="material_id" id="material_id"  style="display:none;">
											
											</div>
											
											
									
						   <div class="control-group">
                              <label class="control-label">Add Special Work</label>
                              <div class="controls">
                                <!-- <textarea  name="details"  id="ai" class="span12 ckeditor m-wrap" cols="30" rows="10">  </textarea> -->
									<input type="hidden" name="filter_id" value="<?php echo $filter_id;?>"/>
								  <input type="text" <?php if($type=='view'){?>disabled<?php }?> name="special_wrk" id="special_wrk" value="<?php echo $special_wrk?>" class="span4  m-wrap" /> 
                              </div>
                           </div>
						   
						   
						   
						   
						  <?php if($type!='view'){ ?>
                           <div class="form-actions">
                           <button type="submit" class="btn blue">Save</button>
                              <button type="button" class="cancel btn">Cancel</button>
                           </div>
						   <?php }?>
                        </form>
						<?php }else{?>
						   <form action="<?php echo base_url()?>cms/Filters/save_material" class="form-horizontal" method="post" enctype="multipart/form-data" />
							<input type="hidden" name="filter_id" value="<?php echo $filter_id;?>"/>
							<input type="hidden" name="created_on" value="<?php echo date('d-m-Y')?>"/>
						   <!-- <div class="control-group">
                              <label class="control-label">Image :</label>
                              <div class="controls">
                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                    <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                       <?php if($air_image!=""){?>
										<img src="<?php echo base_url().$air_image;?>" /> 
										<?php } else {?>
									   <img src="<?php echo base_url()?>assets/img/noimage.gif" alt="" />
									   <?php }?>
									   <input type="hidden" value="<?php echo $air_image; ?>" name="img_url">	
                                    </div>
                                    <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                    <div>
                                       <span class="btn btn-file"><span class="fileupload-new">Select image</span>
                                       <span class="fileupload-exists">Change</span>
                                       <input type="file" name="fileinput" <?php if($type=='view'){?>disabled<?php }?> class="default" /></span>
                                       <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
                                    </div>
									
                                 </div> 
                              </div>
                           </div> 
						    <!-- <div class="control-group">
                              <label class="control-label">Date</label>
                              <div class="controls">
                                 <input type="text" <?php if($type=='view'){?>disabled<?php }?>  name="paper_date" id="paper_date" class="span4  m-wrap" value="<?php 
								 if($paper_date!='')
								 {
									echo date("d/m/Y",strtotime($paper_date)); 
								}?>" /> 
                              </div>
                           </div>-->	 
						    <div class="control-group">
                              <label class="control-label">Sections</label>
                              <div class="controls">
                                <!-- <textarea  name="details"  id="ai" class="span12 ckeditor m-wrap" cols="30" rows="10">  </textarea> -->
									<select name="sec_id" id="sec_id" onchange="getFilters(this.value)" <?php if($type=='view'){?>disabled<?php }?>>
										<option value="">Select</option>
										<?php foreach($sec_data as $row){ ?>
										<option value="<?php echo $row['section_id']; ?>"><?php echo $row['section_name']; ?></option>
										<?php }?>
									</select>
								  
                              </div>
                           </div>
						   
											  <div class="control-group" id="subcategories" style="display:none;">
											  
											</div>
											
											<div class="control-group"  id="filters" style="display:none;">
											  
											</div>
											<div class="control-group"  id="subcat_type" style="display:none;">
											  
											</div>
											
						   <div class="control-group">
                              <label class="control-label">Add Material</label>
                              <div class="controls">
                                <!-- <textarea  name="details"  id="ai" class="span12 ckeditor m-wrap" cols="30" rows="10">  </textarea> -->
									<input type="hidden" name="filter_id" value="<?php echo $filter_id;?>"/>
								  <input type="text" <?php if($type=='view'){?>disabled<?php }?> name="material_name" id="material_name" value="<?php echo $material_name?>" class="span4  m-wrap" /> 
                              </div>
                           </div>
						   
						  <div class="control-group">
                              <label class="control-label">Material ID</label>
                              <div class="controls">
                               <input type="text" name="material_id" <?php if($type=='view'){?>disabled value="<?php echo $material_id;?>"<?php }?> <?php if($type=='view'||$type=='edit'){?>value="<?php echo $material_id;?>"<?php }else{?><?php if(!(isset($error))){ ?>value="<?php echo $mate_id;?>"<?php } }?>/>
                              </div>
                           </div>
						   
						   
						  <?php if($type!='view'){ ?>
                           <div class="form-actions">
                           <button type="submit" class="btn blue">Save</button>
                              <button type="button" class="cancel btn">Cancel</button>
                           </div>
						   <?php }?>
                        </form>
						<?php }?>
                        <!-- END FORM-->           
                     </div>
                  </div>
                  <!-- END SAMPLE FORM PORTLET-->
				  
				  
               </div>
            </div>
			<script type="text/javascript">
			/* $(document).ready(function(){
				 $("#add_new").click(function(){

				document.location="<?php echo base_url()?>cms/subcategories";
				
			}); */
			
				$(".cancel").click(function()
					{

					document.location="<?php echo base_url()?>cms/home_page/home_page_view";
				});             

				
		  });	
		  </script>	
			</div>
            </div>
			</div>