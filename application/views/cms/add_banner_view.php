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
                      Slider                     
                  </h3> 
               </div>
            </div>
            <!-- END PAGE HEADER-->
            <!-- BEGIN PAGE CONTENT-->
            <div class="row-fluid">
               <div class="span12">
                  <!-- BEGIN SAMPLE FORM PORTLET-->   
                  <div class="portlet box blue">
                     <div class="portlet-title">
                        <h4><i class="icon-reorder"></i>Add slider</h4>
                        <div class="tools">
                           <a href="javascript:;" class="collapse"></a> 
                           <a href="javascript:;" class="remove"></a>
                        </div>
                     </div>
                     <div class="portlet-body form">
                        <!-- BEGIN FORM-->
                        <form action="<?php echo base_url()?>cms/header_banner/verify_slide_data" class="form-horizontal" method="post" enctype="multipart/form-data" />
						<div class="control-group"><span style="color:#FE544D;font-size: 15px;"><?php  echo validation_errors();?></span>
                      </div>
                  <input type="hidden" name="slider_id"  required data-validation-required-message="Please Fill Data" <?php if(!(isset($error))){?>value="<?php echo $id;?>"<?php }?>>
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
                              <label class="control-label">Image :</label>
                              <div class="controls">
                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                    <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                       <?php  if(!(isset($error))){if($image!=""){?>
										<img src="<?php echo base_url().$image;?>" /> 
										<?php } }else {?>
									   <img src="<?php echo base_url()?>assets/img/noimage.gif" alt="" />
									   <?php }?>									   
                                    </div>
                                    <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                    <div>
                                       <span class="btn btn-file"><span class="fileupload-new">Select image</span>
                                       <span class="fileupload-exists">Change</span>
                                       <input type="file" name="fileinput" <?php if($type=='view'){?>disabled<?php }?> class="default" /></span>
                                       <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a> 
									   <p> image size should be 593*400
                                    </div>
									
                                 </div> 
                              </div>
                           </div> 
						  
						    <div class="control-group">
                              <label class="control-label">Name</label>
                              <div class="controls">
                                 <input type="text" <?php if($type=='view'){?>disabled<?php }?> required data-validation-required-message="Please Fill Data"  name="slider_name" id="slider_name" class="span4  m-wrap" <?php if(!(isset($error))){?>value="<?php echo $image_name;?>"<?php }?> /> 
                              </div>
                           </div>
                          
						   
                           <div class="control-group">
                        <label class="control-label">status</label>
                            <div class="controls">
                              <select name="slider_status" <?php if($type=='view'){?>disabled<?php }?> class="span3 m-wrap" required data-validation-required-message="Please Fill Data">
                                 <option value="In Active">In Active</option>
                                 <option value="Active">Active</option>
                              </select>
                            </div>
                     </div>
						    <div class="control-group">
								<label class="control-label">Slide On Header</label>
								    <div class="controls">
										<select name="slide_on_head" required data-validation-required-message="Please Fill Data" id="slide_on_head" <?php if($type=='view'){?>disabled<?php }?>>
											<option value="0">No</option>
											<option value="1">Yes</option>
										</select>
								    </div>
							</div>
                           <div class="form-actions">
                              <?php if($type!='view'){?><button type="submit" class="btn blue">Save</button><?php }?>
                              <button type="button" class="cancel btn">Cancel</button>
                           </div>
                        </form>
                        <!-- END FORM-->           
                     </div>
                  </div>
                  <!-- END SAMPLE FORM PORTLET-->
               </div>
            </div>
			<script type="text/javascript">
			 $(document).ready(function(){
				$(".cancel").click(function()
					{

					document.location="<?php echo base_url()?>cms/slider/slider_view";
				});             

				
		  });	
		  </script>	
			</div>
            </div>
			</div>
