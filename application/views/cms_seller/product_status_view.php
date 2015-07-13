
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
						</ul>
						<form action="<?php echo base_url()?>cms_seller/productList/save_products" class="" method="post" enctype="multipart/form-data" />
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
										
										<input type="hidden" value="<?php echo $prod_id;?>" name="prod_id"/>
										<input type="hidden" value="<?php echo $created_on;?>" name="created_on" value="<?php echo date('d-m-Y')?>"/>
											<div class="form-body">
											<div class="control-group">
													<label class="control-label">Product ID</label>
													    <div class="controls">
															<input type="text" name="prod_id" id="prod_id" <?php if($type!=='view'){?>disabled<?php }?> value="<?php echo $prod_id;?>" class="span4 m-wrap"> 
													    </div>
												</div>
												<div class="control-group">
													<label class="control-label">Product Name</label>
													    <div class="controls">
															<input type="text" name="prod_name" id="prod_name" <?php if($type!=='view'){?>disabled<?php }?> value="<?php echo $prod_name;?>" class="span4 m-wrap"> 
													    </div>
												</div>
												<div class="control-group">
													<label class="control-label">Section</label>
													
													    <div class="controls">
															<input type="text" name="sec_data" id="sec_data" <?php if($type!=='view'){?>disabled<?php }?> value="<?php echo $prod_name;?>" class="span4 m-wrap"> 
													    </div>
													 
												</div>
												<div class="control-group">
													<label class="control-label">Category</label>
													    <div class="controls">
															<input type="text" name="cat_data" id="cat_data" <?php if($type!=='view'){?>disabled<?php }?> value="<?php echo $prod_name;?>" class="span4 m-wrap"> 
													    </div>
												</div>
												<div class="control-group">
													<label class="control-label">Subcategory</label>
													    <div class="controls">
															<input type="text" name="prod_name" id="prod_name" <?php if($type!=='view'){?>disabled<?php }?> value="<?php echo $prod_name;?>" class="span4 m-wrap"> 
													    </div>
												</div>
												
											<div class="control-group">
												  <label class="control-label">Material Name</label>
													  <div class="controls">
															<input type="text" name="material_name" id="material_name" <?php if($type!=='view'){?>disabled<?php }?> value="<?php echo $prod_name;?>" class="span4 m-wrap"> 
													    </div>
												</div>
												<div class="control-group">
												  <label class="control-label">GSM</label>
													  <div class="controls">
															<input type="text" name="GSM_name" id="GSM_name" <?php if($type!=='view'){?>disabled<?php }?> value="<?php echo $GSM_name;?>" class="span4 m-wrap"> 
													    </div>
												</div>
												<div class="control-group">
												  <label class="control-label">Size</label>
												  <div class="controls">
															<input type="text" name="size" id="size" <?php if($type!=='view'){?>disabled<?php }?> value="<?php echo $size;?>" class="span4 m-wrap"> 
													</div>
											   </div>
											   <div class="control-group">
												  <label class="control-label">Style</label>
												  <div class="controls">
															<input type="text" name="style" id="style" <?php if($type!=='view'){?>disabled<?php }?> value="<?php echo $style;?>" class="span4 m-wrap"> 
													    </div>
											   </div>
											   <div class="control-group">
												  <label class="control-label">Handle</label>
												  <div class="controls">
															<input type="text" name="handle" id="handle" <?php if($type!=='view'){?>disabled<?php }?> value="<?php echo $handle;?>" class="span4 m-wrap"> 
													    </div>
											   </div>
											   <div class="control-group">
												  <label class="control-label">Print</label>
												  <div class="controls">
															<input type="text" name="print" id="print" <?php if($type!=='view'){?>disabled<?php }?> value="<?php echo $print;?>" class="span4 m-wrap"> 
													    </div>
											   </div>
											   <div class="control-group">
												  <label class="control-label">Number Of Color</label>
												  <div class="controls">
															<input type="text" name="print_color" id="print_color" <?php if($type!=='view'){?>disabled<?php }?> value="<?php echo $print_color;?>" class="span4 m-wrap"> 
													    </div>
											   </div>
											   <div class="control-group">
												  <label class="control-label">Lamination</label>
												  <div class="controls">
															<input type="text" name="lamination" id="lamination" <?php if($type!=='view'){?>disabled<?php }?> value="<?php echo $lamination;?>" class="span4 m-wrap"> 
													    </div>
											   </div>
											   <div class="control-group">
												  <label class="control-label">Special Work</label>
												  <div class="controls">
															<input type="text" name="special_wrk" id="special_wrk" <?php if($type!=='view'){?>disabled<?php }?> value="<?php echo $special_wrk;?>" class="span4 m-wrap"> 
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
													
																if(dt[0]!='<label class="control-label">Subcategory</label><div class="controls"><select name="sub_categories"  id="sub_categories"></select></div>')
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
						  
                           <!-- <div class="control-group">
													<label class="control-label">Gift Card</label>
													    <div class="controls">
															<select name="gift_card" id="gift_card">
																<option value="0">No</option>
																<option value="1">Yes</option>
															</select>
													    </div>
							</div> -->
                           
						  
												
												
												
												
												
											
														  <script type="text/javascript">
							  $(document).ready(function() {
								  
									
								  $('#cat_id').on('click', function() {
									
											 
											  var categories = $('#cat_id').val();
									
								/*	$.ajax({   
									
									alert(categories);
									   url: "cms/getSubCategories/dropdown",
										async: false,
										type: "POST", 
										data: "categories="+categories,
										dataType: "html",
										
										success: function(data) {
										alert(data);
											
										}
									}) */
									if(categories!=0)
									{
								var xmlhttp;
							if (window.XMLHttpRequest)
							  {// code for IE7+, Firefox, Chrome, Opera, Safari
							  xmlhttp=new XMLHttpRequest();
							  }
							else
							  {// code for IE6, IE5
							  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
							  }
							xmlhttp.onreadystatechange=function()
							  {
							  if (xmlhttp.readyState==4 && xmlhttp.status==200)
								{
								var data=xmlhttp.response
								
								var dt=data.split("|");
											
											if(dt[0]!='<label class="control-label">Sub Categories</label><div class="controls"><select name="prod_sub_categories" id="prod_sub_categories"></select></div>')
											{
												$('#subcategories').fadeIn();
												$('#subcategories').html(dt[0]);
												
											
											}
											else{
												$('#subcategories').fadeIn();
												$('#subcategories').html('<div class="controls">Subcategory is not found under this category</div>');
											}
											
											if(dt[1]!='<label class="control-label">Filters</label><div class="controls"><select onclick="getFilterVals()" name="filter_id" id="filter_id"></select></div>')
											{
												$('#filters').fadeIn();
												$('#filters').html(dt[1]);
											}
											else{
												$('#filters').fadeIn();
												$('#filters').html('<div class="controls">Filter is not found under this category</div>');
											}
								
								}
							  }
							 
								
								 xmlhttp.open("POST","<?php echo base_url()?>cms/getSubCategories/dropdown/"+categories,true); 
							  
							xmlhttp.send();
								  
									} 
								  });
								//  $('#filterDropdwn').on('click', function() {
									
										
								});
								function getFilterVals()
										{										
										var filters = $('#filter_id').val();	
								  var xmlhttp;
							if (window.XMLHttpRequest)
							  {// code for IE7+, Firefox, Chrome, Opera, Safari
							  xmlhttp=new XMLHttpRequest();
							  }
							else
							  {// code for IE6, IE5
							  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
							  }
							xmlhttp.onreadystatechange=function()
							  {
							  if (xmlhttp.readyState==4 && xmlhttp.status==200)
								{
								var data=xmlhttp.response
								
								var dt=data.split("|");
										$("#filterValues").fadeIn();
											$('#filterValues').html(dt[0]);
								
								}
							  }
							 
								
								 xmlhttp.open("POST","<?php echo base_url()?>cms/getSubCategories/filterdropdown/"+filters,true); 
							  
							xmlhttp.send();
									 
								  }
											  </script>
												
											   
											   
				
											   
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
															<input type="text" name="prod_price" id="prod_price" <?php if($type!=='view'){?>disabled<?php }?> value="<?php echo $prod_price;?>" class="span4 m-wrap"> 
													    </div>
													</div>
													<div class="control-group">
													<label class="control-label">Sell Price</label>
													    <div class="controls">
															<input type="text" name="prod_sell_price" id="prod_sell_price" onfocus="getDiscount()" onblur="getDiscount()" onkeyup="getDiscount()" <?php if($type!=='view'){?>disabled<?php }?> value="<?php echo $prod_price;?>" class="span4 m-wrap"> 
													    </div>
													</div>
													<div class="control-group">
													<label class="control-label">Discount %</label>
													    <div class="controls">
															<input type="text" name="prod_discount" id="prod_discount" <?php if($type!=='view'){?>disabled<?php }?> value="<?php echo round($prod_discount, 2);?>" class="span4 m-wrap"> 
													    </div>
													</div>
													<!--/span-->
													<div class="control-group">
													<label class="control-label">Quantity</label>
													    <div class="controls">
															<input type="text" name="prod_qty" id="prod_qty" <?php if($type!=='view'){?>disabled<?php }?> value="<?php echo $prod_qty;?>" class="span4 m-wrap"> 
													    </div>
													</div>
													
													<!--/span-->
												<div class="control-group">
													<label class="control-label">Sold By</label>
													    <div class="controls">
															<input type="text" name="sold_by" id="sold_by" <?php if($type!=='view'){?>disabled<?php }?> value="<?php echo $sold_by;?>" class="span4 m-wrap"> 
													    </div>
													</div>
													
													<div class="control-group">
													<label class="control-label">Stock</label>
													    <div class="controls">
															<select name="prod_stock" class="span4 m-wrap" <?php if($type!=='view'){?>disabled<?php }?>>
																<option value="<?php echo $prod_stock ?>">In stock</option>
																<option value="0">In stock</option>
																<option value="1">Out of stock</option>
															</select>
															
														</div>
													</div>
													<div class="control-group">
												  <label class="control-label">Product SKU</label>
												  <div class="controls">
															<input type="text" name="prod_sku" id="prod_sku" <?php if($type!=='view'){?>disabled<?php }?> value="<?php echo $prod_sku;?>" class="span4 m-wrap"> 
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
															<input type="text" name="prod_shipping_price" id="prod_shipping_price" <?php if($type!=='view'){?>disabled<?php }?> value="<?php echo $prod_shipping_price;?>" class="span4 m-wrap"> 
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
											  <label class="control-label">Front:</label>
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
                              <label class="control-label">Back:</label>
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
                              <label class="control-label">Left:</label>
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
                              <label class="control-label">Right:</label>
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

											<div class="control-group">
													<label class="control-label">Product Status</label>
													    <div class="controls">
															<select name="status" id="prod_status">
																<option value="0">Enable</option>
																<option value="1">Disable</option>
															</select>
													    </div>
												</div>
											
											<div class="control-group">
											<div class="controls">
											<?php if($type='edit'){?>
											<button type="submit" class="btn blue">Save</button>
											<button type="button" class="btn default">Cancel</button>
											<?php }?>
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