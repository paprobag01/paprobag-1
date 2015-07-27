<div class="page-content">
		<div class="container-fluid">
		<div class="row-fluid">
			<div class="span12">
				<!-- BEGIN STYLE CUSTOMIZER--> 
				<h3 class="page-title">
					Add Product Details<small></small>
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
									 General
								</a>
							</li>
							<li>
								<a href="#tab_1" data-toggle="tab">
									 Price
								</a>
							</li>
							<li>
								<a href="#tab_2" data-toggle="tab">
									 Images
								</a>
							</li>
							<li>
								<a href="#tab_3" data-toggle="tab">
									 Filter Details
								</a>
							</li>
						</ul>
						<form action="<?php echo base_url()?>cms/productList/save_products" class="" method="post" enctype="multipart/form-data" />
						<div class="tab-content">
						
							<div class="tab-pane active" id="tab_0">
								<div class="portlet box blue">
									<div class="portlet-title">
										<div class="caption">
											<i class="fa fa-reorder"></i>Product Details										
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
										<div class="control-group"><span style="color:#FE544D;font-size: 15px;"><?php  echo validation_errors();?></span>
                     					</div>
										<input type="hidden" <?php if(!(isset($error))){?>value="<?php echo $prod_id;?>"<?php } ?> name="prod_id"/>
										<input type="hidden" <?php if(!(isset($error))){?>value="<?php echo $created_on;?>"<?php }?> name="created_on" value="<?php echo date("Y-m-d");?>"/>
											<div class="form-body">
												<div class="control-group">
													<label class="control-label">Product Name</label>
													    <div class="controls">
															<input type="text" name="prod_name" id="prod_name" required data-validation-required-message="Please Fill Data" <?php if($type=='view'){?>disabled<?php }?> <?php if(!(isset($error))){?>value="<?php echo $prod_name;?>"<?php } ?> class="span4 m-wrap"> 
													    </div>
												</div>
												<div class="control-group">
												  <label class="control-label">Meta Title</label>
													  <div class="controls">
														<textarea name="prod_meta_title" id="prod_meta_title" <?php if($type=='view'){?>disabled<?php }?> class="span12 m-wrap"><?php if(!(isset($error))){echo $prod_meta_title;}?></textarea>
													  </div>
												</div>
												<div class="control-group">
												  <label class="control-label">Meta Keywords</label>
													  <div class="controls">
														<textarea name="prod_meta_keyword" id="prod_meta_keyword" <?php if($type=='view'){?>disabled<?php }?> class="span12 m-wrap"><?php if(!(isset($error))){ echo $prod_meta_keyword;}?></textarea>
													  </div>
												</div>
												<div class="control-group">
												  <label class="control-label">Meta Description</label>
												  <div class="controls">
													 <textarea name="prod_meta_description" id="prod_meta_description" <?php if($type=='view'){?>disabled<?php }?>  class="span12 m-wrap"><?php if(!(isset($error))){ echo $prod_meta_description;}?></textarea>
												   </div>
											   </div>
											   
											 <div class="control-group">
												  <label class="control-label">Product Description</label>
												  <div class="controls">
													 <textarea  name="prod_description" id="prod_description" required data-validation-required-message="Please Fill Data" <?php if($type=='view'){?>disabled<?php }?>  class="span12 ckeditor  m-wrap" cols="30" rows="10"><?php if(!(isset($error))){echo $prod_description;}?> </textarea> 
													 
												  </div>
											</div>
											<?php 
											
											?>
											
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

                           <script type="text/javascript">

                           function getsizedata()
										{
								var style_id = $('#style_id').val();

								var data = {
									'style_id': style_id
								};
								console.log(data);
								$.ajax({
						            type: 'POST',
							        dataType: 'json',
							        ContentType: "application/json",
							        url:"<?php echo base_url();?>cms/getSubCategories/sizedropdown",
							        data: data,
							        success: function(data) { 
							        	
							           // $('#size_details').html(data);
							            $("#size_details").fadeIn();
										$('#size_details').html(data);
							        },
							    });
							}
</script>

						   <script type="text/javascript" src="http://code.jquery.com/jquery.js"></script>
									<script type="text/javascript">
										function getmaterial()
										{										
										  var filters = $('#material_value').val();											 
										  
											console.log(filters);
											$.ajax({   
											   url: "<?php echo base_url()?>cms/getSubCategories/GSM_dropdown",
												async: false,
												type: "POST", 
												data: {"filters":filters},
												dataType: "html",
												
												success: function(data) {
													var dt=data.split("|");
													
													$("#output").fadeIn();
													$('#output').html(data);
													
													
													
												}
											})
								  
								  		}

								  		
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
											if(dt[0]!='<label class="control-label">Category</label><div class="controls" id="prod_sub_categories"><select name="prod_sub_categories" onchange="getFilterVals()" id="prod_sub_categories"></select></div>')
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
													
																if(dt[0]!='<label class="control-label">Subcategory</label><div class="controls" id="sub_categories"><select name="sub_categories"  id="sub_categories"></select></div>')
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
											  
									console.log(prod_sub_categories);
									$.ajax({   
											   url: "<?php echo base_url()?>cms/getSubCategories/material_name",
												async: false,
												type: "POST", 
												data: {'filters':filters,'filters1':filters1,'filters2':filters2},
												dataType: "html",
										
												success: function(data) 
												{
													var dt=data.split("|");
													
																	//$('#material_drop').fadeIn();
																	//$('#material_drop').html(dt[0]);
																	
																	if(dt[0]!='<label class="control-label">Select Material</label><div class="controls" id="material_value"><select name="material_value" onchange="getmaterial()"  id="material_value"></select></div>')
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
											   
											  
						    <?php 
							$section_name="";
							if(isset($section_id))
							{
							  if($section_id!=null or $section_id!="")
							  {
							  $sql=$this->db->query("select * from section where section_id=".$section_id."");
							  $res=$sql->row_array();
							  extract($res);
							  }
							}
						  ?>
						   
											<div class="control-group" id="subcategories" style="display:none;">
											  
											</div>
											
											<div class="control-group" id="filters" style="display:none;">
											  
											</div>
											
											<div class="control-group">
													<label class="control-label">Product Sku</label>
													    <div class="controls">
															<input type="text" name="prod_sku" id="prod_sku" required data-validation-required-message="Please Fill Data" <?php if($type=='view'){?>disabled<?php }?> <?php if(!(isset($error))){?>value="<?php echo $prod_sku;?>"<?php } ?> class="span4 m-wrap"> 
													    </div>
												</div>
												<div class="control-group">
													<label class="control-label">Product Taggings</label>
													    <div class="controls">
															<select name="taggings" required data-validation-required-message="Please Fill Data" <?php if($type=='view'){?>disabled<?php }?>>
															<?php if($taggings!=0){?>
																<option value="<?php echo $taggings;?>"><?php if($taggings==1){echo "New";} if($taggings==2){echo "Premium";}?></option>
																<?php }else{?>
																<option value="0">Select</option>
																<?php } if($taggings!=1){?>
																
																<option value="1">New</option>
																<?php } if($taggings!=2){?>
																<option value="2">Premium</option>
																<?php }?>
															</select> 
													    </div>
												</div>
												<div class="control-group">
													<label class="control-label">Gift Card</label>
													    <div class="controls">
															<select name="prod_gift_card" id="prod_gift_card" required data-validation-required-message="Please Fill Data">
																<option value="0">No</option>
																<option value="1">Yes</option>
															</select>
													    </div>
												</div>
												<div class="control-group">
													<label class="control-label">Product Status</label>
													    <div class="controls">
															<select name="prod_status" id="prod_status" required data-validation-required-message="Please Fill Data">
																<option value="0">Enable</option>
																<option value="1">Disable</option>
															</select>
													    </div>
												</div>
												<div class="control-group">
													<label class="control-label">Product On Home</label>
													    <div class="controls">
															<select name="prod_on_home" id="prod_on_home" required data-validation-required-message="Please Fill Data">
																<option value="1">Yes</option>
																<option value="0">No</option>
															</select>
													    </div>
												</div>
												
							
												<div class="control-group">
												  <label class="control-label">Product Short Description</label>
												  <div class="controls">
													 <textarea name="prod_short_description" id="prod_short_description" required data-validation-required-message="Please Fill Data"  <?php if($type=='view'){?>disabled<?php }?> class="span12   m-wrap"><?php if(!(isset($error))){ echo $prod_short_description; }?></textarea>
												   </div>
											   </div>
											   
<!-- 												url_for_product_details -->
												
											   <div class="control-group">
										  <label class="control-label">Image On Product page:</label>
										  <div class="controls">
											<div class="fileupload fileupload-new" data-provides="fileupload">
												<?php if($type=='edit'){ ?><div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
												   <?php if($image_url!=""){?>
													<img src="<?php echo base_url().$image_url?>" /> 
													<?php } else {?>
												   <img src="<?php echo base_url()?>images/noimage.gif" alt="" />
												   <?php }?>
												   <input type="hidden" value="<?php echo $image_url; ?>" name="img_url">	
												</div><?php } ?> 
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
				
											   
											</div>
											
										
									</div>
								</div>
								
								
							
								
							</div>
							<div class="tab-pane" id="tab_1">
								<div class="portlet box blue">
									<div class="portlet-title">
										<div class="caption">
											<i class="fa fa-reorder"></i>Price Info
										
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
												
												
													<div class="control-group">
													<label class="control-label">MRP</label>
													    <div class="controls">
															<input type="text" name="prod_price" id="prod_price" required data-validation-required-message="Please Fill Data" <?php if($type=='view'){?>disabled<?php }?> <?php if(!(isset($error))){?>value="<?php echo $prod_price;?>"<?php } ?> class="span4 m-wrap"> 
													    </div>
													</div>
													<div class="control-group">
													<label class="control-label">Sell Price</label>
													    <div class="controls">
															<input type="text" name="prod_sell_price" id="prod_sell_price" required data-validation-required-message="Please Fill Data" onfocus="getDiscount()" onblur="getDiscount()" onkeyup="getDiscount()" <?php if($type=='view'){?>disabled<?php }?> <?php if(!(isset($error))){?>value="<?php echo $prod_price;?>"<?php } ?> class="span4 m-wrap"> 
													    </div>
													</div>
													<div class="control-group">
													<label class="control-label">Discount %</label>
													    <div class="controls">
															<input type="text" name="prod_discount" id="prod_discount" required data-validation-required-message="Please Fill Data" <?php if($type=='view'){?>disabled<?php }?> <?php if(!(isset($error))){?>value="<?php echo round($prod_discount, 2);?>"<?php }?> class="span4 m-wrap"> 
													    </div>
													</div>
													<!--/span-->
													<div class="control-group">
													<label class="control-label">Quantity</label>
													    <div class="controls">
															<input type="text" name="prod_qty" id="prod_qty" required data-validation-required-message="Please Fill Data" <?php if($type=='view'){?>disabled<?php }?> <?php if(!(isset($error))){?> value="<?php echo $prod_qty;?>"<?php }?> class="span4 m-wrap"> 
													    </div>
													</div>
													
													<!--/span-->
												<div class="control-group">
													<label class="control-label">Sold By</label>
													    <div class="controls">
															<input type="text" name="sold_by" id="sold_by" <?php if($type=='view'){?>disabled<?php }?> <?php if(!(isset($error))){?>value="<?php echo $sold_by;?>"<?php }?> class="span4 m-wrap"> 
													    </div>
													</div>
													
													<div class="control-group">
													<label class="control-label">Stock</label>
													    <div class="controls">
															<select name="prod_stock" class="span4 m-wrap">
																<option <?php if(!(isset($error))){?>value="<?php echo $prod_stock ?>"<?php }?> >In stock</option>
																<option value="0">In stock</option>
																<option value="1">Out of stock</option>
															</select>
															
														</div>
													</div>
													
													<!--/span-->
													<div class="control-group">
													<label class="control-label">Require Shipping</label>
													    <div class="controls">
															<div class="radio-list">
																<label class="radio-inline">
																<input type="radio" name="require_shipping" id="require_shipping1" value="1" checked>  Yes  </label>
																<label class="radio-inline">
																<input type="radio" name="require_shipping" id="require_shipping2" value="0"> No  </label>
															</div>
													    </div>
													</div>
													<div class="control-group"> 
													<label class="control-label">Shipping Price</label>
													    <div class="controls">
															<input type="text" name="prod_shipping_price" id="prod_shipping_price" required data-validation-required-message="Please Fill Data" <?php if($type=='view'){?>disabled<?php }?> <?php if(!(isset($error))){?>value="<?php echo $prod_shipping_price;?>"<?php } ?> class="span4 m-wrap"> 
													    </div>
													</div>
											</div>
											
										<script type="text/javascript">
				function getDiscount()
				{
					if(isNaN((document.getElementById('prod_price').value*1 - document.getElementById('prod_sell_price').value*1)*100/document.getElementById('prod_price').value*1))
					{
						document.getElementById('prod_discount').value=0;
					}
					else{
					document.getElementById('prod_discount').value=((document.getElementById('prod_price').value*1 - document.getElementById('prod_sell_price').value*1)*100/document.getElementById('prod_price').value*1).toFixed(2);;
					}
				}
				</script>
									</div>
								</div>
							</div>
							<div class="tab-pane " id="tab_2">
								<div class="portlet box blue">
									<div class="portlet-title">
										<div class="caption">
											<i class="fa fa-reorder"></i>Form Sample
										
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
												<h3 class="form-section">Upload Images For Description</h3>
												
												<div class="control-group">
											  <label class="control-label">Image 1:</label>
											  <div class="controls">
													<div class="fileupload fileupload-new" data-provides="fileupload">
														<?php if($type=='edit'){ ?><div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
														   <?php if($image_url1!=""){?>
															<img src="<?php echo base_url().$image_url1?>" /> 
															<?php } else {?>
														   <img src="<?php echo base_url()?>images/noimage.gif" alt="" />
														   <?php }?>
														   <input type="hidden" value="<?php echo $image_url1; ?>" name="img_url1">	
													</div><?php } ?>
													<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
													<div>
													   <span class="btn btn-file"><span class="fileupload-new">Select image</span>
													   <span class="fileupload-exists">Change</span>
													   <input type="file" name="fileinput1" <?php if($type=='view'){?>disabled<?php }?> class="default" /></span>
													   <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
													</div>
													
												</div> 
												</div> 
											</div> 
											 <div class="control-group">
                              <label class="control-label">Image 2:</label>
                              <div class="controls">
                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                    <?php if($type=='edit'){ ?><div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                       <?php if($image_url2!=""){?>
										<img src="<?php echo base_url().$image_url2?>" /> 
										<?php } else {?>
									   <img src="<?php echo base_url()?>images/noimage.gif" alt="" />
									   <?php }?>
									   <input type="hidden" value="<?php echo $image_url2; ?>" name="img_url2">	
                                    </div><?php } ?> 
                                    <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                    <div>
                                       <span class="btn btn-file"><span class="fileupload-new">Select image</span>
                                       <span class="fileupload-exists">Change</span>
                                       <input type="file" name="fileinput2" <?php if($type=='view'){?>disabled<?php }?> class="default" /></span>
                                       <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
                                    </div>
									
                                 </div> 
                              </div>
                           </div> 
						    <div class="control-group">
                              <label class="control-label">Image 3:</label>
                              <div class="controls">
                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                    <?php if($type=='edit'){ ?><div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                       <?php if($image_url3!=""){?>
										<img src="<?php echo base_url().$image_url3?>" /> 
										<?php } else {?>
									   <img src="<?php echo base_url()?>images/noimage.gif" alt="" />
									   <?php }?>
									   <input type="hidden" value="<?php echo $image_url3; ?>" name="img_url3">	
                                    </div><?php } ?> 
                                    <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                    <div>
                                       <span class="btn btn-file"><span class="fileupload-new">Select image</span>
                                       <span class="fileupload-exists">Change</span>
                                       <input type="file" name="fileinput3" <?php if($type=='view'){?>disabled<?php }?> class="default" /></span>
                                       <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
                                    </div>
									
                                 </div> 
                              </div>
                           </div> 
						    <div class="control-group">
                              <label class="control-label">Image 4:</label>
                              <div class="controls">
                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                    <?php if($type=='edit'){ ?><div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                       <?php if($image_url4!=""){?>
										<img src="<?php echo base_url().$image_url4?>" /> 
										<?php } else {?>
									   <img src="<?php echo base_url()?>images/noimage.gif" alt="" />
									   <?php }?>
									   <input type="hidden" value="<?php echo $image_url4; ?>" name="img_url4">	
                                    </div><?php } ?> 
                                    <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                    <div>
                                       <span class="btn btn-file"><span class="fileupload-new">Select image</span>
                                       <span class="fileupload-exists">Change</span>
                                       <input type="file" name="fileinput4" <?php if($type=='view'){?>disabled<?php }?> class="default" /></span>
                                       <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
                                    </div>
									
                                 </div> 
                              </div>
                           </div> 
						   
											</div>
											
											
										
											</div>
									</div>

								</div>
							
							<div class="tab-pane " id="tab_3">
								<div class="portlet box blue">
									<div class="portlet-title">
										<div class="caption">
											<i class="fa fa-reorder"></i>Filter Details
										
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
												
							<div class="control-group" name="material_drop" id="material_drop" style="display:none;">
											
											</div>
						   <div class="control-group" name="filter_id" id="output" style="display:none;">
											
											</div>
						  
						   				 <div class="control-group" name="size_details" id="size_details" style="display:none;">
											
											</div>
                             
											<div class="control-group">
											<div class="controls">
											<?php if($type!='view'){?>
											<button type="submit" class="btn blue">Save</button>
											<button type="button" class="btn default">Cancel</button>
											<?php }?>
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